@extends('layout.app')

@section('title', 'Карта знаний')

@section('Content')

  <div class="header">
    @include('knowledge/header')
  </div>

  <div class="process">
    @include('knowledge/process')
  </div>

  <div class="materials">
    @include('knowledge/materials')
  </div>

  <div class="faq">
    @include('knowledge/faq')
  </div>
@endsection