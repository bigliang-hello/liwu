import Vue from 'vue'
import Vuex from 'vuex'
import getters from './getters'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    userInfo: null,
    sidebar: {
      activeIndex: ''
    },
  },
  mutations: {
    SET_USERINFO: (state, userInfo) => {
      state.userInfo = userInfo
    },
    SET_ACTIVEINDEX: (state, path) => {
      state.sidebar.activeIndex = path
    },
  },
  actions: {

  },
  getters
})
