@extends('layouts.app')  

@section('title')
  Fooder
@endsection

@section('content')


      <div class="container"><br>
        <div class="row">
        
            @foreach($Restaurants as $restaurant)
            
              <div class="col-sm-4" style="border: 2em">
              <a href="restaurant/{{$restaurant->id}}">
                <div id="User-icon1" style="background-image:url('images/{{$restaurant->pro_pic}}')"></div>
                <h4>{{$restaurant->name}}</h4>
              </a>
              <br>
              </div>
             
            @endforeach           
           
          
        </div>
      </div>
        
     

  
    
@endsection
