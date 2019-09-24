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
        <hr class="featurette-divider">
    </div>

    <div class="container">
        <div class="row">
            <form method="POST" action= '{{url("restaurant/$product->id")}}'>
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <p><label>Name</label>
                <input type="text" name="name" value="{{$product->name}}" >
                    @foreach ($errors->get('name') as $error)
                        {{ $error }}
                    @endforeach
                </p>
                <p><label>Price</label>
                <input type="text" name="price" value="{{$product->price}}" >
                    @foreach ($errors->get('price') as $error)
                        {{ $error }}
                    @endforeach
                </p>
                <p>
                    <input type="hidden" name="restaurant" value="{{$product->Restaurant_id}}" >
                    @foreach ($errors->get('price') as $error)
                        {{ $error }}
                    @endforeach
                </p>
                <input class="btn btn-info" type="submit" value="Update">
            </form>
        </div>
        <div class="row">
        <form method="POST" action='{{url("restaurant/$product->id")}}'>
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
        </div>

        <hr class="featurette-divider">
    </div>
@endsection
