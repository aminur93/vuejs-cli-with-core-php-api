<template>
  <div>
    <div id="content">
      <h3>PlayList</h3>
      {{ channelName }} And {{ name }} <br><br>
      {{ author.name }} And {{ author.email }}
      
      <ul>
        <li v-for="play in myPlayList">
          <a :href="play.githubLink" :title="play.title">{{ play.name }}</a>
        </li>
      </ul>
      
      <h2>Teacher List</h2>
      <ul>
        <li v-for="teacher in teacherList">{{ teacher }}</li>
      </ul>
      
      <button type="button" v-on:click="deleteTeacher">Delete Teachers</button>
      
      <h3>Simple Message : {{ simpleMessage }}</h3>
      
    </div>
  </div>

</template>

<script>
    export default {
      // props: ["name","myPlayList","channelName"],
        props:{
          simpleMessage: {
            type: String
          },
          teacherList:{
            type: Array
          },
          name:{
            type: String,
            default: "Default Name",
            required: true
          },
          myPlayList:{
            type: Array,
            required: true
          },
          channelName:{
            type: String,
            required: true
          },
          author: {
            type: Object
          },
          isLearning:{
            type: Boolean
          }
        },
        data(){
          return{
            msg: "This is simple message"
          }
        },
        methods: {
          call1: function(){
            console.log(this.name);
          },
          deleteTeacher: function(){
            this.teacherList.pop();
          }
        }
    }
</script>

<style scoped>
#content{
  text-align: center;
}

#content ul{
  list-style: none;
}

#content ul li{
  font-size: 19px;
  padding: 6px;
  color: #38190e;
}

#content h3{
  text-align: center;
}
</style>
