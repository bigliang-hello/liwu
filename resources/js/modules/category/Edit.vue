<template>
    <category-form :category="category"></category-form>
</template>

<script>
import CategoryForm from './Form'

export default {
  components: { CategoryForm },
  data() {
    return {
      category: {}
    }
  },
  created() {
    this.$http.get('categories/' + this.$route.params.id + '/edit')
      .then((response) => {
        this.category = response.data
      })
  },
}
</script>