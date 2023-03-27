<template>
  <div class="v_header">
    <a href="" @click.prevent="memberLogin"
      ><i class="fa-solid fa-user-large"></i
    ></a>
    <a href="" @click.prevent="consultantLogin">
      <i class="fa-solid fa-user-tie"></i>
    </a>

    <!-- 會員登入燈箱 -->
    <div id="member_lightbox" class="none">
      <article>
        <div class="title_img">
          <img src="../../../image/member/login_logo.png" alt="logo" />
        </div>

        <div class="inputs">
          <h1>會員登入</h1>
          <label for="" class="input_label">帳號(信箱)</label>
          <input type="text" class="input_text" />
          <br />
          <label for="" class="input_label">密碼</label>
          <input type="text" class="input_text" />
          <a>忘記密碼?</a>
          <div class="btns">
            <button type="button" class="outline_btn_blue">會員註冊</button>
            <button type="button" class="btn_blue">登入</button>
          </div>
        </div>
      </article>
    </div>
    <!-- 顧問登入燈箱 -->
    <div id="consultant_lightbox" class="none">
      <article>
        <div class="title_img">
          <img src="../../../image/member/login_logo.png" alt="logo" />
        </div>

        <div class="inputs">
          <h1>顧問登入</h1>
          <label for="" class="input_label">帳號(信箱)</label>
          <input type="text" class="input_text" />
          <br />
          <label for="" class="input_label">密碼</label>
          <input type="text" class="input_text" />
          <a>忘記密碼?</a>
          <div class="btns">
            <button type="button" class="outline_btn_blue">加入陪你</button>
            <button type="button" class="btn_blue">登入</button>
          </div>
        </div>
      </article>
    </div>
  </div>
</template>

<script>
export default {
  name: "VHeader",
  data() {
    return {};
  },
  methods: {
    // 會員登入燈箱
    memberLogin() {
      let lightbox = document.getElementById("member_lightbox");
      lightbox.classList.remove("none");

      // 點擊黑色區域也會關閉
      lightbox.addEventListener("click", function () {
        lightbox.classList.add("none");

        // 點擊白色區域不會關閉
        lightbox
          .querySelector("article")
          .addEventListener("click", function (e) {
            e.stopPropagation();
          });
      });
    },
    // 關閉燈箱
    closeModal() {
      let lightbox = document.getElementById("member_lightbox");
      lightbox.classList.add("none");
    },
    // 顧問登入
    consultantLogin() {
      let lightbox = document.getElementById("consultant_lightbox");
      lightbox.classList.remove("none");

      // 點擊黑色區域也會關閉
      lightbox.addEventListener("click", function () {
        lightbox.classList.add("none");

        // 點擊白色區域不會關閉
        lightbox
          .querySelector("article")
          .addEventListener("click", function (e) {
            e.stopPropagation();
          });
      });
    },
  },
};
</script>

<style lang="scss">
@import "../../../tgd104-sass/new_style.scss";
</style>
