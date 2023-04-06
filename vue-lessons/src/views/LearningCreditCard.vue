<template>
    <VHeader></VHeader>
    <div>

  
  
  
      <CreditCard></CreditCard>
      
      <h2 class="button_choose">
        <router-link to="/LearningCheckout"><button class="outline_btn_orange">回上一頁</button></router-link>
        <router-link to="/LearningOrderSuccess"><button class="btn_orange">送出</button></router-link>
      </h2>
  
      <VFooter></VFooter>
    </div>
  </template>
    
    <script>
      import VHeader from "../components/VHeader.vue";
      import VFooter from "../components/VFooter.vue";
      import CreditCard from "../components/CreditCard.vue";
      
      export default {
          name: "LearningCreditCard",
          data() {
          return {};
          },
          components: {
          VFooter,
          VHeader,
          CreditCard
          },
      };
    </script>
    
    
    <style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";
    </style>