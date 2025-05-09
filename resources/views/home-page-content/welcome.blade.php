@extends('layout.app')

@section('navbar')

  <div class="navbar">
    @include('global-content/navbar')
  </div>

@endsection

@section('Home-content')

  <div class="expertise">
    @include('home-page-content/expertise')
  </div>

  <div class="about">
    @include ('home-page-content/about')
  </div>

@endsection

@section('down-menu')

  <div class="down-menu">
    @include('global-content/down-menu')
  </div>

@endsection