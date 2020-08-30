<template>
    <div v-list:orange="'wide'">
  
      <a v-bind:href="href" v-bind:title="title | makeUppercase">Click Here To Go Goggle</a>
      
      <h3>Show Blog data</h3>
      <div v-for="blog in blogs">
        <h3 v-format>Title : {{ blog.title | makeUppercase }}</h3>
        <p>Body : {{ blog.body | contentSnippet }}</p>
      </div>
    </div>
</template>

<script>
  
    import FilterMixins from '../mixins/filters'
    
    export default {
        mixins: [
          FilterMixins
        ],
        name: "test",
        data(){
          return {
            blogs: [],
            href: "https://www.google.com",
            title: "go to google"
          }
        },
        methods:{},
        created(){
          this.$http.get("https://jsonplaceholder.typicode.com/posts").then(function(data){
            //console.log(data);
            this.blogs = data.body.slice(0,5);
          });
        },
        // filters: {
        //   makeUppercase: function(value){
        //     return value.toUpperCase();
        //   },
        //   contentSnippet: function(value){
        //     return value.slice(0,70)+"....";
        //   }
        // }
    }
</script>

<style scoped>

</style>
