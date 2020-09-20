import axios from 'axios'

export default {
    namespaced: true,
    state: {
        user: {
            id: 0,
            name: 1,
            username: '',
            avatar: ''
        }
    },

    getters: {
        id(state){
            return state.user.id
        },
        name(state){
            return state.user.name
        },
        username(state){
            return state.user.username
        },
        avatar(state){
            return state.user.avatar
        },
    },

    mutations: {
        PUSH_USER (state, data) {
            state.user = data
        }
    },

    actions: {
        async getAuth({ commit }) {
            let res = await axios.get('/api/user')
            commit('PUSH_USER', res.data.data)
        }
    }
}