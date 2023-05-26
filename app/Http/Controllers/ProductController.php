<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function productShow($store_url, $product_url, Request $request)
    {
        //                 $products = DB::select("
//         SELECT co.ID_CONTAINER, s.NAME_SHOP, PRODUCT_NAME, NAME_CATEGORY, PRICE_PRODUCT AS price,
//        AVG(RATING_REVIEW) AS rating, image, COUNT(r.ID_REVIEW) AS rating_count
// FROM product p
// JOIN container co ON p.id_container = co.ID_CONTAINER
// JOIN category c ON c.ID_CATEGORY = co.ID_CATEGORY
// JOIN shop s ON s.ID_SHOP = co.ID_SHOP
// LEFT JOIN review r ON r.ID_CONTAINER = co.ID_CONTAINER
// WHERE co.STATUS_DELETE = 0
//   AND co.STATUS = 1
//   AND s.STATUS_SHOP = 'Y'
//   and product_name ='$product_url'
//   and co.ID_CONTAINER = '$request'
// GROUP BY s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, image, co.ID_CONTAINER;
//         ");
//         foreach ($products as $product) {
//             $product->formatted_price = 'Rp ' . number_format($product->price, 0, ',', '.');
//         }
//         dd($products);
//         return view('shop-single',compact('products'));

        $id_container = $request->query('id');

        $products = DB::select("
        SELECT co.ID_CONTAINER, s.NAME_SHOP, PRODUCT_NAME,DESC_PRODUCT, NAME_CATEGORY, PRICE_PRODUCT AS price,
        AVG(RATING_REVIEW) AS rating, image, COUNT(r.ID_REVIEW) AS rating_count
        FROM product p
        JOIN container co ON p.id_container = co.ID_CONTAINER
        JOIN category c ON c.ID_CATEGORY = co.ID_CATEGORY
        JOIN shop s ON s.ID_SHOP = co.ID_SHOP
        LEFT JOIN review r ON r.ID_CONTAINER = co.ID_CONTAINER
        WHERE co.STATUS_DELETE = 0
        AND co.STATUS = 1
        AND s.STATUS_SHOP = 'Y'
        AND product_name = '$product_url'
        AND co.ID_CONTAINER = '" . Crypt::decryptString($id_container) . "'
        GROUP BY s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, image, co.ID_CONTAINER,DESC_PRODUCT;
    ");

        foreach ($products as $product) {
            $product->formatted_price = 'Rp ' . number_format($product->price, 0, ',', '.');
        }

        return view('shop-single', compact('products'));
    }
}
