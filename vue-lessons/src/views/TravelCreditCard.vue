<template>

    <CreditCard></CreditCard>
  
  
        <h2 class="button_choose">
        <!-- <a href="/TravelCheckout"><button class="outline_btn_orange">回上一頁</button></a> -->
        <router-link to="/TravelCheckout"><button class="outline_btn_orange">回上一頁</button></router-link>
        <!-- <a href="/TravelOrderSuccess"><button class="btn_orange">送出</button></a> -->
        <router-link to="/TravelOrderSuccess"><button class="btn_orange">送出</button></router-link>
        </h2>
  
    <VFooter></VFooter>

</template>


<script>
import CreditCard from "../components/CreditCard.vue";
import VFooter from "../components/VFooter.vue";

export default {
  name: "TravelCreditCard",
  data() {
    return {
    };
  },

  components: {
    VFooter,
    CreditCard,
  },

  

};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>