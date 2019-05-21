<template>
<router-view />
</template>
<script>

export default {
    watch: {
        $route(to, from) {
            // 如果没有存 获取一下
            let paths = to.path.split('/')
            if (paths.length > 3) {
                paths.splice(3, paths.length - 3)
            }
            this.$store.commit('SET_ACTIVEINDEX', paths.length == 1 ? paths[0] : paths.join('/'))

        }
    },
}

</script>

<style lang="scss">
body {
    margin: 0;
    padding: 0;
    /*background: url(assets/bg1.jpg) center !important;
		background-size: cover;*/
    // background: #1F2D3D;
    font-family: Helvetica Neue, Helvetica, PingFang SC, Hiragino Sans GB, Microsoft YaHei, SimSun, sans-serif;
    font-size: 14px;
    -webkit-font-smoothing: antialiased;
}

#app {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100%;
}

.el-submenu [class^=fa] {
    vertical-align: baseline;
    margin-right: 10px;
}

.el-menu-item [class^=fa] {
    vertical-align: baseline;
    margin-right: 10px;
}

.toolbar {
    background: #f2f2f2;
    padding: 10px;
    //border:1px solid #dfe6ec;
    margin: 10px 0;
    .el-form-item {
        margin-bottom: 10px;
        margin-top: 10px;
    }
}

.fade-enter-active,
.fade-leave-active {
    transition: all 0.2s ease;
}

.fade-enter,
.fade-leave-active {
    opacity: 0;
}
</style>
