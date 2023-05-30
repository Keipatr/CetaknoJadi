<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function productShow(string $store_url, string $product_url, Request $request)
    {
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

    public function categoryShow($category_url, Request $request)
    {
        if($category_url != 'all-product')
        {
            $id_category = $request->query('id');
            $products = DB::select("
            SELECT s.ID_SHOP,c.ID_CATEGORY,co.ID_CONTAINER, s.NAME_SHOP, PRODUCT_NAME,DESC_PRODUCT, NAME_CATEGORY, PRICE_PRODUCT AS price,
            AVG(RATING_REVIEW) AS rating, image, COUNT(r.ID_REVIEW) AS rating_count
            FROM product p
            JOIN container co ON p.id_container = co.ID_CONTAINER
            JOIN category c ON c.ID_CATEGORY = co.ID_CATEGORY
            JOIN shop s ON s.ID_SHOP = co.ID_SHOP
            LEFT JOIN review r ON r.ID_CONTAINER = co.ID_CONTAINER
            WHERE co.STATUS_DELETE = 0
            AND co.STATUS = 1
            AND s.STATUS_SHOP = 'Y'
            and NAME_CATEGORY = '$category_url'
            -- AND co.ID_CATEGORY = '" . Crypt::decryptString($id_category) . "'
            GROUP BY s.ID_SHOP,c.ID_CATEGORY,s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, image, co.ID_CONTAINER,DESC_PRODUCT;
            ");
            foreach ($products as $product) {
                $product->formatted_price = 'Rp ' . number_format($product->price, 0, ',', '.');
            }
        }
        else
        {
            $products = DB::select("
            SELECT c.ID_CATEGORY,s.ID_SHOP,co.ID_CONTAINER, s.NAME_SHOP, PRODUCT_NAME,DESC_PRODUCT, NAME_CATEGORY, PRICE_PRODUCT AS price,
        AVG(RATING_REVIEW) AS rating, image, COUNT(r.ID_REVIEW) AS rating_count
        FROM product p
        JOIN container co ON p.id_container = co.ID_CONTAINER
        JOIN category c ON c.ID_CATEGORY = co.ID_CATEGORY
        JOIN shop s ON s.ID_SHOP = co.ID_SHOP
        LEFT JOIN review r ON r.ID_CONTAINER = co.ID_CONTAINER
        WHERE co.STATUS_DELETE = 0
        AND co.STATUS = 1
        AND s.STATUS_SHOP = 'Y'
        GROUP BY s.ID_SHOP,s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, image,c.ID_CATEGORY ,co.ID_CONTAINER,DESC_PRODUCT;
            ");
            foreach ($products as $product) {
                $product->formatted_price = 'Rp ' . number_format($product->price, 0, ',', '.');
            }
        }
        return view('shop-grid',compact('products','category_url'));
    }
    public function storeShow($store_url)
    {
        return view('store-single');
    }
    public function allStoreShow()
    {
        return view('store-list');
    }
}
