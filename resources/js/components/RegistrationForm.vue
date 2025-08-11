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

    <div class="text-center mt-3">
      <a href="#" @click.prevent="switchToLogin" class="text-decoration-none">
        {{ translations.login_link }}
      </a>
    </div>

    <teleport :to="`#${modalId}_footer`" v-if="modalId">
      <button type="button" class="btn btn-primary w-100" @click="handleSubmit">
        {{ translations.submit }}
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
      translations: this.$lang().RegistrationForm
    }
  },
  methods: {
    switchToLogin() {
      this.$emit('switch-form', 'login');
    },
  },
  mounted() {
    this.$emit('loaded', this);
    this.$parent.title = this.translations.title;
  }
}
</script>