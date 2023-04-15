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
        <!------------ 下拉式選單 ------------>
        <drop-down :defaultOption="defaultOption"></drop-down>
        <!------------ 主要區塊 ------------>
        <div class="main">
          <div class="main_header">
            <h1>預約明細</h1>
            <ul class="tabs">
              <li>
                <a
                  href="#"
                  :class="{ active: currentTab === 'tab1' }"
                  @click.prevent="
                    {
                      currentTab = 'tab1';
                    }
                  "
                  >陪你學習</a
                >
              </li>
              <li>
                <a
                  href="#"
                  :class="{ active: currentTab === 'tab2' }"
                  @click.prevent="
                    {
                      currentTab = 'tab2';
                    }
                  "
                  >陪你旅行</a
                >
              </li>
            </ul>
          </div>
          <div class="order_list">
            <template v-for="(item, index) in orderSum" :key="item.id">
              <div class="order">
                <div class="order_content">
                  <div class="order_left">
                    <div class="category"></div>
                    <div class="order_summary">
                      <h2>陪你學習</h2>
                      <span>{{ item.so_category }}</span> |
                      <span>{{ item.so_class }}</span>
                      <p>
                        <i class="fa-solid fa-hashtag"></i>訂單編號：#{{
                          `AY` + item.id
                        }}
                      </p>
                    </div>
                  </div>
                  <div class="order_right">
                    <div class="date">
                      {{ formattedMonth(item.so_booking_date) }}
                      <span>{{ formatDate(item.so_booking_date) }}</span>
                    </div>
                    <p>{{ price(item.s_cost) }}</p>
                    <router-link
                      to="/orderdetails"
                      class="btn_blue"
                      @click="setOrderId(item.id)"
                      >查看更多</router-link
                    >
                  </div>
                </div>
              </div>
            </template>
          </div>
        </div>
      </div>
    </div>

    <VFooter></VFooter>
  </div>
</template>

<script>
import $ from "jquery";
import VHeader from "@/components/VHeader.vue";
import VFooter from "@/components/VFooter.vue";
import Avatar from "@/components/Avatar.vue";
import SideNav from "@/components/SideNav.vue";
import DropDown from "../components/DropDown.vue";
import OrderSum from "../components/OrderSum.vue";
import { format } from "date-fns";
import { monthsInQuarter } from "date-fns";

export default {
  name: "MemberBookingTest",
  data() {
    return {
      currentTab: "tab1",
      defaultOption: "預約明細",
      orderSum: [],
    };
  },
  components: {
    VHeader,
    VFooter,
    Avatar,
    SideNav,
    DropDown,
    OrderSum,
  },
  methods: {
    // 加上$符號/千分位
    price(price) {
      return `$${price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
    },
    setOrderId(id) {
      this.$cookies.set("Order_id", id);
      let orderId = this.$cookies.get("Order_id");
      console.log(orderId);
    },
  },
  computed: {
    // 改月份格式
    formattedMonth(datestr) {
      return (datestr) => {
        const d = new Date(datestr);
        return format(d, "MMM");
      };
    },
    // 抓日期
    formatDate(date) {
      return (date) => format(new Date(date), "dd");
    },
  },
  mounted() {
    let Member_id = $cookies.get("Member_id");
    console.log(Member_id);
    // 陪你學習
    $.ajax({
      url: "http://localhost/NEW_G3/vue-lessons/src/api/memberBookingMusic.php",
      dataType: "json",
      type: "POST",
      data: {
        member_id: Member_id,
      },
      success: (response) => {
        console.log(response);
        this.orderSum = response;
        console.log(this.orderSum);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      },
    });
    // 陪你旅行
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
