<?php

namespace Resto\Http\Controllers;

use Illuminate\Http\Request;
use Resto\Shoppingcart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function shipping()
    {  
        return view('shipping-info');

    }

    public function store(Request $request)
    {

        $cartDetails = Cart::content();

        foreach($cartDetails as $c ){
          $cart = new Shoppingcart();
          $cart->product = $c->name;
          $cart->qty = $c->qty;
          $cart->price = $c->price;
          $cart->save();
        }

        Cart::destroy();
        
    	return 'Orde Placed! Delivery in max 4 hours!';
    }
}
