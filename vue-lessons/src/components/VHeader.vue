<template>
  <!-- header -->
  <header>
    <div style="justify-content: space-around" class="header_container v_header">
      
      <a href="" id="h_bar" @click.prevent="open_nav"
        ><i class="fa-solid fa-bars"></i>
      </a>
      <router-link to="/main">
        <img src="../assets/image/logo_header.png" alt="" />
      </router-link>
      <div class="h_icon">
        <a href="" @click.prevent="memberLogin"
          ><i class="fa-solid fa-user"></i
        ></a>
        <a href="" @click.prevent="consultantLogin"
          ><i class="fa-solid fa-user-tie"></i
        ></a>
      </div>
    </div>
  </header>
  <!-- header end -->

  <div class="v_header">
    <!-- <a href="" @click.prevent="memberLogin"
      ><i class="fa-solid fa-user-large"></i
    ></a>
    <a href="" @click.prevent="consultantLogin">
      <i class="fa-solid fa-user-tie"></i>
    </a> -->

    <!-- 會員登入燈箱 -->
    <div id="member_lightbox" class="none">
      <article>
        <div class="title_img">
          <img src="../assets/image/member/login_logo.png" alt="logo" />
        </div>
        <form @submit.prevent="mLogin" class="inputs">
          <h1>會員登入</h1>
          <label for="" class="input_label">帳號(信箱)</label>
          <input
            type="email"
            class="input_text"
            v-model="mlogin.m_mail"
            required
          />
          <br />
          <label for="" class="input_label">密碼</label>
          <input
            type="password"
            class="input_text"
            v-model="mlogin.m_password"
            required
          />
          <a @click.prevent="forgetPwd">忘記密碼?</a>
          <div class="btns">
            <button
              type="button"
              class="outline_btn_blue"
              @click.prevent="signIn"
            >
              會員註冊
            </button>
            <button type="submit" class="btn_blue">登入</button>
          </div>
        </form>
      </article>
    </div>
    <!-- 會員登入燈箱 End-->

    <!-- 顧問登入燈箱 -->

    <div id="consultant_lightbox" class="none">
      <article>
        <div class="title_img">
          <img src="../assets/image/member/login_logo.png" alt="logo" />
        </div>

        <div class="inputs">
          <form class="inputs" @submit.prevent="cLogin">
            <h1>顧問登入</h1>
            <label for="" class="input_label">帳號(信箱)</label>
            <input
              type="email"
              class="input_text"
              v-model="clogin.c_mail"
              required
            />
            <br />
            <label for="" class="input_label">密碼</label>
            <input
              type="password"
              class="input_text"
              v-model="clogin.c_password"
              required
            />
            <!-- <br /> -->
            <a @click.prevent="forgetPwd">忘記密碼?</a>
            <div class="btns">
              <router-link to="/Join"
                ><button type="button" class="outline_btn_blue">
                  加入陪你
                </button></router-link
              >
              <button type="submit" class="btn_blue">登入</button>
            </div>
          </form>
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
          <img src="../assets/image/member/login_logo.png" alt="logo" />
        </div>

        <div class="inputs">
          <h1>會員註冊</h1>
          <form @submit.prevent="signUp" v-if="member">
            <div class="input_row">
              <div class="form_group">
                <label for="" class="input_label">姓</label>
                <input
                  type="text"
                  class="input_text"
                  placeholder="姓"
                  v-model="member.m_firstname"
                  required
                />
              </div>
              <div class="form_group">
                <label for="" class="input_label">名</label>
                <input
                  type="text"
                  class="input_text"
                  placeholder="名"
                  v-model="member.m_lastname"
                  required
                />
              </div>
            </div>
            <div class="input_row">
              <div class="form_group">
                <label for="" class="input_label">身分證字號</label>
                <input
                  type="text"
                  class="input_text"
                  placeholder="身分證字號"
                  v-model="member.m_id"
                  required
                />
              </div>
              <div class="form_group">
                <label for="" class="input_label">暱稱</label>
                <input
                  type="text"
                  class="input_text"
                  placeholder="暱稱"
                  v-model="member.m_nickname"
                  required
                />
              </div>
            </div>
            <div class="input_row">
              <div class="form_group">
                <label for="" class="input_label">信箱(帳號)</label>
                <input
                  type="email"
                  class="input_text"
                  placeholder="信箱(帳號)"
                  v-model="member.m_mail"
                  required
                />
              </div>
              <div class="form_group">
                <label for="" class="input_label">電話號碼</label>
                <input
                  type="number"
                  class="input_text"
                  placeholder="電話號碼"
                  v-model="member.m_phone"
                  required
                />
              </div>
            </div>
            <div class="input_row">
              <div class="form_group">
                <label for="" class="input_label">密碼</label>
                <input
                  type="password"
                  class="input_text"
                  placeholder="密碼"
                  v-model="member.m_password"
                  required
                />
              </div>
              <div class="form_group">
                <label for="" class="input_label">請再次確認密碼</label>
                <input
                  type="password"
                  class="input_text"
                  placeholder="請再次確認密碼"
                  v-model="member.check_pwd"
                  required
                />
              </div>
            </div>
            <div class="input_row">
              <div class="form_group">
                <label class="input_label" for="area">居住地區</label>
                <select
                  name="area"
                  id="area"
                  class="input_select"
                  v-model="member.m_area"
                  required
                >
                  <option value="">--請選擇--</option>
                  <option value="北部">北部</option>
                  <option value="中部">中部</option>
                  <option value="南部">南部</option>
                  <option value="東部">東部</option>
                </select>
              </div>
              <div class="form_group">
                <label class="input_label" for="gender">性別</label>
                <select
                  name="gender"
                  id="gender"
                  class="input_select"
                  v-model="member.m_gender"
                  required
                >
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
                  v-model="member.m_birth"
                  required
                />
              </div>
            </div>

            <div class="btns">
              <button
                type="button"
                class="btn_modal_close outline_btn_blue"
                @click.prevent="closeSignIn"
              >
                取消
              </button>
              <button type="submit" class="btn_blue">註冊會員</button>
            </div>
          </form>
        </div>
      </article>
    </div>
    <!-- 會員註冊燈箱 End-->
  </div>

  <div id="center_nav">
    <div id="close_bar" @click.prevent="close_nav">
      <i class="fa-solid fa-xmark"></i>
    </div>
    <nav class="center_content">
      <!-- <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link> | -->
      <div class="center_nav_logo"></div>

      <button class="btn_yellow" @click.prevent="close_nav">
        <router-link to="/main">首頁</router-link>
      </button>

      <button class="btn_yellow" @click.prevent="close_nav">
        <router-link to="/Respect">關於我們</router-link>
      </button>

      <!-- <button class="btn_yellow" @click.prevent="close_nav">
        <router-link to="/BackendCenter" exact>後台管理</router-link>
      </button> -->

      <button class="btn_yellow" @click.prevent="close_nav">
        <router-link to="/learning">陪你學習</router-link>
      </button>

      <button class="btn_yellow" @click.prevent="close_nav">
        <router-link to="/travel">陪你旅行</router-link>
      </button>

      <button class="btn_yellow" @click.prevent="close_nav">
        <router-link to="/join">加入陪你</router-link>
      </button>

      <button class="btn_yellow" @click.prevent="close_nav">
        <router-link to="/member" class="center_content_btn"
          >會員中心</router-link
        >
      </button>

      <button class="btn_yellow" @click.prevent="close_nav">
        <router-link to="/consultant">顧問中心</router-link>
      </button>

      <div class="center_nav_icon">
        <a href="#"><i class="fa-brands fa-facebook"></i> </a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-line"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
      </div>
      <!-- <router-link to="/learning">陪你學習</router-link> | -->
    </nav>
  </div>

  <!-- <router-view /> -->
  <!-- <VFooter></VFooter> -->
