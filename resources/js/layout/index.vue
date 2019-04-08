<template>
<div>
    <Header></Header>
    <AppMain></AppMain>
    <Footer></Footer>
</div>
</template>

<script>
import Header from './header.vue'
import Footer from './footer.vue'
import AppMain from './appmain.vue'

export default {
    name: 'Layout',
    components: {
        Header,
        Footer,
        AppMain
    }
}
</script>

<style lang="scss" scoped>

</style>
