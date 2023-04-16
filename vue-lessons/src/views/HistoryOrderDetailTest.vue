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
              <router-link class="btn_blue" to="/travelgallery"
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
          <!-- 訂單評價 -->
          <div class="order_area">
            <div class="message_header rate_area">
              <h2>訂單評價</h2>
            </div>
            <div class="rate_content">
              <div class="render_star_block">
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
              <h3>{{ getComment.comment_title }}</h3>
              <p>
                {{ getComment.comment_content }}
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
        <form class="inputs" @submit.prevent="sendReview">
          <h1>請給這次體驗打個分數吧！</h1>
          <p>最高5顆星</p>
          <div class="star_block" @click="star_rating($event)">
            <span class="star" data-star="1"><i class="fas fa-star"></i></span>
            <span class="star" data-star="2"><i class="fas fa-star"></i></span>
            <span class="star" data-star="3"><i class="fas fa-star"></i></span>
            <span class="star" data-star="4"><i class="fas fa-star"></i></span>
            <span class="star" data-star="5"><i class="fas fa-star"></i></span>
          </div>
          <label for="" class="input_label">評論標題</label>
          <input
            type="text"
            class="input_text"
            placeholder="請輸入評論標題"
            v-model="comment_title"
          />
          <br />
          <label for="" class="input_label">請告訴我們你的想法</label>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="最高字數200字"
            v-model="comment_content"
          ></textarea>
          <div class="btns">
            <button type="button" class="outline_btn_blue" @click="CloseReview">
              取消
            </button>
            <button type="submit" class="btn_blue">送出</button>
          </div>
        </form>
      </article>
    </div>
    <!-- 評論燈箱 End-->
    <VFooter></VFooter>
  </div>
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
  name: "HistoryOrder",
  data() {
    return {
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
    OrderItemDetails,
    OrderMessage,
  },
  methods: {
    // 開啟評論燈箱
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
    //關閉評論
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
  mounted() {
    let order_id = this.$cookies.get("Order_id");
    // 取得訂單評價
    $.ajax({
      url: "http://localhost/NEW_G3/vue-lessons/src/api/orderReview.php",
      dataType: "json",
      type: "POST",
      data: {
        order_id: order_id,
      },
      success: (response) => {
        this.getComment = response[0];
        console.log(this.getComment.star);
        console.log(typeof this.getComment.star);
        console.log(this.getComment.comment_content);
        console.log(this.getComment.comment_title);

        // 渲染評論
        let star_spans = document
          .querySelector(".render_star_block")
          .querySelectorAll(".star");
        let render_star_num = parseInt(this.getComment.star);
        console.log(render_star_num);
        star_spans.forEach((item, i) => {
          if (render_star_num >= item.dataset.star) {
            star_spans[i].classList.add("-on");
          } else {
            star_spans[i].classList.remove("-on");
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
.render_star_block {
  display: inline-block;
}
div.render_star_block > span.star {
  cursor: pointer;
  display: inline-block;
  margin-right: 3px;
}
div.render_star_block > span.star.-on {
  color: yellow;
}
</style>
