<template>
  <!-- 跳至最上方的按鈕 -->
  <button
    @click="backToTop"
    v-show="isShow"
    id="BackTop"
    class="toTop-arrow"
  ></button>
  <!-- 跳至最上方的按鈕end -->

  <router-view />
</template>

<script>


export default {
  name: "app",
  // 跳至最上方的按鈕
  data() {
    return {
      isShow: false,
    };
  },
  components: {},
  methods: {
    // 滾動事件的監聽方法
    handleScroll() {
      if (window.pageYOffset > (30 * window.innerHeight) / 100) {
        this.isShow = true;
      } else {
        this.isShow = false;
      }
    },
    // 返回頂部的方法
    backToTop() {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    },
    // 跳至最上方的按鈕end

    // 開啟nav
    open_nav() {
      let center_navopen = document.getElementById("center_nav");
      // console.log('111');
      center_navopen.classList.toggle("nav_toggle");
    },
    close_nav() {
      let center_navclose = document.getElementById("center_nav");
      // console.log('111');
      center_navclose.classList.toggle("nav_toggle");
    },
    // 會員登入燈箱
    // memberLogin() {
    //   let lightbox = document.getElementById("member_lightbox");
    //   lightbox.classList.remove("none");
    //   // 點擊黑色區域也會關閉
    //   lightbox.addEventListener("click", function () {
    //     lightbox.classList.add("none");

    //     // 點擊白色區域不會關閉
    //     lightbox
    //       .querySelector("article")
    //       .addEventListener("click", function (e) {
    //         e.stopPropagation();
    //       });
    //   });
    // },
    // 顧問登入
    // consultantLogin() {
    //   let lightbox = document.getElementById("consultant_lightbox");
    //   lightbox.classList.remove("none");

    //   // 點擊黑色區域也會關閉
    //   lightbox.addEventListener("click", function () {
    //     lightbox.classList.add("none");

    //     // 點擊白色區域不會關閉
    //     lightbox
    //       .querySelector("article")
    //       .addEventListener("click", function (e) {
    //         e.stopPropagation();
    //       });
    //   });
    // },
    // 忘記密碼
    // forgetPwd() {
    //   let member_lightbox = document.getElementById("member_lightbox");
    //   let consultant_lightbox = document.getElementById("consultant_lightbox");
    //   let lightbox = document.getElementById("forgetpwd_lightbox");
    //   member_lightbox.classList.add("none");
    //   consultant_lightbox.classList.add("none");
    //   lightbox.classList.remove("none");

    //   lightbox.addEventListener("click", function () {
    //     lightbox.classList.add("none");

    //     // 點擊白色區域不會關閉
    //     lightbox
    //       .querySelector("article")
    //       .addEventListener("click", function (e) {
    //         e.stopPropagation();
    //       });
    //   });
    // },
    // 密碼重置
    // pwdReset() {
    //   let forgetpwd_lightbox = document.getElementById("forgetpwd_lightbox");
    //   let lightbox = document.getElementById("pwd_reset_lightbox");
    //   lightbox.classList.remove("none");
    //   forgetpwd_lightbox.classList.add("none");

    //   // 點擊黑色區域也會關閉
    //   lightbox.addEventListener("click", function () {
    //     lightbox.classList.add("none");

    //     // 點擊白色區域不會關閉
    //     lightbox
    //       .querySelector("article")
    //       .addEventListener("click", function (e) {
    //         e.stopPropagation();
    //       });
    //   });
    // },
    // 關閉燈箱
    // closePwdrReset() {
    //   document.getElementById("pwd_reset_lightbox").classList.add("none");
    // },
    // 會員註冊
    // signIn() {
    //   let member_lightbox = document.getElementById("member_lightbox");
    //   let lightbox = document.getElementById("signin_lightbox");
    //   member_lightbox.classList.add("none");
    //   lightbox.classList.remove("none");

    //   lightbox.addEventListener("click", function () {
    //     lightbox.classList.add("none");

    //     // 點擊白色區域不會關閉
    //     lightbox
    //       .querySelector("article")
    //       .addEventListener("click", function (e) {
    //         e.stopPropagation();
    //       });
    //   });
    // },
    // 關閉燈箱
    // closeSignIn() {
    //   document.getElementById("signin_lightbox").classList.add("none");
    // },
  },

  // 跳至最上方的按鈕
  mounted() {
    // 添加滾動事件的監聽
    window.addEventListener("scroll", this.handleScroll);
  },
  destroyed() {
    // 在組件被銷毀前，移除滾動事件的監聽
    window.removeEventListener("scroll", this.handleScroll);
  },
  // 跳至最上方的按鈕 end
};
</script>

<style lang="scss">
@import "./assets/tgd104-sass/new.scss";


/* 跳至最上方的按鈕 */
.toTop-arrow {
  width: 2.5rem;
  height: 2.5rem;
  padding: 0;
  margin: 0;
  border: 0;
  border-radius: 33%;
  opacity: 0.6;
  background: #ff7d33;
  cursor: pointer;
  position: fixed;
  right: 1rem;
  bottom: 1rem;
  // display: none;
  z-index: 3;
}
.toTop-arrow::before,
.toTop-arrow::after {
  width: 18px;
  height: 5px;
  border-radius: 3px;
  background: #fff;
  position: absolute;
  content: "";
}
.toTop-arrow::before {
  transform: rotate(-45deg) translate(0, -50%);
  left: 0.5rem;
}
.toTop-arrow::after {
  transform: rotate(45deg) translate(0, -50%);
  right: 0.5rem;
}
.toTop-arrow:focus {
  outline: none;
}
/* 跳至最上方的按鈕end */
</style>
