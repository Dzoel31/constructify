<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Partner;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders()
    {
        $orderData = Order::all();
        $ID_Order = Order::pluck('id');

    
        return view('admin.order', [
            'title' => 'Order',
            'orderData' => $orderData,
            'ID_Order' => $ID_Order,
        ]);
    }

    public function order($idOrder)
    {
    }

    public function updateStatus(Request $request, $ID_Order)
    {
        $order = Order::where('id', $ID_Order)->first();
        $status = $request->status;

        $order->update([
            'status' => $status,
        ]);

        return back()->with('success', 'Order status updated successfully.');
    }
}
