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
  },
  mutations: {
    SET_TEST(state, payload) {
      state.test = payload
    },
    SET_TRANSLATIONS(state, translations) {
      state.translations = translations
    },
    registerModal(state, { id, instance }) {
      state.regModal[id] = instance;
    },
  },
  actions: {
    loadTranslate(context, payload) {
      return axios.get('/translate', payload)
        .then(response => {
          context.commit('SET_TRANSLATIONS', response.data.info)
        })
        .catch(error => {
          console.error('Translation load error:', error)
        })
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
    getModal: (state) => (id) => state.regModal[id] || null
  }
})