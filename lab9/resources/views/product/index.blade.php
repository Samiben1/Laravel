@extends('layouts.app')  

@section('title')
  Products
@endsection

@section('content')

    <ul>
      @foreach($products as $product)
        <a href="product/{{$product->id}}"><li>{{$product->name}}</li></a>
        
      @endforeach
    </ul>
    @if(Auth::check())
      <button><a href={{url("product/create")}}>Create</a></button>
    
    @endif
    
@endsection
