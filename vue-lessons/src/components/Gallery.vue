<!-- <template>
    <div class="consultant_gallary">
        <div class="consultant_gallary_main">
            <img src="../assets/image/consultant01.png" alt="">
        </div>
        <div class="consultant_gallary_small">
            <img class="consultant_gallary_chenge" src="../assets/image/consultant01.png" alt="">
            <img class="consultant_gallary_chenge" src="../assets/image/consultant02.png" alt="">
            <img class="consultant_gallary_chenge" src="../assets/image/consultant03.png" alt="">
        </div>

        
    </div>
  </template>
  
  <script>

//   export default {
//     name: "Gallery.vue",
//     data() {
//       return {};
//     },
//   };

export default {
    
    name: "Gallery.vue",
    data() {
      return {};
    },
  };






  </script> -->

  <template>
    <div class="top_detail_introduce">
      <div class="consultant_gallary">
        <div class="consultant_gallary_main">
          <img :src="mainImage" :alt="mainImageAlt">
        </div>
        <!-- <div class="consultant_gallary_small">
          <img v-for="(image, index) in images" 
              :key="index" 
              :src="image.small" 
              :alt="image.alt" 
              @click="changeMainImage(index)">
        </div> -->
        <div class="consultant_gallary_small">
          <img v-for="(image, index) in images" 
              :key="index" 
              :src="image.small" 
              :alt="image.alt" 
              @click="changeMainImage(index)">
        </div>
      </div>

      <div class="detail_introduce">
        <h1>Calvin 托福頂尖菁英培訓 國高中升學救星</h1>
        <br>
        服務課程：英文
        <br>
        相關經歷簡述及自我介紹 ：
        <br> 
        會說英文、中文!!! 
        <br>
        💪教學經驗超過28年/線上教學5年
        <br>
        💪曾任美國大學與中學老師 (醫療英文/商業英文)
        <br>
        💪曾任台灣英文補習班Cortland English主任/老闆10年
        <br>
        💪現任DaDa ABC與泰國補習班主任/老師
        <br>
        💪TESOL/TEFL英文認證老師
        <br>
        💪兼備兒童及成人教學經驗，熟知各年齡段的學習需求
      </div>
    </div>
  </template>
  <script>
  export default {
    name: "Gallery",
    // data() {
    //   return {
    //     images: [
    //       {small: 'https://s3.getstickerpack.com/storage/uploads/sticker-pack/la-bi-xiao-xin-tong-yan-tong-yu-pian/tray_large.png', big: "https://s3.getstickerpack.com/storage/uploads/sticker-pack/la-bi-xiao-xin-tong-yan-tong-yu-pian/tray_large.png", alt: "Image 1"},
    //       {small: "http://img2.eduppt.cn/2ab810a4cce81309bd1cfd1dd5f8a6722f19.png/w260", big: "http://img2.eduppt.cn/2ab810a4cce81309bd1cfd1dd5f8a6722f19.png/w260", alt: "Image 2"},
    //       {small: "http://img2.eduppt.cn/19290baf7aeadeff213fbc9c098c3ebb2208.png/w260", big: "http://img2.eduppt.cn/19290baf7aeadeff213fbc9c098c3ebb2208.png/w260", alt: "Image 3"},
    //     ],
    //     mainImage: "https://s3.getstickerpack.com/storage/uploads/sticker-pack/la-bi-xiao-xin-tong-yan-tong-yu-pian/tray_large.png",
    //     mainImageAlt: "Image 1",
    //   };
    // },
    data() {
      return {
        images: [
          {small: require('../assets/image/consultant01.png'), big: require('../assets/image/consultant01.png'), alt: "Image 1"},
          {small: require('../assets/image/consultant02.png'), big: require('../assets/image/consultant02.png'), alt: "Image 2"},
          {small: require('../assets/image/consultant03.png'), big: require('../assets/image/consultant03.png'), alt: "Image 3"},
        ],
        mainImage: require('../assets/image/consultant01.png'),
        mainImageAlt: "Image 1",
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
  </style>


