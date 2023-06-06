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
        if ($currentRouteName !== 'checkoutPage' && Session::has('selectedProducts')) {
            Session::forget('selectedProducts');
        }
        return $next($request);
    }
}
