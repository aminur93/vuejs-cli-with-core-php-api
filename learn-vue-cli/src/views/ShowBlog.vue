<template>
    <div>
      <h1>All Blog</h1>
      <div v-for="blog in blogs">
        <router-link v-bind:to="'/blog/'+blog.id"><h3>Title : {{ blog.title }}</h3></router-link>
        <p>{{ blog.body }}</p>
      </div>
    </div>
</template>

<script>
    export default {
        name: "show-blog",
        data(){
          return{
            blogs: []
          }
        },
        created(){
          this.$http.get("https://jsonplaceholder.typicode.com/posts").then(function(response){
            //console.log(response);
            
            this.blogs = response.body.slice(0,10);
          });
        }
    }
</script>

<style scoped>

</style>
