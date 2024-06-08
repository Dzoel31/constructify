<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop');
    }

    public function cart()
    {
        return view('cart');
    }

    public function filter()
    {
        return view('filter');
    }
}
