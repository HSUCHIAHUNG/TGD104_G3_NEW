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
            <!-- <ul class="tabs">
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
            </ul> -->
          </div>
          <!-- 下半部 收藏清單內容 -->
          <div class="main_fav_list">
            <div v-if="favList == null">
              <h1 class="no_fav">無收藏顧問</h1>
            </div>
            <ul class="fav_list_area">
              <template v-for="(item, index) in c_list" :key="item.id">
                <li class="fav_consultant_card">
                  <router-link
                    :to="!item.tr_job ? '/LearningGallery' : '/travelGallery'"
                    @click="consultantGallery(item.id)"
                    target="_blank"
                    ><img :src="`${img_src}${item.c_photo1}`" :alt="item.c_photo1"
                  /></router-link>
                  <h1>{{ item.c_firstname + item.c_lastname }}</h1>
                  <h2>
                    {{ item.about_title }}
                  </h2>
                  <i class="fa-solid fa-heart" @click="removeFav(item.id)"></i>
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
import $ from "jquery";
import VFooter from "@/components/VFooter.vue";
import Avatar from "@/components/Avatar.vue";
import SideNav from "@/components/SideNav.vue";
import DropDown from "../components/DropDown.vue";
import VHeader from "@/components/VHeader.vue";
import {API_ARC} from "@/config";

