<template>
  <div>
    <!--<owt-headers></owt-headers>-->
    <!---->
    <!--<owt-contents v-bind:simple-message="somemessage" v-bind:teacherList="teachers" channel-name="Online Web Tutor" name="Aminur Rashid" v-bind:is-learning="false" v-bind:author="{name: 'Aminur rashid', email: 'abc@gmail.com'}" v-bind:myPlayList="playlist"></owt-contents>-->
    <!---->
    <!--<owt-teacher v-bind:simple-message.sync="somemessage" v-on:UpdatesimpleMessage="UpdateMessage($event)" v-bind:teacherList="teachers"></owt-teacher>-->
    <!---->
    <!--<staff v-bind:message="msg" v-on:UpdateParentVariable="updateValueFn($event)"></staff>-->
    <!---->
    <!--<student></student>-->
    <!---->
    <!--<employees></employees>-->
    <!---->
    <!--<math></math>-->
    <!---->
    <!--<english></english>-->
    <!---->
    <!--{{ simpleTxt }}-->
    <!--<button @click="UpdateMessages()">Click Here To Update</button>-->
    <!---->
    <!--<bangla>-->
      <!---->
      <!--{{ passingMessage }}-->
      <!---->
      <!--<div slot="form-header">-->
        <!--<h3>Bangla Class Schedule From</h3>-->
      <!--</div>-->
      <!---->
      <!--<div slot="form-elements">-->
        <!--<p><input type="text" placeholder="Enter Name"></p>-->
        <!--<p><input type="email" placeholder="Enter Email"></p>-->
      <!--</div>-->
  <!---->
      <!--<div slot="form-button">-->
        <!--<button v-on:click="submitDetails()">Submit</button>-->
      <!--</div>-->
      <!---->
      <!--<div slot="form-footer">-->
        <!--<p>This is form footer</p>-->
      <!--</div>-->
    <!--</bangla>-->
  <!---->
    <!--<keep-alive>-->
      <!--<components v-bind:is="component"></components>-->
    <!--</keep-alive>-->
  <!---->
    <!---->
    <!---->
    <!--<button v-on:click="component = 'student-list'">Student Form</button>-->
    <!--<button v-on:click="component = 'employee-list'">Employee Form</button>-->
    <!---->
    <!--<h3>Employee Details Input</h3>-->
    <!--<form action="" name="employee_form" method="get">-->
      <!--<p>-->
        <!--<label for=""> Name : </label>-->
        <!--<input type="text" v-model.lazy="employee.name" placeholder="Enter Name">-->
      <!--</p>-->
  <!---->
      <!--<p>-->
        <!--<label for=""> Email : </label>-->
        <!--<input type="email" v-model.lazy="employee.email" placeholder="Enter Email">-->
      <!--</p>-->
  <!---->
      <!--<p>-->
        <!--<label for=""> Designation : </label>-->
        <!--<input type="text" v-model.lazy="employee.designation" placeholder="Enter Designation">-->
      <!--</p>-->
      <!---->
      <!--<p>-->
        <!--<label for=""><input type="checkbox" v-model="employee.post" value="Developer"> Developer</label>-->
        <!--<label for=""><input type="checkbox" v-model="employee.post" value="Designer"> Designer</label>-->
        <!--<label for=""><input type="checkbox" v-model="employee.post" value="Tester"> Tester</label>-->
        <!--<label for=""><input type="checkbox" v-model="employee.post" value="CEO"> CEO</label>-->
        <!--<label for=""><input type="checkbox" v-model="employee.post" value="CTO"> CTO</label>-->
      <!--</p>-->
      <!---->
      <!--<p>-->
        <!--<label for="">Select gender</label>-->
        <!--<label for=""><input type="radio" v-model="employee.gender" value="Male"> Male</label>-->
        <!--<label for=""><input type="radio" v-model="employee.gender" value="Female"> FeMale</label>-->
        <!--<label for=""><input type="radio" v-model="employee.gender" value="Other"> Other</label>-->
      <!--</p>-->
  <!---->
      <!--<p>-->
        <!--<label for="">Select Levels</label>-->
        <!--<select name="" id="" v-model="employee.level">-->
          <!--<option value="">Choice Level</option>-->
          <!--<option v-for="(level,index) in levels">{{ level }}</option>-->
        <!--</select>-->
      <!--</p>-->
    <!--</form>-->
    <!---->
    <!--<div id="details-preview">-->
      <!--<h3>Employee Details Preview</h3>-->
      <!--<p>Name : {{ employee.name }}</p>-->
      <!--<p>Email : {{ employee.email }}</p>-->
      <!--<p>Designation : {{ employee.designation }}</p>-->
      <!--<p>-->
        <!--Employee Post :-->
        <!--<ul>-->
            <!--<li v-for="p in employee.post">{{ p }}</li>-->
        <!--</ul>-->
      <!--</p>-->
      <!---->
      <!--<p>-->
        <!--Gender : {{ employee.gender }}-->
      <!--</p>-->
      <!---->
      <!--<p>-->
        <!--Level : {{ employee.level }}-->
      <!--</p>-->
    <!--</div>-->
    <!---->
    <!---->
    <!--<h3>Blod Details</h3>-->
    <!--<form action="" name="blog_form" method="post">-->
      <!--<p>-->
        <!--<label for="">Title : </label>-->
        <!--<input type="text" v-model.lazy="blog.title" placeholder="Enter Title">-->
      <!--</p>-->

      <!--<p>-->
        <!--<label for="">Title : </label>-->
        <!--<input type="text" v-model.lazy="blog.description" placeholder="Enter Description">-->
      <!--</p>-->

      <!--<p>-->
        <!--<button v-on:click.prevent="postBlog">Submit</button>-->
      <!--</p>-->
      <!---->
    <!--</form>-->

    <!--<div id="details-preview">-->
      <!--<h3>Blog Details Preview</h3>-->
      <!--<p>Title : {{ blog.title }}</p>-->
      <!--<p>Description : {{ blog.description }}</p>-->
    <!--</div>-->
  <!---->
  <!---->
    <!--<test></test>-->
    <!---->
    <!--<owt-footers></owt-footers>-->
    
    <p>
      <router-link to = "/">Home</router-link>
      <router-link to = "/about">About</router-link>
      <router-link to = "/blogs">Show Blog</router-link>
      <router-link to = "/service">Services</router-link>
      <router-link to = "/contact">Contact</router-link>
    </p>
    
    <router-view></router-view>
  </div>
