export default [{
  name: '面板',
  icon: 'fa fa-tachometer-alt',
  uri: { name: 'dashboard.home' }
}, {
  name: '内容模块',
  children: [{
    name: '文章管理',
    permission: 'LIST_ARTICLE',
    icon: 'fas fa-book',
    uri: { name: 'dashboard.article' }
  }, {
    name: '评论管理',
    permission: 'LIST_COMMENT',
    icon: 'fas fa-comments',
    uri: { name: 'dashboard.comment' }
  }, {
    name: '标签管理',
    permission: 'LIST_TAG',
    icon: 'fas fa-tags',
    uri: { name: 'dashboard.tag' }
  }, {
    name: '分类管理',
    permission: 'LIST_CATEGORY',
    icon: 'fas fa-list-alt',
    uri: { name: 'dashboard.category' }
  }, {
    name: '友链管理',
    permission: 'LIST_LINK',
    icon: 'fas fa-globe',
    uri: { name: 'dashboard.link' }
  }]
}, {
  name: '基础模块',
  children: [{
    name: '用户管理',
    permission: 'LIST_USER',
    icon: 'fas fa-users',
    uri: { name: 'dashboard.user' }
  }]
}, {
  name: '系统模块',
  children: [{
    name: '访问列表',
    permission: 'LIST_VISITOR',
    icon: 'fas fa-eye',
    uri: { name: 'dashboard.visitor' }
  }, {
    name: '角色列表',
    permission: 'LIST_ROLE',
    icon: 'fas fa-exclamation-triangle',
    uri: { name: 'dashboard.role' }
  }, {
    name: '系统配置',
    permission: 'LIST_SYSTEM_INFO',
    icon: 'fas fa-cogs',
    uri: { name: 'dashboard.system' }
  }]
}]
