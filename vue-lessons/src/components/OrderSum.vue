<template>
  <div>
    <div class="order">
      <div class="order_content">
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
          <a class="btn_blue" href="/orderdetails">查看更多</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "OrderSum",
  data() {
    return {};
  },
};
</script>

<style lang="scss">
@import "../../../tgd104-sass/new_style.scss";
</style>
