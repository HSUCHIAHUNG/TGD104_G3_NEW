<template>
  <VHeader></VHeader>
  <!-- <Gallery></Gallery> -->
  <div class="top_detail_introduce">
    <div class="consultant_gallary">
      <div v-for="(item, index) in Learning_consultantDetail"  class="consultant_gallary_main">
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

    <div
      class="detail_introduce learning_detail"
      v-for="(learning_detail, index) in Learning_consultantDetail"
      :key="index"
    >
      <h1>{{ learning_detail.about_title }}</h1>
      <br />
      <h6 class="learning_nickname">{{ learning_detail.c_nickname }}</h6>
      <h6>📖 教學課程 : {{ learning_detail.about_class }}</h6>
      <h6>🌍 上課地址 : {{ learning_detail.s_address }}</h6>
      <h6>☎️ 聯絡方式 : {{ learning_detail.c_mail }}</h6>
      <h6>💰 費用 : {{ learning_detail.about_cost }} / 堂</h6>
      <br />
      <h6>關於我 :</h6>
      <h6>{{ learning_detail.about_introduction }}</h6>
    </div>
  </div>
  <div class="gallery_btn">
    <router-link to="/learningchoose/music"
      ><button class="btn_orange">回預約頁面</button></router-link
    >
  </div>
  <MessageBoard></MessageBoard>
  <VFooter></VFooter>
</template>

<script>
import VHeader from "../components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
// import Gallery from "../components/Gallery.vue";
import MessageBoard from "../components/MessageBoard.vue";
import $ from "jquery";
import {API_ARC} from "@/config";

export default {
  name: "LearningGallery",
  data() {
    return {
      images: [
        {
          small: require("../assets/image/learning/student003.png"),
          big: require("../assets/image/learning/student003.png"),
          alt: "Image 1",
        },
        {
          small: require("../assets/image/learning/student002.png"),
          big: require("../assets/image/learning/student002.png"),
          alt: "Image 2",
        },
        {
          small: require("../assets/image/learning/student001.png"),
          big: require("../assets/image/learning/student001.png"),
          alt: "Image 3",
        },
      ],
      mainImage: require("../assets/image/learning/student003.png"),
      mainImageAlt: "Image 1",
      L_consultant_id_detail: "",
      Learning_consultantDetail: [],
      img_src: '',
      // learning_details: [],
      // about_title: "Calvin 托福頂尖菁英培訓 國高中升學救星",
      // about_class: "英文",
      // s_address: "台北市中正區和平西路168號3樓",
      // c_mail: "english@gmail.com",
      // about_cost: "1500",
      // about_introduction: "教學經驗超過28年/線上教學5年，曾任美國大學與中學老師 (醫療英文/商業英文)，曾任台灣英文補習班Cortland English主任/老闆10年，總之!我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~"
    };
  },
  components: {
    VFooter,
    VHeader,
    // Gallery,
    MessageBoard,
    $,
  },

  methods: {
    changeMainImage(index) {
      this.mainImage = this.images[index].big;
      this.mainImageAlt = this.images[index].alt;
    },
  },

  mounted() {
    this.img_src = `${API_ARC}`;
    this.L_consultant_id_detail = this.$cookies.get("L_about_consultant");
    console.log(this.L_consultant_id_detail);

    // $.getJSON(`${process.env.VUE_APP_AJAX_URL}LearningGallery_Select.php`).then(response => this.learning_details = response)
    $.ajax({
      method: "POST",
      url: `${process.env.VUE_APP_AJAX_URL}LearningGallery_Select.php`,
      data: {
        Id: this.L_consultant_id_detail,
      },
      dataType: "json",
      success: (response) => {
        Array.prototype.push.apply(this.Learning_consultantDetail, response);
        console.log(this.Learning_consultantDetail);
      },
      error: function (exception) {
        // alert("發生錯誤: " + exception.status);
      },
    });
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";

.gallery_btn {
  text-align: center;
  font-size: 36px;
  font-weight: 600;
  margin-top: 20px;
}

.detail_introduce h1 {
  font-size: $fs28;
}

.learning_detail h6 {
  line-height: 26px;
}

.gallery_btn {
  text-align: center;
  margin-top: 20px;
}

.learning_nickname {
  font-size: 22px;
  margin-bottom: 10px;
}
</style>
