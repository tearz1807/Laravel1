import { createStore } from 'vuex'
import axios from 'axios';

export default createStore({
  state: {
    test: 'test Any Components',
    version: '',
    login_form: {
      email: '',
      password: '',
    },
    translations: {},
    regModal: {},
    user: null,
  },
  mutations: {
    SET_TRANSLATIONS(state, translations) {
      state.translations = translations;
    },
    registerModal(state, { id, instance }) {
      state.regModal[id] = instance;
    },
    SET_USER(state, user) {
      state.user = user;
    },
    SET_SETTINGS(state, settings) {
      state.settings = settings;
    }
  },
  actions: {
    loadTranslate({ commit }) {
      return axios.get('/translate')
        .then(response => {
          commit('SET_TRANSLATIONS', response.data.info || response.data);
        })
        .catch(console.error);
    },
    checkAuth({ commit }) {
      return axios.get('/api/user')
        .then(response => {
          const userData = response.data.data || response.data;
          commit('SET_USER', userData);
          return userData;
        })
        .catch(error => {
          commit('SET_USER', null);
          throw error;
        });
    }
  },
  getters: {
    t(state) {
      return function(key) {
        return key.split('.').reduce(function(obj, k) {
          return obj ? obj[k] : undefined
        }, state.translations) || key
      }
    },
    getModal: (state) => (id) => state.regModal[id] || null,
    isAuthenticated: (state) => !!state.user,
  }
})