<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/troli', function () {
    return view('troli');
});

Route::get('/filter', function () {
    return view('filter');
});
