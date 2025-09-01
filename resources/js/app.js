import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.withCredentials = true;

import './bootstrap';
import { createApp, defineAsyncComponent } from 'vue';
import store from './store';
import '/resources/scss/app.scss';

const app = createApp({
  mounted() {
    this.$store.dispatch('loadTranslate');
    this.$store.dispatch('checkAuth');
  }
});

app.use(store);

app.config.globalProperties.$lang = function() {
  return this.$store.state.translations;
};

app.config.globalProperties.$axios = function(config = {}) {
  const defaultConfig = {
    method: 'get',
    url: '/',
    data: {},
    t: null,
    fildOk: 'item',
    fildEr: 'error',
    beforOk: (val) => val,
    beforEr: (val) => val
  };

  const finalConfig = { ...defaultConfig, ...config };
  
  return {
    execute(overrides = {}) {
      const config = { ...finalConfig, ...overrides };
      
      if (config.t && config.t.isLoading !== undefined) {
        config.t.isLoading = true;
      }

      axios({
        method: config.method, 
        url: config.url, 
        data: config.data
      })
      .then(response => {
        config.t[config.fildOk] = config.beforOk(response.data);
        config.t[config.fildEr] = null;
      })
      .catch(error => {
        config.t[config.fildEr] = config.beforEr(error.response?.data || error);
      })
      .finally(() => {
        if (config.t && config.t.isLoading !== undefined) {
          config.t.isLoading = false;
        }
      });
    }
  };
};

window.$getModal = app.config.globalProperties.$getModal = function(id) {
  return store.state.regModal[id];
};

import Modal from './components/Modal.vue';
const LoginForm = defineAsyncComponent(() => import('./components/LoginForm.vue'));
const RegistrationForm = defineAsyncComponent(() => import('./components/RegistrationForm.vue'));
const PasswordResetForm = defineAsyncComponent(() => import('./components/PasswordResetForm.vue'));
import GlobalSpinner from './components/GlobalSpinner.vue';
import LogoutButton from './components/LogoutButton.vue';

app.component('Modal', Modal);
app.component('LoginForm', LoginForm);
app.component('RegistrationForm', RegistrationForm);
app.component('PasswordResetForm', PasswordResetForm);
app.component('GlobalSpinner', GlobalSpinner);
app.component('LogoutButton', LogoutButton);

app.mount('#app');