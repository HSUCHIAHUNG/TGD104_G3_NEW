<template>
    <VHeader></VHeader>
    <div class="process4">
    <div class="learning_checkout_list">
      <h2>選擇付款方式 <i class="fa-solid fa-comment-dollar"></i> : </h2>

      <ul class="checkout_card_atm">

        <!-- <li class="checkout_method"> -->
          <label class="money_card">
            <input class="option-input_checkout radio" type="radio" v-model="moneymethod" name="moneymethod" value="信用卡"/>
            信用卡/簽帳金融卡
          </label>

          <hr>

          <label class="momey_atm">
            <input class="option-input_checkout radio" type="radio" v-model="moneymethod" name="moneymethod" value="ATM"/>
            ATM 轉帳
          </label>
        <!-- </li> -->

      </ul>
      <h2 class="checkout_total">金額 : <span>{{About_cost}}元</span></h2>
      <h2 class="button_choose">
        <!-- <a href="/TravelOrderConfirmation"><button class="outline_btn_orange">回上一頁</button></a> -->
        <router-link to="/TravelOrderConfirmation"><button class="outline_btn_orange">回上一頁</button></router-link>
        <button @click="payment" class="btn_orange">進行付款</button>
      </h2>
      <div class="img_wallet"><img src="../assets/image/travel/wallet.png" alt=""></div>
    </div>

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
        moneymethod: '',
        About_cost:'',
      };
    },
    components: {
      VHeader,
      VFooter,
      $
    },
    mounted() {
      this.About_cost = $cookies.get("About_cost")
            
    },
    methods:{
      payment(){
        // console.log(this.moneymethod);
        if (this.moneymethod === "信用卡") {
          this.$router.push('/TravelCreditCard');
        } else if (this.moneymethod === "ATM") {
          this.$router.push('/TravelATM');
        } else {
          alert('請選擇付款方式')
        }

        // 存取付款方式
        this.$cookies.set("moneymethod",this.moneymethod)

      // 測試存取資料
      // this.moneymethod = $cookies.get("moneymethod")
      // console.log(this.moneymethod);
      }

   
    }
};
</script>
  
  
<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";

// .checkout_card_atm{
//     background-color:#DCECEE;
//     width: 70%;
//     margin: 0 auto;
//     border-radius: 15px;
//     padding: 20px;
// }

// hr{
//   margin: 20px auto;
// }

.process4{
    background-color: #f8f4eb;
  }

  .checkout_card_atm{
    background-color: #DCECEE;
    width: 70%;
    margin: 0 auto;
    border-radius: 15px;
    padding: 35px;
    line-height: 3;
  }

  hr{
    margin: 20px auto;
  }


  .option-input_checkout {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 40px;
  width: 40px;
  transition: all 0.15s ease-out 0s;
  background: #fff;
  border: none;
  color: #79cbd4;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1;
}
.option-input_checkout:hover {
  background: #9faab7;
}
.option-input_checkout:checked {
  background: #ffffff;
}
.option-input_checkout:checked::before {
  width: 40px;
  height: 40px;
  display:flex;
  content: '\f00c';
  font-size: 25px;
  font-weight:bold;
  position: absolute;
  align-items:center;
  justify-content:center;
  font-family:'Font Awesome 5 Free';
}
.option-input_checkout:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #DCECEE;
  content: '';
  display: block;
  position: relative;
  z-index: 1;
}
.option-input_checkout.radio {
  border-radius: 50%;
}
.option-input_checkout.radio::after {
  border-radius: 50%;
}

@keyframes click-wave {
  0% {
    height: 40px;
    width: 40px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    height: 200px;
    width: 200px;
    margin-left: -80px;
    margin-top: -80px;
    opacity: 0;
  }
}

.learning_checkout_list h2,
.money_card,
.momey_atm,
.learning_checkout_list .checkout_total{
  letter-spacing: 2px;
  font-size: 18px;
  font-weight: 600;
  color: #585858;
}

.learning_checkout_list h2,
.learning_checkout_list .checkout_total{
  font-size: 22px;
}
</style>