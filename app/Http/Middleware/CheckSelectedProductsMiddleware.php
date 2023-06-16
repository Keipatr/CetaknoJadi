<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class CheckSelectedProductsMiddleware
{
    public function handle($request, Closure $next)
    {
        $currentRouteName = Route::currentRouteName();
        if ($currentRouteName == 'home' || $currentRouteName == 'my-account' || $currentRouteName == 'product-show' || $currentRouteName == 'category-show' || $currentRouteName == 'about-us' || $currentRouteName == 'signup' || $currentRouteName == 'loginpage' || $currentRouteName == 'cart' || $currentRouteName == 'wishlist') {
            // Only forget the 'selectedProducts' session if it exists and the current route is not 'checkoutPage' or 'placeOrder'
            if (Session::has('selectedProducts')) {
                Session::forget('selectedProducts');
            }
        }
        return $next($request);
    }
}
