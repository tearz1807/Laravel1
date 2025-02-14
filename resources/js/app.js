import './bootstrap';
import 'bootstrap';

import store from './store'

import {createApp} from 'vue'

import App from './App.vue'

const app = createApp({
    mounted() {
        console.log('app mount ', app.version, this);
        store.commit('SET_TEST', 'Main app mouted');
        store.dispatch('testAction', 'exec action store test in app main');

        this.$store.commit('SET_ASOC', {
            version: app.version,
            test: 'Set asoc',
        });
    }
});

app.component('App', App);
app.use(store);
app.mount("#app");
