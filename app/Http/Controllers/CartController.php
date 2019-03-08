<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class CartController extends Controller
{
    public function index(){
        return view('cart');
    }
    
    public function additem($id){
        $product = Product::findOrFail($id);
        Cart::add($id, $product->name, 1, $product->price);
        return back();
    }

    public function removeitem($rowId){
        $content = Cart::content();

        if (!$content->has($rowId)){
            return back();
        }
        else{
            Cart::remove($rowId);
            return back();
        }
        
    }
}
