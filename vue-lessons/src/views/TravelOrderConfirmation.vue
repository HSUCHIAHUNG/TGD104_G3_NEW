<template>



    <div class="travel_order">
      訂單明細
      <OrderConfirmation></OrderConfirmation>
      <h2 class="button_choose">
      <a href="/"><button class="outline_btn_orange">回上一頁</button></a>
      <a href="/TravelCheckout"><button class="btn_orange">選擇付款方式</button></a>
      </h2>
    </div>





</template>
  
<script>

import OrderConfirmation from "../components/OrderConfirmation.vue";

export default {
    name: "TravelOrderConfirmation",
    data() {
    return {};
    },
    components: {
    OrderConfirmation,
    },
};
</script>
  
  
<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>