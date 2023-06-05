<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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
       AVG(RATING_REVIEW) AS rating, image, COUNT(r.ID_REVIEW) AS rating_count
FROM product p
JOIN container co ON p.id_container = co.ID_CONTAINER
JOIN category c ON c.ID_CATEGORY = co.ID_CATEGORY
JOIN shop s ON s.ID_SHOP = co.ID_SHOP
LEFT JOIN review r ON r.ID_CONTAINER = co.ID_CONTAINER
WHERE co.STATUS_DELETE = 0
  AND co.STATUS = 1
  and p.ID_PRODUCT = 1
  AND s.STATUS_SHOP = 'Y'
  and CITY_SHOP like '%%'
GROUP BY c.ID_CATEGORY,p.ID_PRODUCT,s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, image, co.ID_CONTAINER;
        ");
        $categories = DB::select("select ID_CATEGORY,NAME_CATEGORY from category where status_delete = 0;");
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
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function viewAccount()
    {
        if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
            return redirect()->route('loginpage');
        }
        return view('account-settings');
    }
    public function orders()
    {
        if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
            return redirect()->route('loginpage');
        }
        return view('account-orders');
    }
    public function address()
    {
        if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
            return redirect()->route('loginpage');
        }
        return view('account-address');
    }
    public function payment()
    {
        if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
            return redirect()->route('loginpage');
        }
        return view('account-payment-method');
    }
    public function notification()
    {
        if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
            return redirect()->route('loginpage');
        }
        return view('account-notification');
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

            $totalQuantity = 0;
            $subtotal = 0;
            foreach ($selectedProducts as $product) {
                $subtotal += intval($product['realPrice']) * intval($product['quantity']);
                $totalQuantity += intval($product['quantity']);
            }
            $formatSubtotal = 'Rp ' . number_format($subtotal, 0, ',', '.');

            return view('shop-checkout', ['selectedProducts' => $selectedProducts
                                        , 'data' => $data[0]
                                        , 'totalQuantity' => $totalQuantity
                                        , 'subtotal' => $formatSubtotal]);
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
    protected $request;
    public function __construct(Request $request)
    {
        $currentRoute = FacadeRequest::route()->getName();
        if ($currentRoute !== 'checkoutPage' && !Session::has('selectedProducts')) {
            // remove the session selectedProducts
            Session::pull('selectedProducts');
            session()->forget('selectedProducts');
        }

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
            select c.ID_CONTAINER,p.ID_PRODUCT, image,PRODUCT_NAME, NAME_CATEGORY,PRICE_PRODUCT as price, c.STATUS as container_status, p.STATUS as product_status
            FROM product p, container c, wishlist w,category ca, customer cu, product_wishlist pw
        where p.ID_CONTAINER = c.ID_CONTAINER
        and w.ID_WISHLIST = cu.ID_WISHLIST
        and ca.ID_CATEGORY = c.ID_CATEGORY
        and w.ID_WISHLIST = pw.ID_WISHLIST
        and pw.ID_CONTAINER = c.ID_CONTAINER
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
            select NAME_SHOP,PRODUCT_NAME, NAME_CATEGORY,PRICE_PRODUCT as price, c.ID_CONTAINER,p.ID_PRODUCT,image,jenis,cw.QTY_CART,p.QTY_PRODUCT
            FROM product p, container c, cart cr,category ca, customer cu, cart_product cw, shop sh
        where p.ID_CONTAINER = c.ID_CONTAINER
        and sh.ID_SHOP = c.ID_SHOP
        and cr.ID_CART = cu.ID_CART
        and ca.ID_CATEGORY = c.ID_CATEGORY
        and cr.ID_CART= cw.ID_CART
        and cw.ID_CONTAINER = c.ID_CONTAINER
        and cw.STATUS_DELETE = 0 AND
             USERNAME_CUST = '$username';");
            foreach ($cart as $list) {
                $list->formatted_price = 'Rp ' . number_format($list->price, 0, ',', '.');
            }
        }
        return view('shop-cart', compact('cart'));
    }
}
