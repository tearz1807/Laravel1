import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.withCredentials = true;

import './bootstrap';
import { createApp, defineAsyncComponent } from 'vue';
import store from './store';
import '/resources/scss/app.scss';
import AdminSettingsList from './components/admin/AdminSettingsList.vue';
import AdminSettingsEdit from './components/admin/AdminSettingsEdit.vue';
import AdminSettingsCreate from './components/admin/AdminSettingsCreate.vue';

const app = createApp({
  mounted() {
    this.$store.dispatch('loadTranslate');
    this.$store.dispatch('checkAuth');
      
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('from_admin')) {
      window.history.replaceState({}, '', '/');
      setTimeout(() => {
        this.$store.dispatch('checkAuth');
      }, 500);
    }
  }
});

app.use(store);

app.component('admin-settings-list', AdminSettingsList);
app.component('admin-settings-edit', AdminSettingsEdit);
app.component('admin-settings-create', AdminSettingsCreate);

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

if (document.getElementById('app')) {
  app.mount('#app');
} else if (document.getElementById('vue-admin')) {
  const adminApp = createApp({});
  adminApp.use(store);
  
  adminApp.component('admin-settings-list', AdminSettingsList);
  adminApp.component('admin-settings-edit', AdminSettingsEdit);
  adminApp.component('admin-settings-create', AdminSettingsCreate);
  
  const componentName = window.Laravel?.component || 'admin-settings-list';
  
  adminApp.component('AdminWrapper', {
    template: `<${componentName} />`
  });
  
  adminApp.mount('#vue-admin');
}