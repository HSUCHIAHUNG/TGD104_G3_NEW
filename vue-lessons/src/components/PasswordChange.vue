<template>
  <div>
    <!-- main_content -->
    <div class="main_content">
      <form action="" class="pwd_change">
        <h3>請輸入註冊信箱，我們將發送密碼重置信。</h3>
        <div class="form_group">
          <label for="" class="input_label">信箱(帳號)</label>
          <input type="text" class="input_text" placeholder="信箱(帳號)" />
        </div>
        <button class="btn_blue" @click.prevent="pwdReset">確認</button>
      </form>

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
                @click.prevent="closeModal"
              >
                確認
              </button>
            </div>
          </div>
        </article>
      </div>
      <!-- 已發送密碼重置信燈箱 End-->
    </div>
    <!-- main_content end-->
  </div>
</template>

<script>
export default {
  name: "PasswordChange.vue",
  data() {
    return {};
  },
  methods: {
    pwdReset() {
      let lightbox = document.getElementById("pwd_reset_lightbox");
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
