<template>
    <div id="app">
            <div class="heading">
            <h1>Добро пожаловать!</h1>
        </div>
    <div class="container">
        <div class="reg-menu">
            <div class="menu-top">
                <a href="#" @click.prevent="showRegister">Регистрация</a>
                <a href="#" @click.prevent="showLogin">Вход</a>
            </div>
            <div v-if="isRegisterVisible" class="sign-up">
                <form @submit.prevent="handleRegister">
                    <p><input v-model="email" placeholder="Введите почту" required /></p>
                    <p><input v-model="registerLogin" placeholder="Введите логин" required /></p>
                    <p><input type="password" v-model="registerPassword" placeholder="Введите пароль" required /></p>
                    <p><input type="password" v-model="confirmPassword" placeholder="Повторите пароль" required /></p>
                    <p><input type="submit" value="Зарегистрироваться" /></p>
                </form>
            </div>
            <div v-if="isLoginVisible" class="sing-in">
                <form @submit.prevent="handleLogin">
                    <p><input v-model="login" placeholder="Введите логин" required /></p>
                    <p><input type="password" v-model="password" placeholder="Введите пароль" required /></p>
                    <p><input type="submit" value="Войти" /></p>
                </form>
            </div>
        </div>
    </div>
    </div>
</template>
  
  <script>
  export default {
    data() {
      return {
        isLoginVisible: true,
        isRegisterVisible: false,
        login: '',
        password: '',
        email: '',
        registerLogin: '',
        registerPassword: '',
        confirmPassword: ''
      };
    },
    methods: {
      showLogin() {
        this.isLoginVisible = true;
        this.isRegisterVisible = false;
      },
      showRegister() {
        this.isLoginVisible = false;
        this.isRegisterVisible = true;
      },
      handleLogin() {
        console.log('Login:', this.login, this.password);
      },
      handleRegister() {
        console.log('Register:', this.email, this.registerLogin, this.registerPassword, this.confirmPassword);
      }
    }
  };
  </script>