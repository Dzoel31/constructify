<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/cart', [ShopController::class, 'cart'])->name('cart')->middleware('auth');
Route::get('/shop/filter', [ShopController::class, 'filter'])->name('filter');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');