import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Login from '../components/login/Login'
import Logout from '../components/login/Logout'
import SignUp from '../components/login/SignUp'
import Forum from '../components/forum/Forum'
const routes = [
    { path: '/login', component: Login },
    { path: '/logout', component: Logout},
    { path: '/signup', component: SignUp },
    { path: '/forum', component: Forum, name: 'forum' }
  ]

  
  const router = new VueRouter({
    routes,  // short for `routes: routes`,
    hasbang : false, //menghilangkan tanda hastag pada url
    mode: 'history'
  })

  export default router