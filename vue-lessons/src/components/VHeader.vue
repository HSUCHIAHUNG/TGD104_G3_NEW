<template>
  <!-- header -->
  <header>
    <div class="header_container v_header">
      <i id="h_bar" class="fa-solid fa-bars"></i>
      <img src="../../../image/logo_header.png" alt="" />
      <div class="h_icon">
        <a href="" @click.prevent="memberLogin"><i class="fa-solid fa-user"></i></a>
        <a href="" @click.prevent="consultantLogin"><i class="fa-solid fa-user-tie"></i></a>
      </div>
    </div>
  </header>     
    <!-- header end -->



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
            <button
              type="button"
              class="outline_btn_blue"
              @click.prevent="signIn"
            >
              會員註冊
            </button>
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
            <button
              type="button"
              class="btn_blue"
              @click.prevent="closePwdrReset"
            >
              確認
            </button>
          </div>
        </div>
      </article>
    </div>
    <!-- 已發送密碼重置信燈箱 End-->

    <!-- 會員註冊燈箱 -->
    <div id="signin_lightbox" class="none">
      <article>
        <div class="title_img">
          <img src="../../../image/member/login_logo.png" alt="logo" />
        </div>

        <div class="inputs">
          <h1>會員註冊</h1>
          <form action="">
            <div class="input_row">
              <div class="form_group">
                <label for="" class="input_label">姓</label>
                <input type="text" class="input_text" placeholder="姓" />
              </div>
              <div class="form_group">
                <label for="" class="input_label">名</label>
                <input type="text" class="input_text" placeholder="名" />
              </div>
            </div>
            <div class="input_row">
              <div class="form_group">
                <label for="" class="input_label">身分證字號</label>
                <input
                  type="text"
                  class="input_text"
                  placeholder="身分證字號"
                />
              </div>
              <div class="form_group">
                <label for="" class="input_label">暱稱</label>
                <input type="text" class="input_text" placeholder="暱稱" />
              </div>
            </div>
            <div class="input_row">
              <div class="form_group">
                <label for="" class="input_label">信箱(帳號)</label>
                <input
                  type="text"
                  class="input_text"
                  placeholder="身分證字號"
                />
              </div>
              <div class="form_group">
                <label for="" class="input_label">電話號碼</label>
                <input type="text" class="input_text" placeholder="電話號碼" />
              </div>
            </div>
            <div class="input_row">
              <div class="form_group">
                <label for="" class="input_label">密碼</label>
                <input type="text" class="input_text" placeholder="密碼" />
              </div>
              <div class="form_group">
                <label for="" class="input_label">請再次確認密碼</label>
                <input
                  type="text"
                  class="input_text"
                  placeholder="請再次確認密碼"
                />
              </div>
            </div>
            <div class="input_row">
              <div class="form_group">
                <label class="input_label" for="area">居住地區</label>
                <select name="area" id="area" class="input_select">
                  <option value="">--請選擇--</option>
                  <option value="北部">北部</option>
                  <option value="中部">中部</option>
                  <option value="南部">南部</option>
                  <option value="東部">東部</option>
                </select>
              </div>
              <div class="form_group">
                <label class="input_label" for="gender">性別</label>
                <select name="gender" id="gender" class="input_select">
                  <option value="">--請選擇--</option>
                  <option value="male">男性</option>
                  <option value="female">女性</option>
                </select>
              </div>
            </div>
            <div class="input_row">
              <div class="form_group">
                <label class="input_label" for="birthday">生日</label>

                <input
                  type="date"
                  id="birthday"
                  name="trip-start"
                  min="1900-01-01"
                  max="2023-12-31"
                  class="input_text"
                />
              </div>
            </div>
          </form>
          <div class="btns">
            <button
              type="button"
              class="btn_modal_close outline_btn_blue"
              @click.prevent="closeSignIn"
            >
              取消
            </button>
            <button type="button" class="btn_blue">註冊會員</button>
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
    closePwdrReset() {
      document.getElementById("pwd_reset_lightbox").classList.add("none");
    },
    // 會員註冊
    signIn() {
      let member_lightbox = document.getElementById("member_lightbox");
      let lightbox = document.getElementById("signin_lightbox");
      member_lightbox.classList.add("none");
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
    // 關閉燈箱
    closeSignIn() {
      document.getElementById("signin_lightbox").classList.add("none");
    },
  },
};
</script>

<style lang="scss">
@import "../../../tgd104-sass/new_style.scss";
</style>
