<template>
<el-container :style="{height: '100vh'}">
    <el-header :style="{backgroundColor: '#00CED1'}">
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
