<?php

namespace Resto\Http\Controllers;

use Illuminate\Http\Request;
use Resto\Shoppingcart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Resto\Order;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function shipping()
    {  
        return view('shipping-info');

    }

    public function store(Request $request)
    {

        //Validate the request

        $this->validate($request,[
            'phone' => 'required|digits:10',
            'name' => 'required',
            'address' => 'required',
        ]);


        $cartDetails = Cart::content();

        Shoppingcart::truncate();

        foreach($cartDetails as $c ){
          $cart = new Shoppingcart();
          $cart->product = $c->name;
          $cart->qty = $c->qty;
          $cart->price = $c->price;
          $cart->save();
        }

        $cartitems = Shoppingcart::all();

        $order= new Order();
        $order->cart = serialize($cartitems);
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->subtotal = Cart::subtotal();
        $order->tax = Cart::tax();
        $order->total = Cart::total();
        $total = Cart::total();

        Auth::user()->orders()->save($order);

        Cart::destroy();
        
    	return view('checkout',compact('cartitems','total'));
    }
}
