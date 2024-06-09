<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Partner;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders()
    {
        return view('admin.order', [
            'title' => 'Orders',
        ]);
    }

    public function order($idOrder)
    {
        // show order
    }

    public function updateOrder($idOrder)
    {
        // update order
    }
}
