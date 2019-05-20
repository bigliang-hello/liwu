export default [{
  path: '/',
  redirect: { name: 'dashboard.home' },
  meta: {
    menuShow: false,
  }
}, {
  name: 'dashboard.home',
  path: '/dashboard/home',
  component: () => import('./Home'),
  meta: {
    menuShow: true,
    menuName: '面板',
  }
}]
