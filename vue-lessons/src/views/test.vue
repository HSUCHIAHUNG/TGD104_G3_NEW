<template>
    <!-- banner start-->
    <VHeader></VHeader>
    <section class="about_banner">
        <div class="about_banner_container container">
            <div class="about_banner_left">
                <h1 class="content_h1 typing1"><span class="content_span"></span></h1>
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
                <h1 class="content_h1 typing2"><span class="content_span"></span><span class="content_span"></span></h1>
                <div class="about_story1_right_img"></div>
            </div>
        </div>
    </section>
    <!-- story1 end -->

    <!-- story2 start -->
    <section class="about_story2">
        <div class="about_story2_container container">
            <div class="about_story2_left">
                <h1 class="content_h1 typing3"><span class="content_span"></span></h1>
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
            <h1 class="content_h1 typing4">
              <span class="content_span"></span><span class="content_span"></span>
            </h1>
          </div>
      </div>
      <div class="about_banner_right"></div>
  </section>
  <!-- story3 end -->

  <!-- story4 start -->
  <section class="about_story4">
    <div class="about_story4_container container">
      <div class="about_story4">
        <h1 class="content_h1">
          而
          <span class="content_span">陪你</span>
          這個網站就此誕生!
        </h1>
        <h1 class="content_h1">
          提供陪你學習、旅遊等服務，希望可以幫助所有孤單需要求助的人，提供專業的顧問服務給予適時的指引，把你的問題都交給陪你吧！
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
import VFooter from "@/components/VFooter.vue";
import Typed from "typed.js";

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
   
  },
  
  mounted() {
    const options1 = {
      strings: ['陪你的故事緣起於日本,這要從一個退休大叔的,故事開始說起...'],
      typeSpeed: 100,
      showCursor : false,
      loop : false,
      // startDelay : 1000,
    };

    const options2 = {
      strings: ['有一天大叔走在人來人往的街道上偶然聽見女大學生談話說道「大叔好噁心」!'],
      typeSpeed: 100,
      showCursor : false,
      loop : false,
      startDelay : 5000,

    };

    const options3 = {
      strings: ['身為一個擁有豐富閱歷經驗的大叔想做些事情來重拾社會對大叔的正面形象決定，出租自己以展現大叔被遺忘的魅力 。'],
      typeSpeed: 100,
      showCursor : false,
      loop : false,
      startDelay : 10000,
    };

    const options4 = {
      strings: ['而陪你這個網站也以此概念延伸,認為出租大叔是出租自己閱歷經驗，而人生中也有許多時刻會需要像出租大叔這樣的人生導師，給予適時的指引與幫助 。'],
      typeSpeed: 100,
      showCursor : false,
      loop : false,
      startDelay : 18000,
    };

    const options5 = {
      strings: ['而陪你這個網站就此誕生!'],
      typeSpeed: 100,
      showCursor : false,
      loop : false,
      startDelay : 25000,
    };

    const options6 = {
      strings: ['提供陪你學習、旅遊等服務，希望可以幫助所有孤單需要求助的人，提供專業的顧問服務給予適時的指引，把你的問題都交給陪你吧！'],
      typeSpeed: 100,
      showCursor : false,
      loop : false,
      startDelay : 28000,
    };
   
    new Typed('.typing1', options1);
    new Typed('.typing2', options2);
    new Typed('.typing3', options3);
    new Typed('.typing4', options4);
    new Typed('.typing5', options5);
    new Typed('.typing6', options6);
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
