import { routes as home } from './home/index'


export default [{
  path: '/dashboard',
  component: () => import ('../layout'),
  // beforeEnter: requireAuth,
  children: [
    ...home,
  ],
}]

function requireAuth(to, from, next) {
  if (window.User) {
    return next()
  } else {
    return next('/')
  }
}
