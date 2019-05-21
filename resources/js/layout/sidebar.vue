<template>
<el-menu unique-opened :default-active="activeIndex" router class="el-menu-vertical" >
    <template v-for="(item, index) in $router.options.routes[0].children[0].children" v-if="item.meta.menuShow">
        <el-menu-item :index="item.path" 
        :key="index" class="menu-item-defalt" 
        :class="{'menu-item-select': activeIndex == item.path}"
        style="padding-left: 20px;color: rgb(190, 190, 192);background-color: rgb(45, 48, 55);">
            {{item.meta.menuName}}
        </el-menu-item>
    </template>
</el-menu>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name: 'SideBar',
    computed: {
        ...mapGetters(['activeIndex'])
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
    background-color: #2D3037;
    height: 100%;
}

.el-menu-vertical {
    color: rgb(190, 190, 192);
}


.menu-item-defalt {
  border-left: 2px solid transparent;
  height: 46px;
  line-height: 46px;
}

.menu-item-select {
  border-left: 2px solid #3e84e9;
  background-color: #454e57 !important;
}
</style>
