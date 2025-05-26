@extends('layout.app')

@section('title', 'Как пользоваться')

@section('Content')

  <div class="steps">
    @include('usage/steps')
  </div>

  <div class="faqs">
    @include('usage/faqs')
  </div>

@endsection

