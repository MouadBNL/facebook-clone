import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)
import timeline from './timeline'
import auth from './auth'
import likes from './likes'


export default new Vuex.Store({
    modules: { timeline, auth, likes }
})