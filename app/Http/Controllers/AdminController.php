<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function index()
    {
        $Total_Order = Order::count();
        $Total_Pending = Order::where('status', 'Pending')->count();
        $Total_Processing = Order::where('status', 'Processing')->count();
        $Total_Delivered = Order::where('status', 'Delivered')->count();
        $Total_Canceled = Order::where('status', 'Canceled')->count();
        $Total_Revenue = Order::where('status', '!=', 'Canceled')->sum('total_price');
        return view('admin.dashboard', [
            'title' => 'Admin Dashboard',
            'Total_Order' => $Total_Order,
            'Total_Pending' => $Total_Pending,
            'Total_Processing' => $Total_Processing,
            'Total_Delivered' => $Total_Delivered,
            'Total_Canceled' => $Total_Canceled,
            'Total_Revenue' => $Total_Revenue,
        ]);
    }
}
