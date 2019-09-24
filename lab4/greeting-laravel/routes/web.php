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

// Display Laravel home page
Route::get('/', function () {
    return view('welcome');
});


//Display Greeting Page

Route::get('greetingform', function () {
    return view('greetingform');
});

Route::post('greeting', function () {
    $name = request("name");
    $age = request("age");
    return view('greeting')->with('name',$name)->with('age',$age+1);
    
});