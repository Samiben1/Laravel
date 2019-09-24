@extends('layouts.app')  

@section('title')
  Products
@endsection

@section('content')

    <form method="POST" action= '{{url("product/$product->id")}}'>
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
        <p><select name="manufacturer">
            @foreach ($manufacturers as $manufacturer)
                @if($manufacturer->id == old('manufacturer'))
                    <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option>
                @else
                    <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                @endif
            @endforeach
        </select>
        <input type="submit" value="Update">
</form>


@endsection
