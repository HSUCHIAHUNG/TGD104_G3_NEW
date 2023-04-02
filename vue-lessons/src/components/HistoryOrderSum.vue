<template>
  <div>
    <!-- 歷史訂單 -->
    <div class="history_order">
      <div class="order_content">
        <div class="order_left">
          <div class="order_title">
            <div class="category"></div>
            <a href="" @click.prevent="review"
              ><i class="fa-regular fa-pen-to-square"></i>撰寫評論</a
            >
          </div>
          <div class="order_summary">
            <h2>
              陪你學習 |
              <span>已完成</span>
            </h2>
            <span>音樂</span> | <span>吉他</span>
            <p><i class="fa-solid fa-hashtag"></i>訂單編號：#22PN262616758</p>
          </div>
        </div>
        <div class="order_right">
          <div class="date">
            Mar
            <span>26</span>
          </div>
          <p>$1,500</p>
          <a href="/historyorderdetail" class="btn_blue">查看更多</a>
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
export default {
  name: "HistorySum",
  data() {
    return {};
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
