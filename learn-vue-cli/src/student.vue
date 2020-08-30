<template>
  <div>
    <h3>{{ information }}</h3>
    <ul>
      <li v-for="student in students">{{ student }}</li>
    </ul>
  </div>
</template>

<script>
    export default {
        name: "student",
        data(){
          return{
            information: "Welcome Online Web Tutor",
            students: ["Rahul","Rakesh","Amit","Sonam","Sumit"]
          }
        }
    }
</script>

<style scoped>
h3{
  color: yellow;
  font-size: 30px;
}
</style>
