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
              <h3>{{ getComment.or_comment_title }}</h3>
              <p>
                {{ getComment.or_comment }}
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
      order_category: "",
      order_info: [],
      order_message: [],
      send_message: "",
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
        url: "http://localhost/NEW_G3/vue-lessons/src/api/memberMessage.php",
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
    // 開啟評論燈箱
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
    // 取得訂單資訊
    $.ajax({
      url: "http://localhost/NEW_G3/vue-lessons/src/api/orderDetails.php",
      dataType: "json",
      type: "POST",
      data: {
        order_id: order_id,
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
    // 取得訂單訊息
    $.ajax({
      url: "http://localhost/NEW_G3/vue-lessons/src/api/orderMessage.php",
      dataType: "json",
      type: "POST",
      data: {
        order_id: order_id,
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
        console.log(this.getComment.or_star);
        console.log(typeof this.getComment.or_star);
        console.log(this.getComment.or_comment);
        console.log(this.getComment.or_comment_title);

        // 渲染評論
        let star_spans = document
          .querySelector(".render_star_block")
          .querySelectorAll(".star");
        let render_star_num = parseInt(this.getComment.or_star);
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
