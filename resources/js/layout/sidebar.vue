<template>
<el-menu :default-active="$route.path" class="el-menu-vertical-demo">
    <template v-for="(item,index) in menus">
        <el-submenu :index="index+''" v-if="item.children">
            <template slot="title"><i :class="item.icon"></i>{{item.name}}</template>
            <el-menu-item v-for="child in item.children" :index="child.name" :key="child.name" v-if="item.children">{{child.name}}</el-menu-item>
        </el-submenu>
        <el-menu-item v-if="!item.children" :index="item.name"><i :class="item.icon"></i>{{item.name}}</el-menu-item>
    </template>
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
