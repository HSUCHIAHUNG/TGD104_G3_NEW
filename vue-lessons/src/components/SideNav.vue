<template>
  <div>
    <ul class="aside_nav">
      <li>
        <a href="/#/member">
          <i class="fa-solid fa-gear"></i>
          <span>帳號設定</span>
        </a>
      </li>
      <li>
        <a href="/#/memberfav">
          <i class="fa-solid fa-heart"></i>
          <span>收藏清單</span>
        </a>
      </li>
      <li>
        <a href="/#/memberbooking">
          <i class="fa-solid fa-calendar"></i>
          <span> 預約明細</span>
        </a>
      </li>
      <li>
        <a href="/#/memberhistory">
          <i class="fa-regular fa-clipboard"></i>
          <span> 歷史訂單</span>
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "SideNav",
  data() {
    return {};
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
