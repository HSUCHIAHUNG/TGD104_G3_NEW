<template>
    <VHeader></VHeader>
    <div class="process6">
    <ATM></ATM>
  
  
        <h2 class="button_choose">
        <!-- <a href="/TravelCheckout"><button class="outline_btn_orange">回上一頁</button></a> -->
        <router-link to="/TravelCheckout"><button class="outline_btn_orange">回上一頁</button></router-link>
        <!-- <a href="/TravelOrderSuccess"><button class="btn_orange">送出</button></a> -->
        <router-link to="/TravelOrderSuccess"><button @click="order_done" class="btn_orange">送出</button></router-link>
        </h2>
      </div> 
    <VFooter></VFooter>

</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import ATM from "../components/ATM.vue";
import $ from "jquery";

export default {
  name: "TravelATM",
  data() {
    return {
      // 要存入order的資料
      Member_id: '',
      Consultant_id: '',
      Tro_area: '',
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
    
      

      this.Member_id = parseInt(decodeURIComponent(this.Member_id = $cookies.get("Member_id")));
      this.Consultant_id = $cookies.get("selectedConsultant")
      this.Tro_area = $cookies.get("travelArea")
      this.Or_checkout_method = $cookies.get("moneymethod")
      this.Or_booking_date = $cookies.get("Or_booking_date")
      this.Or_class = $cookies.get("Aboutclass")
      this.Or_number = 'ordernum' + this.Consultant_id


      console.log(
        this.Member_id, 
        this.Consultant_id, 
        this.Tro_area, 
        this.Or_checkout_method, 
        this.Or_booking_date,
        this.Or_class,
        this.Or_number,
      );

      $.ajax({
        method: "POST",
        url: `${process.env.VUE_APP_AJAX_URL}TravelCreditCard.php`, 
        data: {
        Member_id: this.Member_id,
        Consultant_id: this.Consultant_id,
        Tro_area: this.Tro_area,
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
.process6{
background-color: #f8f4eb;
padding-top: 50px;
}
</style>
