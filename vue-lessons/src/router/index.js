import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import MemberFav from "../views/MemberFav.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView,
  },
  {
    path: "/about",
    name: "about",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/AboutView.vue"),
  },
  {
    path: "/chart",
    name: "chart",
    component: () => import("../views/Chart.vue"),
  },
  {
    path: "/member",
    name: "member",
    component: () => import("../views/Member.vue"),
  },
  {
    path: "/memberfav",
    name: "memberfav",
    component: () => import("../views/MemberFav.vue"),
  },
  {
    path: "/memberbooking",
    name: "memberbooking",
    component: () => import("../views/MemberBooking.vue"),
  },
  {
    path: "/memberhistory",
    name: "memberhistory",
    component: () => import("../views/MemberHistory.vue"),
  },
  {
    path: "/orderdetails",
    name: "orderdetails",
    component: () => import("../views/OrderDetails.vue"),
  },
  {
    path: "/consultant",
    name: "consultant",
    component: () => import("../views/Consultant.vue"),
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
