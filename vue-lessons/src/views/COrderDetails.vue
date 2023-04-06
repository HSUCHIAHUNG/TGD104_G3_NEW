<template>
  <div>
    <VHeader></VHeader>
    <div class="consultant_body">
      <div class="consultant_row container">
        <!-------------側邊navbar---------------->
        <div class="aside_bar">
          <c-avatar></c-avatar>
          <c-side-nav></c-side-nav>
        </div>
        <!------------ 主要區塊 ------------>
        <div class="c_order_main">
          <!-- 訂單資訊 -->
          <div class="order_area">
            <div class="order_header">
              <h1>預約明細</h1>
            </div>
            <div class="order_content">
              <order-item-details></order-item-details>
            </div>
            <div class="member_info">
              <img
                src="../assets/image/member/avatar.jpg"
                alt="member avatar"
              />
              <div class="member_details">
                <h3>
                  預約會員：
                  <span>倪小裴</span>
                </h3>
                <p>
                  <i class="fa-solid fa-user"></i>
                  暱稱：
                  <span> 裴裴 </span>
                </p>
                <p>
                  <i class="fa-solid fa-house"></i>
                  居住地區：
                  <span> 北部 </span>
                </p>
              </div>
            </div>
          </div>
          <!-- 訂單訊息 -->
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
    </div>
    <VFooter></VFooter>
  </div>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "@/components/VFooter.vue";
import CAvatar from "../components/CAvatar.vue";
import CSideNav from "@/components/CSideNav.vue";
import OrderItemDetails from "../components/OrderItemDetails.vue";
import OrderMessage from "../components/OrderMessage.vue";

export default {
  name: "OrderDetails",
  data() {
    return {};
  },
  components: {
    VHeader,
    VFooter,
    CAvatar,
    CSideNav,
    OrderItemDetails,
    OrderMessage,
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
