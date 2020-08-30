<template>
<div>
  <footer>
    {{ footerMsg }}
  </footer>
</div>
</template>

<script>
    export default {
        data(){
          return{
            footerMsg: "Copyright @Online Web Tutor Developer 2020"
          }
        }
    }
</script>

<style scoped>
footer{
  background: #3f51b5f2;
  padding: 7px;
  color: white;text-align: center;
}
</style>
