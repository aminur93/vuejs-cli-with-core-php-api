import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import Routes from './routes'
import VueResource from 'vue-resource'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios);

Vue.prototype.$axios = axios;

//Vue.use(VueResource);
Vue.use(VueRouter);

const router = new VueRouter({
  routes: Routes,
  mode: "history"
});

//event fire child to parent component
export const EventBus = new Vue();

Vue.directive('list',{
  bind(el,binding,vnode){
    if(binding.value == "wide")
    {
      el.style.maxWidth = "1200px";
    }

    if(binding.value == "narrow")
    {
      el.style.maxWidth = "600px";
    }

    if(binding.arg == "cyan")
    {
      el.style.backgroundColor = "cyan";
    }

    if(binding.arg == "orange")
    {
      el.style.backgroundColor = "orange";
    }
  }
});

Vue.directive('format',{
  bind(el,binding,vnode){
    el.style.color = "blue";
    el.style.fontSize = "30px";
  }
});

/*Vue.filter("makeUppercase", function(value){
  return value.toUpperCase();
});

Vue.filter("contentSnippet",function(value){
  return value.slice(0,80)+"...";
});*/

// Vue.mixin({
//   filters: {
//     makeUppercase: function(value){
//       return value.toUpperCase();
//     },
//     contentSnippet: function(value){
//       return value.slice(0,70)+"....";
//     }
//   }
// });



new Vue({
  el: '#app',
  render: h => h(App),
  router: router
});
