import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/components/home.vue'
import Menu from '@/components/menu.vue'
import Basket from '@/components/basket.vue'
import Question from '@/components/question.vue'
import Coffee from '@/components/coffee.vue'
import Center from '@/components/center.vue'

Vue.use(VueRouter)

const routes = [
  {path: '/',name: 'Home',component: Home},
  {path: '/menu',name: 'Menu',component: Menu},
  {path: '/basket',name: 'Basket',component: Basket},
  {path: '/question',name: 'Question',component: Question},
  {path: '/coffee',name: 'Coffee',component: Coffee},
  {path: '/center',name: 'Center',component: Center},
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
