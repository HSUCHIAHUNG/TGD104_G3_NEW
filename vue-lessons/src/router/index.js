import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/chart',
    name: 'chart',
    component: () => import(/* webpackChunkName: "about" */ '../views/Chart.vue')
  },
  {
    path: '/member',
    name: 'member',
    component: () => import(/* webpackChunkName: "about" */ '../views/MemberCenter.vue')
  },
  {
    path: '/Backend',
    name: 'Backend',
    component: () => import(/* webpackChunkName: "about" */ '../views/BackendCenter.vue')
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
