<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>
        <div id="app">
            <div class="navbar">
                @include('navbar') 
            </div>

            <div class="first-page">
                @include('first-page')
            </div>

            <div class="second-page">
                @include('second-page')
            </div>

            <div class="button">
                @include('button')
            </div>
        </div>

        @vite(['resources/js/app.js'])
    </body>
</html>
