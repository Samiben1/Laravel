@extends('layouts.master')  

@section('title')
  Item List
@endsection

@section('content')

    <h1> {{$item->summary}} </h1>
    <p> {{$item-> details}}</p>
    <a href ="{{url("delete_item/$item->id")}}">Delete Item</a><br>
    <a href="{{url("update_item/$item->id")}}">Update Item</a><br>
    <a href="{{url("/")}}">Home</a><br>

@endsection

