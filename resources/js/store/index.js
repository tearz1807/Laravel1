import {createStore} from 'vuex'

export default createStore({
    state: {
        test: 'test Any Components',
        version:'',
    },
    actions: {
        testAction(context, payload) {
            console.log('Action store test',payload)
        }
    },
    getters: {},
    mutations: {
        SET_TEST(state, payload) {
            console.log('mutation store set_test', payload);
            return state.test = payload;
        },
        SET_ASOC(state, payload){
            for (let key in payload){
                state[key]=payload[key];
            }
        }
    }
});
