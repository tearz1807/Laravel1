<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/scss/app.scss'])

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div id="app">
            123<i class="bi bi-alt"></i>11

            <div>
                test: (@{{$store.state.test}})<br>
                version: (@{{$store.state.version}})<br>
            </div>
            <app></app>

            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cs.pikabu.ru/post_img/big/2013/12/12/10/1386866060_642275856.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Метка первого слайда</h5>
                            <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://cs.pikabu.ru/post_img/big/2013/12/12/10/1386866060_642275856.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Метка второго слайда</h5>
                            <p>Некоторый репрезентативный заполнитель для второго слайда.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://cs.pikabu.ru/post_img/big/2013/12/12/10/1386866060_642275856.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Метка третьего слайда</h5>
                            <p>Некоторый репрезентативный заполнитель для третьего слайда.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>

        </div>
    </body>
    @vite(['resources/js/app.js'])
</html>
