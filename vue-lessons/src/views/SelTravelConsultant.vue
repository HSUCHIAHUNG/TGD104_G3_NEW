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
            @click.prevent="setTab('tab1', 'all')"
            >全部
          </a>
        </li>
        <li>
          <a
            href="#"
            :class="{ active: currentTab === 'tab2' }"
            @click.prevent="setTab('tab2', '男性')"
            >男性</a
          >
        </li>
        <li>
          <a
            href="#"
            :class="{ active: currentTab === 'tab3' }"
            @click.prevent="setTab('tab3', '女性')"
            >女性</a
          >
        </li>
      </ol>

      <ul>
        <!-- <template v-for="(consultant, index) in consultantInfo" :key="index"> -->
        <template v-for="(consultant, index) in paginatedConsultantInfo">
          <li v-if="current === 'all' || current === consultant.c_gender"  :key="index">
            <label
              ><input
              @change="consultant_select(consultant.id)"
                type="radio"
                class="option-input radio"
                name="consultant"
                :class="{'-checked': selectedConsultant === consultant.id}"
                v-model="selectedConsultant"
                :value="consultant.id"
            /></label>

            <!-- <router-link to="/TravelGallery" target="_blank"
              ><img :src="consultant.url" alt=""
            /></router-link> -->

            <!-- 圖片寫屎 -->
            <router-link to="/TravelGallery">
              <img :src="`${img_src}${consultant.c_photo1}`" alt="" @click="consultantId(consultant.id)"/>
            </router-link>

            <h1>{{ consultant.c_nickname }}</h1>
            <h2>{{ consultant.tr_experience }}</h2>
            <i
              class="fa-regular fa-heart"
              :class="{ 'fa-solid': isFavorite(consultant.id)}"
              @click="toggleFavorite(consultant.id)"
            ></i>
          </li>

        </template>
      </ul>

    </div>

    <div class="page_number">
      <ul>
          <li @click.prevent="setPage(currentPage - 1)">
              <i class="fa-solid fa-angle-left"></i>
          </li>
          <li v-for="(n, index) in totalPage" :key="index" :class="{ pag_active: n === currentPage }" @click.prevent="setPage(n)">
              {{ n }}
          </li>
          <li @click.prevent="setPage(currentPage + 1)">
              <i class="fa-solid fa-angle-right"></i>
          </li>
      </ul>
    </div>
    
  </div>
  <!-- sel_travel_consultant end-->

  <div class="sel_travel_consultant_button">
    <div class="container">
      <router-link to="/TravelMap"
        ><button class="outline_btn_orange" @click="removeId">重新選擇地區</button></router-link
      >

      <button @click="startBooking" class="btn_orange">開始預約</button>
    </div>
  </div>

  <VFooter></VFooter>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import {API_URL} from "@/config";
