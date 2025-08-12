import { createStore } from 'vuex'

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
    SET_TEST(state, payload) {
      state.test = payload
    },
    SET_TRANSLATIONS(state, translations) {
      state.translations = translations;
    },
    registerModal(state, { id, instance }) {
      state.regModal[id] = instance;
    },
    SET_USER(state, user) {
      state.user = user;
    },
  },
  actions: {
    loadTranslate({ commit }) {
      return axios.get('/translate')
        .then(response => {
          commit('SET_TRANSLATIONS', response.data.info || response.data);
        })
        .catch(console.error);
    },
    async checkAuth({ commit }) {
      try {
        const response = await axios.get('/api/user');
        commit('SET_USER', response.data);
      } catch (error) {
        commit('SET_USER', null);
      }
    },
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
    isAuthenticated: state => !!state.user,
  }
})