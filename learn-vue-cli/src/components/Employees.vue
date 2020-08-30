<template>
    <div>
      <h3>Employee : {{ message }}</h3>
    </div>
</template>

<script>
  
    import { EventBus } from '../main';
  
    export default {
        name: "employees",
        data(){
          return {
            message: "Default Message"
          }
        },
        methods:{
        
        },
        mounted() {
          EventBus.$on("emittedData", data=>{
            this.message = data;
          });
        }
    }
</script>

<style scoped>

</style>
