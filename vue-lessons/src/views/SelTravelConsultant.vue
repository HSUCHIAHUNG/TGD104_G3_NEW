<template>
  <VHeader></VHeader>

  <!-- sel_travel_consultant_banner -->
  <div class="sel_travel_consultant_banner">
    <div class="container">
      <div class="left_block">
        <h1>
          不孤單的旅行，<br />
          就從有<span>陪你</span>開始。
        </h1>
        <h2>喜歡登山？喜歡單車？喜歡潛水？</h2>
        <h3>就讓<span>陪你</span>成為你的好旅伴，一起來場無限可能的旅行吧！</h3>
        <h4>開始預約<span>陪你</span>顧問</h4>
        <i class="fa-regular fa-circle-down"></i>
      </div>
      <div class="right_block">
        <img
          src="../assets/image/travel/sel_travel_consultant_banner.png"
          alt=""
        />
      </div>
    </div>
  </div>
  <!-- sel_travel_consultant_banner end -->

  <!-- sel_travel_consultant -->
  <div class="sel_travel_consultant">
    <div class="self_or_random">
      <div class="self"><i class="fa-solid fa-hand-pointer"></i>自定義</div>
      <div class="random">
        <router-link to="/travelgame"
          ><i class="fa-solid fa-gamepad"></i>隨機</router-link
        >
      </div>
    </div>

    <div class="self_consultant container">
      <ol class="tabs">
        <li>
          <a
            href="#"
            :class="{ active: currentTab === 'tab1' }"
            @click.prevent="
              {
                (current = 'all'), (currentTab = 'tab1');
              }
            "
            >全部</a
          >
        </li>
        <li>
          <a
            href="#"
            :class="{ active: currentTab === 'tab2' }"
            @click.prevent="
              {
                (current = '男性'), (currentTab = 'tab2');
              }
            "
            >男性</a
          >
        </li>
        <li>
          <a
            href="#"
            :class="{ active: currentTab === 'tab3' }"
            @click.prevent="
              {
                (current = '女性'), (currentTab = 'tab3');
              }
            "
            >女性</a
          >
        </li>
      </ol>

      <ul>
        <template v-for="(consultant, index) in consultantInfo" :key="index">
          <li v-if="current === 'all' || current === consultant.c_gender">
            <label
              ><input
              @change="consultant_select(consultant.id)"
                type="radio"
                class="option-input radio"
                name="consultant"
                v-model="selectedConsultant"
                :value="consultant.id"
            /></label>

            <!-- <router-link to="/TravelGallery" target="_blank"
              ><img :src="consultant.url" alt=""
            /></router-link> -->

            <!-- 圖片寫屎 -->
            <router-link to="/TravelGallery" target="_blank"
              ><img src="../assets/image/travel/consultant_c01.png" alt=""
            /></router-link>

            <h1>{{ consultant.c_nickname }}</h1>
            <h2>{{ consultant.tr_experience }}</h2>
            <i
              class="fa-regular fa-heart"
              :class="{ 'fa-solid': isFavorite(index) }"
              @click="toggleFavorite(index)"
            ></i>
          </li>
        </template>
      </ul>
    </div>

    <div class="page_number">
      <a href=""><i class="fa-solid fa-angle-left"></i></a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i></a>
    </div>
  </div>
  <!-- sel_travel_consultant end-->

  <div class="sel_travel_consultant_button">
    <div class="container">
      <router-link to="/TravelMap"
        ><button class="outline_btn_orange">重新選擇地區</button></router-link
      >

      <button @click="startBooking" class="btn_orange">開始預約</button>
    </div>
  </div>

  <VFooter></VFooter>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import $ from "jquery";

export default {
  name: "SelTravelConsultant",
  components: {
    VHeader,
    VFooter,
    $,
  },
  data() {
    return {
      current: "all",
      favorites: [],
      currentTab: "tab1",
      selectedConsultant: '',
      travelArea: '',
      toTravelClass: '',
      consultantInfo: [],
    };
  },



  methods: {
    consultant_select(id){
      this.selectedConsultant = id
      this.$cookies.set("selectedConsultant",this.selectedConsultant)
    },
    isFavorite(index) {
      return this.favorites.includes(index);
    },
    toggleFavorite(index) {
      if (this.isFavorite(index)) {
        const favoriteIndex = this.favorites.indexOf(index);
        this.favorites.splice(favoriteIndex, 1);
      } else {
        this.favorites.push(index);
      }
    },

    startBooking() {
      let id = $cookies.get("Member_id")
      if (id) {
        if (this.selectedConsultant === '' && this.toTravelClass === this.consultantInfo.about_class) {
          alert("請選擇陪你顧問");
        } else {
          this.$router.push("/TravelCalendar");
        }
      } else {
          alert('請先登入會員');
      }

    },
  },

  mounted() {
    //先放member_id
    this.$cookies.set("Member_id","1")
    // this.$cookies.remove("member_id");
    
    //抓已選擇顧問id
    this.selectedConsultant = this.$cookies.get("selectedConsultant");

    //抓cookie 地區
    this.travelArea = (decodeURIComponent(this.$cookies.get("travelArea")));
    console.log(this.travelArea);

    //抓cookie 旅行類別
    let x = this.$cookies.get("toTravelClass")
    if(x == "H"){
       x = "登山"
    }else if(x == "B"){
      x = "單車"
    }else{
      x = "潛水"
    }
    this.toTravelClass = x;
    console.log(this.toTravelClass);

    //呼叫ajax 撈對應顧問
    $.ajax({
        method: "POST",
        url: 'http://localhost/TGD104_G3_NEW/vue-lessons/src/api/TravelConsultant_Select.php', 
        data: {
          About_class: this.toTravelClass,
          C_area: this.travelArea,
            
        },
        dataType: "json",
        success: response => {
          // 将回应数据附加到consultantInfo数组中
          Array.prototype.push.apply(this.consultantInfo, response);
          console.log(this.consultantInfo);
        },
        error: function(exception) {
            alert("發生錯誤: " + exception.status);
        },

    });  
            
  },


};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