</template>

<script>
// import Headers from './components/Header.vue'
// import Footers from './components/Footer.vue'
// import Contents from './components/Content.vue'
// import Teacher from './components/Teacher.vue'
// import Staff from './components/staff.vue'
// import Student from './components/Student.vue'
// import Employees from './components/Employees.vue'
// import Test from './components/test.vue'
// import Maths from './components/Maths.vue'
// import English from './components/English.vue'
// import Bangla from './components/Bangla.vue'
// import Liste from './components/ListEmployee.vue'
// import Lists from './components/ListStudents.vue'

export default {
  components:{
    // "owt-headers" : Headers,
    // "owt-footers" : Footers,
    // "owt-contents" : Contents,
    // "owt-teacher" : Teacher,
    // "staff" : Staff,
    // "student" : Student,
    // "employees" : Employees,
    // "test" : Test,
    // "math" : Maths,
    // "english" : English,
    // "bangla" : Bangla,
    // "student-list" : Lists,
    // "employee-list" : Liste
  },
  data () {
    return {
      playlist: [
        {
          name : "Wordpress Plugin Development",
          githubLink: "https://www.facebook.com",
          title: "Wordpress Plugin Development"
        },
        {
          name : "Wordpress theme Development",
          githubLink: "https://www.github.com",
          title: "Wordpress Theme Development"
        },
        {
          name : "Vue js2 Development",
          githubLink: "https://www.vuejs.com",
          title: "Vue js2 Development"
        },
        {
          name : "Plugin BoilerPlate",
          githubLink: "https://www.youtube.com",
          title: "Plugin BoilerPlate"
        },
      ],
      teachers: [
        "Jhon",
        "Khan",
        "khabir",
        "Romel",
        "Robert"
      ],
      
      somemessage: "Simple message",
      msg: "Passing data from parent component from child component",
      simpleTxt: "This is Simple Text",
      passingMessage: "Passing data from parent to child",
      component: "student-list",
      employee: {
        name: "",
        email: "",
        designation: "",
        post: [],
        gender: "",
        level : ""
      },
      levels: ["Senior","Junior","Team Leader","Motivator"],
      blog: {
        title: "",
        description: "",
        user: ""
      }
    }
  },
  
  // beforeCreate(){
  //   alert("before Created");
  // },
  //
  // created(){
  //   alert("Created");
  // },
  //
  // beforeMount(){
  //   alert("before Mount");
  // },
  //
  // mounted(){
  //   alert("Mounted");
  // },
  //
  // beforeUpdate(){
  //   alert("Before Update");
  // },
  //
  // updated(){
  //   alert("Updated");
  // },
  
  methods: {
    updateValueFn: function(UpdateValue){
      this.msg = UpdateValue;
    },
    UpdateMessage: function(UpdateMsg)
    {
      this.somemessage = UpdateMsg;
    },
    UpdateMessages: function(){
      this.simpleTxt = "Update in english";
    },
    postBlog: function(){
      this.$http.post("https://jsonplaceholder.typicode.com/posts",{
          title: this.blog.title,
          body: this.blog.description,
          userId: this.blog.user
      }).then(function(data){
          console.log(data);
      });
    }
  }
}
</script>

<style>

</style>
