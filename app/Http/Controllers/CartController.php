<?php

namespace Resto\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Resto\Menuitem;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems=Cart::content();
        return view('/cart',compact('cartItems'));
    }


    public function edit($id)
    {
        $item=Menuitem::find($id);
        Cart::add($id,$item->name,1,$item->price,['size'=>'medium']);

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Resto\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Cart::update($id,$request->qty);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Resto\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
