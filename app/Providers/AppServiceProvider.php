<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\HeaderComposer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('layouts.header', function ($view) {
            $data = array();
            $cart = array();
            $cat = array();
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
                FROM CUSTOMER c, WISHLIST w, CART ca
                WHERE w.ID_WISHLIST= c.ID_WISHLIST
                AND ca.ID_CART= c.ID_CART AND
                 USERNAME_CUST = '$username';");
                $cart = DB::select("
                select PRODUCT_NAME,p.image, NAME_CATEGORY,PRICE_PRODUCT as price
                FROM PRODUCT p, CONTAINER c, CART cr,CATEGORY ca, CUSTOMER cu, CART_PRODUCT cw
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
            $cat = DB::select("
            SELECT * FROM CATEGORY where STATUS_DELETE = 0;
            ");
            $view->with('data', $data)->with('cat',$cat)->with('cart',$cart);
        });
        View::composer('layouts.footer', function ($view) {
            $cat = DB::select("
            SELECT * FROM CATEGORY where STATUS_DELETE = 0;
            ");
            $view->with('cat', $cat);
        });
    }
}
