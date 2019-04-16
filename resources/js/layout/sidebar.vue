<template>
<el-menu default-active="1" class="el-menu-vertical-demo">
    <el-menu-item-group v-for="(menu,index) in menus" :key="menu.name" index="1" title>
        <el-menu-item v-for="(subMenu,subIndex) in menu.children" :key="subMenu.name" index="index-subIndex">{{subMenu.name}}</el-menu-item>
    </el-menu-item-group>
</el-menu>
</template>

<script>
import menus from "../config/menu.js";

export default {
    name: 'SideBar',
    data() {
        return {
            menus: menus
        }
    },
}
</script>

<style>
.el-menu-vertical-demo {
    height: 100%;
}
</style>
