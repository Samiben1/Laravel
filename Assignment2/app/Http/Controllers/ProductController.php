<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Restaurant;
use App\Orders;
use Auth;

class ProductController extends Controller
{

    function __construct(){
        $this->middleware('auth',['only'=>'store']);
        $this->middleware('auth',['only'=>'edit']);
        $this->middleware('auth',['only'=>'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user()->id;
        $order = Orders::all();
        $orders = array();
        foreach ($order as $o){
            $users = $o->userid;
            if ($users == $user){
                array_push($orders,$o);
            } 
        }
        
        $total = 0.0;
        foreach ($orders as $order){
            $total += (($order->quantity)*($order->price));
        };
        return view('site.cart')->with('orders',$orders)->with('total',$total);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('yo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $order = new Orders();
        $order->userid = Auth::user()->id;
        $order->username  = Auth::user()->name;
        $order->item_name = $request->name;
        $order->price = $request->price;
        $order->quantity = $request->quantity;
        $item_name = $request->name;
        $order->restaurant_id = $request->restaurant_id;
        $order->save();
        $orders = Orders::all(); 
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $restaurant_id = $product->Restaurant_id;
        return view('site.product_detail')->with('product', $product)->with('restaurant_id', $restaurant_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       dd("here");
    }
}
