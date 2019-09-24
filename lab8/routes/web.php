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
use App\Product;

Route::resource('product','ProductController');

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/test', function(){
    /*
    $product = Product::create(array('name'=>'playstation', 'price'=>'499', 'manufacture_id'=>'sony1'));
    dd($product);
    */

    //$products = Product::all();
    /*
    $products = App\Manufacturer::find(1)->products;
    $manufacutrer = Product::find(1)->manufacturer;
    dd($products, $manufacutrer);

});*/
