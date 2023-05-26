<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// riil
Route::get('/{optional?}', [HomeController::class, 'index'])
    ->where('optional', '^(|/)$')
    ->name('home');

Route::post('/signin-customer', [LoginController::class, 'signinCustomer'])->name('signin-customer');

Route::post('/signup', [LoginController::class, 'signup'])
    ->name('signup');



Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/fetch-cart-quantity', [CartController::class, 'fetch'])->name('fetch-cart-quantity');
Route::get('/qty', [HomeController::class, 'fetchQuantities'])->name('qty');
Route::get('/signin', [HomeController::class, 'loginpage'])->name('loginpage');
Route::get('/forgot-password', [HomeController::class, 'forgot'])->name('forgot');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');

Route::get('/my-account', [HomeController::class, 'viewAccount'])->name('my-account');
Route::get('/account-orders', [HomeController::class, 'orders'])->name('account-orders');
Route::get('/account-address', [HomeController::class, 'address'])->name('account-address');
Route::get('/account-payment', [HomeController::class, 'payment'])->name('account-payment');
Route::get('/account-notification', [HomeController::class, 'notification'])->name('account-notification');
// not riil

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/index', function () {
//     return view('index');
// });


// Route::get('signin', function () {
//     return view('signin');
// });
// Route::get('signup', function () {
//     return view('signup');
// });
// Route::get('forgot', function () {
//     return view('forgot-password');
// });


// Route::get('store', function () {
//     return view('store-list');
// });
// Route::get('/about-us', function () {
//     return view('about');
// });
// Route::get('/contact-us', function () {
//     return view('contact');
// });
// Route::get('/cart', function () {
//     return view('shop-cart');
// });
// Route::get('/checkout', function () {
//     return view('shop-checkout');
// });
// Route::get('/account', function () {
//     return view('account-settings');
// });
// Route::get('/account-settings', function () {
//     return view('account-settings');
// });
// Route::get('/account-orders', function () {
//     return view('account-orders');
// });
// Route::get('account-notification', function () {
//     return view('account-notification');
// });
// Route::get('/account-address', function () {
//     return view('account-address');
// });
// Route::get('/account-payment', function () {
//     return view('account-payment-method');
// });
// Route::get('/wishlist', function () {
//     return view('shop-wishlist');
// });

// Route::get('stores', function () {
//     return view('store-list');
// });
// Route::get('store-draya', function () {
//     return view('store-single');
// });

// Route::get('overview', function () {
//     return view('overview');
// });


// Route::get('products', function () {
//     return view('shop-grid');
// });
// Route::get('product-banner', function () {
//     return view('shop-single');
// });
// Route::get('products-banner', function () {
//     return view('shop-single');
// });

Route::fallback(function () {
    return view('404error');
});
