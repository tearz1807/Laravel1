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
            <div class="second-page">
                <div class="head">
                    <h2><strong>Get to Know Us</strong></h2>
                    <h1><strong>About PureClean</strong></h1>
                </div>
                <div class="container">
                    <div class="missison">
                        <h2><strong>Our Mission</strong></h2>
                        <p>
                        At <strong>PureClean</strong>, we believe that a clean space promotes health and wellness. Our expert <br> 
                        team provides top-notch services for both homes and businesses with an unwavering <br> 
                        commitment to excellence.
                        </p>
                        <div class="cards-container">
                            <div class="card expert-team">
                                <i class="bi bi-person-check-fill"></i>
                                <div class="card-body">
                                    <p><strong>Expert Team</strong></p>
                                </div>
                            </div>
                            <div class="card eco-friendly">
                                <i class="bi bi-recycle"></i>
                                <div class="card-body">
                                    <p><strong>Eco-Friendly</strong></p>
                                </div>
                            </div>
                            <div class="card reliable">
                                <i class="bi bi-clock-fill"></i>
                                <div class="card-body">
                                    <p><strong>Reliable</strong></p>
                                </div>
                            </div>
                            <div class="card customer-centered">
                                <i class="bi bi-emoji-smile-fill"></i>
                                <div class="card-body">
                                    <p><strong>Customer-Centered</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                            <img :src="aboutImg" alt="About Image"/>
                    </div>
                </div>
            </div>
        </div>
    </body>
    @vite(['resources/js/app.js'])
</html>