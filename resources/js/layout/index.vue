<template>
<el-container :style="{height: '100vh'}">
    <el-header :style="{backgroundColor: '#ffffff', 'box-shadow': '0 2px 4px rgba(0, 0, 0, .12), 0 0 6px rgba(0, 0, 0, .04)'}">
        <Header />
    </el-header>
    <el-container>
        <el-aside>
            <side-bar />
        </el-aside>
        <el-container>
            <el-main>
                <AppMain></AppMain>
            </el-main>
        </el-container>
    </el-container>
</el-container>
</template>

<script>
import Header from "./Header.vue";
import AppMain from "./AppMain.vue";
import SideBar from "./SideBar.vue";

export default {
    name: "Layout",
    components: {
        SideBar,
        Header,
        AppMain
    }
};
</script>

<style lang="scss" >
</style>
