<template>
    <div>

  
  
  
      <CreditCard></CreditCard>
  
  
      <h2 class="button_choose">
      <button class="outline_btn_orange">回上一頁</button>
      <button class="btn_orange">結帳</button>
      </h2>
  
      <VFooter></VFooter>
    </div>
  </template>
    
    <script>
      import VFooter from "../components/VFooter.vue";
      import CreditCard from "../components/CreditCard.vue";
      
      export default {
          name: "LearningCreditCard",
          data() {
          return {};
          },
          components: {
          VFooter,
          CreditCard
          },
      };
    </script>
    
    
    <style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";
    </style>