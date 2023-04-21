<template>
<<<<<<< HEAD
  <div class="top_detail_introduce">
    <div class="consultant_gallary">
      <div class="consultant_gallary_main">
        <img :src="mainImage" :alt="mainImageAlt" />
      </div>

      <div class="consultant_gallary_small">
        <img
          v-for="(image, index) in images"
          :key="index"
          :src="image.small"
          :alt="image.alt"
          @click="changeMainImage(index)"
        />
=======
<div>
 <div class="top_detail_introduce">
      <div class="consultant_gallary">
        <div class="consultant_gallary_main">
          <img :src="mainImage" :alt="mainImageAlt">
        </div>

        <div class="consultant_gallary_small">
          <img v-for="(image, index) in images" 
              :key="index" 
              :src="image.small" 
              :alt="image.alt" 
              @click="changeMainImage(index)">
        </div>
      </div>

      <div v-for="(detail, index) in consultantDetail" class="detail_introduce" :key="index">
        <h1>🌋{{detail.about_title}}</h1>
        <h2>{{detail.c_nickname}}</h2>
        <h3>👩🏻‍🤝‍🧑🏻 性別：{{detail.c_gender}}</h3>
        <h3>🎂 生日：{{detail.c_birth}}</h3>
        <h3>😀 個性：{{detail.c_personality}}</h3>
        <h3>🧡 興趣：{{detail.tr_interest}}</h3>
        <h3>🚩 經歷：{{detail.tr_experience}}</h3>
        <h3>📋 證照：{{detail.tr_license}}</h3>
        <h3>💰 費用：{{detail.about_cost}}</h3>
        <h4>💬 自我介紹</h4>
        <p>{{detail.about_introduction}}</p>
>>>>>>> bc258ca1bfbf85c49d957778aeeada829d65a752
      </div>
    </div>

    <div v-for="(detail, index) in consultantDetail" class="detail_introduce">
      <h1>🌋{{ detail.about_title }}</h1>
      <h2>{{ detail.c_nickname }}</h2>
      <h3>👩🏻‍🤝‍🧑🏻 性別：{{ detail.c_gender }}</h3>
      <h3>🎂 生日：{{ detail.c_birth }}</h3>
      <h3>😀 個性：{{ detail.c_personality }}</h3>
      <h3>🧡 興趣：{{ detail.tr_interest }}</h3>
      <h3>🚩 經歷：{{ detail.tr_experience }}</h3>
      <h3>📋 證照：{{ detail.tr_license }}</h3>
      <h3>💰 費用：{{ detail.about_cost }}</h3>
      <h4>💬 自我介紹</h4>
      <p>{{ detail.about_introduction }}</p>
    </div>
<<<<<<< HEAD
  </div>

  <div class="gallery_btn">
    <router-link to="/SelTravelConsultant"
      ><button class="btn_orange">回預約頁面</button></router-link
    >
  </div>
=======
</div>
>>>>>>> bc258ca1bfbf85c49d957778aeeada829d65a752
</template>

<script>
import $ from "jquery";

export default {
  name: "Gallery2",
  components: {
    $,
  },
  data() {
    return {
      images: [
        {
          small: require("../assets/image/travel/travel_gallery.png"),
          big: require("../assets/image/travel/travel_gallery.png"),
          alt: "Image 1",
        },
        {
          small: require("../assets/image/consultant02.png"),
          big: require("../assets/image/consultant02.png"),
          alt: "Image 2",
        },
        {
          small: require("../assets/image/consultant03.png"),
          big: require("../assets/image/consultant03.png"),
          alt: "Image 3",
        },
      ],
      mainImage: require("../assets/image/travel/travel_gallery.png"),
      mainImageAlt: "Image 1",

      // title: '台灣百岳征服者',
      // name: '裴大尼',
      // gender: '男性',
      // age: '28歲',
      // personality: '活躍健談、遇事從容不迫',
      // interest: '登山、游泳',
      // experience: '登山嚮導、旅行社業務',
      // license: '登山嚮導證',
      // cost: '＄1,500',
      // introduce:'大家好，作為一經歷豐富的登山嚮導，我曾經帶領遊客遊歷過台灣大大小小的山脈，從玉山、合歡山到雪山等等，不管新手或是經驗者都歡迎跟我一起登山！',
      id:'',
      Consultant_id: "",
      consultantDetail: [],
    };
  },
  methods: {
    changeMainImage(index) {
      this.mainImage = this.images[index].big;
      this.mainImageAlt = this.images[index].alt;
    },
  },

  mounted() {
    //取得cookie 顧問id
    this.Consultant_id = this.$cookies.get("Consultant_id");
    // console.log( this.$route);
    // const id = this.$route && this.$route.query && this.$route.query.id
    // if(id){
    //  this.Consultant_id= this.$route.query.id

    // }else{
    //   this.Consultant_id=1
    // }
    console.log(this.Consultant_id);

    //呼叫ajax 撈對應顧問
    $.ajax({
      method: "POST",
      url: "http://localhost/TGD104_G3_NEW/vue-lessons/src/api/Gallery2_Select.php",
      data: {
        Id: this.Consultant_id,
      },
      dataType: "json",
      success: (response) => {
        Array.prototype.push.apply(this.consultantDetail, response);
        console.log(this.consultantDetail);
      },

      error: function (exception) {
        alert("發生錯誤: " + exception.status);
      },
    });
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";

.gallery_btn {
  text-align: center;
  margin-top: 20px;
}
</style>
