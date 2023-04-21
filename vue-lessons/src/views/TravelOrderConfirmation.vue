<template>
    <VHeader></VHeader>


    <div class="travel_order">
      訂單明細

      <table class="table_bottom">
        <tr class="list_title">
            <td></td>
            <td>課程名稱</td>
            <td>顧問</td>
            <td>費用</td>
            <td>時間</td>
        </tr>

        <tr v-for="item in ordertable" :key="index" >
            <td><img src="../assets/image/learning/teacher.png" alt=""></td>
            <td>{{item.about_class}}</td>
            <td>{{item.c_nickname}}</td>
            <td>NT ${{item.about_cost}}</td>
            <td>{{c_date}}</td>
        </tr>

      </table>

      <h2 class="button_choose">
      <!-- <a href="/TravelCalendar"><button class="outline_btn_orange">回上一頁</button></a> -->
      <router-link to="/TravelCalendar"><button class="outline_btn_orange">回上一頁</button></router-link>
      <!-- <a href="/TravelCheckout"><button class="btn_orange">選擇付款方式</button></a> -->
      <router-link to="/TravelCheckout"><button class="btn_orange">選擇付款方式</button></router-link>
      </h2>
    </div>

    <VFooter></VFooter>
</template>
  
<script>

import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import $ from "jquery";

export default {
    name: "TravelOrderConfirmation",
    data() {
    return {
      Consultant_id:'',
      Member_id:'',
      ordertable:[],
      c_date: '',
      About_cost:'',
      Aboutclass:'',
    };
    },
    components: {
      VHeader,
      VFooter,
      $
    },
    mounted() {

      // 1
      // this.$cookies.set("selectedConsultant",'5')
      // this.$cookies.set("Member_id",'5')
      
      // 2
      this.Consultant_id = $cookies.get("selectedConsultant")
      this.Member_id = $cookies.get("Member_id")
      this.c_date = $cookies.get("Or_booking_date")

      // 測試
      console.log(this.Consultant_id);
      console.log(this.Member_id);

      // 向資料庫抓取資料
      $.ajax({
        method: "POST",
        url: 'http://localhost/TGD104_G3_NEW/vue-lessons/src/api/TravelOrderConfirmation.php', 
        data: {
          Consultant_id: this.Consultant_id,
          Member_id: this.Member_id,
            
        },
        dataType: "json",
        success: response => {
          // 将回应数据附加到consultantInfo数组中
          Array.prototype.push.apply(this.ordertable, response);
           // 直接访问 response 数组的第一个对象的 about_class 值
          const aboutClass = response[0].about_class;
            const about_cost = response[0].about_cost;

          // 将 about_class 存储到 Vue 实例的变量中
          this.Aboutclass = aboutClass;
          this.About_cost = about_cost;

          // console.log(this.Aboutclass);
          this.$cookies.set("Aboutclass",this.Aboutclass)
          this.$cookies.set("About_cost",this.About_cost)

        },
        error: function(exception) {
            alert("發生錯誤: " + exception.status);
        },

      });  


    },
};
</script>
  
  
<style lang="scss">

// @import "../assets/tgd104-sass/new_style.scss";
</style>