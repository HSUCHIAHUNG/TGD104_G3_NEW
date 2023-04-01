<template>
  <div>
    <div class="dropdown">
      <div class="select" @click="openMenu">
        <span class="selected">{{ defaultOption }}</span>
        <div class="caret"></div>
      </div>
      <ul class="dropdown_menu">
        <li>
          <a href="/member"> <i class="fa-solid fa-gear"></i>帳號設定</a>
        </li>
        <li>
          <a href="/memberfav"><i class="fa-solid fa-heart"></i>收藏清單</a>
        </li>
        <li>
          <a href="/memberbooking"
            ><i class="fa-solid fa-calendar"></i>預約明細</a
          >
        </li>
        <li>
          <a href="/memberhistory"
            ><i class="fa-regular fa-clipboard"></i>歷史訂單</a
          >
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "DropDown",
  data() {
    return {};
  },
  props: {
    defaultOption: "",
  },
  methods: {
    openMenu() {
      const dropdown = document.querySelector(".dropdown");
      const select = dropdown.querySelector(".select");
      const caret = dropdown.querySelector(".caret");
      const dropdown_menu = dropdown.querySelector(".dropdown_menu");
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
    const dropdown = document.querySelector(".dropdown");
    const select = dropdown.querySelector(".select");
    const caret = dropdown.querySelector(".caret");
    const dropdown_menu = dropdown.querySelector(".dropdown_menu");
    const options = dropdown.querySelectorAll(".dropdown_menu li");
    const selected = dropdown.querySelector(".selected");

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
