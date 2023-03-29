<template>
  <div>
    <!-- <VHeader></VHeader> -->
    <div class="member_row container">
      <!-------------側邊navbar---------------->
      <div class="aside_bar">
        <Avatar></Avatar>
        <SideNav></SideNav>
      </div>
      <!------------ 主要區塊 ------------>
      <div class="order_main">
        <div class="order_area">
          <div class="order_header">
            <h1>預約明細</h1>
          </div>
          <div class="order_content">
            <order-item-details></order-item-details>
          </div>
          <div class="consultant_info">
            <div class="consultant_info_left">
              <img src="../../../image/member/consultant_info.jpg" alt="" />
              <h3>
                預約顧問： <span>裴大尼</span>｜
                <span>5年經驗登山嚮導</span>
              </h3>
            </div>
            <a class="btn_blue">查看顧問資料</a>
          </div>
        </div>
        <div class="order_area">
          <div class="message_header">
            <h2>訂單訊息</h2>
            <textarea
              name=""
              id=""
              cols="30"
              rows="10"
              placeholder="最高字數200字"
            ></textarea>
            <button type="button" class="btn_blue">發送訊息</button>
          </div>
          <div class="conversation">
            <order-message></order-message>
          </div>
        </div>
      </div>
    </div>
    <!-- <VFooter></VFooter> -->
  </div>
</template>

<script>
//  import VHeader from '@/components/VHeader.vue'
//  import VFooter from '@/components/VFooter.vue'
import Avatar from "@/components/Avatar.vue";
import SideNav from "@/components/SideNav.vue";
import OrderItemDetails from "../components/OrderItemDetails.vue";
import OrderMessage from "./OrderMessage.vue";

export default {
  name: "OrderDetails",
  data() {
    return {};
  },
  components: {
    // VHeader,
    // VFooter,
    Avatar,
    SideNav,
    OrderItemDetails,
    OrderMessage,
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
