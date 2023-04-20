<template>
    <VHeader></VHeader>

    <ATM></ATM>
  
  
        <h2 class="button_choose">
        <!-- <a href="/TravelCheckout"><button class="outline_btn_orange">回上一頁</button></a> -->
        <router-link to="/LearningCheckout"><button class="outline_btn_orange">回上一頁</button></router-link>
        <!-- <a href="/TravelOrderSuccess"><button class="btn_orange">送出</button></a> -->
        <router-link to="/LearningOrderSuccess"><button @click="order_done" class="btn_orange">送出</button></router-link>
        </h2>
  
    <VFooter></VFooter>

</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import ATM from "../components/ATM.vue";
import $ from "jquery";

export default {
  name: "LearningCreditCard",
  data() {
    return {
      // 要存入order的資料
      Member_id: '',
      Consultant_id: '',
      Or_checkout_method: '',
      Or_booking_date: '',
      Or_class: '',
      Or_number: '',
    };
  },

  components: {
    VHeader,
    VFooter,
    ATM,
    $
  },
  methods: {
    order_done(){
    
      this.$cookies.set("Or_booking_date",'2023/04/25')
      

      this.Member_id = $cookies.get("Member_id")
      this.Consultant_id = $cookies.get("selectedConsultant")
      this.Or_checkout_method = $cookies.get("moneymethod")
      this.Or_booking_date = $cookies.get("Or_booking_date")
      this.Or_class = $cookies.get("Aboutclass")
      this.Or_number = 'ordernum' + this.Consultant_id


      console.log(
        this.Member_id, 
        this.Consultant_id, 
        this.Or_checkout_method, 
        this.Or_booking_date,
        this.Or_class,
        this.Or_number,
      );

      $.ajax({
        method: "POST",
        url: 'http://localhost/TGD104_G3_NEW/vue-lessons/src/api/LearningCreditCard.php', 
        data: {
        Member_id: this.Member_id,
        Consultant_id: this.Consultant_id,
        Or_booking_date: this.Or_booking_date,
        Or_checkout_method: this.Or_checkout_method,
        Or_class: this.Or_class,
        Or_number: this.Or_number,   
        },
        dataType: "json",
          success: response => {
            
          },
          error: function(exception) {
              alert("發生錯誤: " + exception.status);
          },

      });  

    }
  },
  

};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>


