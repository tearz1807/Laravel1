import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.withCredentials = true;
import './bootstrap';
import { createApp, defineAsyncComponent } from 'vue';
import store from './store';
import '/resources/scss/app.scss';

const app = createApp({
  data(){
    this.$store.dispatch('loadTranslate');
    return {};
  },
  mounted() {
    console.log('App mounted');
  }
});
app.use(store);

const lang = function() {
  return this.$store.state.translations;
}
app.config.globalProperties.$lang = function() {
  return this.$store.state.translations;
};

window.$getModal = app.config.globalProperties.$getModal = function(id) {
  return store.state.regModal[id];
};

app.config.globalProperties.$setGlobalLoading = function(loading) {
  this.$refs.globalSpinner?.[loading ? 'show' : 'hide']();
};

import Modal from './components/Modal.vue';
const LoginForm = defineAsyncComponent(() => import('./components/LoginForm.vue'));
const RegistrationForm = defineAsyncComponent(() => import('./components/RegistrationForm.vue'));
const PasswordResetForm = defineAsyncComponent(() => import('./components/PasswordResetForm.vue'));
import GlobalSpinner from './components/GlobalSpinner.vue';

app.component('Modal', Modal);
app.component('LoginForm', LoginForm);
app.component('RegistrationForm', RegistrationForm);
app.component('PasswordResetForm', PasswordResetForm);
app.component('GlobalSpinner', GlobalSpinner);

app.mount('#app');