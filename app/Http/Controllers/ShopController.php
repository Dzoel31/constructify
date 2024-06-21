<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;

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
        
    public function show($slug)
    {
        $product = Material::where('slug', $slug)->first();
        return view('shop-show', [
            'title' => 'Product Detail',
            'product' => $product,
        ]);
    }

    public function addToCart($idProduct)
    {
        $product = Material::find($idProduct);
        $data = request()->validate([
            'quantity' => ['required', 'numeric', 'min:1'],
        ]);

        $total = $product->price * $data['quantity'];

        Cart::create([
            'ID_User' => auth()->user()->id,
            'ID_Material' => $idProduct,
            'quantity' => $data['quantity'],
            'total' => $total,
        ]);

        return redirect()->route('shop')->with('success', 'Product has been added to cart!');
    }

    public function cart()
    {
        $cartData = Cart::where('ID_User', auth()->user()->id)->get();
        $total = Cart::where('ID_User', auth()->user()->id)->sum('total');
        return view('cart', [
            'title' => 'Your Cart',
            'cartData' => $cartData,
            'total' => $total,
        ]);
    }

    public function removeFromCart($idCart)
    {
        Cart::where('id', $idCart)->delete();
        return redirect()->route('cart')->with('success', 'Product has been removed from cart!');
    }

    public function history()
    {
        $ID_User = auth()->user()->id;

        $All_ID_Order = Order::where('ID_User', $ID_User)->get()->sortByDesc('created_at');
        // dd($All_ID_Order);
        $All_ID_Order = $All_ID_Order->pluck('id');


        $Detail_Order = OrderDetail::whereIn('ID_Order', $All_ID_Order)->get();

        $Detail_Order = $Detail_Order->sortBy(function ($orderDetail) use ($All_ID_Order) {
            return array_search($orderDetail->ID_Order, $All_ID_Order->toArray());
        });
        
        return view('history', [
            'title' => 'History',
            'detailOrders' => $Detail_Order,
        ]);

    }

    public function search(Request $request)
    {
        $search = $request->search;
        // search by name
        $data = Material::where('name', 'like', '%' . $search . '%')->get();
        return view('shop', [
            'title' => 'Shop',
            'data' => $data,
        ]);
    }

    public function filter()
    {
        return view('filter');
    }

    public function payment()
    {
        $userCart = Cart::where('ID_User', auth()->user()->id)->get();
        $total = Cart::where('ID_User', auth()->user()->id)->sum('total');
        return view('payment', [
            'userCart' => $userCart,
            'total' => $total,
        ]);
    }

    public function storePayment()
    {
        $user = auth()->user();
        $data = request()->validate([
            'total' => ['required', 'numeric'],
        ]);
        
        $id_order = Str::uuid();
        $ID_user = $user->id;

        Order::create([
            'id' => $id_order,
            'ID_User' => $ID_user,
            'total_price' => $data['total'],
        ]);

        $data_Checkout = Cart::where('ID_User', $ID_user)->get();

        $orderDetails = [];
        foreach ($data_Checkout as $cart) {
            $orderDetails[] = [
                'ID_Order' => $id_order,
                'ID_Material' => $cart->ID_Material,
                'quantity' => $cart->quantity,
                'total' => $cart->total,
            ];



            Material::where('id', $cart->ID_Material)->decrement('stock', $cart->quantity);
            Cart::where('id', $cart->id)->delete();
        }

        DB::table('order_details')->insert($orderDetails);

        return redirect()->route('shop')->with('success', 'Payment has been processed!');
    }
    
}
