import Vue from 'vue'
import Router from 'vue-router'
import beforeEach from './beforeEach'
import { routes as modules } from '../modules/index'


Vue.use(Router)

const routes = [{
    path: '/',
    component: () => import('../App.vue') ,
    meta: {
      menuShow: false
    },
    children: [...modules],
  }];

const router = new Router({
  routes,
  mode: 'history',
})

router.beforeEach(beforeEach);

export default router
