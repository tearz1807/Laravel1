@extends('layout.app')

@section('content')

  <div class="navbar">
    @include('navbar')
  </div>

  <div class="first-page">
    @include('first-page')
  </div>

  <div class="second-page">
    @include ('second-page')
  </div>

  <div class="down-menu">
    @include('down-menu')
  </div>

@endsection