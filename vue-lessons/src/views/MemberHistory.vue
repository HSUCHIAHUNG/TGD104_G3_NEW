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
          <div class="order_list">
            <!-- 學習訂單 -->
            <div v-if="currentTab == 'tab1'">
              <template v-for="(item, index) in studyOrder" :key="item.id">
                <div class="history_order">
                  <div class="order_content">
                    <div class="order_left">
                      <div class="order_title">
                        <div class="category"></div>
                        <a href="" @click.prevent="review(item.id)"
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
                    <form class="inputs" @submit.prevent="sendReview">
                      <h1>請給這次體驗打個分數吧！</h1>
                      <p>最高5顆星</p>
                      <div class="star_block" @click="star_rating($event)">
                        <span class="star" data-star="1"
                          ><i class="fas fa-star"></i
                        ></span>
                        <span class="star" data-star="2"
                          ><i class="fas fa-star"></i
                        ></span>
                        <span class="star" data-star="3"
                          ><i class="fas fa-star"></i
                        ></span>
                        <span class="star" data-star="4"
                          ><i class="fas fa-star"></i
                        ></span>
                        <span class="star" data-star="5"
                          ><i class="fas fa-star"></i
                        ></span>
                      </div>
                      <label for="" class="input_label">評論標題</label>
                      <input
                        type="text"
                        class="input_text"
                        placeholder="請輸入評論標題"
                        v-model="comment_title"
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
                        v-model="comment_content"
                      ></textarea>
                      <div class="btns">
                        <button
                          type="button"
                          class="outline_btn_blue"
                          @click="CloseReview"
                        >
                          取消
                        </button>
                        <button type="submit" class="btn_blue">送出</button>
                      </div>
                    </form>
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
                        <a href="" @click.prevent="review(item.id)"
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
                    <form class="inputs" @submit.prevent="sendReview">
                      <h1>請給這次體驗打個分數吧！</h1>
                      <p>最高5顆星</p>
                      <div class="star_block" @click="star_rating($event)">
                        <span class="star" data-star="1"
                          ><i class="fas fa-star"></i
                        ></span>
                        <span class="star" data-star="2"
                          ><i class="fas fa-star"></i
                        ></span>
                        <span class="star" data-star="3"
                          ><i class="fas fa-star"></i
                        ></span>
                        <span class="star" data-star="4"
                          ><i class="fas fa-star"></i
                        ></span>
                        <span class="star" data-star="5"
                          ><i class="fas fa-star"></i
                        ></span>
                      </div>
                      <label for="" class="input_label">評論標題</label>
                      <input
                        type="text"
                        class="input_text"
                        placeholder="請輸入評論標題"
                        v-model="comment_title"
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
                        v-model="comment_content"
                      ></textarea>
                      <div class="btns">
                        <button
                          type="button"
                          class="outline_btn_blue"
                          @click="CloseReview"
                        >
                          取消
                        </button>
                        <button type="submit" class="btn_blue">送出</button>
                      </div>
                    </form>
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
      getComment: [],
      star_num: "",
      comment_title: "",
      comment_content: "",
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
    // 開啟評論燈箱
    review(id) {
      this.$cookies.set("Order_id", id);
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
    //評分
    star_rating($event) {
      if ($event.target.closest("span")) {
        let span_el = $event.target.closest("span");
        let star_span = span_el
          .closest("div.star_block")
          .querySelectorAll(".star");
        this.star_num = span_el.getAttribute("data-star");
        console.log(this.star_num);
        // 讓星星亮
        star_span.forEach((item, i) => {
          if (this.star_num >= item.dataset.star) {
            star_span[i].classList.add("-on");
          } else {
            star_span[i].classList.remove("-on");
          }
        });
      }
    },
    sendReview() {
      let order_id = this.$cookies.get("Order_id");
      console.log(order_id);
      console.log(this.comment_content);
      console.log(this.comment_title);
      console.log(this.star_num);
      $.ajax({
        url: "http://localhost/NEW_G3/vue-lessons/src/api/sendReview.php",
        dataType: "text",
        type: "POST",
        data: {
          order_id: order_id,
          star: this.star_num,
          comment_title: this.comment_title,
          comment_content: this.comment_content,
        },
        success: function (response) {
          alert(response);
          location.reload();
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
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
      url: "http://localhost/NEW_G3/vue-lessons/src/api/memberBookingTravel.php",
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
      url: "http://localhost/NEW_G3/vue-lessons/src/api/memberBookingMusic.php",
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
