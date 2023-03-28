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
    component: () => import('../views/BackendCenter.vue'),
    redirect: '/Backend/SalesManagement',
    children: [
   
      {
        path: 'SalesManagement',
        neme:"SalesManagement",
        component: () => import('../views/backendCenter/SalesManagement.vue')
      },
      {
        path: 'MemberManagement',
        neme:"MemberManagement",
        component: () => import('../views/backendCenter/MemberManagement.vue')
      },
      {
        path: 'OrderManagement',
        neme:"OrderManagement",
        component: () => import('../views/backendCenter/OrderManagement.vue')
      },
      {
        path: 'ConsultantReview',
        neme:"ConsultantReview",
        component: () => import('../views/backendCenter/ConsultantReview.vue')
      },
      {
        path: 'ConsultantManagement',
        neme:"ConsultantManagement",
        component: () => import('../views/backendCenter/ConsultantManagement.vue')
      },
      {
        path: 'Exit',
        neme:"Exit",
        component: () => import('../views/backendCenter/Exit.vue')
      },
    ]
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
