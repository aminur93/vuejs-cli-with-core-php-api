<template>
  <div>
    <header>
      <h2>{{ headerMsg }}</h2>
      <p>{{ headerUrl}}</p>
    </header>
  </div>
</template>

<script>
    export default {
      data(){
          return{
            headerMsg: "Welcome to Online Web Tutor Youtube Channel",
            headerUrl: "https://youtube.com"
          }
      }
      
    }
</script>

<style scoped>
header{
  background: #3f51b5f2;
  color: white;
  padding: 3px;
  text-align: center;
}
</style>
