<template>
  <form class="password-reset-form">
    <div class="mb-3">
      <p>{{ translations.instruction }}</p>
    </div>
    
    <div class="form-floating mb-3">
      <input 
        type="email" 
        class="form-control" 
        :placeholder="translations.email_placeholder"
        v-model="data.email"
        required
      >
      <label>{{ translations.email_placeholder }}</label>
    </div>

    <div class="text-center mt-3">
      <a href="#" @click.prevent="switchToLogin" class="text-decoration-none">
        {{ translations.back_to_login }}
      </a>
    </div>

    <teleport :to="`#${modalId}_footer`" v-if="modalId">
      <button type="button" class="btn btn-primary w-100" @click="handleSubmit">
        {{ translations.reset_password }}
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
        email: '',
      },
      translations: this.$lang().PasswordResetForm
    }
  },
  methods: {
    switchToLogin() {
      this.$store.getters.getModal('passwordResetModal')?.switchTo('login');
    },
    handleSubmit() {
      this.$axios({
        method: 'post',
        url: '/forgot-password',
        data: { email: this.data.email }
      })
      .then(data => {
        alert('Инструкции отправлены на email!');
        this.switchToLogin();
      })
      .catch(error => {
        alert('Ошибка: ' + error.message);
      });
    },
    resolve(){
      this.$root.$setGlobalLoading(false);
    },
  }
}
</script>