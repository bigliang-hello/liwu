import { routes as home } from './home/index'
import { routes as article } from './article/index'
import { routes as category } from './category/index'

export default [{
  path: '/dashboard',
  component: () => import ('../layout'),
  meta: {
    menuShow: false
  },
  beforeEnter: requireAuth,
  children: [
    ...home,
    ...article,
    ...category,
  ],
}]

function requireAuth(to, from, next) {
  if (window.User) {
    return next()
  } else {
    return next('/')
  }
}
