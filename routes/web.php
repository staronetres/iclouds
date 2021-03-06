<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'HomeController@index')->name('home');


// Route::get('home', function (){
//     return view('front/home');
// });

Route::get('/products', function (){
    return view('front/shop');
});



// Route::get('/shop', function (){
//     return view('front/shop');
// });


Route::get('/contact', function (){
    return view('front/contact');
});


Route::get('/shop','HomeController@shop');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/home', 'HomeController@contact')->name('contact');


// Start of Admin

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {

Route::get('/admin', 'AdminController@index');


 Route::get('/', function(){
     return view('admin.home');
 });


 Route::get('/admin/add_product', 'AdminController@add_product');


 Route::POST('/admin/store', 'AdminController@store');

  Route::resource('product','ProductsController');

  Route::resource('category','CategoriesController');

Route::get('/admin', 'AdminController@index');


 });

// End of Admin


// Start of User Authentication
  Route::group(['middleware' => 'auth'], function() {

    Route::get('/checkout', 'CheckoutController@index');
    Route::post('/formvalidate','CheckoutController@formvalidate')->name('formvalidate');


    Route::get('/profile', function() {
        return view('profile.index');
    });

    Route::get('/address', 'ProfileController@address');

    
    Route::post('/updateAddress', 'ProfileController@UpdateAddress');

    Route::get('/password', 'ProfileController@Password');

      Route::post('/updatePassword', 'ProfileController@updatePassword');


     Route::get('/thankyou', function() {
        return view('profile.thankyou');
    });

     Route::get('/orders', 'ProfileController@orders');




});


// End of User Authentication

// Route::get('/products', function (){
//     return view('front/shop');
// });



Route::get('/product_details/{id}', 'HomeController@product_details');




// Start of Cart Controller


Route::get('/cart', 'CartController@index');


Route::get('/cart/addItem/{id}', 'HomeController@product_details');


Route::get('/cart/addItem/{id}', 'CartController@addItem');


Route::get('/cart/remove/{id}', 'CartController@destroy');


Route::get('/cart/update/{id}', 'CartController@update');

Route::put('/cart/update/{id}', 'CartController@update');
