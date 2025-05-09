@extends('layout.app')

@section('navbar')

  <div class="navbar">
    @include('global-content/navbar')
  </div>

@endsection

@section('Usage')

  <div class="steps">
    @include('usage/steps')
  </div>

  <div class="faqs">
    @include('usage/faqs')
  </div>

@endsection

@section('down-menu')

  <div class="down-menu">
    @include('global-content/down-menu')
  </div>

@endsection