import Vue from 'vue'
import Router from 'vue-router'
import beforeEach from './beforeEach'
import { routes as dashboard } from '../modules/index'


Vue.use(Router)

const routes = [{
    path: '/',
    component: () => import('../App') ,
    children: [...dashboard],
  }];

const router = new Router({
  routes
})

router.beforeEach(beforeEach);

export default router
