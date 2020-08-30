<template>
    <div>
      <h1>This is Home Page</h1>
    </div>
</template>

<script>
    export default {
        name: "home",
        data(){
          return{
          
          }
        },
        mounted(){
          
          //inserted
          // this.$axios.post("http://localhost/vuejs_cli_project/vueapis/api.php", {
          //     name: "Sumon Rashid",
          //     email: "Sumon@gmail.com",
          //     phone: "01687938424",
          //     action: "insert"
          // })
          //   .then(function(response){
          //     console.log(response);
          // }).catch(function(error){
          //     console.log(error);
          // });
          
          //updated
          // this.$axios.post("http://localhost/vuejs_cli_project/vueapis/api.php", {
          //   name: "Test Rashid",
          //   email: "test@gmail.com",
          //   phone: "01772119941",
          //   action: "update",
          //   student_id: 3
          // })
          //   .then(function(response){
          //     console.log(response);
          //   }).catch(function(error){
          //   console.log(error);
          // });
          
          //Delete
          // this.$axios.get("http://localhost/vuejs_cli_project/vueapis/api.php?action=delete&id=3",{
          //
          // }).then(function(response){
          //   console.log(response);
          // }).catch(function(error){
          //   console.log(error);
          // });
          
          //list
          // this.$axios.get("http://localhost/vuejs_cli_project/vueapis/api.php?action=list")
          //   .then(function(response){
          //     console.log(response);
          //   })
          //   .catch(function(error){
          //     console.log(error);
          //   })
          
          //list by id
          this.$axios.get("http://localhost/vuejs_cli_project/vueapis/api.php?action=list&id=2")
            .then(function(response){
              console.log(response);
            })
            .catch(function(error){
              console.log(error);
            })
        }
    }
</script>

<style scoped>

</style>
