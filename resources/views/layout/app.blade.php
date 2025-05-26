<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PureClean — @yield('title', 'Главная')</title>
    @vite(['resources/scss/app.scss'])
    @php
        $locale = request()->cookie('locale', 'en');
        app()->setLocale($locale);
    @endphp
    
</head>
<body>
    <div class="navbar">
        @include('global-content/navbar')
    </div>


    @yield('Content')


    <div class="down-menu">
        @include('global-content/down-menu')
      </div>

    @vite(['resources/js/app.js'])
    
</body>
</html>