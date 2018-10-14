<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\address;
use App\orders;
use App\Product;
use App\Category;

class CheckoutController extends Controller
{
    //
    public function index() {
        if(Auth::check()){
          $cartItems = Cart::content();
          $categories=Category::all();
           return view('front.checkout', compact('cartItems', 'categories'));
        }
        

    else {
        return redirect('login');
    }
  }

   public function formvalidate(Request $request) {

     // $categories = Category::findOrFail($id);
     // $categories=Category::all();


     // $categories = DB::table('categories')->where('id', $id)->get();
     // $categories=Category::all();
       // $this-validate($request, ['fullname' => 'required|min:5|max:35,'],
       //         ['fullname.required'=>'enter full name']);
    $this->validate($request, [
        'fullname' => 'required|min:5|max:35',
        'pincode' => 'required|numeric',
        'city' => 'required|min:5|max:25',
        'state' => 'required|min:5|max:35',
        'country' => 'required']);



   $userid = Auth::user()->id;
        $address = new address;
        $address->fullname = $request->fullname;
        $address->state = $request->state;
        $address->city = $request->city;
        $address->pincode = $request->pincode;
        $address->country = $request->country;
        $address->user_id = $userid;
        $address->save();

        // dd('done');

        orders::createOrder();


         Cart::destroy();
        return redirect('thankyou', compact('categories'));
   }



}
