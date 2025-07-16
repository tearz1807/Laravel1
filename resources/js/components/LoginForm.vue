<template>
  <form @submit.prevent="handleSubmit" class="login-form">
    <div class="form-floating mb-3">
      <input 
        type="email" 
        class="form-control" 
        placeholder="Email"
        v-model="email"
        required
      >
      <label>Email</label>
    </div>
    <div class="form-floating mb-3">
      <input 
        type="password" 
        class="form-control" 
        placeholder="Пароль"
        v-model="password"
        required
      >
      <label>Пароль</label>
    </div>
    <button type="submit" class="btn btn-primary w-100">Войти</button>
  </form>
</template>

<script>

export default {
  data() {
    return {
      email: '',
      password: ''
    }
  },
  methods: {
    handleSubmit() {
      console.log('Отправка данных:', {
        email: this.email,
        password: this.password
      });
    }
  }
}
</script>