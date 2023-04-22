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
            <h1>歷史訂單</h1>
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
          <!------------ 訂單列表 ------------>
          <div class="order_list">
            <!-- 學習訂單 -->
            <div v-if="currentTab == 'tab1'">
              <template v-for="(item, index) in studyOrder" :key="item.id">
                <div class="history_order">
                  <div class="order_content">
                    <div class="order_left">
                      <div class="order_title">
                        <div class="category"></div>
                        <a href="" @click.prevent="review"
                          ><i class="fa-regular fa-pen-to-square"></i
                          >撰寫評論</a
                        >
                      </div>
                      <div class="order_summary">
                        <h2>
                          陪你學習 |
                          <span>已完成</span>
                        </h2>
                        <span>{{ item.s_category }}</span> |
                        <span>{{ item.about_class }}</span>
                        <p>
                          <i class="fa-solid fa-hashtag"></i>訂單編號：#{{
                            `ordernum` + item.id
                          }}
                        </p>
                      </div>
                    </div>
                    <div class="order_right">
                      <div class="date">
                        {{ formatMonth(item.or_booking_date) }}
                        <span>{{ formatDate(item.or_booking_date) }}</span>
                      </div>
                      <p>{{ price(item.about_cost) }}</p>
                      <router-link
                        to="/historyorderdetail"
                        class="btn_blue"
                        @click="setOrderId(item.id)"
                        >查看更多</router-link
                      >
                    </div>
                  </div>
                </div>

                <!-- 評論燈箱 -->
                <div id="review_lightbox" class="none">
                  <article>
                    <div class="inputs">
                      <h1>請給這次體驗打個分數吧！</h1>
                      <p>最高5顆星</p>
                      <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                      <label for="" class="input_label">評論標題</label>
                      <input
                        type="text"
                        class="input_text"
                        placeholder="請輸入評論標題"
                      />
                      <br />
                      <label for="" class="input_label"
                        >請告訴我們你的想法</label
                      >
                      <textarea
                        name=""
                        id=""
                        cols="30"
                        rows="10"
                        placeholder="最高字數200字"
                      ></textarea>
                      <div class="btns">
                        <button
                          type="button"
                          class="outline_btn_blue"
                          @click="CloseReview"
                        >
                          取消
                        </button>
                        <button type="button" class="btn_blue">送出</button>
                      </div>
                    </div>
                  </article>
                </div>
                <!-- 評論燈箱 End-->
              </template>
            </div>
            <!-- 旅行訂單 -->
            <div v-if="currentTab == 'tab2'">
              <template v-for="(item, index) in travelOrder" :key="item.id">
                <div class="history_order">
                  <div class="order_content">
                    <div class="order_left">
                      <div class="order_title">
                        <div class="category"></div>
                        <a href="" @click.prevent="review"
                          ><i class="fa-regular fa-pen-to-square"></i
                          >撰寫評論</a
                        >
                      </div>
                      <div class="order_summary">
                        <h2>
                          陪你旅行 |
                          <span>已完成</span>
                        </h2>
                        <span>{{ item.tro_area }}</span> |
                        <span>{{ item.about_class }}</span>
                        <p>
                          <i class="fa-solid fa-hashtag"></i>訂單編號：#{{
                            `ordernum` + item.id
                          }}
                        </p>
                      </div>
                    </div>
                    <div class="order_right">
                      <div class="date">
                        {{ formatMonth(item.or_booking_date) }}
                        <span>{{ formatDate(item.or_booking_date) }}</span>
                      </div>
                      <p>{{ price(item.about_cost) }}</p>
                      <router-link
                        to="/historyorderdetail"
                        class="btn_blue"
                        @click="setOrderId(item.id)"
                        >查看更多</router-link
                      >
                    </div>
                  </div>
                </div>

                <!-- 評論燈箱 -->
                <div id="review_lightbox" class="none">
                  <article>
                    <div class="inputs">
                      <h1>請給這次體驗打個分數吧！</h1>
                      <p>最高5顆星</p>
                      <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                      <label for="" class="input_label">評論標題</label>
                      <input
                        type="text"
                        class="input_text"
                        placeholder="請輸入評論標題"
                      />
                      <br />
                      <label for="" class="input_label"
                        >請告訴我們你的想法</label
                      >
                      <textarea
                        name=""
                        id=""
                        cols="30"
                        rows="10"
                        placeholder="最高字數200字"
                      ></textarea>
                      <div class="btns">
                        <button
                          type="button"
                          class="outline_btn_blue"
                          @click="CloseReview"
                        >
                          取消
                        </button>
                        <button type="button" class="btn_blue">送出</button>
                      </div>
                    </div>
                  </article>
                </div>
                <!-- 評論燈箱 End-->
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
import DropDown from "../components/DropDown.vue";
import HistoryOrderSum from "../components/HistoryOrderSum.vue";

// 日期格式
import { format } from "date-fns";
import { monthsInQuarter } from "date-fns";

export default {
  name: "MemberHistory",
  data() {
    return {
      currentTab: "tab1",
      defaultOption: "歷史訂單",
      studyOrder: [],
      travelOrder: [],
    };
  },
  components: {
    VHeader,
    VFooter,
    Avatar,
    SideNav,
    DropDown,
    HistoryOrderSum,
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
    review() {
      let lightbox = document.getElementById("review_lightbox");
      lightbox.classList.remove("none");

      // 點擊白色區域不會關閉
      lightbox.querySelector("article").addEventListener("click", function (e) {
        e.stopPropagation();
      });

      // 點擊黑色區域也會關閉
      lightbox.addEventListener("click", function () {
        lightbox.classList.add("none");
      });
    },
    CloseReview() {
      document.getElementById("review_lightbox").classList.add("none");
    },
  },
  computed: {
    // 改月份格式
    formatMonth(datestr) {
      return (datestr) => {
        const d = new Date(datestr);
        return format(d, "MMM");
      };
    },
    // 抓日期
    formatDate(dateStr) {
      return (date) => format(new Date(date), "dd");
    },
  },
  mounted() {
    let Member_id = $cookies.get("Member_id");
    console.log(Member_id);

    // 陪你旅行
    $.ajax({
      url: "http://localhost/TGD_104_G3/vue-lessons/src/api/memberBookingTravel.php",
      dataType: "json",
      type: "POST",
      data: {
        member_id: Member_id,
      },
      success: (response) => {
        console.log(response);
        response.forEach((item) => {
          console.log(item.or_booking_date);
          console.log(new Date(item.or_booking_date));
          console.log(new Date());
          if (new Date(item.or_booking_date) < new Date()) {
            this.travelOrder.push(item);
          }
          console.log(this.travelOrder);
        });
        // this.travelOrder = response;
        // console.log(this.travelOrder);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      },
    });
    // 陪你學習
    $.ajax({
      url: "http://localhost/TGD_104_G3/vue-lessons/src/api/memberBookingMusic.php",
      dataType: "json",
      type: "POST",
      data: {
        member_id: Member_id,
      },
      success: (response) => {
        console.log(response);
        response.forEach((item) => {
          console.log(item.or_booking_date);
          console.log(new Date(item.or_booking_date));
          console.log(new Date());
          if (new Date(item.or_booking_date) < new Date()) {
            this.studyOrder.push(item);
          }
          console.log(this.studyOrder);
        });
        // this.studyOrder = response;
        // console.log(this.studyOrder);
        // document.getElementById("tab1").click();
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
.order {
  margin-bottom: 20px;
}
</style>
