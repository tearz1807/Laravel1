<template>
  <form class="registration-form">
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

    <div v-if="error" class="alert alert-danger mt-3">
      {{ error.message || error }}
    </div>

    <div class="text-center mt-3">
      <a href="#" @click="switchToLogin" class="text-decoration-none">
        {{ translations.login_link }}
      </a>
    </div>

    <teleport :to="`#${modalId}_footer`" v-if="modalId">
      <button 
        type="button"
        class="btn btn-primary w-100"
        :disabled="isLoading"
        @click="handleSubmit"
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
      item: null,
      isLoading: false,
      translations: this.$lang().RegistrationForm || {}
    }
  },
  watch: {
    item(newVal) {
      if (newVal && newVal.user) {
        this.$store.commit('SET_USER', newVal.user);
        this.closeModal();
      }
    }



    
  },
  methods: {
    handleSubmit() {
      this.isLoading = true;
      this.error = null;
      
      this.axiosInstance.execute({
        data: this.data,
        beforEr: (error) => {
          return error.errors || error.error || error.message || 'Registration failed';
        }
      });
    },
    switchToLogin() {
      this.$store.getters.getModal('registerModal')?.switchTo('login');
    },
    closeModal() {
      this.$store.getters.getModal('registerModal')?.close();
    }
  },
  mounted() {
    this.axiosInstance = this.$axios({
      t: this,
      method: 'post',
      url: '/register',
      fildOk: 'item',
      fildEr: 'error'
    });
  }
}
</script>