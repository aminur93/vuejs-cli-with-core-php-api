//Importing Components
import Home from './views/Home.vue'
import About from './views/About.vue'
import Service from './views/Service.vue'
import Contact from './views/Contact.vue'
import ShowBlog from './views/ShowBlog.vue'
import SingleBlog from './views/SingleBlog.vue'

//Routes for components path
export default [
  {path: "/", component: Home},
  {path: "/about", component: About},
  {path: "/blogs", component: ShowBlog},
  {path: "/blog/:id", component: SingleBlog},
  {path: "/service", component: Service},
  {path: "/contact", component: Contact}
];
