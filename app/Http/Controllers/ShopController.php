<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use App\Models\Cart;

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
        return view('history');
    }


    public function filter()
    {
        return view('filter');
    }

    public function payment()
    {
        return view('payment');
    }
    
}
