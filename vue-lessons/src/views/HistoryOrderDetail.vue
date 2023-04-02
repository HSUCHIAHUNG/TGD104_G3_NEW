<template>
  <div>
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
              <h1>歷史訂單</h1>
            </div>
            <div class="order_content">
              <order-item-details></order-item-details>
            </div>
            <div class="consultant_info">
              <div class="consultant_info_left">
                <img src="../assets/image/member/consultant_info.jpg" alt="" />
                <h3>
                  預約顧問：
                  <br />
                  <span>裴大尼</span>｜
                  <span>5年經驗登山嚮導</span>
                </h3>
              </div>
              <a class="btn_blue">查看顧問資料</a>
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
          <!-- 訂單評價 -->
          <div class="order_area">
            <div class="message_header rate_area">
              <h2>訂單評價</h2>
            </div>
            <div class="rate_content">
              <ul class="consultant_rate">
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
              </ul>
              <h3>真心超推大尼顧問!</h3>
              <p>
                我覺得大尼顧問真的很值得信任。他們不僅僅關心你的問題，還會盡力為你提供最好的解決方案。
              </p>
              <a href="" @click.prevent="review"
                ><i class="fa-regular fa-pen-to-square"></i>撰寫評論</a
              >
            </div>
          </div>
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
          <input type="text" class="input_text" placeholder="請輸入評論標題" />
          <br />
          <label for="" class="input_label">請告訴我們你的想法</label>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="最高字數200字"
          ></textarea>
          <div class="btns">
            <button type="button" class="outline_btn_blue" @click="CloseReview">
              取消
            </button>
            <button type="button" class="btn_blue">送出</button>
          </div>
        </div>
      </article>
    </div>
    <!-- 評論燈箱 End-->
  </div>
</template>

<script>
//  import VHeader from '@/components/VHeader.vue'
//  import VFooter from '@/components/VFooter.vue'
import Avatar from "@/components/Avatar.vue";
import SideNav from "@/components/SideNav.vue";
import OrderItemDetails from "../components/OrderItemDetails.vue";
import OrderMessage from "../components/OrderMessage.vue";

export default {
  name: "HistoryOrder",
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
  methods: {
    review() {
      let lightbox = document.getElementById("review_lightbox");
      lightbox.classList.remove("none");

      // 點擊黑色區域也會關閉
      lightbox.addEventListener("click", function () {
        lightbox.classList.add("none");

        // 點擊白色區域不會關閉
        lightbox
          .querySelector("article")
          .addEventListener("click", function (e) {
            e.stopPropagation();
          });
      });
    },
    CloseReview() {
      document.getElementById("review_lightbox").classList.add("none");
    },
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
