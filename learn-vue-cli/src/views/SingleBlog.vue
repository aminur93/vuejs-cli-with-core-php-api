<template>
    <div>
      <h1>This is Single Blog read</h1>
      <div>
        <h3>Title : {{ blog.title}}</h3>
        <p>{{ blog.body }}</p>
      </div>
    </div>
</template>

<script>
    export default {
        name: "single-blog",
        data(){
          return{
            id: this.$route.params.id,
            blog: {}
          }
        },
        created(){
          this.$http.get("https://jsonplaceholder.typicode.com/posts/"+this.id).then(function(response){
            console.log(response);
    
            this.blog = response.body;
          });
        }
        
    }
</script>

<style scoped>

</style>
