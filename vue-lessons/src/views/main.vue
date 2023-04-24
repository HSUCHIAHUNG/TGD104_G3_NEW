<template>
    <div>
        <VHeader></VHeader>
        <!-- banner start-->
        <div class="banner_container"> 
            
                <swiper
                :spaceBetween="30"
                :centeredSlides="true"
                :loop="true"
                :autoplay="{
                delay: 6500,
                disableOnInteraction: false,
                }"
                :modules="modules"
                class="mySwiper"
                >     
                    <!-- <swiper-slide class="swiper-slide">
                        <h1 class="content_h1"><span class="content_span">陪你</span>，專業的旅伴和學習伙伴</h1>
                        <p class="content_p">陪你是一個提供陪你學習和陪你旅行等專業服務的網站。我們的使命是讓學習和旅行更加輕鬆和愉快</p>
                        <br>
                        <p class="content_p">讓您的生活更加充實和有意義。選擇陪你，選擇專業的伴侶展開一段無憂的旅程吧！</p>         
                    </swiper-slide> -->

                    <swiper-slide class="swiper-slide">
                        <h1 class="content_h1">陪你<span class="content_span">學習</span></h1>
                        <p class="content_p">找不到人陪你學習?陪你學習課程包含音樂、語言、寫程式等專業顧問陪伴你學習,讓你學習的旅途上不在一個人,現在就來預約你專屬的學習伴侶吧!

                        </p>
                        <router-link to="/learning"><button class="btn_orange">陪你學習</button></router-link>
                        <!-- <a href="/learning"><button class="btn_orange">陪你學習</button></a>            -->
                    </swiper-slide>

                    <swiper-slide class="swiper-slide">
                        <h1 class="content_h1">陪你<span class="content_span">旅行</span></h1>
                        <p class="content_p">旅行中有時候會感到孤單和無助，但現在有了陪你旅行你可以和我們的旅行嚮導一起探索世界，分享經驗，讓專業的旅遊顧問陪你,讓你的旅行不再孤單！</p>
                        <router-link to="/travel"><button class="btn_orange">陪你旅行</button></router-link>
                        <!-- <a href="/travel"><button class="btn_orange">陪你旅行</button></a>           -->
                    </swiper-slide>

                    <swiper-slide class="swiper-slide">
                        <h1 class="content_h1">加入<span class="content_span">陪你</span></h1>
                        <p class="content_p">找不到地方分享你的技能嗎?快來成為我們的專業顧問,與我們的學員共同展開一段有趣的學習之旅吧。</p>
                        <router-link to="/join"><button class="btn_orange">加入陪你</button></router-link>                   
                        <!-- <a href="/join"><button class="btn_orange">加入陪你</button></a>           -->
                    </swiper-slide>

                </swiper>
            <div class="index_banner_img"></div>           
        </div>
        <!-- banner end -->

        <!-- learning start -->
        <section class="index_learning">
            <div class="index_learning_container">
                <div class="index_learning_img"></div>
                <div class="index_learning_content">
                <h1 class="content_h1">
                    <span class="content_span">學習</span>路上的路標，<br><span class="content_span">陪你</span>學習，助你前行！
                </h1>
                <p class="content_p">像好友一樣的優質老師就在陪你<br>不要讓學習成為孤獨的旅程，陪你學習，讓你更加快樂！</p>
                <router-link to="/learning"><button class="btn_orange">陪你學習</button></router-link>
                <!-- <a href="/learning"><button class="btn_orange">陪你學習</button></a>  -->
                </div>
            </div>
            <div class="index_learning_bg"></div>
            <div class="index_learning_img02"></div>
        </section>
        <!-- learning end -->

        <!-- travel start -->
        <section class="index_travel">
            <div class="index_travel_container">
                <div class="index_travel_content">
                <h1 class="content_h1">
                    不孤單的旅行，<br>就從有<span class="content_span">陪你</span>開始。
                </h1>
                <p class="content_p">喜歡登山？喜歡單車？喜歡潛水？<br> 就讓陪你成為你的好旅伴，一起來場無限可能的旅行吧！</p>
                <router-link to="/travel"><button class="btn_orange">陪你旅行</button></router-link>
                <!-- <a href="/travel"><button class="btn_orange">陪你旅行</button></a>  -->
                
                </div>
                <div class="index_travel_img"></div>
            </div>
            <div class="index_travel_bg"></div>
        </section>
        <!-- travel end -->

        <!-- join start -->
        <section class="index_join">
            <div class="index_join_container">
                <h1 class="content_h1"><span class="content_span">加入</span>陪你</h1> 
                <ul class="index_join_content">
                    <li>
                        <img src="../assets/image/index/index_join_people02.png" alt="img">
                        <div class="join_box_text">
                            <router-link to="/join"><h1>學習</h1></router-link>                       
                            <p>時間彈性<br>累積經驗<br>高預約率</p> 
                        </div>
                    </li>
                    <li>
                        <img src="../../../image/index/index_join_people01.png" alt="img">
                        <div class="join_box_text">
                            <router-link to="/join"><h1>旅行</h1></router-link>  
                            <p>時間彈性<br>邊賺邊玩<br>高預約率</p> 
                        </div>
                    </li>

                </ul>
            </div>
        </section>
        <!-- join end -->
    </div>
    <VFooter></VFooter>
</template>

<script>
// Import Swiper Vue.js components
import VHeader from "@/components/VHeader.vue";
import VFooter from '@/components/VFooter.vue'
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';





// import required modules
import { Autoplay, Navigation } from 'swiper';

export default {
    name: "Index",
    components: {
      VHeader,
      VFooter,
      Swiper,
      SwiperSlide,
    },
    setup() {
      return {
        modules: [Autoplay, Navigation],
      };
    },
  };
</script>

<style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
</style>