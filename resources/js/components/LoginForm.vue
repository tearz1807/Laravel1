<template>
  <form class="login-form" @submit.prevent="handleSubmit" ref="loginForm">
    <div class="form-floating mb-3">
      <input 
        type="email" 
        class="form-control" 
        :placeholder="translations.email"
        v-model="email"
        required
      >
      <label>{{ translations.email }}</label>
    </div>
    <div class="form-floating mb-3">
      <input 
        type="password" 
        class="form-control" 
        :placeholder="translations.password"
        v-model="password"
        required
      >
      <label>{{ translations.password }}</label>
    </div>

    <div v-if="error" class="alert alert-danger mt-3">
      {{ error }}
    </div>

    <div class="d-flex justify-content-between mt-3">
      <a href="#" @click.prevent="switchToReset" class="text-decoration-none">
        {{ translations.forgot_password }}
      </a>
      <a href="#" @click.prevent="switchToRegister" class="text-decoration-none">
        {{ translations.register_link }}
      </a>
    </div>

    <teleport :to="`#${modalId}_footer`" v-if="modalId">
      <button 
        type="button"
        class="btn btn-primary w-100"
        :disabled="isLoading"
        @click="$refs.loginForm.requestSubmit()"
      >
        <span v-if="!isLoading">{{ translations.submit }}</span>
        <span v-else class="d-flex align-items-center justify-content-center">
          <span class="spinner-border spinner-border-sm me-2"></span>
          {{ translations.loading || 'Loading...' }}
        </span>
      </button>
    </teleport>
  </form>
</template>

<script>
export default {
  props: {
    modalId: String
  },
  data() {
    return {
      email: '',
      password: '',
      error: null,
      isLoading: false,
      translations: this.$lang().LoginForm
    }
  },
  methods: {
    async handleSubmit() {
      this.error = null;
      this.isLoading = true;
      try {
        const { data } = await axios.post('/login', {
          email: this.email,
          password: this.password
        });
        if (data.success) {
          this.$parent?.close();
          window.location.reload();
        }
      } catch (error) {
        this.error = error.response?.data?.error || 'Ошибка авторизации';
      } finally {
        this.isLoading = false;
      }
    },
    switchToReset() {
      this.$emit('switch-form', 'passwordReset');
    },
    switchToRegister() {
      this.$emit('switch-form', 'register');
    },
  },
  mounted() {
    this.$emit('loaded', this);
    if (this.$parent) {
      this.$parent.title = this.translations.title || 'Login';
    }
  }
}
</script>