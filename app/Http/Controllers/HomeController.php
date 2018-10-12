<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return view('front.home');
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {

        $categories=Category::all();
        $products=Product::all();
        
        return view('front.home',compact('categories','products'));
    }

    public function shop()
    {
        // $Products = DB::table('products')->get();
        // return view('front.shop',compact('Products'));
        $categories=Category::all();
        $products=Product::all();

        return view('front.shop',compact(['categories','products']));
    }



    public function contact()
    {
        return view('front.contact');
    }


    public function product_details($id)
    {
       // $products = Product::findOrFail($id);
        // $blog = Blog::whereSlug($slug)->first();
        // return view('front.product_details', compact('products'));
        // var_dump($product);

        $Products = DB::table('products')->where('id', $id)->get();
        return view('front.product_details', compact('Products','proInfo','reviews','count_reviews'));
    }


}
