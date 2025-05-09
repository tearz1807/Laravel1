@extends('layout.app')

@section('navbar')

  <div class="navbar">
    @include('global-content/navbar')
  </div>

@endsection

@section('Knowledge')

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

@section('down-menu')

  <div class="down-menu">
    @include('global-content/down-menu')
  </div>

@endsection