@extends('layouts.app')  

@section('title')
  Fooder
@endsection

@section('content')

  
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <img src="{{asset('images/hungryjacks.png')}}" alt="{{$restaurant->name}}">
        <h1>{{$restaurant->name}}</h1>
      </div>
    </div>
    @if (Auth::guest())
    @elseif ((Auth::user()->role)=="Restaurant")
      <form action="create">
        <input type="hidden" value="{{$rid}}" name="id" >
        <a href={{url("restaurant/create")}}><button class="btn btn-success" value="submit">Add Item</button></a>
      </form>
    @endif
    
    <hr class="featurette-divider">
  </div>



  <ul>
    <div class="container"><br>
      <div class="row">
        @foreach($products as $product)
          <div class="col-sm-4">
          @if (Auth::guest())
            <a href="{{url("product/$product->id")}}">
              <div id="User-icon1" style="background-image:url('images/{{$restaurant->pro_pic}}')"></div><br>
              <h4>{{$product->name}}</h4>
            </a>
          @else
            @if ((Auth::user()->role)=="Customer" )
              <a href="{{url("product/$product->id")}}">
                <div id="User-icon1" style="background-image:url('images/{{$restaurant->pro_pic}}')"></div><br>
                <h4>{{$product->name}}</h4>
              </a>
            @elseif ((Auth::user()->role)=="Restaurant")
              <a href="{{url("restaurant/$product->id/edit")}}">
                <div id="User-icon1" style="background-image:url('images/{{$restaurant->pro_pic}}')"></div><br>
                <h4>{{$product->name}}</h4>
              </a>
            @endif
          @endif

              <h5>Price: $ {{$product->price}}</h5>
          </div>
        @endforeach           
      </div>
    </div>
  </ul>
  
    
@endsection

