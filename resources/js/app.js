import './bootstrap';

import { createApp } from 'vue';

import App from './App.vue';
import store from './store';

const app = createApp({
    mounted(){
        console.log('mounted');
    }
});


import LoginForm from './components/LoginForm.vue';
import Modal from './components/Modal.vue';

app.component('LoginForm', LoginForm);
app.component('Modal', Modal);

app.use(store);


app.mount('#app');