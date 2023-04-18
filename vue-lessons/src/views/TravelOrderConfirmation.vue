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

        <tr class="list_content">
            <td><img src="../assets/image/learning/teacher.png" alt=""></td>
            <td>陪你音樂-吉他</td>
            <td>王小明</td>
            <td>NT $1,500</td>
            <td>2023/03/06(一)</td>
            
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

export default {
    name: "TravelOrderConfirmation",
    data() {
    return {
      Consultant_id:'',
      Member_id:'',

    };
    },
    components: {
    VHeader,
    VFooter,
    },
    mounted() {
      // 1
      this.$cookies.set("selectedConsultant",'5')
      this.$cookies.set("Member_id",'5')
      
      // 2
      this.Consultant_id = $cookies.get("selectedConsultant")
      this.Member_id = $cookies.get("Member_id")

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
          // Array.prototype.push.apply(this.consultantInfo, response);
          // console.log(this.consultantInfo);
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