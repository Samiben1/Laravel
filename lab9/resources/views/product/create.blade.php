@extends('layouts.app')  

@section('title')
  Products
@endsection

@section('content')
    <h1>Create new Product</h1>


<form method="POST" action='{{url("product")}}'>
    {{csrf_field()}}
    <p><label>Name: </label><input type="text" name="name" value="{{ old('name') }}">
        @foreach ($errors->get('name') as $error)
            {{ $error }}
        @endforeach
    </p>
    <p><label>Price: </label><input type="text" name="price" value="{{ old('price') }}">
        @foreach ($errors->get('price') as $error)
            {{ $error }}
        @endforeach
    </p>
    <p><select name="manufacturer">
    
        @foreach ($manufacturers as $manufacturer)
            @if($manufacturer->id == old('manufacturer'))
                <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option>
            @else
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
            @endif
        @endforeach
    </select></p>
    <input type="submit" value="Create"> </form>
@endsection
