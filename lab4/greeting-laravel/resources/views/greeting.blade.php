@extends('layouts.master')  

@section('title')
  Greeting Form
@endsection

@section('content')
  <p>
    Hello {{$name}}.
    Next year, you will be {{$age}} years old.
  </p>
  <hr>

@endsection

