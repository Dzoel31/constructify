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

Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/{idProduct}', [ShopController::class, 'show'])->name('shop.show'); // in progress

Route::group(['middleware' => 'auth'], function () { 
    Route::post('/shop/{idProduct}', [ShopController::class, 'addToCart'])->name('shop.addToCart'); // in progress
    Route::get('/history', [ShopController::class, 'history'])->name('history');
    Route::get('/history/{idOrder}', [ShopController::class, 'order'])->name('history.order'); // in progress
    Route::get('/cart', [ShopController::class, 'cart'])->name('cart'); // in progress
    Route::delete('/cart/{idProduct}', [ShopController::class, 'removeFromCart'])->name('cart.removeFromCart'); // in progress
});

Route::get('/shop/filter', [ShopController::class, 'filter'])->name('filter');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/products', [ProductController::class, 'products'])->name('admin.products');
    Route::post('/admin/products/create', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/{idProduct}', [ProductController::class, 'show'])->name('admin.products.show'); // in progress (to show a product)
    
    Route::get('/admin/products/{idProduct}/edit', [ProductController::class, 'edit'])->name('admin.products.edit'); // in progress
    Route::put('/admin/products/{idProduct}', [ProductController::class, 'update'])->name('admin.products.update'); // in progress
    Route::delete('/admin/products/{idProduct}', [ProductController::class, 'destroy'])->name('admin.products.destroy'); // in progress
    
    Route::get('/admin/orders', [OrderController::class, 'orders'])->name('admin.orders'); // in progress
    Route::get('/admin/orders/{idOrder}', [OrderController::class, 'order'])->name('admin.order'); // in progress
    Route::put('/admin/orders/{idOrder}', [OrderController::class, 'updateOrder'])->name('admin.order.update'); // in progress
    
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

