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
        </div>
    </body>
    @vite(['resources/js/app.js'])
</html>