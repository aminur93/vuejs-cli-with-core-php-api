<template>
    <div>
      <button v-on:click="passData()">CLick here Send Data</button>
    </div>
</template>

<script>
  
  import {EventBus} from "../main";

  export default {
        name: "student",
        data(){
          return{
          
          }
        },
        methods: {
          passData: function(){
            console.log("This is simple message passed");
            EventBus.$emit("emittedData","This is simple message passed");
          }
        }
    }
</script>

<style scoped>

</style>
