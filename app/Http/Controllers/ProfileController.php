<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\address;
use App\orders;
use App\Product;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function index() {
        return view('profile.index');
    }

      // public function orders() {
    //     return view('profile.orders');
    // }


  public function orders() {
        $user_id = Auth::user()->id;
        // $orders=Orders_products::all();
        $orders = DB::table('orders_product')->leftJoin('products', 'products.id', '=', 'orders_product.product_id')->leftJoin('orders', 'orders.id', '=', 'orders_product.orders_id')->where('orders.user_id', '=', $user_id)->get();
        return view('profile.orders', compact('orders'));
    }



    public function Address() {
         $user_id = Auth::user()->id;
        $address_data = DB::table('address')->where('user_id', '=', $user_id)->orderby('id', 'DESC')->get();
        return view('profile.address', compact('address_data'));
    }

    public function updateAddress(Request $request) {
        $this->validate($request, [
            'fullname' => 'required|min:5|max:35',
            'pincode' => 'required|numeric',
            'city' => 'required|min:5|max:25',
            'state' => 'required|min:5|max:25',
            'country' => 'required|min:2|max:25']);

        $userid = Auth::user()->id;
        DB::table('address')->where('user_id', $userid)->update($request->except('_token'));

        return back()->with('msg','Your address has been upodated');
    }





   public function updatePassword(Request $request) {
        $oldPassword = $request->oldPassword;
        
        $newPassword = $request->newPassword;


        if(!Hash::check($oldPassword, Auth::user()->password)){
          return back()->with('msg','The specified password does not match the database password'); //when user enter wrong password as current password

        }else{
            $request->user()->fill(['password' => Hash::make($newPassword)])->save(); //updating password into user table
           return back()->with('msg','Password has been updated');
        }
       // echo 'here update query for password';
    }



    public function Password() {
        return view('profile.updatePassword');
    }


    // public function updatePassword() {
    //     // return view('profile.updatePassword');
    //     echo 'here update query for password';
    // }


}
