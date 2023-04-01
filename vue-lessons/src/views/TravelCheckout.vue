<template>



    <div class="travel_checkout_list">
      <h2>選擇付款方式</h2>
        <Checkout></Checkout>
      <h2 class="checkout_total">金額 : <span>1,500元</span></h2>
      <h2 class="button_choose">
      <a href="/TravelOrderConfirmation"><button class="outline_btn_orange">回上一頁</button></a>
      <a href="/TravelOrderSuccess"><button class="btn_orange">進行付款</button></a>
      </h2>
      <div class="img_wallet"><img src="../assets/image/travel/wallet.png" alt=""></div>
    </div>




</template>
  
<script>
import Checkout from "../components/Checkout.vue";

export default {
    name: "TravelCheckout",
    data() {
    return {};
    },
    components: {
    Checkout,
    },
};
</script>
  
  
<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>