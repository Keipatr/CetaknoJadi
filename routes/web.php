<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Models\Product;

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
Route::post('/cancelOrder', [HomeController::class, 'cancelOrder'])->name('cancelOrder');
Route::post('/forget-selected-products', [HomeController::class, 'forgetSelectedProducts'])->name('forgetSelectedProducts');


Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search-products', [SearchController::class,'searchProducts'])->name('searchProducts');

Route::post('/add-to-cart', [ProductController::class, 'addToCart']);
Route::post('/add-to-wishlist', [ProductController::class, 'addToWishlist']);
Route::post('/wishlist/delete', [ProductController::class, 'deleteWishlistItem']);
Route::post('/cart/delete', [ProductController::class, 'deleteCartItem']);
Route::post('/cart/update', [ProductController::class, 'updateCartItem']);
Route::post('/cart/update', [ProductController::class, 'updateCartItem']);
Route::post('/updateCheckout', [ProductController::class, 'updateCheckout']);

Route::get('/checkout', [HomeController::class, 'checkoutPage'])->name('checkoutPage');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
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

Route::get('/products/{store_url}/{product_url}', [ProductController::class, 'productShow'])->name('product-show');
Route::get('/categories/{category_url}', [ProductController::class, 'categoryShow'])->name('category-show');
Route::get('/stores/{store_url}', [ProductController::class, 'storeShow'])->name('store-show');
Route::get('/stores', [ProductController::class, 'allStoreShow'])->name('allStore-show');

Route::fallback(function () {
    return view('404error');
});
