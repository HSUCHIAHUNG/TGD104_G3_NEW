<template>
  <div>
    <ul class="aside_nav">
      <li>
        <router-link to="/member">
          <i class="fa-solid fa-gear"></i>
          <span>帳號設定</span>
        </router-link>
      </li>
      <li>
        <router-link to="/memberfav">
          <i class="fa-solid fa-heart"></i>
          <span>收藏清單</span>
        </router-link>
      </li>
      <li>
        <router-link to="/memberbooking">
          <i class="fa-solid fa-calendar"></i>
          <span> 預約明細</span>
        </router-link>
      </li>
      <li>
        <router-link to="/memberhistory">
          <i class="fa-regular fa-clipboard"></i>
          <span> 歷史訂單</span>
        </router-link>
      </li>
      <li @click="logout">
        <router-link to="/main">
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
          <span> 登出 </span>
        </router-link>
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
  methods: {
    logout() {
      this.$cookies.remove("Member_id");
    },
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
