<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

use Gloudemans\Shoppingcart\Facades\Cart;

use App\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
   public function index() {
        $cartItems = Cart::content();
        return view('cart.index', compact('cartItems'));
    }

   public function addItem($id) {
     

         $product = Product::find($id);

         // Cart::add('$product->pro_name', '$id', 1, $product->pro_price);

         Cart::add($id, $product->pro_name, 1, $product->pro_price);
    }


    public function destroy($id){
    // echo $id; 
    Cart::remove($id);
    return back(); 
    }


}
