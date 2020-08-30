<template>
    <div>
      <h3>Student List Form</h3>
      <form action="">
        <p>
          <label for="">Name : </label>
          <input type="text" name="txtStudentName">
        </p>
  
        <p>
          <label for="">CLass : </label>
          <input type="text" name="txtStudentClass">
        </p>
  
        <p>
          <label for="">Mobile No : </label>
          <input type="text" name="txtStudentMobile">
        </p>
        
        <p>
          <button>Submit</button>
        </p>
      </form>
    </div>
</template>

<script>
    export default {
        name: "list-students"
    }
</script>

<style scoped>

</style>
