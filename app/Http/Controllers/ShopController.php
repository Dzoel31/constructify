<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $data = Material::all();
        return view('shop', [
            'title' => 'Shop',
            'data' => $data,
        ]);
    }

    public function history()
    {
        return view('history');
    }

    public function cart()
    {
        return view('cart');
    }

    public function filter()
    {
        return view('filter');
    }

    public function payment()
    {
        return view('payment');
    }
    
    public function show()
    {
        return view('shop_show');
    }
}
