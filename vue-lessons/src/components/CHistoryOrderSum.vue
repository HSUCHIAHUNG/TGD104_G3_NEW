<template>
  <div>
    <!-- 歷史訂單 -->
    <div class="c_history_order">
      <div class="order_content">
        <div class="order_left">
          <div class="order_title">
            <div class="category"></div>
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
          <a href="#" class="btn_blue">查看更多</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CHistoryOrderSum",
  data() {
    return {};
  },
  methods: {},
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
