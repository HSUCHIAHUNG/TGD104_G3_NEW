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
  //   path: "/travelgame2",
  //   name: "travelgame2",
  //   component: () => import("../views/TravelGame2.vue"),
  // },
  // {
  //   path: "/memberhistorytest",
  //   name: "memberhistorytest",
  //   component: () => import("../views/MemberHistoryTest.vue"),
  // },
  {
    path: "/imgtest",
    name: "imgtest",
    component: () => import("../views/ImgTest.vue"),
  },
  {
    path: "/selectimg",
    name: "selectimg",
    component: () => import("../views/SelectImg.vue"),
  },
  {
    path: "/peitest2",
    name: "peitest2",
    component: () => import("../views/PeiTest2.vue"),
  },
  {
    path: "/peitest3",
    name: "peitest3",
    component: () => import("../views/PeiTest3.vue"),
  },
  {
    path: "/historyorderdetailtest",
    name: "historyorderdetailtest",
    component: () => import("../views/HistoryOrderDetailTest.vue"),
  },
  {
    path: "/orderdetailstest",
    name: "orderdetailstest",
    component: () => import("../views/OrderDetailsTest.vue"),
  },
  {
    path: "/backendlogin",
    name: "backendlogin",
    component: () => import("../views/backendlogin.vue"),
  },
  {
    path: "/memberbookingtest",
    name: "memberbookingtest",
    component: () => import("../views/MemberBookingTest.vue"),
  },
  {
    path: "/memberfavtest",
    name: "memberfavtest",
    component: () => import("../views/MemberFavTest.vue"),
  },
  {
    path: "/member_test",
    name: "member_test",
    component: () => import("../views/Member_test.vue"),
  },
  {
    path: "/peitest",
    name: "peitest",
    component: () => import("../views/PeiTest.vue"),
  },
  {
    path: "/testsignup",
    name: "testsignup",
    component: () => import("../views/TestSignUp.vue"),
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
    path: "/test0416",
    name: "test0416",
    component: () => import("../views/test0416.vue"),
  },
  {
    path: "/test_yu",
    name: "test_yu",
    component: () => import("../views/test_yu.vue"),
  },
  {
    path: "/learningCalendar",
    name: "learningCalendar",
    component: () => import("../views/LearningCalendar.vue"),
  },
  {
    path: "/learningATM",
    name: "learningATM",
    component: () => import("../views/LearningATM.vue"),
  },
  {
    path: "/learningoption",
    name: "learningoption",
    component: () => import("../views/LearningOption.vue"),
  },
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
    path: "/historyorderdetail",
    name: "historyorderdetail",
    component: () => import("../views/HistoryOrderDetail.vue"),
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
    path: "/consultantorderdetails",
    name: "consultantorderdetails",
    component: () => import("../views/COrderDetails.vue"),
  },
  {
    path: "/consultanthistory",
    name: "consultanthistory",
    component: () => import("../views/ConsultantHistory.vue"),
  },
  {
    path: "/consultanthistoryorderdetail",
    name: "consultanthistoryorderdetail",
    component: () => import("../views/CHistoryOrderDetails.vue"),
  },
  {
    path: "/learning",
    name: "learning",
    component: () => import("../views/Learning.vue"),
  },
  {
    path: "/learningChoose",
    name: "learningChoose",
    component: () => import("../views/LearningChoose.vue"),
    redirect: "/LearningChoose/Music",
    children: [
      {
        path: "Music",
        neme: "Music",
        component: () => import("../views/Music.vue"),
      },
      {
        path: "Study",
        neme: "Study",
        component: () => import("../views/Study.vue"),
      },
      {
        path: "Subject",
        neme: "Subject",
        component: () => import("../views/Subject.vue"),
      },
      {
        path: "Draw",
        neme: "Draw",
        component: () => import("../views/Draw.vue"),
      },
      {
        path: "Code",
        neme: "Code",
        component: () => import("../views/Code.vue"),
      },
      {
        path: "Dance",
        neme: "Dance",
        component: () => import("../views/Dance.vue"),
      },
    ],
  },
  {
    path: "/LearningCheckout",
    name: "LearningCheckout",
    component: () => import("../views/LearningCheckout.vue"),
  },
  {
    path: "/main",
    name: "main",
    component: () => import("../views/main.vue"),
  },
  {
    path: "/test",
    name: "test",
    component: () => import("../views/test.vue"),
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
    path: "/travelgallery",
    name: "travelgallery",
    component: () => import("../views/TravelGallery.vue"),
  },
  {
    path: "/travelorderconfirmation",
    name: "travelorderconfirmation",
    component: () => import("../views/TravelOrderConfirmation.vue"),
  },
  {
    path: "/travelcheckout",
    name: "travelcheckout",
    component: () => import("../views/TravelCheckout.vue"),
  },
  {
    path: "/travelordersuccess",
    name: "travelordersuccess",
    component: () => import("../views/TravelOrderSuccess.vue"),
  },
  {
    path: "/travelcreditcard",
    name: "travelcreditcard",
    component: () => import("../views/TravelCreditCard.vue"),
  },
  {
    path: "/travelatm",
    name: "travelatm",
    component: () => import("../views/TravelATM.vue"),
  },
  {
    path: "/travelcalendar",
    name: "travelcalendar",
    component: () => import("../views/TravelCalendar.vue"),
  },
  {
    path: "/travelgame",
    name: "travelgame",
    component: () => import("../views/TravelGame.vue"),
  },
  {
    path: "/join",
    name: "join",
    component: () => import("../views/Join.vue"),
  },
  {
    path: "/joinapply",
    name: "joinapply",
    component: () => import("../views/JoinApply.vue"),
  },
  {
    path: "/joinlearn",
    name: "joinlearn",
    component: () => import("../views/JoinLearn.vue"),
  },
  {
    path: "/jointravel",
    name: "jointravel",
    component: () => import("../views/JoinTravel.vue"),
  },
  {
    path: "/joinok",
    name: "joinok",
    component: () => import("../views/JoinOk.vue"),
  },
  {
    path: "/BackendCenter",
    name: "BackendCenter",
    component: () => import("../views/BackendCenter.vue"),
    meta: { hideRouterView: true },
    redirect: "/BackendCenter/SalesManagement",
    children: [
      {
        path: "SalesManagement",
        neme: "SalesManagement",
        component: () => import("../views/SalesManagement.vue"),
      },
      {
        path: "MemberManagement",
        neme: "MemberManagement",
        component: () => import("../views/MemberManagement.vue"),
      },
      {
        path: "OrderManagement",
        neme: "OrderManagement",
        component: () => import("../views/OrderManagement.vue"),
      },
      {
        path: "ConsultantReview",
        neme: "ConsultantReview",
        component: () => import("../views/ConsultantReview.vue"),
      },
      {
        path: "ConsultantManagement",
        neme: "ConsultantManagement",
        component: () => import("../views/ConsultantManagement.vue"),
      },
      {
        path: "Exit",
        neme: "Exit",
        component: () => import("../views/Exit.vue"),
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
