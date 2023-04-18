<template>
    <VHeader></VHeader>

    <div class="learning_checkout_list">
      <h2>選擇付款方式</h2>

      <ul class="checkout_card_atm">

        <!-- <li class="checkout_method"> -->
          <label class="money_card">
            <input type="radio" v-model="moneymethod" name="moneymethod" value="1"/>
            信用卡/簽帳金融卡
          </label>

          <hr>

          <label class="momey_atm">
            <input type="radio" v-model="moneymethod" name="moneymethod" value="2"/>
            ATM 轉帳
          </label>
        <!-- </li> -->

      </ul>
      <h2 class="checkout_total">金額 : <span>1,500元</span></h2>
      <h2 class="button_choose">
        <!-- <a href="/TravelOrderConfirmation"><button class="outline_btn_orange">回上一頁</button></a> -->
        <router-link to="/TravelOrderConfirmation"><button class="outline_btn_orange">回上一頁</button></router-link>
        <button @click="payment" class="btn_orange">進行付款</button>
      </h2>
      <div class="img_wallet"><img src="../assets/image/travel/wallet.png" alt=""></div>
    </div>


    <VFooter></VFooter>
</template>
  
<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import $ from "jquery";

export default {
    name: "TravelCheckout",
    data() {
      return {
        moneymethod: null,
      };
    },
    components: {
      VHeader,
      VFooter,
    },
    methods:{
      payment(){
        if (this.moneymethod === "1") {
          this.$router.push('/TravelCreditCard');
        } else if (this.moneymethod === "2") {
          this.$router.push('/TravelATM');
        } else {
          alert('請選擇付款方式')
        }
      }
    }
};
</script>
  
  
<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";

.checkout_card_atm{
    background-color:$dark_blue;
    width: 70%;
    margin: 0 auto;
    border-radius: 15px;
    padding: 20px;
}

hr{
  margin: 20px auto;
}
</style>