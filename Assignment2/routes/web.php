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
use App\Restaurant;
use App\Product;
use App\Orders;

Route::get('/', function () {
    $Restaurants = Restaurant::all();
    return view('site.index')->with('Restaurants',$Restaurants);
});

Auth::routes();

Route::resource('product', 'ProductController');
Route::resource('restaurant', 'RestaurantController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test',function(){
    if (Auth::guest()){
    dd('guest');
    }else{
        $role = Auth::user()->role;
        if ($role == "Customer")
        dd('customer');
        else
        dd('Restaurant');
}

});

Route::get('History', function(){
    $orders = Orders::all();
    $total = 0;
    return view('site.history')->with('orders',$orders)->with('total',$total);
});

/*
Route::get('site.cart',function(){
   
    $sql = 'select * from orders';
    $orders = DB::select($sql); 
    return view('site.cart')->with('orders',$orders);
     // $quantity = request('quantity');
     //return view('site.userprofile')->with('quantity',$quantity);
 });
*/