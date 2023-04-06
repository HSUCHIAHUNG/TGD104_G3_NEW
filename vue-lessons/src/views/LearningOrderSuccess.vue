<template>
    <VHeader></VHeader>
    <div>
  
  
      <OrderSuccess></OrderSuccess>

        <OrderConfirmation></OrderConfirmation>
        <h2 class="check_order">
          <router-link to="/memberbooking"><button class="btn_orange">查看訂單</button></router-link>
        </h2>


      <VFooter></VFooter>
    </div>
  </template>
    
    <script>
      import VHeader from "../components/VHeader.vue";
      import VFooter from "../components/VFooter.vue";
      import OrderSuccess from "../components/OrderSuccess.vue";
      
      export default {
          name: "LearningOrderSuccess",
          data() {
          return {};
          },
          components: {
          VHeader,
          VFooter,
          OrderSuccess
          },
      };
    </script>
    
    
    <style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";
    </style>