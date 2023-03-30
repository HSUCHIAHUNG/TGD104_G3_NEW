<template>
    <ul class="checkout_list">
      <li class="checkout_method">
        <input type="radio" />
        <span>信用卡/簽帳金融卡</span>
      </li>
      <li class="checkout_method">
        <input type="radio" />
        <span>ATM 轉帳</span>
      </li>
    </ul>
</template>













<script>
    export default {
        name: "Checkout",
        data() {
            return {};
        },
    };
</script>


<style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";
</style>