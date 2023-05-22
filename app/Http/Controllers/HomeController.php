<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;

class HomeController extends Controller
{
    public function index()
    {
        $data = array();
        if (Session::has('id_user')) {
            $id_user = Session::get('id_user');
            $data = DB::select("
        SELECT NAME_CUST as name, USERNAME_CUST AS username, PASSWORD_CUST AS password FROM customer c WHERE ID_CUSTOMER = '$id_user';
    ");
        }


        $products = DB::select("
        select PRODUCT_NAME, NAME_CATEGORY, PRICE_PRODUCT as price, avg(RATING_REVIEW) as rating, image, COUNT(r.ID_REVIEW) AS rating_count
	    from product p, category c, container co
        left join review r
		on r.ID_CONTAINER = co.ID_CONTAINER
        where p.STATUS_DELETE=0
        and p.id_container = co.ID_CONTAINER
        and c.ID_CATEGORY = co.ID_CATEGORY
        group by p.product_name, c.name_category, p.PRICE_PRODUCT, image;
        ");

        foreach ($products as $product) {
            $product->formatted_price = 'Rp ' . number_format($product->price, 0, ',', '.');
        }

        return view('index', compact('products', 'data'));
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
}
