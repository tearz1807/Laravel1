<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/scss/app.scss'])
</head>
<body>
    @yield('content')

    @vite(['resources/js/app.js'])

    @yield('scripts')

    @yield('styles')
    
</body>
</html>
