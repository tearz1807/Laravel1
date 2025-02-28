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
                <a href="#" class="auth-button" data-bs-toggle="modal" data-bs-target="#loginModal"><strong>Вход</strong></a>
                <a href="#" class="auth-button" data-bs-toggle="modal" data-bs-target="#registerModal"><strong>Регистрация</strong></a>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loginModalLabel">Вход</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="handleLogin">
                    <div class="mb-3">
                        <label for="login-email" class="form-label">Электронная почта</label>
                        <input type="email" class="form-control" id="login-email" v-model="loginEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="login-password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="login-password" v-model="loginPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="registerModalLabel">Регистрация</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="handleRegister">
                    <div class="mb-3">
                        <label for="register-email" class="form-label">Электронная почта</label>
                        <input type="email" class="form-control" id="register-email" v-model="registerEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="register-password" v-model="registerPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>


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
            </div>
            <div class="image-container">
                    <img :src="aboutImg" alt="About Image"/>
            </div>
        </div>
    </div>

</template>

<script>

import aboutImg from "/resources/js/src/about-img.png"; 

export default {
    data() {
        return {
            aboutImg,
            loginEmail: '',
            loginPassword: '',
            registerEmail: '',
            registerPassword: ''
        };
    },

    methods: {
        handleLogin() {
            console.log('Вход с электронной почтой:', this.loginEmail);
        },
        handleRegister() {
            console.log('Регистрация с электронной почтой:', this.registerEmail);
        },
    },
}

</script>
