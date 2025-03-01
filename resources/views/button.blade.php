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
            <button 
                class="scroll-to-top" 
                v-if="showScrollToTopBtn" 
                @click="scrollToTop">
                <i class="bi bi-arrow-up"></i>
            </button>
        </div>
    </body>
    @vite(['resources/js/app.js'])
</html>