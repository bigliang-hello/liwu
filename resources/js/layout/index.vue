<template>
<el-container>
    <Header></Header>
    <el-container>
        <SideBar></SideBar>
        <el-container>
            <AppMain></AppMain>
            <Footer></Footer>
        </el-container>
    </el-container>
</el-container>
</template>

<script>
import Header from './header'
import Footer from './footer'
import AppMain from './appmain'
import SideBar from './sidebar'

export default {
    name: 'Layout',
    components: {
        SideBar,
        Header,
        Footer,
        AppMain
    }
}
</script>

<style lang="scss" >

</style>
