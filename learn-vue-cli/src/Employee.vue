<template>
    <div>
      <h3>{{ employeeStatment }}</h3>
      <ul>
        <li v-for="employee in employee_list">{{ employee }}</li>
      </ul>
    </div>
</template>

<script>
    export default {
        name: "employee",
        data(){
          
          return{
            employeeStatment: "This is Our Company Employee Message",
            employee_list: ["Employee1","Employee2","Employee3","Employee4","Employee5"]
          }
        }
    }
</script>

<style scoped>
h3{
  color: blue;
  font-size: 25px;
}
</style>
