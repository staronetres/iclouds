<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\products;
use Storage;
use App\pro_cat;
use Image;
use App\products_properties;

class AdminController extends Controller
{
    //
    public function index()
    {
        // echo "hi admin";
        return view('admin.home');
    }


     public function add_product(Request $request) {

        $products = new products;
        $products->pro_name = $request->pro_name;
        $products->save();
    }
}