import {API_ARC} from "@/config";
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
      //分頁
      perpage: 12, //一頁的資料數
      currentPage: 1,
      Member_id: '',
      img_src: '',
    };
  },

  methods: {
    setTab(tab, current) {
    this.currentTab = tab;
    this.current = current;
    this.currentPage = 1;
    },
    //上一頁&下一頁
    setPage(pageNum) {
      if (pageNum < 1 || pageNum > this.totalPage) return;
      this.currentPage = pageNum;
    },

    //input已選擇顧問id set cookie
    consultant_select(id){
      // this.selectedConsultant = id
      this.$cookies.set("selectedConsultant",this.selectedConsultant)
      // this.$router.push({path:'/SelTravelConsultant', query:{'id': id}})
    },

    //點擊愛心收藏
    isFavorite(index) {
      let id = index.toString()
      return this.favorites.includes(id);
    },
    
    toggleFavorite(index) {

      let id = index.toString()
      if (this.isFavorite(index)) {
        const favoriteIndex = this.favorites.indexOf(id);
        this.favorites.splice(favoriteIndex, 1);
        alert("收藏取消");
      } else {
        this.favorites.push(id);
        alert("收藏成功");
      }
      console.log(this.favorites);


      
      //撈資料庫對應會員id，更新收藏愛心欄位m_collect
      if (this.favorites && this.favorites.length > 0) {
      $.ajax({
          method: "POST",
          url: `${process.env.VUE_APP_AJAX_URL}TravelHeartCollect_Update.php`, 
          data: {
            M_collect: this.favorites,
            Id: this.Member_id,
          },
          dataType: "text",
          success: function(response) {
              // alert("收藏成功");
          },
          error: function(exception) {
              // alert("發生錯誤: " + exception.status);
          },

      }); 
      }else{
        //讓m_collect值不為null
        $.ajax({
          method: "POST",
          url: `${process.env.VUE_APP_AJAX_URL}TravelHeartCollect_Update2.php`, 
          data: {
            Id: this.Member_id,
          },
          dataType: "text",
          success: function(response) {
          },
          error: function(exception) {
              // alert("發生錯誤: " + exception.status);
          },

      }); 
      }
    },

    //判斷是否已登入會員和選擇顧問才進入下一頁
    startBooking() {
      let Member_id = $cookies.get("Member_id")
      if (Member_id) {
        if (!this.selectedConsultant) {
          alert("請選擇陪你顧問");
        } else {
          this.$router.push("/TravelCalendar");
        }
      } else {
          alert('請先登入會員');
      }
    },

    //點顧問圖片set 顧問id cookie for顧問詳細頁
    consultantId(consultantId){
      this.$cookies.set("T_about_consultant",consultantId)
      // this.$router.push({path:'/TravelGallery', query:{'Datail': consultantId}})
    },

    //回上一頁時清除cookie selectedConsultant
    removeId(){
      this.$cookies.remove("selectedConsultant");
    },

  },

  mounted() {
    this.img_src = `${API_ARC}`;
    

    this.Member_id = this.$cookies.get("Member_id");
    // console.log(this.Member_id);
    
    //抓cookie已選擇顧問id給selectedConsultan變數
    this.selectedConsultant = this.$cookies.get("selectedConsultant");

    //抓cookie 地區
    this.travelArea = this.$cookies.get("travelArea");
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
    // console.log(this.toTravelClass);

    //呼叫ajax 撈對應顧問
    $.ajax({
        method: "POST",
        url: `${process.env.VUE_APP_AJAX_URL}TravelConsultant_Select.php`, 
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
            // alert("發生錯誤: " + exception.status);
        },

    });  

    //撈已收藏愛心，畫面重整時收藏愛心還會存在
    $.ajax({
        method: "POST",
        url: `${process.env.VUE_APP_AJAX_URL}TravelMember_Select.php`, 
        data: {
          Id: this.Member_id,
            
        },
        dataType: "json",
        success: response => {
          console.log(response,'res');
            if (response !== null && typeof response !== 'undefined' && response.length > 0) { // 修改判空处理
            let array = response[0].m_collect;
            array = JSON.parse(array);
            for (let index = 0; index < array.length; index++) {
              const collect = array[index];
              this.favorites.push(collect);
            }
          }
        },
        error: function(exception) {
            // alert("發生錯誤: " + exception.status);
        },

    }); 
            
  },


  computed: {
    // 分頁相關
    totalPage() {
      let totalData = this.consultantInfo.filter(
        (consultant) =>
          this.current === "all" || this.current === consultant.c_gender
      );
      return Math.ceil(totalData.length / this.perpage);
    },
    paginatedConsultantInfo() {
      let totalData = this.consultantInfo.filter(
        (consultant) =>
          this.current === "all" || this.current === consultant.c_gender
      );
      let start = (this.currentPage - 1) * this.perpage;
      let end = start + this.perpage;
      return totalData.slice(start, end);
    },
    
  },


};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>