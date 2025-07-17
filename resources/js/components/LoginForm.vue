<template>
  <form class="login-form">
    <slot></slot>
    <div class="form-floating mb-3">
      <input 
        type="email" 
        class="form-control" 
        placeholder="Email"
        v-model="data.email"
        required
      >
      <label>Почта</label>
    </div>
    <div class="form-floating mb-3">
      <input 
        type="password" 
        class="form-control" 
        placeholder="Пароль"
        v-model="data.password"
        required
      >
      <label>Пароль</label>
    </div>
    <teleport to="#modal-footer" v-if="isParentMount">
      <button class="btn btn-primary w-100" @click="handleSubmit(data)">Войти</button>
    </teleport>
  </form>
</template>

<script>

export default {
  data() {
    return {
      data: {
        email: '',
        password: '',
      },
      isParentMount: false,
    }
  },
  methods: {
    handleSubmit(data) {
      console.log('Отправка данных:', {
        email: this.data.email,
        password: this.data.password,
        data
      });
    }
  },
  mounted(){
    this.data = this.$store.state.login_form;
    console.log('mounted login form');
    this.$parent.onLoad(this);
  }
}
</script>