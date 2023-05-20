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
}
