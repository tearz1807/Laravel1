@extends('layout.app')

@section('title', 'Напоминания')


@section('Content')

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

