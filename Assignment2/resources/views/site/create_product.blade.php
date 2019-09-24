@extends('layouts.app')  

@section('title')
  Products
@endsection

@section('content')
    <div class="container">
        <h1>Add new Product</h1>
        <div class="row">
            <form method="POST" action='{{url("restaurant")}}'>
                {{csrf_field()}}
                <p><label>Name: </label><input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    @foreach ($errors->get('name') as $error)
                        {{ $error }}
                    @endforeach
                </p>
                <p><label>Price: </label><input type="text" class="form-control" name="price" value="{{ old('price') }}">
                    @foreach ($errors->get('price') as $error)
                        {{ $error }}
                    @endforeach
                </p>
                <p><input type="hidden" class="form-control" value="{{$restaurant}}" name="restaurant"></p>
                <button type="submit" class="btn btn-success" >Create</button>
             </form>
        </div>
    </div>

@endsection
