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
            <!-- 學習訂單 -->
            <template v-if="order_category == '陪你學習'">
              <div class="order_content">
                <div>
                  <div class="order_item">
                    <div class="order_content">
                      <div class="order_left">
                        <div class="category"></div>
                        <div class="order_summary">
                          <h2>
                            {{ order_category }} |
                            <span>進行中</span>
                          </h2>
                          <span>{{ order_info.s_category }}</span> |
                          <span>{{ order_info.about_class }}</span>
                          <ul class="order_content_details">
                            <li>
                              <i class="fa-solid fa-hashtag"></i>訂單編號：#{{
                                "ordernum" + order_info.id
                              }}
                            </li>
                            <li>
                              <i class="fa-solid fa-dollar-sign"></i
                              >行程價格：{{ price(order_info.about_cost) }}
                            </li>
                            <li>
                              <i class="fa-regular fa-calendar"></i>行程日期：
                              {{ order_info.or_booking_date }}
                            </li>
                            <li>
                              <i class="fa-solid fa-cart-shopping"></i
                              >訂購日期：{{ order_info.or_order_date }}
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="order_right">
                        <div class="date">
                          {{ getMonthAbbreviation(order_info.or_booking_date) }}
                          <span>{{ getDate(order_info.or_booking_date) }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="consultant_info">
                <div class="consultant_info_left">
                  <img :src="order_info.c_photo1" :alt="order_info.c_photo1" />
                  <h3>
                    預約顧問：
                    <br />
                    <span>{{
                      order_info.c_firstname + order_info.c_lastname
                    }}</span
                    >｜
                    <span>{{ order_info.about_title }}</span>
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
            </template>
            <!-- 旅行訂單 -->
            <template v-if="order_category == '陪你旅行'">
              <div class="order_content">
                <div>
                  <div class="order_item">
                    <div class="order_content">
                      <div class="order_left">
                        <div class="category"></div>
                        <div class="order_summary">
                          <h2>
                            {{ order_category }} |
                            <span>進行中</span>
                          </h2>
                          <span>{{ order_info.about_class }}</span> |
                          <span>{{ order_info.c_area }}</span>
                          <ul class="order_content_details">
                            <li>
                              <i class="fa-solid fa-hashtag"></i>訂單編號：#{{
                                "ordernum" + order_info.id
                              }}
                            </li>
                            <li>
                              <i class="fa-solid fa-dollar-sign"></i
                              >行程價格：{{ price(order_info.about_cost) }}
                            </li>
                            <li>
                              <i class="fa-regular fa-calendar"></i>行程日期：
                              {{ order_info.or_booking_date }}
                            </li>
                            <li>
                              <i class="fa-solid fa-cart-shopping"></i
                              >訂購日期：{{ order_info.or_order_date }}
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="order_right">
                        <div class="date">
                          {{ getMonthAbbreviation(order_info.or_booking_date) }}
                          <span>{{ getDate(order_info.or_booking_date) }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="consultant_info">
                <div class="consultant_info_left">
                  <img :src="order_info.c_photo1" :alt="order_info.c_photo1" />
                  <h3>
                    預約顧問：
                    <br />
                    <span>{{
                      order_info.c_firstname + order_info.c_lastname
                    }}</span
                    >｜
                    <span>{{ order_info.about_title }}</span>
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
            </template>
          </div>
          <!-----------訂單訊息 ------------->
          <div class="order_area">
            <div class="message_header">
              <h2>訂單訊息</h2>
              <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                placeholder="最高字數200字"
                v-model="send_message"
              ></textarea>
              <button type="button" class="btn_blue" @click="sendMessage">
                發送訊息
              </button>
            </div>
            <div class="conversation">
              <template v-for="item in order_message" :key="item.id">
                <div>
                  <div
                    class="message_container"
                    :class="[
                      item.message_sender == 'member'
                        ? 'my_message'
                        : 'reply_message',
                    ]"
                  >
                    <img
                      :src="
                        item.message_sender == 'member'
                          ? item.m_photo
                          : item.c_photo1
                      "
                      :alt="
                        item.message_sender == 'member'
                          ? item.m_photo
                          : item.c_photo1
                      "
                    />
                    <div class="message_main">
                      <div class="message_txt">
                        <p>
                          {{ item.message }}
                        </p>
                      </div>
                      <p class="message_time">{{ item.message_time }}</p>
                    </div>
                  </div>
                </div>
              </template>
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

export default {
  name: "OrderDetails",
  data() {
    return {
      order_category: "",
      order_info: [],
      order_message: [],
      send_message: "",
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
  methods: {
    // 月份格式
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
    // 日期
    getDate(dateStr) {
      let date = new Date(dateStr);
      let new_date = date.getDate().toString();
      if (new_date.length == 1) {
        return `0${new_date}`;
      } else {
        return new_date;
      }
    },
    // 查看顧問
    setConsultantId(id) {
      this.$cookies.set("Consultant_id", id);
      this.$cookies.set("L_about_consultant", id);
    },
    // 會員發送訊息
    sendMessage() {
      let order_id = this.$cookies.get("Order_id");
      let member_id = this.$cookies.get("Member_id");
      let consultant_id = this.$cookies.get("Consultant_id");
      let vm = this;

      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}memberMessage.php`,
        dataType: "text",
        type: "POST",
        data: {
          message: this.send_message,
          order_id: order_id,
          member_id: member_id,
          consultant_id: consultant_id,
          message_sender: "member",
        },
        success: function (response) {
          if (window.confirm(response)) {
            location.reload();
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    },
    // 加上$符號/千分位
    price(price) {
      return `$${price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
    },
  },
  mounted() {
    let Order_id = this.$cookies.get("Order_id");
    // 判斷旅行還是學習

    // 取得訂單資訊
    $.ajax({
      url: `${process.env.VUE_APP_AJAX_URL}orderDetails.php`,
      dataType: "json",
      type: "POST",
      data: {
        order_id: Order_id,
      },
      success: (response) => {
        this.order_info = response[0];
        console.log(this.order_info);
        console.log(this.order_info.s_category);
        console.log(this.order_info.about_cid);
        this.$cookies.set("Consultant_id", this.order_info.about_cid);
        if (this.order_info.s_category) {
          this.order_category = "陪你學習";
        } else {
          this.order_category = "陪你旅行";
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      },
    });
    // 旅行訂單

    // -----------------------------------
    // 取得訂單訊息
    $.ajax({
      url: `${process.env.VUE_APP_AJAX_URL}orderMessage.php`,
      dataType: "json",
      type: "POST",
      data: {
        order_id: Order_id,
      },
      success: (response) => {
        console.log(response);
        this.order_message = response;
        console.log(this.order_message);
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
