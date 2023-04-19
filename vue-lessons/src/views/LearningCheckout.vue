<template>
  <div>
      <VHeader></VHeader>
  


    <div class="learning_checkout_list">
      <h2>選擇付款方式</h2>

      <ul class="checkout_card_atm">

        <!-- <li class="checkout_method"> -->
          <label class="money_card">
            <input type="radio" v-model="moneymethod" name="moneymethod" value="信用卡"/>
            信用卡/簽帳金融卡
          </label>

          <hr>

          <label class="momey_atm">
            <input type="radio" v-model="moneymethod" name="moneymethod" value="ATM"/>
            ATM 轉帳
          </label>
        <!-- </li> -->

      </ul>
      <h2 class="checkout_total">金額 : <span>1,500元</span></h2>
      <h2 class="button_choose">
        <router-link to="/LearningOrderConfirmation"><button class="outline_btn_orange">回上一頁</button></router-link>
        <button @click="payment" class="btn_orange">進行付款</button>
      </h2>
      <div class="img_wallet"><img src="../assets/image/learning/wallet.png" alt=""></div>
    </div>
  
  
  
  
    <VFooter></VFooter>
  </div>
</template>
    
    <script>
      import VHeader from "../components/VHeader.vue";
      import VFooter from "../components/VFooter.vue";
      // import Checkout from "../components/Checkout.vue";
      
      export default {
          name: "LearningCheckout",
          data() {
            return {
              moneymethod: '',
            };
          },
          components: {
          VHeader,
          VFooter,
          // Checkout
          },
          methods:{
            payment(){
              if (this.moneymethod === "信用卡") {
                this.$router.push('/LearningCreditCard');
              } else if (this.moneymethod === "ATM") {
                this.$router.push('/LearningATM');
              } else {
                alert('請選擇付款方式')
              }

              // 存取付款方式
              this.$cookies.set("moneymethod",this.moneymethod)
              
              // 測試存取資料
              this.moneymethod = $cookies.get("moneymethod")
              console.log(this.moneymethod);
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