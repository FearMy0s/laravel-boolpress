<template>
  <div class="post__card">
    <h3>{{title}}</h3>
    <div class="post__content">
       {{content}}
    </div>
    <!-- <a href="">Leggi post</a> -->
    <router-link :to="{ name: 'check-post', params: {slug: slug} }">Leggi post</router-link>
  </div>
</template>

<script>
export default {
    name: 'BasePost',
    props: {
        title: String,
        content: String,
        slug: String
    }
}
</script>

<style lang="scss" scoped>
    .post__card {
        background-color: #cecece;
        min-width: 20px;
        padding: 2px;
        border-radius: 2px;
    }
</style>
