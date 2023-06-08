<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request as FacadeRequest;

class HomeController extends Controller
{
    public function index()
    {
        $data = array();
        $cart = array();
        if (Session::has('USERNAME_CUST') || isset($_COOKIE['USERNAME_CUST'])) {
            if (Session::has('USERNAME_CUST')) {
                $username = Session::get('USERNAME_CUST');
            } else {
                $username = Cookie::get('USERNAME_CUST');
            }
            $data = DB::select("
            SELECT c.NAME_CUST, QTY_WISHLIST,  QTY_CART
            FROM customer c, wishlist w, cart ca
            WHERE w.ID_WISHLIST= c.ID_WISHLIST
            AND ca.ID_CART= c.ID_CART AND
             USERNAME_CUST = '$username';");
            $cart = DB::select("
            select ca.ID_CATEGORY,PRODUCT_NAME, NAME_CATEGORY,PRICE_PRODUCT as price
            FROM product p, container c, cart cr,category ca, customer cu, cart_product cw
        where p.ID_CONTAINER = c.ID_CONTAINER
        and cr.ID_CART = cu.ID_CART
        and ca.ID_CATEGORY = c.ID_CATEGORY
        and cr.ID_CART= cw.ID_CART
        and cw.ID_CONTAINER = c.ID_CONTAINER
        and cw.STATUS_DELETE = 0 AND
             USERNAME_CUST = '$username';");
        }

        $products = DB::select("
        SELECT c.ID_CATEGORY,co.ID_CONTAINER, s.NAME_SHOP, p.ID_PRODUCT,PRODUCT_NAME, NAME_CATEGORY, PRICE_PRODUCT AS price,
       AVG(RATING_REVIEW) AS rating, p.image, COUNT(r.ID_REVIEW) AS rating_count
FROM product p
JOIN container co ON p.id_container = co.ID_CONTAINER
JOIN category c ON c.ID_CATEGORY = co.ID_CATEGORY
JOIN shop s ON s.ID_SHOP = co.ID_SHOP
LEFT JOIN review r ON r.ID_CONTAINER = co.ID_CONTAINER
WHERE co.STATUS_DELETE = 0
  AND co.STATUS = 1
  AND s.STATUS_SHOP = 'Y'
  and CITY_SHOP like '%%'
GROUP BY c.ID_CATEGORY,p.ID_PRODUCT,s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, p.image, co.ID_CONTAINER;
        ");
        $categories = DB::select("select ID_CATEGORY,NAME_CATEGORY,image from category where status_delete = 0;");
        $stores = DB::select("select NAME_SHOP, TELP_SHOP, ADDRESS_SHOP,POSTAL_SHOP,CITY_SHOP,STATUS_SHOP
        from shop s
        where STATUS_DELETE=0
        and STATUS_SHOP = 'Y'
        and CITY_SHOP like '%%';");

        foreach ($cart as $list) {
            $list->formatted_price = 'Rp ' . number_format($list->price, 0, ',', '.');
        }
        foreach ($products as $product) {
            $product->formatted_price = 'Rp ' . number_format($product->price, 0, ',', '.');
        }

        return view('index', compact('products', 'categories', 'data', 'stores', 'cart'));
    }

    public function loginpage()
    {
        return view('signin');
    }
    public function forgot()
    {
        return view('forgot-password');
    }
    public function signup()
    {
        return view('signup');
    }
    public function about()
    {
        $cust = DB::select("select * from customer");
        $shop = DB::select("select * from shop");
        return view('about',compact('cust','shop'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function viewAccount()
    {
        if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
            return redirect()->route('loginpage');
        } else {
            if (Session::has('USERNAME_CUST')) {
                $username = Session::get('USERNAME_CUST');
            } else {
                $username = Cookie::get('USERNAME_CUST');
            }
            $data = DB::select("
                select pi.ID_INVOICE, co.ID_CONTAINER,p.ID_PRODUCT,s.NAME_SHOP,
                p.PRODUCT_NAME, pi.QTY_DETAIL, pi.PRICE_DETAIL,
                pi.SUBTOTAL_DETAIL, date_format(i.DATE_INVOICE,'%M %d, %Y') as DATE,i.STATUS,p.image,jenis
                from product_invoice pi, invoice i,
                customer c, container co, product p, shop s
                where  pi.ID_INVOICE = i.ID_INVOICE
                and c.ID_CUSTOMER = i.ID_CUSTOMER
                and pi.ID_CONTAINER = co.ID_CONTAINER
                and pi.ID_PRODUCT = p.ID_PRODUCT
                and co.ID_CONTAINER = p.ID_container
                and i.ID_SHOP = s.ID_SHOP
                and i.STATUS_DELETE = 0
                and USERNAME_CUST = '$username';
            ");
            foreach ($data as $product) {
                $product->formatted_price = 'Rp ' . number_format($product->SUBTOTAL_DETAIL, 0, ',', '.');
            }

            return view('account-orders', compact('data'));
        }
    }
    public function checkoutPage()
    {
        if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
            return redirect()->route('loginpage');
        }
        if (!Session::has('selectedProducts')) {
            return back()->with('fail', 'Select a Product ');
        } else {
            $selectedProducts = Session::get('selectedProducts');
            // If the selected products exist in the session
            if ($selectedProducts) {
                $selectedProducts = json_decode($selectedProducts, true);
            } else {
                $selectedProducts = []; // Set it as an empty array if no products are found
            }
            if (Session::has('USERNAME_CUST')) {
                $username = Session::get('USERNAME_CUST');
            } else {
                $username = Cookie::get('USERNAME_CUST');
            }
            $data = DB::select("
            select * from customer where USERNAME_CUST='$username';
            ");
            $payment = DB::select("select * from payment where STATUS_DELETE = 0;");
            $totalQuantity = 0;
            $subtotal = 0;
            foreach ($selectedProducts as $product) {
                $subtotal += intval($product['realPrice']) * intval($product['quantity']);
                $totalQuantity += intval($product['quantity']);
            }
            $formatSubtotal = 'Rp ' . number_format($subtotal, 0, ',', '.');

            $baseURL = env('BASE_URL');
            $authKey = env('AUTH_KEY');

            $cityID = DB::select("select ID_CITY from customer where USERNAME_CUST = '$username'");

            $response = Http::withHeaders([
                'Authorization' => $authKey,
            ])->get($baseURL . '/api/v1/public/basic/rate?id=' . $cityID[0]->ID_CITY);

            if ($response->ok()) {
                $delivery = $response->json();
                $sicepat = $delivery['sicepat'];
                $anteraja = $delivery['anteraja'];
                foreach ($sicepat as &$list) {
                    $list['formatted_rates'] = 'Rp ' . number_format($list['rates'], 0, ',', '.');
                }

                foreach ($anteraja as &$list) {
                    $list['formatted_rates'] = 'Rp ' . number_format($list['rates'], 0, ',', '.');
                }
                // dd($sicepat);
                return view('shop-checkout', [
                    'selectedProducts' => $selectedProducts,
                    'data' => $data[0],
                    'totalQuantity' => $totalQuantity,
                    'subtotal' => $formatSubtotal,
                    'sicepat' => $sicepat,
                    'anteraja' => $anteraja,
                    'payment' => $payment
                ]);
            } else {
                return back()->with('fail', 'Add your address');
            }
        }
    }
    public function cancelOrder()
    {
        if (session()->has('selectedProducts')) {
            session()->pull('selectedProducts');
            return redirect()->route('home');
        }
        return redirect()->route('home');
    }
    public function forgetSelectedProducts()
    {
        Session::forget('selectedProducts');
        return response()->json(['success' => true]);
    }

    public function wishlist()
    {
        if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
            return redirect()->route('loginpage');
        }
        $wishlist = array();
        if (Session::has('USERNAME_CUST') || isset($_COOKIE['USERNAME_CUST'])) {
            if (Session::has('USERNAME_CUST')) {
                $username = Session::get('USERNAME_CUST');
            } else {
                $username = Cookie::get('USERNAME_CUST');
            }

            $wishlist = DB::select("
            select c.ID_CONTAINER,p.ID_PRODUCT, p.image,PRODUCT_NAME, NAME_CATEGORY,PRICE_PRODUCT as price,jenis, c.STATUS as container_status, p.STATUS as product_status
            FROM product p, container c, wishlist w,category ca, customer cu, product_wishlist pw
        where p.ID_CONTAINER = c.ID_CONTAINER
        and w.ID_WISHLIST = cu.ID_WISHLIST
        and ca.ID_CATEGORY = c.ID_CATEGORY
        and w.ID_WISHLIST = pw.ID_WISHLIST
        and pw.ID_CONTAINER = c.ID_CONTAINER
        and p.ID_PRODUCT = pw.ID_PRODUCT
        and pw.STATUS_DELETE = 0 AND
             USERNAME_CUST = '$username';
             ");
            foreach ($wishlist as $list) {
                $list->formatted_price = 'Rp ' . number_format($list->price, 0, ',', '.');
            }
        }
        return view('shop-wishlist', compact('wishlist'));
    }
    public function cart()
    {
        if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
            return redirect()->route('loginpage');
        }
        $cart = array();
        if (Session::has('USERNAME_CUST') || isset($_COOKIE['USERNAME_CUST'])) {
            if (Session::has('USERNAME_CUST')) {
                $username = Session::get('USERNAME_CUST');
            } else {
                $username = Cookie::get('USERNAME_CUST');
            }

            $cart = DB::select("
            select sh.ID_SHOP, NAME_SHOP,PRODUCT_NAME, NAME_CATEGORY,PRICE_PRODUCT as price, c.ID_CONTAINER,p.ID_PRODUCT,p.image,jenis,cw.QTY_CART,p.QTY_PRODUCT
            FROM product p, container c, cart cr,category ca, customer cu, cart_product cw, shop sh
        where p.ID_CONTAINER = c.ID_CONTAINER
        and sh.ID_SHOP = c.ID_SHOP
        and cr.ID_CART = cu.ID_CART
        and ca.ID_CATEGORY = c.ID_CATEGORY
        and cr.ID_CART= cw.ID_CART
        and cw.ID_CONTAINER = c.ID_CONTAINER
        and cw.ID_PRODUCT = p.ID_PRODUCT
        and cw.STATUS_DELETE = 0 AND
             USERNAME_CUST = '$username'
             order by sh.ID_SHOP, NAME_SHOP;");
            foreach ($cart as $list) {
                $list->formatted_price = 'Rp ' . number_format($list->price, 0, ',', '.');
            }
        }
        return view('shop-cart', compact('cart'));
    }
}
