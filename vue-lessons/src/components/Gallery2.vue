<template>
  <div>
    <div class="top_detail_introduce">
      <div class="consultant_gallary">
        <div v-for="(item, index) in consultantDetail" class="consultant_gallary_main">
          <img :src="`${img_src}${item.c_photo1}`" :alt="mainImageAlt" />
        </div>

        <div class="consultant_gallary_small">
          <img
            v-for="(image, index) in images"
            :key="index"
            :src="image.small"
            :alt="image.alt"
            @click="changeMainImage(index)"
          />
        </div>
      </div>

      <div v-for="(detail, index) in consultantDetail" class="detail_introduce" :key="index">
        <h1>{{detail.about_title}}🌋🚲🤿</h1>
        <h2>{{detail.c_nickname}}</h2>
        <h3>👩🏻‍🤝‍🧑🏻 性別：{{detail.c_gender}}</h3>
        <h3>🎂 生日：{{detail.c_birth}}</h3>
        <h3>😀 個性：{{detail.c_personality}}</h3>
        <h3>🧡 興趣：{{detail.tr_interest}}</h3>
        <h3>🚩 經歷：{{detail.tr_experience}}</h3>
        <h3>📋 證照：{{detail.tr_license}}</h3>
        <h3>💰 費用：{{detail.about_cost}}</h3>
        <h4>💬 自我介紹</h4>
        <p>{{ detail.about_introduction }}</p>
      </div>
  </div>

</div>

  <div class="gallery_btn">
    <router-link to="/SelTravelConsultant"
      ><button class="btn_orange">回預約頁面</button></router-link
    >
  </div>
</template>

<script>
import $ from "jquery";
import {API_ARC} from "@/config";

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

      id:'',
      img_src: '',
      T_about_consultant: "",
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
    this.img_src = `${API_ARC}`;
    //取得cookie 顧問id
    this.T_about_consultant = this.$cookies.get("T_about_consultant");
    // console.log( this.$route);
    // const id = this.$route && this.$route.query && this.$route.query.id
    // if(id){
    //  this.T_about_consultant= this.$route.query.id

    // }else{
    //   this.T_about_consultant=1
    // }
    console.log(this.T_about_consultant);

    //呼叫ajax 撈對應顧問
    $.ajax({
      method: "POST",
      url: `${process.env.VUE_APP_AJAX_URL}Gallery2_Select.php`,
      data: {
        Id: this.T_about_consultant,
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
