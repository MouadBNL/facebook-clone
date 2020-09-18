import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)
import timeline from './timeline'


export default new Vuex.Store({
    modules: { timeline }
})