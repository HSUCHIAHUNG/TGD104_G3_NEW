<template>
  <div>
    <ul class="aside_nav">
      <li>
        <router-link to="/consultant">
          <i class="fa-solid fa-gear"></i>
          <span>帳號設定</span>
        </router-link>
      </li>
      <li>
        <router-link to="/consultantinfo">
          <i class="fa-solid fa-user-gear"></i>
          <span>顧問資料</span>
        </router-link>
      </li>
      <li>
        <router-link to="/consultantbooking">
          <i class="fa-solid fa-calendar"></i>
          <span> 預約明細</span>
        </router-link>
      </li>
      <li>
        <router-link to="/consultanthistory">
          <i class="fa-regular fa-clipboard"></i>
          <span> 歷史訂單</span>
        </router-link>
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
