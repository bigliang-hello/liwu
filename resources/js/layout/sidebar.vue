<template>
<el-menu unique-opened :default-active="$route.path" router>
    <template v-for="(item, index) in $router.options.routes[0].children[0].children" v-if="item.meta.menuShow">
        <el-menu-item :index="item.path">
            {{item.meta.menuName}}
        </el-menu-item>
    </template>
</el-menu>
</template>

<script>
export default {
    name: 'SideBar',
}
</script>

<style>
.el-menu {
    border-radius: 2px;
    list-style: none;
    position: relative;
    margin: 0;
    padding-left: 0;
    background-color: #eef1f6;
    height: 100%;
}

.submenu {
    position: absolute;
    top: 0px;
    left: 60px;
    z-index: 99999;
    height: auto;
    display: none;
}
</style>
