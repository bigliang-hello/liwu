import { routes as home } from './home/index'
import { routes as article } from './article/index'

export default [{
  path: '/dashboard',
  component: () => import ('../layout'),
  // beforeEnter: requireAuth,
  children: [
    ...home,
    ...article,
  ],
}]

// function requireAuth(to, from, next) {
//   if (window.User) {
//     return next()
//   } else {
//     return next('/')
//   }
// }
