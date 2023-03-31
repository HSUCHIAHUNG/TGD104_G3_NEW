import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import MemberFav from "../views/MemberFav.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView,
  },
  // {
  //   path: "/about",
  //   name: "about",
  //   // route level code-splitting
  //   // this generates a separate chunk (about.[hash].js) for this route
  //   // which is lazy-loaded when the route is visited.
  //   component: () =>
  //     import(/* webpackChunkName: "about" */ "../views/AboutView.vue"),
  // },
  {
    path: "/learninggallery",
    name: "learninggallery",
    component: () => import("../views/LearningGallery.vue"),
  },
  {
    path: "/learningordersuccess",
    name: "learningordersuccess",
    component: () => import("../views/LearningOrderSuccess.vue"),
  },
  {
    path: "/learningcreditcard",
    name: "learningcreditcard",
    component: () => import("../views/LearningCreditCard.vue"),
  },
  {
    path: "/atm",
    name: "atm",
    component: () => import("../views/ATM.vue"),
  },
  {
    path: "/learningorderconfirmation",
    name: "learningorderconfirmation",
    component: () => import("../views/LearningOrderConfirmation.vue"),
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
  {
    path: "/consultantinfo",
    name: "consultantinfo",
    component: () => import("../views/ConsultantInfo.vue"),
  },
  {
    path: "/consultantbooking",
    name: "consultantbooking",
    component: () => import("../views/ConsultantBooking.vue"),
  },
  {
    path: "/consultanthistory",
    name: "consultanthistory",
    component: () => import("../views/ConsultantHistory.vue"),
  },
  {
    path: "/learning",
    name: "learning",
    component: () => import("../views/Learning.vue"),
  },
  {
    path: "/LearningChoose",
    name: "LearningChoose",
    component: () => import("../views/LearningChoose.vue"),
  },
  {
    path: "/LearningCheckout",
    name: "LearningCheckout",
    component: () => import("../views/LearningCheckout.vue"),
  },
  
  {
    path: "/Index",
    name: "Index",
    component: () => import("../views/index.vue"),
  },
  {
    path: "/travel",
    name: "travel",
    component: () => import("../views/Travel.vue"),
  },
  {
    path: "/travelmap",
    name: "travelmap",
    component: () => import("../views/TravelMap.vue"),
  },
  {
    path: "/Respect",
    name: "Respect",
    component: () => import("../views/Respect.vue"),
  },
  {
    path: "/seltravelconsultant",
    name: "seltravelconsultant",
    component: () => import("../views/SelTravelConsultant.vue"),
  },
  {
    path: "/joinok",
    name: "joinok",
    component: () => import("../views/JoinOk.vue"),
  },
  {
    path: "/Backend",
    name: "Backend",
    component: () => import("../views/BackendCenter.vue"),
    redirect: "/Backend/SalesManagement",
    children: [
      {
        path: "SalesManagement",
        neme: "SalesManagement",
        component: () => import("../views/backendCenter/SalesManagement.vue"),
      },
      {
        path: "MemberManagement",
        neme: "MemberManagement",
        component: () => import("../views/backendCenter/MemberManagement.vue"),
      },
      {
        path: "OrderManagement",
        neme: "OrderManagement",
        component: () => import("../views/backendCenter/OrderManagement.vue"),
      },
      {
        path: "ConsultantReview",
        neme: "ConsultantReview",
        component: () => import("../views/backendCenter/ConsultantReview.vue"),
      },
      {
        path: "ConsultantManagement",
        neme: "ConsultantManagement",
        component: () =>
          import("../views/backendCenter/ConsultantManagement.vue"),
      },
      {
        path: "Exit",
        neme: "Exit",
        component: () => import("../views/backendCenter/Exit.vue"),
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
