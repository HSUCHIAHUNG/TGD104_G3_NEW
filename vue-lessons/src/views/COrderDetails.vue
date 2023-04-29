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
          <div class="order_area" v-for="(item, index) in Oderdetails" :key="item.id">
            <div class="order_header">
              <h1>預約明細</h1>
            </div>
            <div class="order_content">
              <!-- <order-item-details></order-item-details> -->

              <div>
                <div class="order_item">
                  <div class="order_content">
                    <div class="order_left">
                      <div class="category"></div>
                      <div class="order_summary">
                        <h2>
                          預約課程 |
                          <span>未完成</span>
                        </h2>
                        <span>{{ item.about_class }}</span>
                        <ul class="order_content_details">
                          <li>
                            <i class="fa-solid fa-hashtag"></i>訂單編號：#{{ `ordernum` + item.id }}
                          </li>
                          <li><i class="fa-solid fa-dollar-sign"></i>行程價格：${{item.about_cost}}</li>
                          <li>
                            <i class="fa-regular fa-calendar"></i>行程日期：{{item.or_booking_date}}
                          </li>
                          <li>
                            <i class="fa-solid fa-cart-shopping"></i>訂購日期：{{formatorderdate(item.or_order_date)}}
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="order_right">
                      <div class="date">
                        {{formatMonth(item.or_booking_date)}}
                        <span>{{formatDate(item.or_booking_date)}}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="member_info">
              <img
                :src="`${img_src}${item.m_photo}`"
                alt="member avatar"
              />
              <div class="member_details">
                <h3>
                  預約會員：
                  <span>{{item.m_firstname}}{{item.m_lastname}} </span>
                </h3>
                <p>
                  <i class="fa-solid fa-user"></i>
                  暱稱：
                  <span> {{item.m_nickname}} </span>
                </p>
                <p>
                  <i class="fa-solid fa-house"></i>
                  居住地區：
                  <span> {{item.m_area}} </span>
                </p>
              </div>
            </div>
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
                      item.message_sender == 'consultant'
                        ? 'my_message'
                        : 'reply_message',
                    ]"
                  >
                    <img
                      :src="
                        item.message_sender == 'consultant'
                          ? `${img_src}${item.c_photo1}`
                          : `${img_src}${item.m_photo}`
                          
                      "
                      :alt="
                        item.message_sender == 'consultant'
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
import $ from "jquery";
import {API_ARC} from "@/config";


export default {
  name: "consultantorderdetails",
  data() {
    return {
      Orderid: '',
      Oderdetails: [],
      or_order_date: '',

      Order_id:'',
      Member_id:'',
      Consultant_id:'',

      order_category: "",
      order_info: [],
      order_message: [],
      send_message: "",
    };
  },
  components: {
    VHeader,
    VFooter,
    CAvatar,
    CSideNav,
    OrderItemDetails,
    OrderMessage,
    $
  },
  computed: {
    formatorderdate() {
      return (datestr) => {
        const date = new Date(datestr);
        const year = date.getFullYear();
        const month = ('0' + (date.getMonth() + 1)).slice(-2); // 將月份轉換為兩位數，例如01、02等
        const day = ('0' + date.getDate()).slice(-2); // 將日期轉換為兩位數，例如01、02等
        return `${year}/${month}/${day}`;
      };
    },
     // 改月份格式
     formatMonth() {
      return (datestr) => {
        const options = { month: 'short' };
        const month = new Date(datestr).toLocaleString('en-US', options);
        return month;
      };
    },
    // 抓日期
    formatDate() {
      return (datestr) => {
        const day = new Date(datestr).getDate();
        return day;
      };
    },
  },
  methods: {
    // 會員發送訊息
    sendMessage() {
      this.Order_id = this.$cookies.get("order_id");
      this.Member_id = this.$cookies.get("Member_id");
      this.Consultant_id = this.$cookies.get("Consultant_id");
      // let vm = this;
      console.log(this.Order_id,this.Member_id,this.Consultant_id);

      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}consultantMessage.php`,
        dataType: "text",
        type: "POST",
        data: {
          Message: this.send_message,
          Order_id: this.Order_id,
          Member_id: this.Member_id,
          Consultant_id: this.Consultant_id,
          Message_sender: "consultant",
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
  },
  mounted() {
    this.img_src = `${API_ARC}`;
    // SELECT 會員&顧問資料
    // this.$cookies.set("Consultant_id","1")
    this.Orderid = $cookies.get("order_id");
    console.log(this.Orderid);

    $.ajax({
      url: `${process.env.VUE_APP_AJAX_URL}COrderDetails.php`,
      dataType: "json",
      type: "POST",
      data: {
        Orderid: this.Orderid,
      },
      success: (response) => {
        // console.log('成功');
        response.forEach((item) => {
          if (new Date(item.or_booking_date) > new Date()) {
            this.Oderdetails.push(item);
          }
        });
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      },
    });

    // 取得訂單訊息
    $.ajax({
      url: `${process.env.VUE_APP_AJAX_URL}consultantorderMessage.php`,
      dataType: "json",
      type: "POST",
      data: {
        Order_id: this.Orderid,
      },
      success: (response) => {
        console.log(response);
        this.order_message = response;
        // console.log(this.order_message);
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
