export default [{
  path: '/dashboard/articles',
  component: () => import('../../App.vue'),
  meta: {
    menuShow: true,
    menuName: '文章管理',
  },
  children: [{
    path: '/',
    name: 'dashboard.article',
    component: () => import('./Article'),
  }, {
    path: 'create',
    name: 'dashboard.article.create',
    component: () => import('./Create'),
  }, {
    path: ':id/edit',
    name: 'dashboard.article.edit',
    component: () => import('./Edit'),
  }]
}]
