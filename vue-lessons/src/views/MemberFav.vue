<template>
  <div>
    <VHeader></VHeader>
    <div class="member_body">
      <div class="member_row container">
        <!-------------側邊navbar---------------->
        <div class="aside_bar">
          <Avatar></Avatar>
          <SideNav></SideNav>
        </div>
        <!------------ 下拉式選單 ------------>
        <drop-down :defaultOption="defaultOption"></drop-down>
        <!------------ 主要區塊 ------------>
        <div class="main">
          <div class="main_header">
            <h1>收藏清單</h1>
            <ul class="tabs">
              <li>
                <a
                  href="#"
                  :class="{ active: currentTab === 'tab1' }"
                  @click.prevent="
                    {
                      currentTab = 'tab1';
                    }
                  "
                  >陪你學習</a
                >
              </li>
              <li>
                <a
                  href="#"
                  :class="{ active: currentTab === 'tab2' }"
                  @click.prevent="
                    {
                      currentTab = 'tab2';
                    }
                  "
                  >陪你旅行</a
                >
              </li>
            </ul>
          </div>
          <div class="main_fav_list"></div>
        </div>
      </div>
    </div>
  </div>
  <VFooter></VFooter>
</template>

<script>
import VFooter from "@/components/VFooter.vue";
import Avatar from "@/components/Avatar.vue";
import SideNav from "@/components/SideNav.vue";
import DropDown from "../components/DropDown.vue";
import VHeader from "@/components/VHeader.vue";

export default {
  name: "MemberFav",
  data() {
    return {
      currentTab: "tab1",
      defaultOption: "收藏清單",
      consultantInfo: [
        {
          id: "C01",
          url: require("../assets/image/travel/consultant_c01.png"),
          name: "裴大尼 ",
          experience: "5年經驗登山嚮導",
          gender: "男",
          favorites: false,
        },
        {
          id: "C02",
          url: require("../assets/image/travel/consultant_c02.png"),
          name: "裴中尼 ",
          experience: "台灣百岳征服者",
          gender: "男",
          favorites: false,
        },
        {
          id: "C03",
          url: require("../assets/image/travel/consultant_c03.png"),
          name: "裴小尼 ",
          experience: "3年經驗登山嚮導 ",
          gender: "男",
          favorites: false,
        },
        {
          id: "C04",
          url: require("../assets/image/travel/consultant_c04.png"),
          name: "裴上尼",
          experience: "4年經驗登山嚮導",
          gender: "男",
          favorites: false,
        },
        {
          id: "C05",
          url: require("../assets/image/travel/consultant_c05.png"),
          name: "裴下尼",
          experience: "1年經驗登山嚮導",
          gender: "男",
          favorites: false,
        },
        {
          id: "C06",
          url: require("../assets/image/travel/consultant_c06.png"),
          name: "裴左尼",
          experience: "5年經驗登山嚮導",
          gender: "男",
          favorites: false,
        },
        {
          id: "C07",
          url: require("../assets/image/travel/consultant_c07.png"),
          name: "裴右尼",
          experience: "5年經驗登山嚮導",
          gender: "男",
          favorites: false,
        },
        {
          id: "C08",
          url: require("../assets/image/travel/consultant_c08.png"),
          name: "裴尼",
          experience: "5年經驗登山嚮導",
          gender: "男",
          favorites: false,
        },
        {
          id: "C09",
          url: require("../assets/image/travel/consultant_c09.png"),
          name: "倪大裴",
          experience: "1年經驗登山嚮導",
          gender: "女",
          favorites: false,
        },
      ],
    };
  },
  components: {
    VFooter,
    Avatar,
    SideNav,
    DropDown,
    VHeader,
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
