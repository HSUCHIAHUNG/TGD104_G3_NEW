<template>
    <!-- banner start-->
    <VHeader></VHeader>
    <section class="about_banner">
        <div class="about_banner_container container">
            <div class="about_banner_left">
                <h1  class="content_h1 test_text"><span class="content_span"></span></h1>
            </div>
            <div class="about_banner_right"></div>
        </div>
    </section>
    <!-- banner end -->

    <!-- story1 start -->
    <section class="about_story1" ref="target">
        <div class="about_story1_container container">
            <div class="about_story1_left"></div>
            <div class="about_story1_right">
                <h1 class="content_h1 typing" ><span class="content_span"></span><span class="content_span"></span></h1>
                <div class="about_story1_right_img"></div>
            </div>
        </div>
    </section>
    <!-- story1 end -->

    <!-- story2 start -->
    <section class="about_story2">
        <div class="about_story2_container container">
            <div class="about_story2_left">
                <h1 class="content_h1">身為一個擁有豐富閱歷經驗的大叔想做些事情來重拾社會對大叔的正面形象決定，<span class="content_span">出租自己</span>以展現大叔被遺忘的魅力 。</h1>
                <div class="about_story2_left_img"></div>
            </div>
            <div class="about_story2_right"></div>
        </div>
    </section>
    <!-- trave2 end -->

    <!-- story3 start -->
    <section class="about_story3">
      <div class="about_story3_container container">
          <div class="about_story3_left_img"></div>
          <div class="about_story3_right">
            <h1 class="content_h1">
              而陪你這個網站也以此概念延伸,認為<span class="content_span">出租大叔</span>是出租自己閱歷經驗，而人生中也有許多時刻會需要像出租大叔這樣的的<span class="content_span">人生導師</span>，給予適時的指引與幫助 。
            </h1>
          </div>
      </div>
    </section>
    <!-- story3 end -->

    <!-- story4 start -->
    <section class="about_story4">
      <div class="about_story4_container container">
          <div class="about_story4">
            <h1 class="content_h1">
              而<span class="content_span">陪你</span>這個網站就此<span class="content_span">誕生</span> !
            </h1>
            <h1 class="content_h1">
              提供陪你回學習、旅遊等服務，希望可以幫助所有孤單需要求助的人，提供專業的顧問服務給予適時的指引，把你的問題都交給陪你吧！
            </h1>
          </div>
          <div class="about_story4_left_img"></div>
      </div>
    </section>
    <!-- story4 end -->
    <VFooter></VFooter>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from '@/components/VFooter.vue';
import Typed from 'typed.js';
export default {
  name: "Respect",
    components: {
      VHeader,
      VFooter,
    },
  data() {
    return {};
  },
  
  methods: {
    handleScroll() {
      const targetElement = this.$refs.target; // 取得參考名稱為target的DOM元素
      const rect = targetElement.getBoundingClientRect(); // 取得物件位置資訊
      const elementTop = rect.top;

      if (elementTop <= window.innerHeight) {
        // 當物件頂端位置小於等於視窗高度時，表示已觸碰到頂端
        console.log(elementTop);
      }
    },
    handleResize() {
      this.handleScroll(); // 視窗大小改變時重新計算目標物件位置資訊
    }
  },
  destroyed() {
    window.removeEventListener('scroll', this.handleScroll); // 移除滾動事件監聽
    window.removeEventListener('resize', this.handleResize); // 移除視窗縮放事件監聽
  },
  
   mounted() {
    window.addEventListener('scroll', this.handleScroll); // 監聽滾動事件
    window.addEventListener('resize', this.handleResize); // 監聽視窗縮放事件
    
    const options = {
      strings: ['陪你的故事緣起於日本,這要從一個退休大叔的,故事開始說起...'],
      typeSpeed: 100,
      showCursor : false,
      loop : true
    };

    const testtx = {
      strings: ['陪你的故事緣起於日本,這要從一個退休大叔的,故事開始說起...'],
      typeSpeed: 100,
      showCursor : false,
      loop : true
    };

    new Typed('.typing', options);
    new Typed('.test_text', testtx);
  },
  
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";

</style>