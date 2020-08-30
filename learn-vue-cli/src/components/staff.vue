<template>
  <div>
    <h3>{{ message }}</h3>
    
    <div style="text-align: center;margin-bottom: 20px;">
      <button v-on:click="UpdateMessage">Update from parent</button>
    </div>
    
  </div>
</template>

<script>
    export default {
        props: ["message"],
        name: "staff",
        methods: {
          UpdateMessage: function(){
            //this.message = "Value has been updated from Child";
            this.$emit("UpdateParentVariable","Value has been updated from Child")
          }
        }
    }
</script>

<style scoped>
h3{
  text-align: center;
}
</style>
