import './bootstrap';
import 'bootstrap';

import store from './store';
import { createApp } from 'vue';
import App from './App.vue';

const app = createApp(App);

app.use(store); 

//app.mount("#app");

app.config.globalProperties.$mounted = function() { 
    console.log('app mount ', app.version, this);
    store.commit('SET_TEST', 'Main app mounted');
    store.dispatch('testAction', 'exec action store test in app main');

    this.$store.commit('SET_ASOC', {
        version: app.version,
        test: 'Set asoc',
    });
};

app.mixin({
    mounted() {
        this.$mounted();
    }
});
