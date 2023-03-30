<template>
    <div>
      <VHeader></VHeader>
  
  
  
      <div class="learning_checkout_list">
      <h2>選擇付款方式</h2>
        <Checkout></Checkout>
      <h2 class="checkout_total">金額 : <span>1,500元</span></h2>
      <h2 class="button_choose">
      <button class="outline_btn_orange">回上一頁</button>
      <button class="btn_orange">進行付款</button>
      </h2>
      <div class="img_wallet"><img src="image/learning/wallet.png" alt=""></div>
    </div>
  
  
  
  
      <VFooter></VFooter>
    </div>
  </template>
    
    <script>
      import VHeader from "../components/VHeader.vue";
      import VFooter from "../components/VFooter.vue";
      import Checkout from "../components/Checkout.vue";
      
      export default {
          name: "Learning",
          data() {
          return {};
          },
          components: {
          VHeader,
          VFooter,
          Checkout
          },
      };
    </script>
    
    
    <style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";
    </style>