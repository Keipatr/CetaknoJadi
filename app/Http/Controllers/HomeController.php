<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use Illuminate\Support\Facades\Cookie;

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
                // $username = $_COOKIE['USERNAME_CUST'];
                $username = Cookie::get('USERNAME_CUST');
                // dd($username);
            }

            $data = DB::select("
            SELECT c.NAME_CUST, QTY_WISHLIST,  QTY_CART
            FROM customer c, wishlist w, cart ca
            WHERE w.ID_WISHLIST= c.ID_WISHLIST
            AND ca.ID_CART= c.ID_CART AND
             USERNAME_CUST = '$username';");
            $cart = DB::select("
            select PRODUCT_NAME, NAME_CATEGORY,PRICE_PRODUCT as price FROM product p, container c, cart cr,category ca, customer cu, cart_product cw
        where p.ID_CONTAINER = c.ID_CONTAINER
        and cr.ID_CART = cu.ID_CART
        and ca.ID_CATEGORY = c.ID_CATEGORY
        and cr.ID_CART= cw.ID_CART
        and cw.ID_CONTAINER = c.ID_CONTAINER
        and cw.STATUS_DELETE = 0 AND
             USERNAME_CUST = '$username';");
        }

        $products = DB::select("
        SELECT co.ID_CONTAINER, s.NAME_SHOP, p.ID_PRODUCT,PRODUCT_NAME, NAME_CATEGORY, PRICE_PRODUCT AS price,
       AVG(RATING_REVIEW) AS rating, image, COUNT(r.ID_REVIEW) AS rating_count
FROM product p
JOIN container co ON p.id_container = co.ID_CONTAINER
JOIN category c ON c.ID_CATEGORY = co.ID_CATEGORY
JOIN shop s ON s.ID_SHOP = co.ID_SHOP
LEFT JOIN review r ON r.ID_CONTAINER = co.ID_CONTAINER
WHERE co.STATUS_DELETE = 0
  AND co.STATUS = 1
  AND s.STATUS_SHOP = 'Y'
  and CITY_SHOP like '%%'
GROUP BY p.ID_PRODUCT,s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, image, co.ID_CONTAINER;
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
    public function fetchQuantities()
    {
        $userId = Auth::id();

        $quantities = DB::select("SELECT w.QTY_WISHLIST, c.QTY_CART
            FROM customer cu
            LEFT JOIN wishlist w ON cu.ID_WISHLIST = w.ID_WISHLIST
            LEFT JOIN cart c ON cu.ID_CART = c.ID_CART
            WHERE cu.ID_CUSTOMER = '$userId'");
        // dd($quantities);
        if ($quantities) {
            $wishlistQty = $quantities[0]->QTY_WISHLIST;
            $cartQty = $quantities[0]->QTY_CART;

            return response()->json([
                'wishlistQty' => $wishlistQty,
                'cartQty' => $cartQty,
            ]);
        } else {
            return response('Quantities not found', 404);
        }
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
            select PRODUCT_NAME, NAME_CATEGORY,PRICE_PRODUCT as price FROM product p, container c, wishlist w,category ca, customer cu, product_wishlist pw
        where p.ID_CONTAINER = c.ID_CONTAINER
        and w.ID_WISHLIST = cu.ID_WISHLIST
        and ca.ID_CATEGORY = c.ID_CATEGORY
        and w.ID_WISHLIST = pw.ID_WISHLIST
        and pw.ID_CONTAINER = c.ID_CONTAINER
        and pw.STATUS_DELETE = 0 AND
             USERNAME_CUST = '$username';");
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
            select PRODUCT_NAME, NAME_CATEGORY,PRICE_PRODUCT as price FROM product p, container c, cart cr,category ca, customer cu, cart_product cw
        where p.ID_CONTAINER = c.ID_CONTAINER
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
