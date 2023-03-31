<template>

    <!-- banner  -->
        <div class="travel_banner">
            <div class="container">
                <div class="left_block">
                    <h1>陪你</h1><span>旅行。</span>
                    <h2>比起走了多少公里<br>
                        一路上結交了多少朋友是衡量一趟旅行更好的方式
                    </h2>
                    <img src="../assets/image/travel/travel_banner_people.png" alt="">
                </div>
            
                <div class="right_block">
                    <img src="../assets/image/travel/travel_banner_person.png" alt="">
                </div>
            </div>
        </div>
        <!-- banner  end -->

        <!-- travel_member -->

        <section class="travel_member">
            <div class="container">
                <h1>陪你旅行的成員</h1>
                <swiper
                :spaceBetween="30"
                :slidesPerView="3"
                
                :autoplay="{
                delay: 2500,
                disableOnInteraction: false,
                }"
            
                :modules="modules"
                class="mySwiper"
            >

                <swiper-slide class="autoplay">
                    <div class="card">
                        <i class="fa-solid fa-star"></i>
                        <p>4.5 (211)</p>
                        <img src="../assets/image/travel/travel_member_1.png" alt="">
                        <h2>徐嘉宏</h2>
                        <h3>登山</h3>
                    </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                    <div class="card">
                        <i class="fa-solid fa-star"></i>
                        <p>4.5 (211)</p>
                        <img src="../assets/image/travel/travel_member_1.png" alt="">
                        <h2>徐嘉宏</h2>
                        <h3>登山</h3>
                    </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                    <div class="card">
                        <i class="fa-solid fa-star"></i>
                        <p>4.5 (211)</p>
                        <img src="../assets/image/travel/travel_member_1.png" alt="">
                        <h2>徐嘉宏</h2>
                        <h3>登山</h3>
                    </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                    <div class="card">
                        <i class="fa-solid fa-star"></i>
                        <p>4.5 (211)</p>
                        <img src="../assets/image/travel/travel_member_1.png" alt="">
                        <h2>徐嘉宏</h2>
                        <h3>登山</h3>
                    </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                    <div class="card">
                        <i class="fa-solid fa-star"></i>
                        <p>4.5 (211)</p>
                        <img src="../assets/image/travel/travel_member_1.png" alt="">
                        <h2>徐嘉宏</h2>
                        <h3>登山</h3>
                    </div>
                </swiper-slide>
                    

                </swiper>
            </div>
        </section>

        <!-- travel_star -->
        <section class="travel_star">
            <div class="container">
                <h1>「旅」獲好評！</h1>
                <div class="travel_comment_wrapper">

                    <div class="travel_comments">

                        <div class="travel_comment">
                            <h2>a**********1</h2>
                            <p>第一次使用陪你找到登山旅伴，體驗非常好! 下次再試試騎單車或潛水:]讚啦~~~~~~ 而且老師好幽默風趣!
                                讚讚讚讚讚讚讚讚讚*10000 !</p>
                            <h3>2023-02-18 11:58</h3>
                        </div>
                        <div class="travel_consultant_wrapper">
                            <img src="../assets/image/travel/travel_consultant_1.png" alt="">
                            <div class="travel_consultant">
                                <h4>徐阿宏</h4>
                                <i class="fa-solid fa-star"></i>
                                <p>4.3 (158)</p>
                                <h5>登山</h5>
                            </div>
                        </div>
                    </div>

                    <div class="travel_comments">
                        <div class="travel_comment">
                            <h2>a**********1</h2>
                            <p>第一次使用陪你找到登山旅伴，體驗非常好! 下次再試試騎單車或潛水:]讚啦~~~~~~ 而且老師好幽默風趣!
                                讚讚讚讚讚讚讚讚讚*10000 !</p>
                            <h3>2023-02-18 11:58</h3>
                        </div>
                        <div class="travel_consultant_wrapper">
                            <img src="../assets/image/travel/travel_consultant_1.png" alt="">
                            <div class="travel_consultant">
                                <h4>徐阿宏</h4>
                                <i class="fa-solid fa-star"></i>
                                <p>4.3 (158)</p>
                                <h5>登山</h5>
                            </div>
                        </div>
                    </div>

                    <div class="travel_comments">
                        <div class="travel_comment">
                            <h2>a**********1</h2>
                            <p>第一次使用陪你找到登山旅伴，體驗非常好! 下次再試試騎單車或潛水:]讚啦~~~~~~ 而且老師好幽默風趣!
                                讚讚讚讚讚讚讚讚讚*10000 !</p>
                            <h3>2023-02-18 11:58</h3>
                        </div>
                        <div class="travel_consultant_wrapper">
                            <img src="../assets/image/travel/travel_consultant_1.png" alt="">
                            <div class="travel_consultant">
                                <h4>徐阿宏</h4>
                                <i class="fa-solid fa-star"></i>
                                <p>4.3 (158)</p>
                                <h5>登山</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- travel_star end -->

        <!-- travel_button -->
        <div class="travel_button">
            <div class="container">
                <div class="travel_button_hike">
                    <img src="../assets/image/travel/travel_button_hike.png" alt="">
                    <a href="/TravelMap"><button class="hike btn_orange">陪你登山</button></a> 
                </div>
                <div class="travel_button_bike">
                    <img src="../assets/image/travel/travel_button_bike.png" alt="">
                    <a href="/TravelMap"><button class="bike btn_orange">陪你單車</button></a>
                </div>
                <div class="travel_button_swim">
                    <img src="../assets/image/travel/travel_button_swim.png" alt="">
                    <a href="/TravelMap"><button class="swim btn_orange">陪你潛水</button></a>
                </div>
            </div>
        </div>
        <!-- travel_button end -->


</template>

<script>
    import VHeader from "../components/VHeader.vue";
    import VFooter from "../components/VFooter.vue";
// Import Swiper Vue.js components
  import { Swiper, SwiperSlide } from 'swiper/vue';

  // Import Swiper styles
  import 'swiper/css';


  // import required modules
  import { Autoplay} from 'swiper';

  export default {
    name: "Travel",
    components: {
      VHeader,
      VFooter,
      Swiper,
      SwiperSlide,
    },
    setup() {
      return {
        modules: [Autoplay],
      };
    },
  };

</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