export default {
  name: "MemberFav",
  data() {
    return {
      favList: [],
      c_list: [],
      currentTab: "learning",
      defaultOption: "收藏清單",
      img_src: '',
      // consultantInfo: [
      //   {
      //     id: "C01",
      //     url: require("../assets/image/travel/consultant_c01.png"),
      //     name: "裴大尼 ",
      //     experience: "5年經驗登山嚮導",
      //     gender: "男",
      //     category: "travel",
      //     favorites: false,
      //   },
      //   {
      //     id: "C02",
      //     url: require("../assets/image/travel/consultant_c02.png"),
      //     name: "裴中尼 ",
      //     experience: "台灣百岳征服者",
      //     gender: "男",
      //     category: "travel",
      //     favorites: false,
      //   },
      //   {
      //     id: "C03",
      //     url: require("../assets/image/travel/consultant_c03.png"),
      //     name: "裴小尼 ",
      //     experience: "3年經驗登山嚮導 ",
      //     gender: "男",
      //     category: "travel",
      //     favorites: false,
      //   },
      //   {
      //     id: "C04",
      //     url: require("../assets/image/travel/consultant_c04.png"),
      //     name: "裴上尼",
      //     experience: "4年經驗登山嚮導",
      //     gender: "男",
      //     category: "travel",
      //     favorites: false,
      //   },
      //   {
      //     id: "C05",
      //     url: require("../assets/image/travel/consultant_c05.png"),
      //     name: "裴下尼",
      //     experience: "學烏克麗麗，輕鬆享受甜美音色！",
      //     gender: "男",
      //     category: "learning",
      //     favorites: false,
      //   },
      //   {
      //     id: "C06",
      //     url: require("../assets/image/travel/consultant_c06.png"),
      //     name: "裴左尼",
      //     experience: "學烏克麗麗，輕鬆享受甜美音色！",
      //     gender: "男",
      //     category: "learning",
      //     favorites: false,
      //   },
      //   {
      //     id: "C07",
      //     url: require("../assets/image/travel/consultant_c07.png"),
      //     name: "裴右尼",
      //     experience: "優秀老師帶你成就鋼琴夢想",
      //     gender: "男",
      //     category: "learning",
      //     favorites: false,
      //   },
      //   {
      //     id: "C08",
      //     url: require("../assets/image/travel/consultant_c08.png"),
      //     name: "裴尼",
      //     experience: "優秀老師帶你成就鋼琴夢想",
      //     gender: "男",
      //     category: "learning",
      //     favorites: false,
      //   },
      //   {
      //     id: "C09",
      //     url: require("../assets/image/travel/consultant_c09.png"),
      //     name: "倪大裴",
      //     experience: "讓老師教你，如何把爵士鼓融入生活！",
      //     gender: "女",
      //     category: "learning",
      //     favorites: false,
      //   },
      //   {
      //     id: "C10",
      //     url: require("../assets/image/travel/consultant_c10.png"),
      //     name: "倪中裴",
      //     experience: "讓老師教你，如何把爵士鼓融入生活！",
      //     gender: "女",
      //     category: "learning",
      //     favorites: false,
      //   },
      //   {
      //     id: "C11",
      //     url: require("../assets/image/travel/consultant_c11.png"),
      //     name: "倪小裴",
      //     experience: "學吉他，彈出屬於你的音樂風格！",
      //     gender: "女",
      //     category: "learning",
      //     favorites: false,
      //   },
      //   {
      //     id: "C12",
      //     url: require("../assets/image/travel/consultant_c12.png"),
      //     name: "倪上裴",
      //     experience: "學吉他，彈出屬於你的音樂風格！",
      //     gender: "女",
      //     category: "learning",
      //     favorites: false,
      //   },
      //   {
      //     id: "C13",
      //     url: require("../assets/image/travel/consultant_c13.png"),
      //     name: "倪下裴",
      //     experience: "學烏克麗麗，輕鬆享受甜美音色！",
      //     gender: "女",
      //     category: "learning",
      //     favorites: false,
      //   },
      //   {
      //     id: "C14",
      //     url: require("../assets/image/travel/consultant_c14.png"),
      //     name: "倪左裴",
      //     experience: "優秀老師帶你成就鋼琴夢想",
      //     gender: "女",
      //     category: "learning",
      //     favorites: false,
      //   },
      //   {
      //     id: "C15",
      //     url: require("../assets/image/travel/consultant_c15.png"),
      //     name: "倪右裴",
      //     experience: "1年經驗登山嚮導",
      //     gender: "女",
      //     category: "travel",
      //     favorites: false,
      //   },
      //   {
      //     id: "C16",
      //     url: require("../assets/image/travel/consultant_c16.png"),
      //     name: "倪裴",
      //     experience: "1年經驗登山嚮導",
      //     gender: "女",
      //     category: "travel",
      //     favorites: false,
      //   },
      // ],
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
      console.log(id);
      // 尋找要刪除id 的 index
      this.c_list.forEach((item, index) => {
        if (item.id == id) {
          this.c_list.splice(index, 1);
        }
      });
      console.log(this.c_list);
      // 整理要update的陣列
      let update_list = [];
      this.c_list.forEach((item) => {
        update_list.push(item.id);
      });
      console.log(update_list);

      let member_id = this.$cookies.get("Member_id");
      // 更新會員收藏清單
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}removeFav.php`,
        dataType: "text",
        type: "POST",
        data: {
          id: member_id,
          m_collect: update_list,
        },
        success: (response) => {
          console.log(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    },
    consultantGallery(id) {
      let new_id = id.toString();
      this.$cookies.set("Consultant_id", new_id);
      this.$cookies.set("L_about_consultant", new_id);
    },
  },
  mounted() {
    this.img_src = `${API_ARC}`;
    let vm = this; // 將 Vue instance 存到變數 vm 中
    let Member_id = $cookies.get("Member_id");
    if (Member_id) {
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}memberfav.php`,
        dataType: "json",
        type: "POST",
        data: {
          id: Member_id,
        },
        success: (response) => {
          console.log(response);
          this.favList = JSON.parse(response[0].m_collect);
          console.log(this.favList);
          if (this.favList == null) {
          } else {
            $.ajax({
              url: `${process.env.VUE_APP_AJAX_URL}memberfavS.php`,
              dataType: "json",
              type: "POST",
              data: {
                id: Member_id,
              },
              success: (response) => {
                console.log(response);
                console.dir(this.favList);
                response.forEach((item) => {
                  for (let i = 0; i < this.favList.length; i++) {
                    if (item.id == this.favList[i]) {
                      this.c_list.push(item);
                    }
                  }
                });
                console.log(this.c_list);
              },
              error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
              },
            });
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    }
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

.no_fav {
  font-size: 21px;
  text-align: center;
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
