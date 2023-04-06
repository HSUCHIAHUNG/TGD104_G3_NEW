<template>

    <ATM></ATM>
  
  
        <h2 class="button_choose">
        <!-- <a href="/TravelCheckout"><button class="outline_btn_orange">回上一頁</button></a> -->
        <router-link to="/TravelCheckout"><button class="outline_btn_orange">回上一頁</button></router-link>
        <!-- <a href="/TravelOrderSuccess"><button class="btn_orange">送出</button></a> -->
        <router-link to="/TravelOrderSuccess"><button class="btn_orange">送出</button></router-link>
        </h2>
  
    <VFooter></VFooter>

</template>

<script>
import VFooter from "../components/VFooter.vue";
import ATM from "../components/ATM.vue";

export default {
  name: "TravelATM",
  data() {
    return {
    };
  },

  components: {
    VFooter,
    ATM,
  },

  

};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
