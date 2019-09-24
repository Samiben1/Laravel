@extends('layouts.app')  

@section('title')
  Fooder
@endsection

@section('content')
    <ul>
    <div class="container"> 
        @foreach($orders as $order)
            
                <h2>{{$order->username}}</h2>   
                <h5>Item Name: {{$order->item_name}}</h5><br>
                <h6>Price: ${{$order->price}}</h6><br>
                <h6>Quantity: {{$order->quantity}}</h6><br>
                <h6>Order Date: {{$order->updated_at}}</h6><br>

        
        @endforeach
        
        <h1>Total Price: ${{$total}}</h1>
        <form  action="{{url('product')}}">
          <button class="btn btn-success" type="submit" value="Delete">Confirm Order</button>
    </form>
        </div>
    </ul>
    
    
@endsection
