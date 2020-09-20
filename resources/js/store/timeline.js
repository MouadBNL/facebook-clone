import axios from 'axios'

export default {
    namespaced: true,
    state: {
        posts: [],
        lastPage: 1
    },

    getters: {
        posts(state) {
            return state.posts
                    
        },
        lastPage(state){
            return state.lastPage
        }
    },

    mutations: {
        CREATE_POST (state, post){
            state.posts.unshift(post)
        },
        PUSH_POSTS (state, data) {
            state.posts.push(...data)
        },
        PUSH_LAST_PAGE (state, page) {
            state.lastPage = page
        }
    },

    actions: {
        async getPosts({ commit }, page) {
            let res = await axios.get('/api/timeline?page=' + page)
            commit('PUSH_POSTS', res.data.data)

            commit('PUSH_LAST_PAGE', res.data.meta.last_page)
        }
    }
}