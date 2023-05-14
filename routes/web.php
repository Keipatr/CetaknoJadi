<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/store', function () {
    return view('store-list');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/cart', function () {
    return view('shop-cart');
});
Route::get('/checkout', function () {
    return view('shop-checkout');
});
Route::get('/account', function () {
    return view('account-settings');
});
Route::get('/account-settings', function () {
    return view('account-settings');
});
Route::get('/account-orders', function () {
    return view('account-orders');
});
Route::get('/account-notification', function () {
    return view('account-notification');
});
Route::get('/account-address', function () {
    return view('account-address');
});
Route::get('/account-payment', function () {
    return view('account-payment-method');
});
Route::get('/wishlist', function () {
    return view('shop-wishlist');
});



Route::fallback(function () {
    return view('404error');
});
