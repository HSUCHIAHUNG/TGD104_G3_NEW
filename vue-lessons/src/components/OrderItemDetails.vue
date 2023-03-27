<template>
  <div>
    <div class="order">
      <div class="order_content">
        <div class="order_left">
          <div class="category"></div>
          <div class="order_summary">
            <h2>陪你學習</h2>
            <span>音樂</span> | <span>吉他</span>
            <ul class="order_content_details">
              <li>
                <i class="fa-solid fa-hashtag"></i>訂單編號：#22PN262616758
              </li>
              <li><i class="fa-solid fa-dollar-sign"></i>行程價格：1,500</li>
              <li>
                <i class="fa-regular fa-calendar"></i>行程日期：2023.03.26
              </li>
              <li>
                <i class="fa-solid fa-cart-shopping"></i>訂購日期：2023.02.27
              </li>
            </ul>
          </div>
        </div>
        <div class="order_right">
          <div class="date">
            Mar
            <span>26</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "OrderItemDetails",
  data() {
    return {};
  },
};
</script>

<style lang="scss">
@import "../../../tgd104-sass/new_style.scss";
</style>
