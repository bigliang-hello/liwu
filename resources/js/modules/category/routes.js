export default [{
    path: '/dashboard/categories',
    component: () => import('../../App.vue'),
    meta: {
      menuShow: true,
      menuName: '分类管理',
    },
    children: [{
      path: '/',
      name: 'dashboard.category',
      component: () => import('./Category'),
    }, {
      path: 'create',
      name: 'dashboard.category.create',
      component: () => import('./Create'),
    }, {
      path: ':id/edit',
      name: 'dashboard.category.edit',
      component: () => import('./Edit'),
    }]
  }]