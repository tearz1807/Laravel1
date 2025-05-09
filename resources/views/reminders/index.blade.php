@extends('layout.app')

@section('title', 'Напоминания')

@section('navbar')

  <div class="navbar">
    @include('global-content/navbar')
  </div>

@endsection

@section('Reminder')

  <div class="checklist">
    @include('reminders/checklist')
  </div>

  <div class="plan">
    @include('reminders/plan')
  </div>

  <div class="statistic">
    @include('reminders/statistic')
  </div>

@endsection

@section('down-menu')

  <div class="down-menu">
    @include('global-content/down-menu')
  </div>

@endsection