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
          <a @click.prevent="forgetPwd">忘記密碼?</a>
          <div class="btns">
            <button type="button" class="outline_btn_blue">會員註冊</button>
            <button type="button" class="btn_blue">登入</button>
          </div>
        </div>
      </article>
    </div>
    <!-- 會員登入燈箱 End-->

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
          <a @click.prevent="forgetPwd">忘記密碼?</a>
          <div class="btns">
            <button type="button" class="outline_btn_blue">加入陪你</button>
            <button type="button" class="btn_blue">登入</button>
          </div>
        </div>
      </article>
    </div>
    <!-- 顧問登入燈箱 End-->

    <!-- 忘記密碼燈箱 -->
    <div id="forgetpwd_lightbox" class="none">
      <article>
        <div class="inputs">
          <h1>忘記密碼</h1>
          <label for="" class="input_label">帳號(信箱)</label>
          <input type="text" class="input_text" placeholder="請輸入電子郵件" />
          <div class="btns">
            <button type="button" class="btn_blue" @click.prevent="pwdReset">
              發送密碼重置信
            </button>
          </div>
        </div>
      </article>
    </div>
    <!-- 忘記密碼燈箱 End-->

    <!-- 已發送密碼重置信燈箱-->
    <div id="pwd_reset_lightbox" class="none">
      <article>
        <div class="inputs">
          <h1>已發送密碼重置信</h1>
          <p>請至您的信箱重置密碼!</p>
          <div class="btns">
            <button type="button" class="btn_blue" @click.prevent="closeModal">
              確認
            </button>
          </div>
        </div>
      </article>
    </div>
    <!-- 已發送密碼重置信燈箱 End-->

    <!-- 會員註冊燈箱 -->
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
          <a @click.prevent="forgetPwd">忘記密碼?</a>
          <div class="btns">
            <button type="button" class="outline_btn_blue">會員註冊</button>
            <button type="button" class="btn_blue">登入</button>
          </div>
        </div>
      </article>
    </div>
    <!-- 會員註冊燈箱 End-->
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
    // 忘記密碼
    forgetPwd() {
      let member_lightbox = document.getElementById("member_lightbox");
      let consultant_lightbox = document.getElementById("consultant_lightbox");
      let lightbox = document.getElementById("forgetpwd_lightbox");
      member_lightbox.classList.add("none");
      consultant_lightbox.classList.add("none");
      lightbox.classList.remove("none");

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
    // 密碼重置
    pwdReset() {
      let forgetpwd_lightbox = document.getElementById("forgetpwd_lightbox");
      let lightbox = document.getElementById("pwd_reset_lightbox");
      lightbox.classList.remove("none");
      forgetpwd_lightbox.classList.add("none");

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
      let lightbox = document.getElementById("pwd_reset_lightbox");
      lightbox.classList.add("none");
    },
  },
};
</script>

<style lang="scss">
@import "../../../tgd104-sass/new_style.scss";
</style>