</template>

<script>
import $ from "jquery";
import { now } from "lodash";

export default {
  name: "VHeader",
  data() {
    return {
      // 會員註冊
      member: {
        m_firstname: "",
        m_lastname: "",
        m_id: "",
        m_nickname: "",
        m_mail: "",
        m_phone: "",
        m_password: "",
        m_area: "",
        m_gender: "",
        m_birth: "",
        check_pwd: "",
      },
      // 會員登入
      mlogin: {
        m_mail: "",
        m_password: "",
      },
      // 顧問登入
      clogin: {
        c_mail: "",
        c_password: "",
      },
      memberInfo: [],

      consultantInfo: [],
    };
  },
  components: {
    $,
  },
  methods: {
    //開啟nav
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
    // 開關燈箱---------------------------------
    // 會員登入燈箱
    memberLogin() {
      let lightbox = document.getElementById("member_lightbox");
      lightbox.classList.remove("none");

      // 點擊白色區域不會關閉
      lightbox.querySelector("article").addEventListener("click", function (e) {
        e.stopPropagation();
      });

      // 點擊黑色區域也會關閉
      lightbox.addEventListener("click", function () {
        lightbox.classList.add("none");
      });
    },
    // 顧問登入燈箱
    consultantLogin() {
      let lightbox = document.getElementById("consultant_lightbox");
      lightbox.classList.remove("none");

      // 點擊白色區域不會關閉
      lightbox.querySelector("article").addEventListener("click", function (e) {
        e.stopPropagation();
      });

      // 點擊黑色區域也會關閉
      lightbox.addEventListener("click", function () {
        lightbox.classList.add("none");
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

      // 點擊白色區域不會關閉
      lightbox.querySelector("article").addEventListener("click", function (e) {
        e.stopPropagation();
      });

      lightbox.addEventListener("click", function () {
        lightbox.classList.add("none");
      });
    },
    // 密碼重置
    pwdReset() {
      let forgetpwd_lightbox = document.getElementById("forgetpwd_lightbox");
      let lightbox = document.getElementById("pwd_reset_lightbox");
      lightbox.classList.remove("none");
      forgetpwd_lightbox.classList.add("none");

      // 點擊白色區域不會關閉
      lightbox.querySelector("article").addEventListener("click", function (e) {
        e.stopPropagation();
      });

      // 點擊黑色區域也會關閉
      lightbox.addEventListener("click", function () {
        lightbox.classList.add("none");
      });
    },
    // 關閉燈箱
    closePwdrReset() {
      document.getElementById("pwd_reset_lightbox").classList.add("none");
    },
    // 會員註冊燈箱
    signIn() {
      let member_lightbox = document.getElementById("member_lightbox");
      let lightbox = document.getElementById("signin_lightbox");
      member_lightbox.classList.add("none");
      lightbox.classList.remove("none");

      // 點擊白色區域不會關閉
      lightbox.querySelector("article").addEventListener("click", function (e) {
        e.stopPropagation();
      });

      lightbox.addEventListener("click", function () {
        lightbox.classList.add("none");
      });
    },
    // 關閉燈箱
    closeSignIn() {
      document.getElementById("signin_lightbox").classList.add("none");
    },
    // AJAX --------------------------------------
    // 送出會員註冊表單
    signUp() {
      if (this.member.m_password !== this.member.check_pwd) {
        alert("請重新確認密碼");
      } else {
        $.ajax({
          url: `${process.env.VUE_APP_AJAX_URL}MSignUp.php`,
          dataType: "text",
          type: "POST",
          data: {
            m_firstname: this.member.m_firstname,
            m_lastname: this.member.m_lastname,
            m_id: this.member.m_id,
            m_nickname: this.member.m_nickname,
            m_mail: this.member.m_mail,
            m_phone: this.member.m_phone,
            m_password: this.member.m_password,
            m_area: this.member.m_area,
            m_gender: this.member.m_gender,
            m_birth: this.member.m_birth,
          },
          success: (response) => {
            console.log(this.member.m_id);
            $.ajax({
              url: `${process.env.VUE_APP_AJAX_URL}member_id.php`,
              dataType: "json",
              type: "POST",
              data: {
                member_id: this.member.m_id,
              },
              success: (response) => {
                console.log(response);
                this.$cookies.set("Member_id", response);
                alert("註冊成功");
                this.$router.push("/member");
              },
              error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
              },
            });
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          },
        });
      }
    },
    // 送出會員登入表單
    mLogin() {
      // console.log("ok");
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}mLogin.php`,
        dataType: "json",
        type: "POST",
        data: {
          m_mail: this.mlogin.m_mail,
          m_password: this.mlogin.m_password,
        },
        success: (response) => {
          if (!response.length) {
            alert("帳號或密碼不正確");
          } else {
            if (response[0].m_status == "正常") {
              this.memberInfo = response;
              this.$cookies.set("Member_id", this.memberInfo[0].id);
              let Member_id = $cookies.get("Member_id");
              console.log(Member_id);

              alert("登入成功");
            } else {
              alert("請確認帳號權限");
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          // console.log(textStatus, errorThrown);
        },
      });
    },

    // 送出顧問登入表單
    cLogin() {
      // console.log("ok");
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}cLogin.php`,
        dataType: "json",
        type: "POST",
        data: {
          c_mail: this.clogin.c_mail,
          c_password: this.clogin.c_password,
        },
        success: (response) => {
          // console.log(response);
          // this.consultantInfo = response;
          // this.$cookies.set("Consultant_id", this.consultantInfo[0].id);
          // let Consultant_id = $cookies.get("Consultant_id");
          // console.log(Consultant_id);
          // this.$router.push("/consultant");
          // alert("登入成功");
          if (!response.length) {
            alert("帳號或密碼不正確");
          } else {
            if (
              response[0].c_status == "正常" &&
              response[0].c_review_status == "通過"
            ) {
              this.consultantInfo = response;
              this.$cookies.set("Consultant_id", this.consultantInfo[0].id);
              let Consultant_id = $cookies.get("Consultant_id");
              // console.log(Member_id);
              this.$router.push("/consultant");
              alert("登入成功");
            } else {
              alert("請確認帳號權限");
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          // console.log(textStatus, errorThrown);
          console.log("aaa");
        },
      });
    },
  },
};
</script>

