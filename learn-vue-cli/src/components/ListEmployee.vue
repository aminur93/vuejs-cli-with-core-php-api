<template>
    <div>
      <h3>Employee List From</h3>
      <form action="">
        <p>
          <label for="">Name : </label>
          <input type="text" name="txtEmployeeName">
        </p>
  
        <p>
          <label for="">Designation : </label>
          <input type="text" name="txtEmployeeClass">
        </p>
  
        <p>
          <label for="">Mobile No : </label>
          <input type="text" name="txtEmployeeMobile">
        </p>
        
        <p>
          <button>Submit</button>
        </p>
      </form>
    </div>
</template>

<script>
    export default {
        name: "list-employee"
    }
</script>

<style scoped>

</style>
