<template>
  <div>
    <div class="cdropdown">
      <div class="select" @click="openMenu">
        <span class="selected">{{ defaultOption }}</span>
        <div class="caret"></div>
      </div>
      <ul class="dropdown_menu">
        <li>
          <a href="/consultant"> <i class="fa-solid fa-gear"></i>帳號設定</a>
        </li>
        <li>
          <a href="/consultantinfo"
            ><i class="fa-solid fa-heart"></i>顧問資訊</a
          >
        </li>
        <li>
          <a href="/consultantbooking"
            ><i class="fa-solid fa-calendar"></i>預約明細</a
          >
        </li>
        <li>
          <a href="/consultanthistory"
            ><i class="fa-regular fa-clipboard"></i>歷史訂單</a
          >
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "CDropDown",
  data() {
    return {};
  },
  props: {
    defaultOption: "",
  },
  methods: {
    openMenu() {
      const cdropdown = document.querySelector(".cdropdown");
      const select = cdropdown.querySelector(".select");
      const caret = cdropdown.querySelector(".caret");
      const dropdown_menu = cdropdown.querySelector(".dropdown_menu");
      console.log("open");
      // 按鈕點擊後樣式
      select.classList.toggle("select-clicked");
      // 三角形樣式 轉180度
      caret.classList.toggle("caret-rotate");
      // 打開menu
      dropdown_menu.classList.toggle("menu-open");
    },
  },
  mounted() {
    const cdropdown = document.querySelector(".cdropdown");
    const select = cdropdown.querySelector(".select");
    const caret = cdropdown.querySelector(".caret");
    const dropdown_menu = cdropdown.querySelector(".dropdown_menu");
    const options = cdropdown.querySelectorAll(".dropdown_menu li");
    const selected = cdropdown.querySelector(".selected");

    options.forEach(function (option) {
      option.addEventListener("click", () => {
        selected.innerText = option.innerText;
        select.classList.remove("select-clicked");
        caret.classList.remove("caret-rotate");
        dropdown_menu.classList.remove("menu-open");
      });
    });
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
