<script setup>
import { RouterLink, RouterView } from "vue-router";
</script>

<template>
  <div class="BackendContainer">
    <!-- <sales-management></sales-management> -->
    <nav class="BackendNav">
      <h1>Hello, Alden</h1>
      <router-link to="/BackendCenter/SalesManagement">
        <i class="fa-solid fa-tag"></i>
        <span>銷售管理</span>
      </router-link>
      <router-link to="/BackendCenter/MemberManagement">
        <i class="fa-solid fa-address-book"></i>
        <span>會員管理</span>
      </router-link>
      <router-link to="/BackendCenter/ConsultantManagement">
        <i class="fa-solid fa-user-tie"></i>
        <span>顧問管理</span>
      </router-link>
      <router-link to="/BackendCenter/OrderManagement">
        <i class="fa-solid fa-chart-line"></i>
        <span>訂單管理</span>
      </router-link>
      <router-link to="/BackendCenter/ConsultantReview">
        <i class="fa-solid fa-magnifying-glass"></i>
        <span>顧問審核</span>
      </router-link>
      <a href="#">
        <i class="fa-solid fa-right-from-bracket fa-rotate-180"></i>
        <span>登出</span>
      </a>
    </nav>
    <router-view />
  </div>
</template>

<script setup></script>

<script>
// import AccountSetting from '../components/AccountSetting.vue'

export default {
  data() {
    return {};
  },
  components: {},
};
</script>

<style lang="scss">
.BackendContainer {
  display: flex;
  background-color: #fdf8ee;
  height: inherit !important;
  .BackendNav {
    border-radius: 0 10px 10px 0;
    background-color: #faeecd;
    display: flex;
    flex-direction: column;
    // padding: 30px;
    box-sizing: border-box;
    max-width: 300px;
    width: 100%;
    position: relative;
    height: inherit !important;

    h1 {
      font-size: 40px;
      font-weight: b;
      color: #ff7426;
      padding: 30px 30px 30px 0px;
      text-align: center;
    }

    a {
      font-weight: bold;
      color: #2c3e50;
      text-align: left;
      font-size: 22px;
      padding: 10px;
      padding: 10px 0px 10px 30px;
      width: 100%;
      &:last-child {
        position: absolute;
        bottom: 0;
        color: #f5f5f5;
        background-color: #ff7426;
        border-radius: 0 0 10px 0;
        i {
          padding-bottom: 8px;
        }
      }

      span {
        padding-left: 20px;
      }

      &.router-link-exact-active {
        color: #42b983;
      }
    }
  }
}

@import "../assets/tgd104-sass/new_style.scss";
</style>
