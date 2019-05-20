<template>
<article-form :article="article"></article-form>
</template>

<script>
import ArticleForm from './Form'

export default {
  components: { ArticleForm },
  data() {
    return {
      article: {}
    }
  },
  created() {
    this.$http.get('articles/' + this.$route.params.id + '/edit?include=category')
      .then((response) => {
        this.article = response.data
      })
  },
}

</script>

<style>

</style>