<style lang="scss">
.nav_toggle {
  width: 100% !important;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#center_nav {
  height: 100%;
  width: 0%;
  position: fixed;
  z-index: 10;
  top: 0;
  left: 0;
  background-image: url("../assets/image/common_nav.png");
  display: flex;
  overflow: auto !important;
  transition: 0.5s;
  background-size: cover;

  #close_bar {
    color: #ff7426;
    position: absolute;
    top: 20px;
    left: 45px;
    font-size: 50px;
  }

  .center_content {
    position: relative;
    top: 15%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;

    .center_nav_logo {
      width: 125px;
      height: 80px;
      background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAABQCAYAAAA0snrNAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAByUSURBVHgB5V0JfFTF/f/Ne7ubOySQEwggIEcgByEGkhCyQSqCgmfUopbDFlHbike9+xdbrypVodoCpYLiiRVBTrl2Q04ggVwEE4IJECQ3uY/Ne2/+v9mYkL13wwsh9Pv5JLs7b2b27fxmfvO75vcIXOcYPXr2IHdXYRXhSCIAcaEgJVNKPxeEjmOSRM4WFqY2mmsXGhrjR0D1LVASgB+TiUjXZBdos+E6AIHrFKNGqZ09PeFRAuRt/OhsoVo9ToLtgiD9raAguaCrMHSS+gHCceuAUM8eddspwDqlkv41K0tbDQMY1xzR8zXB7pPAr40kaAW4AoSEqB/kCPnMzuo6CvR5SqXjPKdYjJxgCSt0UijARaWAxrZ2ECWqr0gplEMrvSm3WFsGAxQK6GdUJEXHcDzMoYSOI5QEU8oNreR0r+Klf8IVgBDVNgJCLhIz1I7qKuQI7xPCI1E7ibskPgoSp4eDl6sLNLW3Q3pRKWzQZMD5mroAcIUNWOVWGKDo9UqvOhzzN2R/4yx2THAv5OhnUnv9J34JBU2W6lWmRS8lEvmPUfEFn9i0IEKAwhXgv6+99etN2qNfIKHAUUSODoJ1v70feO7yEFU1NMOTn26FgrJyUCip70Bl870mekVydAayz2m26lECpUi7t9rI+c1BMWWtxtfrUmPG6Cg5iXWcepaLVJoeEJdxBHoJunGjM/j7H2lsbQt9/bv98EPujw61x98GqxffDXHjRxuU1za1wB2rNuBr240FBdpiGIDoc/ZOKIyilKxxgqAXKlOCROPrOomNL+WNyznC7ahMia437ZBk+8WmJYIt+PlF4f9gDxdnuCcqDPwGuYMgirAvtxBqkHC2ICGb33ok14Tog91d4Zaw8fDd4QLbnVyjuCp7OgeQRYG44dswk4sWeA0W++J/X+NypIV9LJWQwfDL74saO0L/xzAI9+i1B9Ls6iK16Cc4V30JRvh4G5SP9BkM1EU3DN/+DAMQHMiHViRUBr7mGF8QCGjhCvdnh0Epk65NVuO4QD+wFzpBBO2PphxcECVkBdyXoaHxu8JCEtaFhCRMhQEEOYl+1mdGWjSOxlrjC0SAnXC1MW9eFq72vcbFTkqzzK0NLGDUEG+Tsozis2wGjyHAzcPJvIzj4EEYQJCdvSMbjzTi2Oc5BcnHtbGKUDoBB2gkloXjoI3Hyips8QUVuTzjfggvheD/hfr3hOnRkA8SZHESTQE7gNoDpXv2PINv2d4+vKu8urHZqB60ogr+LL57HpnRCON+9uUVwcyJY7s/nygtg6NI9B5oQjXvYxhAkJXoVKNWVINurkEZhQN+cXpT5+fVmugJVMllYqlbzzp+8alvG/dVlYoqIe3uAycHROCqqvtQM2c5QDrYAzJ3bindsWM68Pxx9jWsLCF4LEx+agnUIIveyTmJ2RdrH9/x8hObQkMSHsX+TYi+8/hJGD7YCx69ORp+/LkSnvp0m2EFSj/KzdPmwwCCnOwdqhUCE3WH9ixD+3b3KA1RpxfiAjTa88mM8h9C3Uw6o3CLcZEk0XdWrlwpgQMg8+dfwIaZXZ89UZpXBAbAzrET4MLYG3nfGVFvP6jJGM4RWmipj/UH0+Cj/Slw6kIF1LUYaJ0pCpXiLRhgkJXoIogzDAoIlPlrftW9nzNjC1LskFGzIMnNeWLPgqqU2PH4Et6zDFlorv/M9B+gN1AoTnXeH8A3Tu7whos3XOAUXTflr+IVmwmvZCZbs8ImU982HMqAtUh83sVFfzu4n2/vEOjcrKwD9TDAICvRFRyJNSig9AditDJxVA09Vbin8pQPMqqz3EzfJgKi3RDFcyVI5FWuXrBX6QoiIUa3AOrgN170QVOsVQtOHa8E3/gZHZyr0511DeIDaJxpggEIefd0iQxl1pjLBXq3JFQmRb8APMSz9yiIedPLg96Ii+gMDvajaIhZ1lWIW0CM8ZpDh8cirLNA361Advir0+y2zb/k5uPeQDjUKS0bIFXunm+5jRn5XNOZUmYSvmwswjaDb4qAwVPDwWPcGOCUSuXQ2361fKNm105YqYWBCFmJLvLSKl4ilx0RBG6rSoteiMQPQyLqy6nhuHsQxsZJZ+VumGOyaPLtqkF5chYcQDnPTSXUusUZr/qNe/Kx0eX7NTl1J3IjFF6DYNCEceAdEQZKTw+jWyFzlyTc/qUuKup3n8+b1wADDLISPSAm/WBlSsy3OID3dJVRkTyHi8Uxw7fMIJTzBDtsQ+hDfyFwzs0q/LNdl8B9Kjc/SNyyZeE3990nwgCCrHs6A8/x/+75GQdnEi6yYOhfuNpZTwUOgBHeLeCGr2GAQXbjjE6A4woOmIDj3vUduM1X4969GmQCx9EMx1pQD+gjcEDuWZqU+YmiHh5bvyByQDhhZCd6QJN7Q7VnfS1cJjozrhz1i0t7AfoPntCXIPCbjkFUeCot7ffvx8S0wjUO2YlO5u1pr0qOoT3lMpTGB7HXmuSYZ+BK0Sj+e8i8I44KT3220ruAwt3SSx0qHb59DK5xyE70cymxTG3zNic3SQRWwRVC8Cbf4ouDRKeuVyMckCOwfLE203mTOnIJXMOQU5AbWZ0S+4kL0F1IcAN2imbuS9BPuD0zkxHcGa4S0KG0eHFS1vuLNZqr9p2OQjaioyRbQYHeBUbmU/01jjsJ/QTvRvGqaw5ox18BnMc1S3jZ2DsKa23IQA8hV7+jZzma22ucKLfbfCvShFzBsimT0AC4AiSmpbkoBe6Komp7C8bqJU4vy15ze7y8ezqBPCRiT6JXCUBf8olLMcve0YmS1SyoLIYSuyt1pfjiD70AeuO40g6n53Di3AQywwln+ASxA8aLOnDDH9yAP/y40hlKOMPh5AhZviTpGNkYf9NyuIYgs+2dKwAiZeM41CCrPyBJyq8D4g+XWGtzQ4LWYtRKVXI0BdI7Aeyceu4dyGZlURMV+IO80T84UhRgpNQBkwQdvhqexZgttOq9d2VGhEep/lHU42ljxU9PouVOB9cAZCW6b1zKl/jyJfQzFiYno/bAfwiWjzM5hEfaGiBKaLdaR4Wr34VacPUjq3cPGNOKJts/XQsm23494YKLeCLa6v9t6TrKB56OrvOVlHJnk4//HVsPBZlwBl2q1oguIFVLeEVGEa/aw26BmNUP6Qr3gNGMq70E/Yz+Ptbkh6PzW5AR5w9nP80R6WEqo15+ku80ybfjLL2ELtrzyMJZ72zwqgiPdmcnKOKUQc6k9R8tkgs7BPIVCrAGEZW/TIQXFydlkk3xkS9CP6Lfz7LJicWaE6MkIr2E/nlZf9dFJPK7Ll76aJsmJLoFf92wVuo855P4yK8Wa47OQjV1M5J5snGlMVKHWq3RKLQJCVd0QPNKILuXrb/AdGKeE780XmG9Ae30wxpE3f6Iq73RMsH1wBX+BCPopoSobK5DmI2Tr9sD5yeJsKKtHl5pqY3SNDY+TlG7gH5Cf+/ptZIEVVauswOS9vFp4vYSunCngwzAL6wHjr6LduMZDjWU6PRBJ04vmzQp/ljaH19wQuvc2huXLfKNGOo762k3HlzZiViCM4fn39eFR7hOmRjzJeeqaq6vL2ssLi5uh6uEfiU6EjwPvW9qS9dRZbsIhNg00CxOyZrOifRpkAm4QqkkccWMisSOSSe2tkL9qSKoOJikaL1w8SMFf3kR/7ThU6h0doIxt8yA+6ZP6TwFi4TnFNxbi2fHvflx0tFWN9egxrDQ4T+jHPIjpZJGFMmOggJtOfQRek10vPXNOHG1XZ9xDlfZaiNReM2gD04qtVafEm4Fjr9Lz7K2tnKDwUjMz1cpalvfkghxA5mANgZvNBzxqGPXgZXtggoC1GZlQ8Whw4DEtthfU1s7rNl7GA7mF8Gk4QEQcUMQTB4eCL+/dSYJ8vF2/SL1uOvp8ip/HNMpOB9+jbJh2eTJM+/Pzz9s36E7BzHg04/QnTvjKnmF9gcnN45ZyvYpXWU5NIf781JRoizUa4LxtfaqGqhOOwKVSakg6Xpnb1EqeJg0LABmjB8NU0cHwbbMXNieefnMBE68r3NztQ9AH2BAE53u3j0cbblHkF3qdXJG7K0qN9itkmPRUxQKOU8c/Nu6SlrOlUFV6hGoQYJ3ZayQC5OCAqCgrKK7X3z5afAQOl6r1cou5Vtl77in3o42JiWvg6M+N6dfML5ekRL9Gkfhx3YQs8pdxJLIyKwOuEqgW7YMbhfEzRdq6oayo8RsH2Uz+B5dM4jVNfCdpACFuyuovLygdyA3tdfUHFO4u0ED7tdVyRnQeLoYTc0OHbCxGyfPG27hyGGGV1Rw7Di0Q5G/9sDqSq9KjUnC5TMT/85jzSQK0o52juwIiklvrWLBEiCVdZ5bIc34/iSr4zsj/TnoY4wfHzt+2rjRL0uS+DBbIS8smN197VJzCzz+n/9CYc0lcB0+DMb89mFQePQicIbChTPrN9aJbe2TGk+fgf6AROldeXnabSAzLK70irToGJCQ4AwE2AmUh5Dd3eksdbJSDqSFUpc3hLADiSQKR6oW+gjBo2NHKNxVDyExHsFvHZ1ztgyCUSh6ap66uw47fvTU5u1w6ucK/eemMyVQtGY93LD41+AyzDGrbEdzyzeXcgseJv24AaJVYBa+yE50iwYCnpKnTEvpbt8ZqY2UruSQ4PcbX8VJsQtkxpSJs0aGhan/qvJQpeP4v8EIzsrnR0yCtY8k6tN+6e8MCb7uQBpklxpm+mq9WA5n1m+CtkqbykU3UGU7WJF67D3oZ1DgxkAfwCzR2ZFifFlgXI5GJX0Yc1XavlBc3REm1zlpL8iIsJCEv0hKmonbxytI0+6lOj7QD56/42b9CdQuHMgvhPWHzB9hbkdWX7jqQ2g4afPMBSrmZJ2KtCTue+OZ82hGOQX9CJzgYdAHMEt0qoQnfzkTfvkGgBb4aebo480JpQ8yJdro+hG/mHSZsi2t5MJCEzZgp3/GDz7GVxfGRoC7k0EyKjh0stiqRC20tEDJ5q+gPq/A7HUcYC0Fcd7GuKnL/xUXpw/6oJS8iqv+HPQKhOly7Fw+YzGM/fyEen8Bfs9Fe3vAnxMYGHi7vQc17L8z44KqjNgEEOg+MN7vKZeA/nJtpUbtTpS681jiZXSHtThylWAPKPjjN7egOpSLM+dMB3BrA2ekdsfRhU1WP4OKstnIWSal735+Gfj1OF9WeLESHvroM+gQbLuqCbYfNn8e+M+OZ7++BYnwBRXEjz9WT7OQ6WAlFxmZdKMgXDYS6XSijud5tAep2pXKZpHjlDonJ6G9ocFV19LCC8XFe8yaVKdOnaoUBc9jSEy7VzD686Zm5R46DjLCgLD5W4JVIEorwdRLlekjKPQOCE6he4IaE5yhM5vTYLAHnVPNG1fRsM61KTA/tJ7oiYmJ/Omi6qWWFi1L8vNTRW030UuqauHlr3fZRXAGSZSksm27zriPGfGBx6gRezbETyux3mKllJkJhSADxA6Pxyk4xrI7QGL+h74juv8wr0V6Fc0IaC5+m+VqLU+eMRqIJLdKRl0VcLrrQ1FRTQDew43WGjz7+XaYGz4R6ppbIa2oBJrbbVvFkFWfQrPvGpxoyZQqSr9elNgMVxHh4epRkkRW9kIZkF2Y6yb6haSbgnBPfJ2YUd1boUOvqKLr8nkcPPtWs/1o0gmKbsuEJNEAnGRKqw3Qlr0l48QKDjglbhHvWquLHKOGI/R1V/e2denp6f125AgJ/gYxxyE7Ud8Zm2+YNbOzIYwCmaEneolG7azidVvhl2Q85lB+OJqd3zWJcsFBzUPvkP7gHg4uS/ZnmGIRSDk6WrqtShxHQ3Al9xBOyDmmBvboL8Ae43BLi8tGV9fWJcR25arsXO0H0I8IDVbfi3e50Nw1llVaoaRxogBM3TXJtYvC31iQGVyJZpSzh0rHpORIS5WUAj+aJ7DJWGJHnHN2aZ/lH5c6nf3hdvuycVtK6N6u6wWCkvmnDcy5KPUbSPw4KWyaz9jqRWGpAf3VNlk0c5hMCVHPhn6CWn27D0pIb5q7pk8jTuhdx49ri3FkzeuTxPpW1xtwbsrA/8MvtxqsRzjyAN6UiUmLUPibZ2SW3ZmQ8e4DcMYP6VmGniyDbFN4LzYjWHGi6C0wvMQdx/o2jeEigT7xVtkCi47R/OmxdX+5d+6Nw4eYcPY63JoS0JOmV4PRpG8p+fHQUaNGyXpSBrdPjumkVl1GHZS+TUXyIIt0uVxKs4YIqvXgADyUHcORSIMM74DmgIOgpDMnq8dgqQBdoIV2NLgvOFjtDlcRdM0aJ4iK2o+s5u4FkSHw9ZOL4M0HboOQoEBmTzglUXEm2tW7VzfHcccsdEXc3UdEgIzg2jjpQ9wXraoElBcl35lpX0k6Oq2T8LQCHcnzHX36Aq8QSpBgT6MMsBX7OYV/NU4qhcPPRcF9jtkJAN2Obdjfp7brgwfPw73QxwifoB4VGqq+lW7f7g9jx27Holld19xUKpgXHgybn3io8Naboqbl5R3OM7xHDh1WxGxSA5wQsp7H45jHDCXyv9tT2S8hvZgHiEBWtLxJrHH4JOqqvXOrUCzfjsaq1T6xacG8q2qsV1TKT4a1JJv6F6WXI24Ikb7CF5tZ/FmqELVa3WfhYYzgVEU0uID2vPb9wdSG1rY5ZqqVgSjOf+fjd0weFnTiRGw5WjrNWjQlmSV4/SDoXLy2q9ouscHHfZuyEJ1Zlhp4x6adrUyLVrpxQ0urUgKLcNUl4aQ51EJJNlg44aEXFpUB9wP5YZkgkQhCFCJqDMO9p2hNiMVxfJvt0Be+O8QkO1tbiqtrNQ72q9Za4PVba2okdq7NvhyjDmDy5JkTKUfYIc1R7PN3x/LGnC6vhtW/uRuGeHQrKk0gCL8iCxacNt8Ly7eXwJIjmjx+BI2Iskrweml8WOROZCvSJkkUH0SiF9lqJAkSS/rrj0MZh3v0K9jmkCuhWyzV91AGbkGP0SacHDE4+s4sdNVV2WHpkIMtiZwKgmTgCEEpnqlktlY7yqJkIciMUaPUXjzhvwcwXI355y/Cw//8DFIK9YyMbYN3IMGtenxECqnmr5DhICO62Z3vjPS/steqlOhf2WrEcwq1iexHLGdnloB+hittfs8y1OmX4ouJfR3ZcJPVSCQKjbg9GmgMuNrrwkNnrUZp2Opqx87vDA295YXc3H2yWeM8Penj2LHZlfjzpXr446atsGhm5FMr/vHOIdu9dRxemhBbHejl6ePt5grsz8PZGS42NqxWr9CAXHA44J5lesb/xvHggijQrZbaqKhiP3KGUsOOYKLerGvckSBaD8QgcMnLy/RMu9fgESyTdClYB2oP7TNBRhCiZH4Di4Z/FtixUXvUdmI6RF5eyqU/zokvTpw2BWZPHg9TbwiCcYG+ED9uTG9jvszCYaJXqHQTcFVPNCouXquZYzHbhFdcyiVc6d8Ylys4yeRZLE6Siq1Ci4OITKDcXLCgVrupDe/rD7b0dnZ0GGRETs6BEzgRcbVbS65Abg8JUU8A+2B6dFuSgkBGOEx0npInTCxzVNplKyW3IInbjcuwwYLzadEGce2SU3srDqJF9kuoZDFQUKFo/AG3DeuZoimZ7wAB7EJOjmY93vMivDtLhioFDthiG92w2D+PnNIyRcbpUthxPB8+T8mED/YkwaP/+ebu0NCZT04eM1MW4jukwpSnxvghgR80dsNLIvetrbZ+cbemV6fuYw6PbiKjRW+aC9E/6aFbwHF2FppamhWsntncb/QXHd0csrKyOiIiEv4sCgTZKTWb/RFlBjZhWajXayAjkPBbp0yZVS2J8AmAGRWLkId9fdWvV1VZzhzt7Kx8YtHaL80dpZpEgP+Ad4O/o6ayEX/DJ97ekNHb8GiHVjpHCUrcxMA2jjeQd969PdNWW0JWSmg+3WNUzKOWF9+zoNMTRq2kDKNWI1mOH9dkgY0MFLjVLIM+wIkThw57eHZE4MzcZmabGRoYCPfDlQFdIEgDSpJra+FEWEjCe5Mn3xzKAj0c6cTuyiWacC+0ipgJloT37I53J+SImbIZpkXEShQjdwFsAFfdapwcp61UGRoRqpblsKMxUlJSLuXkHboLZxaOFTEUSin3pjUDEaq0dqcZReJPZt/Bc1JOeGjSd45sWXYRnQgK4q50eQtXtY/hF8O58gt1X4CdEATIJCwYpAdwRYSvNDq2ixKvRcLyPLUn+F9CpZcJbBZ1d9SJnwfouxM+ubmaNahCxvQUYAmhfvU1oLbcSrI/ZLcHULhdgD6I5OHDDeUjS7CL6FQhUJ/YOU8gx2Ku07bLX0bfn3xfgd2Hudq5xhNod+9JCJZ3v+re4C3Gs98SYdlDFO06zZlzMkmDN/gPixUImRM+YfpI6EMg4Quzcw/dRzh6F96L3sQqcZbDpTiOOBJ9yzQc5prVINHfZT75sjL7gkTsFuTYnowvb15Mn/6FUuLexS+ajOxqS3ny9GmcRHQ6BaHY2VhrhpWRcXmXKlNizuA+Xox+862Ug22+0WlnfAkxaEUk/PHmp2Mdcgu7n5br5MKtbm+T2D5q7kHALqByYirju9DHQOPRNvTyHVDx5GZOASet1MsJC4l/D6k/HT1x3tB5mKSZOaZwiVXq/e/AoYlPKlGp+KKWFrGyN48UcdgBERidgTb32KVKSnwHeddWV9d5HQMehjpR8/5ZKlFDTqAQf+M//UiP/daUw+JkOEk6uzO4yJIFOPIjjx49WBMWNvMPyKp2mJPm0TR873if2LWF1amN0Mf45b6326hGc/KSrjxpsg30yuv0S3iTfqBqUmJfRTOrxQxRCo4Y2PL9DAhuHsgWj7Rt3/5tfUv7vdVNTfrHYlU3NEPuuYtVgkQj8/O1NrWFLuTkHN4XHprwGs6gN9hnwkJphvrDnNDx7Nno4W9s2/9zWOCsbfWN0u9KSy3ntLuecMV5TzjitB9Y7KR5VHcIwlboBZQ8f5ZHBaW+tQ2OnTkH3x7Ngb05p6ahx4nlh3NIAIuafuO7LkqVNnFamLhh2QPwr0fuBWeVElbvPazqEEV33BcfGuRBPhk3Tu0D/wMwPeyQEv0vLDZIa9lOOqYMjz1mMdihIjk2Ay1hxs9SbyCitMQnPsNhokcEq8cO8nLf0dbRMaHFNLyZgkBn5hRoU8BB0N2730cir3j1m72wJ+eUyYkYFEz3NjTAXdf7ijdl74ScRkEryaCsw816HByBfcDClilpwIFEQYPmulDFFx7xaQ6rIJMmJYSJHOypbWoOtPRtRMGMROAw0Q/kFr3/0f7kR0uqas2qNsznPsgDWFz/X+A6xjWViYKFGuHAs0iYQdbq4bZcnZ2jYeHaDqWDCAub9TAub+vhVRJ9Nidfa1ck0UDFNZNHLjxkViKK7Z+DDYIzSBIMjo6OdjBf3EoOuZCtIIqMtg5Ph4I9ByKuAaKv5FC6fpES+imq6/acnqlDRf73c+bMsVtfZ4gITY5FLjLLcg1yFPf0xMLC7/tcfetv9HeaUBIWkvQKte3xYqbbw+iw2dnU4vIxO+iQm5sEjkAEEVc5sfDcNapBq9ndOdlahybSQEW/7um4hz+Cq2+D6RWWw4aW4GTYw/OSpr3d72BBwTe9zpU+duw0TzdXV2bPN419p/TDDrHymYKCgl73P9DQ3ytdQFFsF/psL+Ho/4xepiIU0gp1OuGMvz9fJVc6LTc3l7n4PcYEb0Jt43W0jb9DjMzA1zsGfPJAexAWOut7nFSXAzPR+dEhwp0FBZp+e6BQf+K6yQJtHd3PcUFZDd5rbm2Z+r9KcIbrKt+7FbgwYU0B3LNZefKm8hiI+H8h0OsUAsb3KwAAAABJRU5ErkJggg==);
      background-position: center;
      background-repeat: no-repeat;
      position: absolute;
      top: -80px;
      right: 0;
      left: 0;
      margin: auto;
    }

    .center_nav_icon {
      display: flex;
      margin-top: 20px;

      a {
        width: 42px;
        height: initial;
        outline: 3px solid;

        i {
          color: #ff7426;
          font-size: 25px;
          &:hover {
            color: #ffcaab;
          }
        }
      }
    }

    button {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .btn_blue {
      .center_content_btn {
      }
    }

    a {
      font-weight: bold;
      color: #fdf8ee;
      display: block;
      width: 180px;
      line-height: 50px;
      border-radius: 5px;

      &.router-link-exact-active {
        background-color: #ebc43a;
      }
    }
  }
}

//  @import "../../tgd104-sass/new_style.scss";
</style>
