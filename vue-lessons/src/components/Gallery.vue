
  <template>
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
      



      <div class="detail_introduce learning_detail">
        <h1>{{about_title}}</h1>
        <br>
        <h6>📖 教學課程 : {{about_class}}</h6>
        <h6>🌍 上課地址 : {{s_address}}</h6> 
        <h6>☎️ 聯絡方式 : {{c_mail}}</h6>
        <h6>💰 費用 : {{about_cost}} / 堂</h6>
        <br>
        <h6>關於我 : </h6>
        <h6>{{about_introduction}}</h6>
      </div>
    </div>
  </template>
  <script>
  export default {
    name: "Gallery",

    data() {
      return {
        images: [
          {small: require('../assets/image/learning/student003.png'), big: require('../assets/image/learning/student003.png'), alt: "Image 1"},
          {small: require('../assets/image/learning/student002.png'), big: require('../assets/image/learning/student002.png'), alt: "Image 2"},
          {small: require('../assets/image/learning/student001.png'), big: require('../assets/image/learning/student001.png'), alt: "Image 3"},
        ],
        mainImage: require('../assets/image/learning/student003.png'),
        mainImageAlt: "Image 1",
        // learning_details: [],
        about_title: "Calvin 托福頂尖菁英培訓 國高中升學救星",
        about_class: "英文",
        s_address: "台北市中正區和平西路168號3樓",
        c_mail: "english@gmail.com",
        about_cost: "1500",
        about_introduction: "教學經驗超過28年/線上教學5年，曾任美國大學與中學老師 (醫療英文/商業英文)，曾任台灣英文補習班Cortland English主任/老闆10年，總之!我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~我很棒~"
      };
    },
    methods: {
      changeMainImage(index) {
        this.mainImage = this.images[index].big;
        this.mainImageAlt = this.images[index].alt;
      }
    }
  };
  </script>
  
  <style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
  
    .detail_introduce h1{
      font-size: $fs28;
    }

    .learning_detail h6{
      line-height: 26px;
    }
  </style>


