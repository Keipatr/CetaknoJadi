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
    public function productShow(string $store_url, string $product_url, string $idprod, Request $request)
    {
        $id_container = $request->query('id');

        $products = DB::select("
        SELECT co.ID_CONTAINER, p.ID_PRODUCT, p.image, s.NAME_SHOP, PRODUCT_NAME, JENIS, DESC_PRODUCT, NAME_CATEGORY,
        c.ID_CATEGORY, PRICE_PRODUCT AS price,
    AVG(RATING_REVIEW) AS rating, COUNT(r.ID_REVIEW) AS rating_count
FROM product p
JOIN container co ON p.id_container = co.ID_CONTAINER
JOIN category c ON c.ID_CATEGORY = co.ID_CATEGORY
JOIN shop s ON s.ID_SHOP = co.ID_SHOP
LEFT JOIN review r ON r.ID_CONTAINER = co.ID_CONTAINER
WHERE co.STATUS_DELETE = 0
    AND co.STATUS = 1
    AND s.STATUS_SHOP = 'Y'
    AND product_name = '$product_url'
    and ID_PRODUCT = '$idprod'
    AND co.ID_CONTAINER = '" . Crypt::decryptString($id_container) . "'
GROUP BY co.ID_CONTAINER, p.ID_PRODUCT, p.image, s.NAME_SHOP, PRODUCT_NAME, JENIS, DESC_PRODUCT, NAME_CATEGORY, c.ID_CATEGORY, PRICE_PRODUCT;

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
            AVG(RATING_REVIEW) AS rating, p.image, COUNT(r.ID_REVIEW) AS rating_count, jenis
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
            GROUP BY jenis,p.ID_PRODUCT,s.ID_SHOP,c.ID_CATEGORY,s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, p.image, co.ID_CONTAINER,DESC_PRODUCT;
            ");
        } else {
            $query = DB::select("
            SELECT p.ID_PRODUCT,c.ID_CATEGORY,s.ID_SHOP,co.ID_CONTAINER, s.NAME_SHOP, PRODUCT_NAME,DESC_PRODUCT, NAME_CATEGORY, PRICE_PRODUCT AS price,
        AVG(RATING_REVIEW) AS rating, p.image, COUNT(r.ID_REVIEW) AS rating_count, jenis
        FROM product p
        JOIN container co ON p.id_container = co.ID_CONTAINER
        JOIN category c ON c.ID_CATEGORY = co.ID_CATEGORY
        JOIN shop s ON s.ID_SHOP = co.ID_SHOP
        LEFT JOIN review r ON r.ID_CONTAINER = co.ID_CONTAINER
        WHERE co.STATUS_DELETE = 0
        AND co.STATUS = 1
        AND s.STATUS_SHOP = 'Y'
        GROUP BY jenis, p.ID_PRODUCT,s.ID_SHOP,s.NAME_SHOP, p.product_name, c.name_category, p.PRICE_PRODUCT, p.image,c.ID_CATEGORY ,co.ID_CONTAINER,DESC_PRODUCT;
            ");
        }
        $products = collect($query);

        $currentPage = $request->input('page', 1); // Get the current page from the request

        $cat = DB::select("
            SELECT * FROM category where STATUS_DELETE = 0;
            ");
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
        return view('shop-grid', compact('paginator', 'category_url', 'cat'));
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
        $totalQuantity = 0;
        $subtotal = 0;
        $selectedProducts = $request->input('selectedProducts');
        // dd($request->all());
        if ($selectedProducts) {

            Session::put('selectedProducts', json_encode($selectedProducts));
            $totalQuantity = 0;
            $subtotal = 0;
            foreach ($selectedProducts as $product) {
                $subtotal += intval($product['realPrice']) * intval($product['quantity']);
                $totalQuantity += intval($product['quantity']);
            }
            $subtotal = 'Rp ' . number_format($subtotal, 0, ',', '.');

            return response()->json([
                'message' => 'Selected products updated',
                'subtotal' => $subtotal,
                'totalQuantity' => $totalQuantity
            ]);
        }
        return response()->json([
            'message' => 'Selected products updated',
            'subtotal' => 'Rp ' . $subtotal,
            'totalQuantity' => $totalQuantity
        ]);
    }
    public function placeOrder(Request $request)
    {
        // dd($request->all());
        $shopId = null;
        $productCode = $request->input('productCode');
        $productName = $request->input('productName');
        $rates = $request->input('rates');
        $formatRates = $request->input('formatRates');
        $paymentMethodName = $request->input('paymentMethodName');
        $paymentMethodId = $request->input('paymentMethodId');

        if (Session::has('USERNAME_CUST')) {
            $username = Session::get('USERNAME_CUST');
        } else {
            $username = Cookie::get('USERNAME_CUST');
        }

        $cartIdResult = DB::select("SELECT c.ID_CART FROM cart c, customer cu WHERE c.ID_CART = cu.ID_CART AND cu.USERNAME_CUST ='$username'");
        $cartId = $cartIdResult[0]->ID_CART;

        $selectedProducts = Session::get('selectedProducts', []);
        if ($selectedProducts) {
            $selectedProducts = json_decode($selectedProducts, true);
        }

        $totalQuantity = 0;
        $subtotal = 0;
        foreach ($selectedProducts as $product) {
            $subtotal += intval($product['realPrice']) * intval($product['quantity']);
            $totalQuantity += intval($product['quantity']);
        }
        // get selected product shop id
        foreach ($selectedProducts as $product) {

            $shopId = $product['shop'];
        }
        // get id customer
        $idCustomer = DB::select("select ID_CUSTOMER from customer where USERNAME_CUST = '$username'");
        $idCustomer = $idCustomer[0]->ID_CUSTOMER;


        // Process the uploaded images
        $productImages = $request->file('productImage');
        $uploadedImagePaths = [];
        $filenames = []; // Store the filenames in an array

        if ($productImages) {
            foreach ($productImages as $index => $productImage) {
                if ($productImage->isValid()) {
                    $extension = $productImage->getClientOriginalExtension();
                    $fileName = 'product_image_' . ($index + 1) . '_' . uniqid() . '.' . $extension; // Add a unique identifier to the filename
                    $path = $productImage->storeAs('public\images\upload', $fileName);

                    $uploadedImagePaths[] = $path;
                    $filenames[] = $fileName; // Store the filename in the array

                    // Use the filename as needed (e.g., store it in the database)
                }
            }
        }
        // dd($filename);


        $adaDelivery = DB::select("select * from delivery where ID_DELIVERY = '$productCode'");
        if (count($adaDelivery) <= 0) {
            DB::insert("insert into delivery()
           values ('$productCode','$productName',0);");
        }
        // run function from db named fid_invoice
        $idInvoiceResult = DB::select("select fid_invoice(curdate()) as fid_invoice;");
        $idInvoice = $idInvoiceResult[0]->fid_invoice;

        $totalPurchase = $subtotal + $rates;

        DB::insert("insert into invoice()
        values('$idInvoice',null,'$productCode','$shopId','$idCustomer','$paymentMethodId',curdate(),'$totalPurchase',null,null,'Completed',0);");


        $cart = DB::select("select cp.ID_CART, cp.ID_CONTAINER, cp.ID_PRODUCT, cp.QTY_CART, cp.SUBTOTAL_CART, p.QTY_PRODUCT
        from cart_product cp,cart ca, customer cu , container co, product p
        where cu.ID_CART = ca.ID_CART and cp.ID_CART = ca.ID_CART
        and co.ID_CONTAINER = cp.ID_CONTAINER
        and co.ID_CONTAINER = p.ID_CONTAINER
        and p.ID_PRODUCT = cp.ID_PRODUCT
        and USERNAME_CUST = '$username';");

        // insert into product_invoice
        foreach ($selectedProducts as $product) {
            $filename = isset($filenames[$index]) ? $filenames[$index] : ''; // Get the corresponding filename from the array
            $containerId = $product['containerId'];
            $productId = $product['productId'];
            $productQuantity = $product['quantity'];
            $productPrice = $product['realPrice'];
            $productSubtotal = $productQuantity * $productPrice;
            DB::insert("insert into product_invoice()
            values('$containerId','$productId','$idInvoice','$productQuantity','$productPrice','$productSubtotal','$filename',0);");

            // update product quantity
            DB::update("update product set QTY_PRODUCT = QTY_PRODUCT - $productQuantity where ID_PRODUCT = '$productId' and ID_CONTAINER = '$containerId';");

            // update cart product
            DB::update("update cart_product set QTY_CART = QTY_CART - $productQuantity where ID_PRODUCT = '$productId' and ID_CONTAINER = '$containerId' and ID_CART = '$cartId';");

            // delete cart product if quantity = 0
            DB::delete("delete from cart_product where QTY_CART = 0 and ID_PRODUCT = '$productId' and ID_CONTAINER = '$containerId' and ID_CART = '$cartId';");



        }

        // update cart
        DB::update("
            UPDATE cart
            SET QTY_CART = COALESCE((SELECT SUM(QTY_CART) FROM cart_product WHERE ID_CART ='$cartId' GROUP BY ID_CART),0),
                TOTAL_CART = COALESCE((SELECT SUM(SUBTOTAL_CART) FROM cart_product WHERE ID_CART ='$cartId' GROUP BY ID_CART),0)
            WHERE ID_CART = '$cartId';
            ");





        // dd ($cart);
        return response()->json([
            'success' => true,
            'route' => route('home')
        ]);
    }
}
