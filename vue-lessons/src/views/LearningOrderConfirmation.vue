<template>
  <VHeader></VHeader>
  <div>
    <div class="learning_order">
      訂單明細
      <OrderConfirmation></OrderConfirmation>
      <h2 class="button_choose">
        <router-link to="/LearningCalendar"><button class="outline_btn_orange">回上一頁</button></router-link>
        <router-link to="/LearningCheckout"><button class="btn_orange">選擇付款方式</button></router-link>
      </h2>
    </div>




    <VFooter></VFooter>
  </div>
</template>
  
  <script>
    import VHeader from "../components/VHeader.vue";
    import VFooter from "../components/VFooter.vue";
    import OrderConfirmation from "../components/OrderConfirmation.vue";
    
    export default {
        name: "LearningOrderConfirmation",
        data() {
        return {};
        },
        components: {
        VHeader,
        VFooter,
        OrderConfirmation
        },
    };
  </script>
  
  
  <style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
  </style>