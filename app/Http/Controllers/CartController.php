<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

use Gloudemans\Shoppingcart\Facades\Cart;

use App\Product;
use App\Category;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
   public function index() {
  
        $categories=Category::all();
        $cartItems = Cart::content();
        return view('cart.index', compact('cartItems', 'categories'));




  
    }

   public function addItem($id) {
     

         $products = Product::find($id);

         // Cart::add('$product->pro_name', '$id', 1, $product->pro_price);

         Cart::add($id, $products->pro_name, 1, $products->pro_price, ['img' => $products->image]);
    }


    public function destroy($id){
    // echo $id; 
    Cart::remove($id);
    return back(); 
    }

    public function  update(Request $request, $id){

         $categories=Category::all();

         $qty = $request->qty;
              $proId = $request->proId;
           $rowId = $request->rowId;
            Cart::update($id,$qty); 
            $cartItems = Cart::content(); 
            return view('cart.index', compact('cartItems', 'categories'))->with('status', 'cart updated');
     

    
     


      // if($qty<$stock) {
      //     $msg = 'Cart is updated';
         // Cart::update($id, $request->qty);
          // Cart::update($rowId, $request->qty);
         
      }



}
