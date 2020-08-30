<template>
    <div>
      <h2>Teacher List</h2>
      <ul>
        <li v-for="teacher in teacherList">{{ teacher }}</li>
      </ul>
  
      <h3>Simple Message : {{ simpleMessage }}</h3>
      
      <div style="text-align: center;margin-bottom: 20px;">
        <button type="button" v-on:click="updateMsg">Update Message</button>
      </div>
      
      
    </div>
</template>

<script>
    export default {
        name: "teacher",
        props: {
          simpleMessage: {
            type: String
          },
          teacherList: {
            type: Array
          }
        },
        data(){
          return {
          }
        },
        methods: {
          updateMsg: function(){
            this.$emit('UpdatesimpleMessage', "Value Change !");
          }
        }
    }
</script>

<style scoped>
h2{
  text-align: center;
}

h3{
  text-align: center;
}
  ul{
    list-style: none;
    text-align: center;
  }
  ul li{
    font-size: 19px;
    padding: 6px;
    color: #38190e;
  }
  
  button{
    text-align: center;
  }
</style>
