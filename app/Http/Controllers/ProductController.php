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
        SELECT co.ID_CONTAINER, p.ID_PRODUCT, image, s.NAME_SHOP, PRODUCT_NAME, JENIS, DESC_PRODUCT, NAME_CATEGORY,
        c.ID_CATEGORY, PRICE_PRODUCT AS price,
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
GROUP BY co.ID_CONTAINER, p.ID_PRODUCT, image, s.NAME_SHOP, PRODUCT_NAME, JENIS, DESC_PRODUCT, NAME_CATEGORY, c.ID_CATEGORY, PRICE_PRODUCT;

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
            SELECT p.ID_PRODUCT,s.ID_SHOP,c.ID_CATEGORY,co.ID_CONTAINER, s.NAME_SHOP, PRODUCT_NAME,DESC_PRODUCT, NAME_CATEGORY, PRICE_PRODUCT AS price,
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
            and NAME_CATEGORY = '$category_url'
            AND co.ID_CATEGORY = '" . Crypt::decryptString($id_category) . "'
            GROUP BY p.ID_PRODUCT,s.ID_SHOP,c.ID_CATEGORY,s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, image, co.ID_CONTAINER,DESC_PRODUCT;
            ");
        } else {
            $query = DB::select("
            SELECT p.ID_PRODUCT,c.ID_CATEGORY,s.ID_SHOP,co.ID_CONTAINER, s.NAME_SHOP, PRODUCT_NAME,DESC_PRODUCT, NAME_CATEGORY, PRICE_PRODUCT AS price,
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
        GROUP BY p.ID_PRODUCT,s.ID_SHOP,s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, image,c.ID_CATEGORY ,co.ID_CONTAINER,DESC_PRODUCT;
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
        foreach ($paginator as $product) {
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
                WHERE ID_CART = '$cartId' AND ID_CONTAINER ='$containerId' AND ID_PRODUCT ='$productId'
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
            $cartQuantity = DB::select("select QTY_CART from cart c,customer cu where c.ID_CART =cu.ID_CART and cu.USERNAME_CUST = '$username'; ");
            return response()->json(['success' => true, 'login' => false, 'quantity' => $cartQuantity[0]->QTY_CART]);
        }
    }




    public function addToWishlist(Request $request)
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

            $wishIdResult = DB::select("SELECT c.ID_WISHLIST FROM wishlist c, customer cu WHERE c.ID_WISHLIST = cu.ID_WISHLIST AND cu.USERNAME_CUST ='$username'");
            $wishlistId = $wishIdResult[0]->ID_WISHLIST;

            $existingProductResult = DB::select("
                SELECT wp.ID_WISHLIST, ID_CONTAINER, ID_PRODUCT
                FROM product_wishlist wp, customer c
                WHERE wp.ID_WISHLIST = c.ID_WISHLIST
                AND USERNAME_CUST = '$username'
                AND ID_CONTAINER = '$containerId'
                AND ID_PRODUCT ='$productId'
                AND wp.STATUS_DELETE = 0
            ");

            if (count($existingProductResult) > 0) {
                return response()->json(['exists' => true, 'login' => false]);
            } else {
                DB::insert("
                    INSERT INTO product_wishlist(ID_CONTAINER,ID_PRODUCT,ID_WISHLIST,STATUS_DELETE)
                    VALUES ('$containerId', '$productId', '$wishlistId', 0);
                ");
            }

            DB::update("
                UPDATE wishlist
                SET QTY_WISHLIST = (SELECT count(ID_WISHLIST) FROM product_wishlist WHERE ID_WISHLIST ='$wishlistId' GROUP BY ID_WISHLIST)
                WHERE ID_WISHLIST = '$wishlistId';
            ");

            $wishlistQuantity = DB::select("select QTY_WISHLIST from wishlist c,customer cu where c.ID_WISHLIST =cu.ID_WISHLIST and cu.USERNAME_CUST = '$username'; ");


            return response()->json(['success' => true, 'login' => false, 'quantity' => $wishlistQuantity[0]->QTY_WISHLIST]);
        }
    }
    public function deleteWishlistItem(Request $request)
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
            $wishIdResult = DB::select("SELECT c.ID_WISHLIST FROM wishlist c, customer cu WHERE c.ID_WISHLIST = cu.ID_WISHLIST AND cu.USERNAME_CUST ='$username'");
            $wishlistId = $wishIdResult[0]->ID_WISHLIST;

            DB::delete("
                DELETE FROM product_wishlist
                WHERE ID_WISHLIST = '$wishlistId' and ID_CONTAINER = '$containerId' and ID_PRODUCT = '$productId';
            ");

            DB::update("
            UPDATE wishlist
            SET QTY_WISHLIST = COALESCE(
            (SELECT COUNT(ID_WISHLIST) FROM product_wishlist WHERE ID_WISHLIST = '$wishlistId' GROUP BY ID_WISHLIST),0)
            WHERE ID_WISHLIST = '$wishlistId';
            ");



            $wishlistQuantity = DB::select("select QTY_WISHLIST from wishlist c,customer cu where c.ID_WISHLIST =cu.ID_WISHLIST and cu.USERNAME_CUST = '$username'; ");


            return response()->json(['success' => true, 'quantity' => $wishlistQuantity[0]->QTY_WISHLIST]);
        }
    }
    public function deleteCartItem(Request $request)
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
            $cartIdResult = DB::select("SELECT c.ID_CART FROM cart c, customer cu WHERE c.ID_CART = cu.ID_CART AND cu.USERNAME_CUST ='$username'");
            $cartId = $cartIdResult[0]->ID_CART;

            DB::delete("
                DELETE FROM cart_product
                WHERE ID_CART = '$cartId' and ID_CONTAINER = '$containerId' and ID_PRODUCT = '$productId';
            ");

            DB::update("
            UPDATE cart
            SET QTY_CART = COALESCE((SELECT SUM(QTY_CART) FROM cart_product WHERE ID_CART ='$cartId' GROUP BY ID_CART),0),
                TOTAL_CART = COALESCE((SELECT SUM(SUBTOTAL_CART) FROM cart_product WHERE ID_CART ='$cartId' GROUP BY ID_CART),0)
            WHERE ID_CART = '$cartId';
        ");
            $cartQuantity = DB::select("select QTY_CART from cart c,customer cu where c.ID_CART =cu.ID_CART and cu.USERNAME_CUST = '$username'; ");


            return response()->json(['success' => true, 'quantity' => $cartQuantity[0]->QTY_CART]);
        }
    }

    public function updateCartItem(Request $request)
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
            $cartIdResult = DB::select("SELECT c.ID_CART FROM cart c, customer cu WHERE c.ID_CART = cu.ID_CART AND cu.USERNAME_CUST ='$username'");
            $cartId = $cartIdResult[0]->ID_CART;
            $qty = $request->qty;
            // dd($request->all());
            DB::update("
            UPDATE cart_product
            SET QTY_CART =  $qty,
                SUBTOTAL_CART = (SELECT p.PRICE_PRODUCT FROM product p WHERE ID_CONTAINER = '$containerId' and p.ID_PRODUCT = '$productId') * $qty
            WHERE ID_CART = '$cartId' and ID_CONTAINER = '$containerId' and ID_PRODUCT = '$productId';
            ");

            DB::update("
            UPDATE cart
            SET QTY_CART = COALESCE((SELECT SUM(QTY_CART) FROM cart_product WHERE ID_CART ='$cartId' GROUP BY ID_CART),0),
                TOTAL_CART = COALESCE((SELECT SUM(SUBTOTAL_CART) FROM cart_product WHERE ID_CART ='$cartId' GROUP BY ID_CART),0)
            WHERE ID_CART = '$cartId';
            ");
            $cartQuantity = DB::select("select QTY_CART from cart c,customer cu where c.ID_CART =cu.ID_CART and cu.USERNAME_CUST = '$username'; ");


            return response()->json(['success' => true, 'quantity' => $cartQuantity[0]->QTY_CART]);
        }
    }
    public function updateCheckout(Request $request)
    {
        $selectedProducts = $request->input('selectedProducts');
        dd($selectedProducts);
        // Save/update the selected products in the session as JSON
        Session::put('selectedProducts', json_encode($selectedProducts));

        $subtotal = 0;
        foreach ($selectedProducts as $product) {
            $subtotal += $product['price'] * $product['quantity'];
        }

        return response()->json(['message' => 'Selected products updated']);
    }
}
