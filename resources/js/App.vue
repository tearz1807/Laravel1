<template>
    <nav class="navbar">
        <div class="container-fluid">
            <i class="bi bi-bank2 logo"></i>
            
            <div class="center-buttons">
            <a href="#"><strong>Главная</strong></a>
            <a href="#"><strong>Напоминания</strong></a>
            <a href="#"><strong>Карта знаний</strong></a>
            <a href="#"><strong>Как пользоваться</strong></a>
            </div>
            <div class="left-buttons">
                <a href="#" class="auth-button"><strong>Вход</strong></a>
                <a href="#" class="auth-button"><strong>Регистриция</strong></a>
            </div>
        </div>
    </nav>
    <div class="first-page">
        <div class="container">
            <div class="head">
                <h4><strong>Our Expertise</strong></h4>
                <h2><strong>Effortless House Cleaning at Your Doorstep</strong></h2>
                <p>We offer professional and customized cleaning solutions to keep your home spotless.<br> Our team ensures every corner sparkles!</p>
            </div>

            <div class="cards">
                <div class="card">
                    <i class="bi bi-stars"></i>
                    <div class="card-body">
                        <h4><strong>Deep Cleaning</strong></h4>
                        <p>Thorough cleaning for all rooms, carpets,<br> windows, and upholstery to make your <br> home shine inside and out.</p>
                    </div>
                </div>
                <div class="card">
                    <i class="bi bi-speedometer2"></i>
                    <div class="card-body">
                        <h4><strong>Quick Clean-Ups</strong></h4>
                        <p>Perfect for daily maintenance with a focus <br> on high-traffic areas, keeping everything <br> fresh and organized.</p>
                    </div>
                </div>
                <div class="card">
                    <i class="bi bi-water"></i>
                    <div class="card-body">
                        <h4><strong>Eco-Friendly Cleaning</strong></h4>
                        <p>We use environmentally safe products to <br> ensure a cleaner home and a safer planet.</p>
                    </div>
                </div>
                <div class="card">
                    <i class="bi bi-house-door-fill"></i>
                    <div class="card-body">
                        <h4><strong>Move-In & Out Cleaning</strong></h4>
                        <p>Preparing your home for its next chapter <br> or tidying up after a move, we handle it all <br> with care.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                <div class="image-container">
                </div>
            </div>
            <img :src="aboutImg" alt="About Image"/>
        </div>
    </div>

</template>

<script>
import aboutImg from "/resources/js/src/about-img.png"; 

export default {
  data() {
    return {
      aboutImg,
    };
  },
};

</script>

