<template>
  <form class="registration-form" @submit.prevent="handleSubmit" ref="regForm">
    <div class="form-floating mb-3">
      <input 
        type="text" 
        class="form-control" 
        :placeholder="translations.name"
        v-model="data.name"
        required
      >
      <label>{{ translations.name }}</label>
    </div>
    
    <div class="form-floating mb-3">
      <input 
        type="email" 
        class="form-control" 
        :placeholder="translations.email"
        v-model="data.email"
        required
      >
      <label>{{ translations.email }}</label>
    </div>

    <div class="form-floating mb-3">
      <input 
        type="password" 
        class="form-control" 
        :placeholder="translations.password"
        v-model="data.password"
        required
      >
      <label>{{ translations.password }}</label>
    </div>

      <div v-if="error" class="alert alert-danger mt-3">
        {{ error }}
      </div>


    <div class="form-floating mb-3">
      <input 
        type="password" 
        class="form-control" 
        :placeholder="translations.password_confirmation"
        v-model="data.password_confirmation"
        required
      >
      <label>{{ translations.password_confirmation }}</label>
    </div>

    <div class="text-center mt-3">
      <a href="#" @click.prevent="switchToLogin" class="text-decoration-none">
        {{ translations.login_link }}
      </a>
    </div>

    <teleport :to="`#${modalId}_footer`" v-if="modalId">
      <button 
        type="button"
        class="btn btn-primary w-100"
        :disabled="isLoading"
        @click="$refs.regForm.requestSubmit()"
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
      data: {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
      },
      error: null,
      isLoading: false,
      translations: this.$lang().RegistrationForm
    }
  },
  methods: {
    async handleSubmit() {
      this.error = null;
      this.isLoading = true;
      try {
        const { data } = await axios.post('/register', {
          name: this.name,
          email: this.email,
          password: this.password,
          password_confirmation: this.passwordConfirmation
        });
        if (data.success) {
          this.$emit('close-modal');
          window.location.reload();
        }
      } catch (error) {
        this.error = error.response?.data?.message || 'Registration failed';
      } finally {
        this.isLoading = false;
      }
    },
    switchToLogin() {
      this.$emit('switch-form', 'login');
    },
  },
  mounted() {
    this.$emit('loaded', this);
    if (this.$parent) {
      this.$parent.title = this.translations.title || 'Register';
    }
  }
}
</script>