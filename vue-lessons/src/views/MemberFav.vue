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
                  :class="{ active: currentTab === 'learning' }"
                  @click.prevent="
                    {
                      currentTab = 'learning';
                    }
                  "
                  >陪你學習</a
                >
              </li>
              <li>
                <a
                  href="#"
                  :class="{ active: currentTab === 'travel' }"
                  @click.prevent="
                    {
                      currentTab = 'travel';
                    }
                  "
                  >陪你旅行</a
                >
              </li>
            </ul>
          </div>
          <!-- 下半部 收藏清單內容 -->
          <div class="main_fav_list">
            <ul class="fav_list_area">
              <template
                v-for="(consultant, index) in consultantInfo"
                :key="index"
              >
                <li
                  v-if="currentTab === consultant.category"
                  class="fav_consultant_card"
                >
                  <router-link to="/TravelGallery" target="_blank"
                    ><img :src="consultant.url" alt="consultant image"
                  /></router-link>
                  <h1>{{ consultant.name }}</h1>
                  <h2>{{ consultant.experience }}</h2>
                  <i
                    class="fa-solid fa-heart"
                    @click="removeFav(consultant.id)"
                  ></i>
                </li>
              </template>
            </ul>
          </div>
          <!-- 下半部 收藏清單內容 end-->
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
      currentTab: "learning",
      defaultOption: "收藏清單",
      consultantInfo: [
        {
          id: "C01",
          url: require("../assets/image/travel/consultant_c01.png"),
          name: "裴大尼 ",
          experience: "5年經驗登山嚮導",
          gender: "男",
          category: "travel",
          favorites: false,
        },
        {
          id: "C02",
          url: require("../assets/image/travel/consultant_c02.png"),
          name: "裴中尼 ",
          experience: "台灣百岳征服者",
          gender: "男",
          category: "travel",
          favorites: false,
        },
        {
          id: "C03",
          url: require("../assets/image/travel/consultant_c03.png"),
          name: "裴小尼 ",
          experience: "3年經驗登山嚮導 ",
          gender: "男",
          category: "travel",
          favorites: false,
        },
        {
          id: "C04",
          url: require("../assets/image/travel/consultant_c04.png"),
          name: "裴上尼",
          experience: "4年經驗登山嚮導",
          gender: "男",
          category: "travel",
          favorites: false,
        },
        {
          id: "C05",
          url: require("../assets/image/travel/consultant_c05.png"),
          name: "裴下尼",
          experience: "1年經驗登山嚮導",
          gender: "男",
          category: "learning",
          favorites: false,
        },
        {
          id: "C06",
          url: require("../assets/image/travel/consultant_c06.png"),
          name: "裴左尼",
          experience: "5年經驗登山嚮導",
          gender: "男",
          category: "learning",
          favorites: false,
        },
        {
          id: "C07",
          url: require("../assets/image/travel/consultant_c07.png"),
          name: "裴右尼",
          experience: "5年經驗登山嚮導",
          gender: "男",
          category: "learning",
          favorites: false,
        },
        {
          id: "C08",
          url: require("../assets/image/travel/consultant_c08.png"),
          name: "裴尼",
          experience: "5年經驗登山嚮導",
          gender: "男",
          category: "learning",
          favorites: false,
        },
        {
          id: "C09",
          url: require("../assets/image/travel/consultant_c09.png"),
          name: "倪大裴",
          experience: "1年經驗登山嚮導",
          gender: "女",
          category: "learning",
          favorites: false,
        },
        {
          id: "C10",
          url: require("../assets/image/travel/consultant_c10.png"),
          name: "倪中裴",
          experience: "2年經驗登山嚮導",
          gender: "女",
          category: "learning",
          favorites: false,
        },
        {
          id: "C11",
          url: require("../assets/image/travel/consultant_c11.png"),
          name: "倪小裴",
          experience: "3年經驗登山嚮導",
          gender: "女",
          category: "learning",
          favorites: false,
        },
        {
          id: "C12",
          url: require("../assets/image/travel/consultant_c12.png"),
          name: "倪上裴",
          experience: "3年經驗登山嚮導",
          gender: "女",
          category: "learning",
          favorites: false,
        },
        {
          id: "C13",
          url: require("../assets/image/travel/consultant_c13.png"),
          name: "倪下裴",
          experience: "2年經驗登山嚮導",
          gender: "女",
          category: "learning",
          favorites: false,
        },
        {
          id: "C14",
          url: require("../assets/image/travel/consultant_c14.png"),
          name: "倪左裴",
          experience: "1年經驗登山嚮導",
          gender: "女",
          category: "learning",
          favorites: false,
        },
        {
          id: "C15",
          url: require("../assets/image/travel/consultant_c15.png"),
          name: "倪右裴",
          experience: "1年經驗登山嚮導",
          gender: "女",
          category: "travel",
          favorites: false,
        },
        {
          id: "C16",
          url: require("../assets/image/travel/consultant_c16.png"),
          name: "倪裴",
          experience: "1年經驗登山嚮導",
          gender: "女",
          category: "travel",
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
  methods: {
    removeFav(id) {
      this.consultantInfo.forEach((item, index) => {
        if (item.id === id) {
          this.consultantInfo.splice(index, 1);
        }
      });
    },
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";

.fav_list_area {
  display: grid;
  grid-template-rows: auto;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 10px;
  justify-items: center;
}

@media screen and (max-width: 1200px) {
  .fav_list_area {
    margin: 0 auto;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
  }
}

@media screen and (max-width: 625px) {
  .fav_list_area {
    margin: 0 auto;
    grid-template-columns: 1fr;
    gap: 10px;
  }
}

.fav_consultant_card {
  max-width: 280px;
  border: 2px solid #79cbd4;
  background-color: #dcecee;
  padding: 20px 40px 40px 40px;
  border-radius: 10px;
  transition: 0.3s;
  margin: 10px;
  position: relative;
  img {
    display: block;
    width: 185px;
    height: 185px;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 5px;
    border-radius: 10px;
  }
  h1 {
    text-align: center;
    font-size: 18px;
    font-weight: 600;
  }
  h2 {
    text-align: center;
    font-size: 18px;
    font-weight: 600;
  }
  .fa-heart {
    font-size: 22px;
    cursor: pointer;
    color: $dark_blue;
    transition: all 0.3s ease;
    margin-right: 22px;
    display: inline-block;
    position: absolute;
    right: 0;
  }
}
@media screen and (max-width: 720px) {
  .fav_consultant_card {
    padding: 20px 20px 40px 20px;
  }
}

@media screen and (max-width: 625px) {
  .fav_consultant_card {
    padding: 20px 40px 40px 40px;
  }
}
</style>
