@extends('layouts.master')  

@section('title')
  Item List
@endsection

@section('content')

  <h1> Items</h1>
  @if ($items)
    <ul>
      @foreach($items as $item)
        <li><a href="{{url("item_detail/$item->id")}}">{{$item->summary}}</a></li>
      @endforeach
    </ul>
  @else
    No items Found
  @endif
    <a href="add_item">Add Item</a>
@endsection

