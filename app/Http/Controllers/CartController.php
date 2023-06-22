<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        return "tes";
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        // return $request;
        // $this->validate($request, [
        //     'id' => 'required',
        //     'nama' => 'required',
        //     'harga' => 'required|numeric',
        //     'qty' => 'required|numeric',
        // ]);

        \Cart::add([
            'id' => $request->id,
            'name' => $request->nama,
            'price' => $request->harga,
            'quantity' => $request->qty
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
