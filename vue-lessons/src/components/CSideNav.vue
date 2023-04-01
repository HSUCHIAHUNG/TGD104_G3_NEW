<template>
  <div>
    <ul class="aside_nav">
      <li>
        <a href="/consultant">
          <i class="fa-solid fa-gear"></i>
          <span>帳號設定</span>
        </a>
      </li>
      <li>
        <a href="/consultantinfo">
          <i class="fa-solid fa-user-gear"></i>
          <span>顧問資料</span>
        </a>
      </li>
      <li>
        <a href="/consultantbooking">
          <i class="fa-solid fa-calendar"></i>
          <span> 預約明細</span>
        </a>
      </li>
      <li>
        <a href="/consultanthistory">
          <i class="fa-regular fa-clipboard"></i>
          <span> 歷史訂單</span>
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "CSideNav.vue",
  data() {
    return {};
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
