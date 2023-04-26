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
        <!------------ 下拉式選單 ------------>
        <c-drop-down :defaultOption="defaultOption"></c-drop-down>
        <!------------ 主要區塊 ------------>
        <div class="main">
            <div class="main_header">
              <h1>預約訂單</h1>
            </div>
            <!------------ 訂單列表 ------------>
            <div class="order_list">
              <!-- <c-order-sum></c-order-sum> -->
              <div>
                <div class="order" v-for="(item, index) in Order_table" :key="item.id">
                  <div class="c_order_content">
                    <div class="order_left">
                      <div class="category"></div>
                      <div class="order_summary">
                        <h2>預約課程</h2>
                        <span>{{ item.about_class }}</span>
                        <p><i class="fa-solid fa-hashtag"></i>訂單編號：
                        {{ `ordernum` + item.id }}</p>
                      </div>
                    </div>
                    <div class="order_right">
                      <div class="date">
                        {{formatMonth(item.or_booking_date)}}
  
                        <span>{{formatDate(item.or_booking_date)}}</span>
                      </div>
                      <p>${{item.about_cost}}</p>
                      <router-link class="btn_blue" @click="order_id(item.id)" to="/consultantorderdetails"
                        >查看更多</router-link>
                    </div>
                  </div>
                </div>
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
import CAvatar from "@/components/CAvatar.vue";
import CSideNav from "../components/CSideNav.vue";
import CDropDown from "@/components/CDropDown.vue";
import COrderSum from "../components/COrderSum.vue";
import $ from "jquery";

export default {
  name: "consultanthistoryorderdetail",
  data() {
    return {
      currentTab: "tab1",
      defaultOption: "預約明細",
      Consultant_id: '',
      Order_table: [],
      or_booking_date: '',
      or_number: '',
      or_order_date: '',
      order_status: '',
      about_cost: '',
      about_class: '',

    };
  },
  components: {
    VHeader,
    VFooter,
    CAvatar,
    CSideNav,
    CDropDown,
    COrderSum,
  },
  methods: {
    order_id(order_id){
      this.$cookies.set('order_id',order_id)
      console.log($cookies.get('order_id'));
    },
  },
  computed: {
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
  mounted() {
    
    // this.$cookies.set("Consultant_id","1")
    this.Consultant_id = $cookies.get("Consultant_id");
    // console.log(this.or_booking_date);

    $.ajax({
      url: `${process.env.VUE_APP_AJAX_URL}consultantBooking.php`,
      dataType: "json",
      type: "POST",
      data: {
        Consultant_id: this.Consultant_id,
      },
      success: (response) => {
        console.log('成功');
        response.forEach((item) => {
          if (new Date(item.or_booking_date) > new Date()) {
            this.Order_table.push(item);
          }
        });
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
