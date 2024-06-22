<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/search', [ShopController::class, 'search'])->name('shop.search');
Route::get('/shop/{slug}', [ShopController::class, 'show'])->name('shop.show');

Route::group(['middleware' => 'auth'], function () { 
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/shop/{idProduct}', [ShopController::class, 'addToCart'])->name('shop.addToCart');
    Route::get('/history', [ShopController::class, 'history'])->name('history');
    Route::get('/history/{idOrder}', [ShopController::class, 'order'])->name('history.order'); // in progress
    Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
    Route::delete('/cart/{idCart}', [ShopController::class, 'removeFromCart'])->name('cart.removeFromCart');
    Route::get('/payment', [ShopController::class, 'payment'])->name('payment');
    Route::post('/payment', [ShopController::class, 'storePayment'])->name('payment.store');
});

Route::get('/shop/filter', [ShopController::class, 'filter'])->name('filter');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/products', [ProductController::class, 'products'])->name('admin.products');
    Route::post('/admin/products/create', [ProductController::class, 'store'])->name('admin.products.store');
    
    Route::get('/admin/products/{idProduct}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/admin/products/{idProduct}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/admin/products/delete/{idProduct}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    
    Route::get('/admin/orders', [OrderController::class, 'orders'])->name('admin.orders');
    Route::get('/admin/orders/{idOrder}', [OrderController::class, 'order'])->name('admin.order'); // in progress
    Route::put('/order/updateStatus/{idOrder}', [OrderController::class, 'updateStatus'])->name('order.updateStatus');

    
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

