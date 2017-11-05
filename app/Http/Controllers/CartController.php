<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $product = Product::find($request->product_id);
        Cart::add([
            'id'=> $request->product_id,
            'name'=> $product->product_name,
            'price'=> $product->product_price,
            'qty'=> $request->qty

        ]);
        return redirect('/show-cart');

    }
    public function showCart(){
        $cartProducts = Cart::content();
        return view('frontEnd.cart.show-cart',[
            'cartProducts'=>$cartProducts
        ]);
    }
    public function updateShoppingCart(Request $request){
        Cart::update($request->rowId, $request->qty);
        return redirect('/show-cart');


    }
}

