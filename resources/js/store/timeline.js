import axios from 'axios'

export default {
    namespaced: true,
    state: {
        posts: []
    },

    getters: {
        posts(state) {
            return state.posts
        }
    },

    mutations: {
        PUSH_POSTS (state, data) {
            state.posts = data
        }
    },

    actions: {
        async getPosts({ commit }) {
            let res = await axios.get('/api/timeline')
            commit('PUSH_POSTS', res.data.data)
        }
    }
}