<template>
<el-container :style="{height: '100vh'}">
    <el-aside style="background-color: #d0e9c6;">
        <side-bar />
    </el-aside>
    <el-container>
        <el-header :style="{backgroundColor: '#00CED1'}">
            <Header />
        </el-header>
        <el-container>
            <el-main>
                <AppMain></AppMain>
            </el-main>

            <el-footer style="background-color: #00CED1;">
                <Footer></Footer>
            </el-footer>
        </el-container>
    </el-container>
</el-container>
</template>

<script>
import Header from "./Header";
import Footer from "./Footer";
import AppMain from "./AppMain";
import SideBar from "./SideBar";

export default {
    name: "Layout",
    components: {
        SideBar,
        Header,
        Footer,
        AppMain
    }
};
</script>

<style lang="scss" >
</style>
