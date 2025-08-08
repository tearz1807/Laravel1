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
    
    <script>
        window.vueTranslations = @json(__('vue'));
        window.appLocale = "{{ app()->getLocale() }}";
    </script>
</head>
<body>
    <div class="navbar">
        @include('global-content/navbar')
    </div>

    <div id="app">
        <global-spinner ref="globalSpinner"></global-spinner>
        <modal modal-id="loginModal" set-component="LoginForm"></modal>
        <modal modal-id="registerModal" set-component="RegistrationForm"></modal>
        <modal modal-id="passwordResetModal" set-component="PasswordResetForm"></modal>
    </div>

    @yield('Content')


    <div class="down-menu">
        @include('global-content/down-menu')
      </div>

    @vite(['resources/js/app.js'])
    
</body>
</html>