<template>
  <div>
    <div class="order">
      <div class="c_order_content">
        <div class="order_left">
          <div class="category"></div>
          <div class="order_summary">
            <h2>陪你學習</h2>
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
          <router-link class="btn_blue" to="/consultantorderdetails"
            >查看更多</router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "COrderSum",
  data() {
    return {};
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
