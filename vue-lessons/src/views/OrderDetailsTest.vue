<template>
  <div>
    <VHeader></VHeader>
    <div class="member_body">
      <div class="member_row container">
        <!-------------側邊navbar---------------->
        <div class="aside_bar">
          <Avatar></Avatar>
          <SideNav></SideNav>
        </div>
        <!------------ 主要區塊 ------------>
        <div class="order_main">
          <!-- 訂單資訊 -->
          <div class="order_area">
            <div class="order_header">
              <h1>預約明細</h1>
            </div>
            <div class="order_content">
              <div>
                <div class="order_item">
                  <div class="order_content">
                    <div class="order_left">
                      <div class="category"></div>
                      <div class="order_summary">
                        <h2>
                          {{ order_category }} |
                          <span>已完成</span>
                        </h2>
                        <span>{{ order_info.s_category }}</span> |
                        <span>{{ order_info.s_class }}</span>
                        <ul class="order_content_details">
                          <li>
                            <i class="fa-solid fa-hashtag"></i>訂單編號：#{{
                              "AY" + order_info.id
                            }}
                          </li>
                          <li>
                            <i class="fa-solid fa-dollar-sign"></i>行程價格：{{
                              order_info.s_cost
                            }}
                          </li>
                          <li>
                            <i class="fa-regular fa-calendar"></i>行程日期：
                            {{ order_info.so_booking_date }}
                          </li>
                          <li>
                            <i class="fa-solid fa-cart-shopping"></i
                            >訂購日期：{{ order_info.so_order_date }}
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="order_right">
                      <div class="date">
                        {{ getMonthAbbreviation(order_info.so_booking_date) }}
                        <span>{{ getDate(order_info.so_booking_date) }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="consultant_info">
              <div class="consultant_info_left">
                <img src="" :alt="order_info.c_idphoto" />
                <h3>
                  預約顧問：
                  <br />
                  <span>{{
                    order_info.c_firstname + order_info.c_lastname
                  }}</span
                  >｜
                  <span>5年經驗登山嚮導</span>
                </h3>
              </div>
              <router-link
                class="btn_blue"
                :to="
                  order_category == '陪你學習'
                    ? '/LearningGallery'
                    : '/travelGallery'
                "
                @click="setConsultantId(order_info.about_cid)"
                >查看顧問資料</router-link
              >
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
  </div>
  <VFooter></VFooter>
</template>

<script>
// 套件
import $ from "jquery";
// 元件
import VHeader from "@/components/VHeader.vue";
import VFooter from "@/components/VFooter.vue";
import Avatar from "@/components/Avatar.vue";
import SideNav from "@/components/SideNav.vue";
import OrderItemDetails from "../components/OrderItemDetails.vue";
import OrderMessage from "../components/OrderMessage.vue";
// 日期格式
// import { format } from "date-fns";

export default {
  name: "OrderDetails",
  data() {
    return {
      order_category: "陪你學習",
      order_info: [],
    };
  },
  components: {
    VHeader,
    VFooter,
    Avatar,
    SideNav,
    OrderItemDetails,
    OrderMessage,
  },
  computed: {},
  methods: {
    getMonthAbbreviation(dateStr) {
      const months = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ];
      const date = new Date(dateStr);
      const monthIndex = date.getMonth();
      return months[monthIndex];
    },
    getDate(dateStr) {
      let date = new Date(dateStr);
      let new_date = date.getDate().toString();
      if (new_date.length == 1) {
        return `0${new_date}`;
      } else {
        return new_date;
      }
    },
    setConsultantId(id) {
      this.$cookies.set("Consultant_id", id);
      let c_id = this.$cookies.get("Consultant_id");
      console.log(c_id);
    },
  },
  mounted() {
    let Order_id = this.$cookies.get("Order_id");
    // 判斷旅行還是學習

    // 學習訂單
    $.ajax({
      url: "http://localhost/NEW_G3/vue-lessons/src/api/orderDetails.php",
      dataType: "json",
      type: "POST",
      data: {
        order_id: Order_id,
      },
      success: (response) => {
        this.order_info = response[0];
        console.log(this.order_info);
        console.log(this.order_info.so_order_date);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      },
    });
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
