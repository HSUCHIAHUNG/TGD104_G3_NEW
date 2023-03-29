<template>


    <div>
        <!-- banner start-->
        <div class="banner_container">
                  <swiper
            :spaceBetween="30"
            :centeredSlides="true"
            :autoplay="{
            delay: 2500,
            disableOnInteraction: false,
            }"
            :pagination="{
            clickable: true,
            }"

            :modules="modules"
            class="mySwiper"
        >
            <swiper-slide class="swiper-slide">
                <h1 class="content_h1">找不到人陪你？<span class="content_span">陪你，</span><br>陪你讓你不再孤單！</h1>
                <p class="content_p">像好友一樣的優質老師就在陪你不要讓學習<br>成為孤獨的旅程，陪你學習，讓你更加快樂！</p>
                <button class="btn_orange">陪你學習</button>          
            </swiper-slide>

            <swiper-slide class="swiper-slide">
                <h1 class="content_h1">找不到人陪你？<span class="content_span">陪你，</span><br>陪你讓你不再孤單！</h1>
                <p class="content_p">像好友一樣的優質老師就在陪你不要讓學習<br>成為孤獨的旅程，陪你學習，讓你更加快樂！</p>
                <button class="btn_orange">陪你學習</button>          
            </swiper-slide>

            <swiper-slide class="swiper-slide">
                <h1 class="content_h1">找不到人陪你？<span class="content_span">陪你，</span><br>陪你讓你不再孤單！</h1>
                <p class="content_p">像好友一樣的優質老師就在陪你不要讓學習<br>成為孤獨的旅程，陪你學習，讓你更加快樂！</p>
                <button class="btn_orange">陪你學習</button>          
            </swiper-slide>

            <swiper-slide class="swiper-slide">
                <h1 class="content_h1">找不到人陪你？<span class="content_span">陪你，</span><br>陪你讓你不再孤單！</h1>
                <p class="content_p">像好友一樣的優質老師就在陪你不要讓學習<br>成為孤獨的旅程，陪你學習，讓你更加快樂！</p>
                <button class="btn_orange">陪你學習</button>          
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
                <button class="btn_orange">陪你學習</button>
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
                <p class="content_p">喜歡登山？喜歡單車？喜歡潛水？<br> 就讓<span>陪你</span>成為你的好旅伴，一起來場無限可能的旅行吧！</p>
                <button class="btn_orange">陪你學習</button>
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
                        <img src="../../../image/index/index_join_people02.png" alt="img">
                        <div class="join_box_text">
                            <a href="https://www.youtube.com/watch?v=CJd1Qiz8QDQ" target="_blank"><h1>學習</h1></a>                       
                            <p>時間彈性<br>累積經驗<br>高預約率</p> 
                        </div>
                    </li>
                    <li>
                        <img src="../../../image/index/index_join_people01.png" alt="img">
                        <div class="join_box_text">
                            <a href="https://www.youtube.com/watch?v=CJd1Qiz8QDQ" target="_blank"><h1>旅行</h1></a>    
                            <p>時間彈性<br>邊賺邊玩<br>高預約率</p> 
                        </div>
                    </li>

                </ul>
            </div>
        </section>
        <!-- join end -->
    </div>
</template>

<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';





// import required modules
import { Autoplay, Pagination, Navigation } from 'swiper';

export default {
    name: "index",
    components: {
      Swiper,
      SwiperSlide,
    },
    setup() {
      return {
        modules: [Autoplay, Pagination, Navigation],
      };
    },
  };
</script>

<style lang="scss">
@import "../../../tgd104-sass/new_style.scss";
</style>