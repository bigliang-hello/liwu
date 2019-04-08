import Vue from 'vue'
import Router from 'vue-router'
import Home from '../views/Home.vue'
import Layout from '../layout'


Vue.use(Router)

const routes = [
  {
    path: '/',
    name: 'home',
    redirect: 'dashboard',
    children: [
      {
        path: 'dashboard',
        component: () => import('../views/dashboard/index'),
        name: 'Dashboard',
        meta: { title: 'dashboard', icon: 'dashboard', noCache: true, affix: true }
      }
    ],  
    component: Layout
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  }
]

const router = new Router({
  routes
})

export default router