@extends('layouts.app')  

@section('title')
  Fooder
@endsection

@section('content')
    <div class="container">
    <!--order was replaced by product-->
      <form  method="POST" action="{{url('product')}}">
      {{csrf_field()}}
          <img src="#" alt="">
          <h3>{{$product->name}}</h3><br>
          <input type="hidden"  name="name" value="{{$product->name}}">
          <input type="hidden"  name="price" value="{{$product->price}}">
          <input type="hidden"  name="restaurant_id" value="{{$restaurant_id}}">
          <h5>Price: ${{$product->price}}</h5>
          
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <input type="text" class="form-control" name="quantity" placeholder="quantity" value="0"><br>

            </div>
          </div>
        <button class="btn btn-success" type="submit" value="create" >Add To Cart</button>
          </form>

    </div>

  
    
@endsection
