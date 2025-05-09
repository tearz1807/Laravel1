<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PureClean — @yield('title', 'Главная')</title>
    @vite(['resources/scss/app.scss'])
</head>
<body>
    
    @yield('navbar')       
    @yield('Home-content')
    @yield('Reminder')
    @yield('Knowledge')
    @yield('Usage')
    @yield('down-menu')

    @vite(['resources/js/app.js'])
    
</body>
</html>