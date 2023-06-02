<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

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
        $perPage = 12;

        if ($category_url != 'all-product') {
            $id_category = $request->query('id');
            $query = DB::select("
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
            AND co.ID_CATEGORY = '" . Crypt::decryptString($id_category) . "'
            GROUP BY s.ID_SHOP,c.ID_CATEGORY,s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, image, co.ID_CONTAINER,DESC_PRODUCT;
            ");
        } else {
            $query = DB::select("
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
        }
        $products = collect($query);

        $currentPage = $request->input('page', 1); // Get the current page from the request

        // Slice the collection to get the products for the current page
        $currentPageProducts = $products->slice(($currentPage - 1) * $perPage, $perPage)->all();

        // Create a paginator instance
        $paginator = new LengthAwarePaginator(
            $currentPageProducts,
            count($products),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );
        foreach ($paginator  as $product) {
            $product->formatted_price = 'Rp ' . number_format($product->price, 0, ',', '.');
        }
        return view('shop-grid', compact('paginator', 'category_url'));
    }
    public function storeShow($store_url)
    {
        return view('store-single');
    }
    public function allStoreShow()
    {
        return view('store-list');
    }
    // public function addToCart(Request $request)
    // {
    //     if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
    //         return response()->json(['login' => true]);
    //     }
    //     else {
    //         if (Session::has('USERNAME_CUST')) {
    //             $username = Session::get('USERNAME_CUST');
    //         } else {
    //             $username = Cookie::get('USERNAME_CUST');
    //         }
    //         // dd($request->all());
    //         // Retrieve the product ID from the request
    //         // $productId = $request->input('productId');
    //         // $containerId = $request->input('containerId');
    //         $productId = $request->productId;
    //         $containerId = $request->containerId;
    //         $price = DB::select("select PRICE_PRODUCT from product where ID_CONTAINER = '$containerId' and ID_PRODUCT = '$productId' ");
    //         $cartId = DB::select("select c.ID_CART from cart c, customer cu where c.ID_CART = cu.ID_CART and cu.USERNAME_CUST ='$username' ;");
    //         // Check if the product already exists in the cart
    //         $existingProduct = DB::select("
    //     select cp.ID_CART,ID_CONTAINER,ID_PRODUCT,QTY_CART,SUBTOTAL_CART
    //     from cart_product cp, customer c
    //     where cp.ID_CART = c.ID_CART
    //     and USERNAME_CUST = '$username'
    //     and ID_CONTAINER = '$containerId'
    //     and ID_PRODUCT ='$productId'
    //     and cp.STATUS_DELETE = 0;
    //     ");
    //         if (count($existingProduct) > 0) {
    //             // If the product exists, update the quantity and subtotal
    //             DB::update("
    //         update cart_product set QTY_CART = (QTY_CART+1),
    //         SUBTOTAL_CART= (QTY_CART*(select PRICE_PRODUCT from product where ID_CONTAINER='$containerId' and ID_PRODUCT ='$productId'))
    //         where ID_CART = '$existingProduct[0]->ID_CART' and ID_CONTAINER ='$containerId' and ID_PRODUCT ='$productId';
    //         ");
    //         } else {
    //             // If the product does not exist, create a new cart product
    //             DB::insert("insert into cart_product()
    //         values('$cartId[0]->ID_CART','$containerId','$productId',1,$price[0]->PRICE_PRODUCT ,0;");
    //         }
    //         DB::update("
    //             update cart set QTY_CART = (select sum(QTY_CART) from cart_product where ID_CART ='$cartId[0]->ID_CART' group by ID_CART),
    //             TOTAL_CART = (select sum(SUBTOTAL_CART) from cart_product where ID_CART ='$cartId[0]->ID_CART' group by ID_CART)
    //             where ID_CART = '$cartId[0]->ID_CART'
    //         ");
    //         return response()->json(['success' => true]);
    //     }
    // }
    public function addToCart(Request $request)
{
    if (!Session::has('USERNAME_CUST') && !isset($_COOKIE['USERNAME_CUST'])) {
        return response()->json(['login' => true]);
    } else {
        if (Session::has('USERNAME_CUST')) {
            $username = Session::get('USERNAME_CUST');
        } else {
            $username = Cookie::get('USERNAME_CUST');
        }

        $productId = $request->productId;
        $containerId = $request->containerId;

        $priceResult = DB::select("SELECT PRICE_PRODUCT FROM product WHERE ID_CONTAINER = '$containerId' AND ID_PRODUCT = '$productId'");
        $price = $priceResult[0]->PRICE_PRODUCT;

        $cartIdResult = DB::select("SELECT c.ID_CART FROM cart c, customer cu WHERE c.ID_CART = cu.ID_CART AND cu.USERNAME_CUST ='$username'");
        $cartId = $cartIdResult[0]->ID_CART;

        $existingProductResult = DB::select("
            SELECT cp.ID_CART, ID_CONTAINER, ID_PRODUCT, QTY_CART, SUBTOTAL_CART
            FROM cart_product cp, customer c
            WHERE cp.ID_CART = c.ID_CART
            AND USERNAME_CUST = '$username'
            AND ID_CONTAINER = '$containerId'
            AND ID_PRODUCT ='$productId'
            AND cp.STATUS_DELETE = 0
        ");

        if (count($existingProductResult) > 0) {
            DB::update("
                UPDATE cart_product
                SET QTY_CART = (QTY_CART + 1),
                    SUBTOTAL_CART = (QTY_CART * (SELECT PRICE_PRODUCT FROM product WHERE ID_CONTAINER = '$containerId' AND ID_PRODUCT ='$productId'))
                WHERE ID_CART = '$existingProductResult[0]->ID_CART' AND ID_CONTAINER ='$containerId' AND ID_PRODUCT ='$productId'
            ");
        } else {
            DB::insert("
                INSERT INTO cart_product(ID_CART, ID_CONTAINER, ID_PRODUCT, QTY_CART, SUBTOTAL_CART, STATUS_DELETE)
                VALUES ('$cartId', '$containerId', '$productId', 1, $price, 0)
            ");
        }

        DB::update("
            UPDATE cart
            SET QTY_CART = (SELECT SUM(QTY_CART) FROM cart_product WHERE ID_CART ='$cartId' GROUP BY ID_CART),
                TOTAL_CART = (SELECT SUM(SUBTOTAL_CART) FROM cart_product WHERE ID_CART ='$cartId' GROUP BY ID_CART)
            WHERE ID_CART = '$cartId'
        ");

        return response()->json(['success' => true, 'login' => false]);
    }
}






    public function addToWishlist(Request $request)
    {
        // Retrieve the product ID from the request
        $productId = $request->input('productId');

        // Check if the product already exists in the wishlist
        $existingProduct = DB::table('wishlist_products')->where('id_container', $productId)->first();

        if ($existingProduct) {
            return response()->json(['success' => false, 'message' => 'Item has already been added to wishlist.']);
        } else {
            // If the product does not exist, create a new wishlist product
            DB::table('wishlist_products')->insert([
                'id_container' => $productId,
                // Set other properties of the wishlist product
            ]);

            return response()->json(['success' => true]);
        }
    }
}
