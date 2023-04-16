<template>
  <div>
    <VHeaderTest></VHeaderTest>
    <UpLoadImg></UpLoadImg>
    <div v-for="(item, index) in c_list">
      <p>{{ item.c_firstname + item.c_lastname }}</p>
      <img src="" :alt="item.c_photo1" />
      <p v-if="item.s_title">{{ item.s_title }}</p>
      <p v-else>{{ item.tr_title }}</p>
    </div>

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
          </div>
          <!-- 下半部 收藏清單內容 -->
          <div class="main_fav_list">
            <ul class="fav_list_area">
              <template v-for="(item, index) in c_list" :key="item.id">
                <li class="fav_consultant_card">
                  <router-link to="/TravelGallery" target="_blank"
                    ><img :src="item.c_photo1" :alt="item.c_photo1"
                  /></router-link>
                  <h1>{{ item.c_firstname + item.c_lastname }}</h1>
                  <h2>
                    {{ item.tr_title ? item.tr_title : item.s_title }}
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
</template>

<script>
import $ from "jquery";
import VHeaderTest from "@/components/VHeaderTest.vue";
import UpLoadImg from "@/components/UpLoadImg.vue";
import Avatar from "@/components/Avatar.vue";
import SideNav from "@/components/SideNav.vue";
import DropDown from "../components/DropDown.vue";

export default {
  name: "PeiTest",
  data() {
    return {
      account: "",
      favList: [],
      c_list: [],
      currentTab: "learning",
      defaultOption: "收藏清單",
    };
  },
  components: {
    VHeaderTest,
    UpLoadImg,
    Avatar,
    SideNav,
    DropDown,
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
      // 整理要update的陣列
      let update_list = [];
      this.c_list.forEach((item) => {
        update_list.push(item.id);
      });

      let member_id = this.$cookies.get("Member_id");
      // 更新會員收藏清單
      $.ajax({
        url: "http://localhost/NEW_G3/vue-lessons/src/api/removeFav.php",
        dataType: "text",
        type: "POST",
        data: {
          id: member_id,
          m_fav: update_list,
        },
        success: (response) => {
          console.log(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    },
  },
  mounted() {
    let vm = this; // 將 Vue instance 存到變數 vm 中
    let Member_id = $cookies.get("Member_id");
    if (Member_id) {
      $.ajax({
        url: "http://localhost/NEW_G3/vue-lessons/src/api/memberfav.php",
        dataType: "json",
        type: "POST",
        data: {
          id: Member_id,
        },
        success: (response) => {
          console.log(response);
          this.favList = response[0].m_fav;
          console.log(this.favList);
          $.ajax({
            url: "http://localhost/NEW_G3/vue-lessons/src/api/memberfavS.php",
            dataType: "json",
            type: "POST",
            data: {
              id: Member_id,
            },
            success: (response) => {
              let arr = response;
              console.log(arr);
              arr.filter((item) => {
                if (this.favList.includes(item.id)) {
                  this.c_list.push(item);
                  console.log(this.c_list);
                }
              });
            },
            error: function (jqXHR, textStatus, errorThrown) {
              console.log(textStatus, errorThrown);
            },
          });

          // if (
          //   response &&
          //   response[0] &&
          //   response[0].m_fav &&
          //   JSON.parse(response[0].m_fav).consultant
          // ) {
          //   console.log(response);
          //   console.log(response[0]);
          //   console.log(response[0].m_fav);
          //   console.log(JSON.parse(response[0].m_fav));
          //   vm.favList = JSON.parse(response[0].m_fav).consultant; // 將 vm.favList 設置為取得的陣列
          //   // 取得顧問資料
          //   $.ajax({
          //     url: "http://localhost/NEW_G3/vue-lessons/src/api/memberfavS.php",
          //     dataType: "json",
          //     type: "POST",
          //     data: {
          //       id: Member_id,
          //     },
          //     success: (response) => {
          //       let arr = response;
          //       console.log(arr);
          //       arr.filter((item) => {
          //         if (vm.favList.includes(item.id)) {
          //           vm.c_list.push(item);
          //           console.log(vm.c_list);
          //         }
          //       });
          //     },
          //     error: function (jqXHR, textStatus, errorThrown) {
          //       console.log(textStatus, errorThrown);
          //     },
          //   });
          // }
        },

        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    }
  },
};
</script>

<style></style>
