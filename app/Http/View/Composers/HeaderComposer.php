<?php
namespace App\Http\View\Composers;

use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class HeaderComposer
{
    public function compose(View $view)
    {
        $cartQty = 0;

        $data = array();
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
        }

        $view->with('cartQty', $cartQty);
    }
}
