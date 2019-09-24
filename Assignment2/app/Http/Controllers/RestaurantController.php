<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Restaurant;
use Auth;

class RestaurantController extends Controller
{

    function __construct(){

        $this->middleware('auth',['only'=>'edit']);
        $this->middleware('auth',['only'=>'destroy']); 
        $this->middleware('auth',['only'=>'create']);
        
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $Restaurants = Restaurant::all();       
        return view('site.index')->with('Restaurants',$Restaurants);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
        $id = request('id');
        $restaurant = (restaurant::findorfail($id))->id;
        return view('site.create_product')->with("restaurant",$restaurant);
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'restaurant_id' =>'exists:restaurants,id'
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->restaurant_id = $request->restaurant;
        $product->save();
        $id = $request->restaurant;
        $products = Restaurant::find($id)->product;
        $restaurant = Restaurant::find($id);
        $pro_pic = $restaurant->pro_pic; 
        $rid = $restaurant->id;
        return view('site.products')->with('products',$products)->with('restaurant',$restaurant)->with('pro_pic',$pro_pic)->with('rid',$rid);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Restaurant::find($id)->product;
        $restaurant = Restaurant::find($id);
        $pro_pic = $restaurant->pro_pic; 
        $rid = $restaurant->id;
        return view('site.products')->with('products',$products)->with('restaurant',$restaurant)->with('pro_pic',$pro_pic)->with('rid',$rid);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $rid = $product->Restaurant_id;
        $restaurant = Restaurant::find($rid);
        return view('site.edit_product')->with('product', $product)->with('restaurant',$restaurant);
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
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'manufacturer' =>'exists:manufacturers,id'
        ]);
        
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->Restaurant_id = $request->restaurant;
        $product->save();
        return redirect("/");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $product = Product::destroy($id);
        return redirect("/");
    }
}
