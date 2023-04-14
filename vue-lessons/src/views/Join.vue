<template>
    <VHeader></VHeader>

    <!-- join_benefit -->
    <div class="join_benefit">
        <div class="container">
            <h1 class="animate__animated animate__rubberBand animate__delay-0.5s">歡迎<span>加入</span>陪你顧問團!</h1>
            <div class="benefit_wrapper">

                <div class="benefit_img">
                    <img src="../assets/image/join/join_benefit_person.png" alt="">
                </div>

                <swiper
                :spaceBetween="30"
                :slidesPerView="3"
                
                :autoplay="{
                delay: 2500,
                disableOnInteraction: false,
                }"

                
                :breakpoints="{
                '@0.00': {
                    slidesPerView: 1,
                    spaceBetween: 5,
                },
                '@0.75': {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                '@1.2': {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                '@1.50': {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                }"
            
                :modules="modules"
                class="mySwiper"
                >

                <swiper-slide class="autoplay">
                    <div class="card">
                        <div class="card_img">
                            <img src="../assets/image/join/time.png" alt="">
                        </div>
                        <h2>時間彈性</h2>
                        
                    </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                    <div class="card">
                        <img src="../assets/image/join/teach.png" alt="">
                        <h2>累積教學經驗</h2>
                    </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                    <div class="card">
                        <img src="../assets/image/join/connect.png" alt="">
                        <h2>拓展人脈</h2>
                    </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                    <div class="card">
                        <img src="../assets/image/join/money.png" alt="">
                        <h2>邊賺邊玩</h2>
                    </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                    <div class="card">
                        <img src="../assets/image/join/friends.png" alt="">
                        <h2>集結志同道合的朋友</h2>
                    </div>
                </swiper-slide>


                </swiper>

            </div>
        </div>
    </div>
    <!-- join_benefit end -->

    <!-- join_condition -->
    <div class="join_condition">

           
        <div class="join_btn">
            
            <button 
            :class="{ active: currentTab === 'tab1' }"
            @click="
            {
                (content = 'LearnCondition'), (currentTab = 'tab1');
            }
            " 
            ><i class="fa-solid fa-book"></i> 學習

            </button>

            <button 
            :class="{ active: currentTab === 'tab2' }"
            @click="
            {
                (content = 'TravelCondition'), (currentTab = 'tab2');
            }
            " 
            ><i class="fa-solid fa-route"></i> 旅行
            </button>
        </div> 


        <div class="container">                
            <component :is="content"></component>
        </div>
                      
        <div class="join_button">
                <!-- <a href="/JoinApply"><button class="btn_orange">加入學習</button></a> -->
                <router-link to="/JoinApply"><button class="btn_orange" @click="toAbout('L')">加入學習</button></router-link>
                <!-- <a href="/JoinApply"><button class="btn_orange">加入旅行</button></a> -->
                <router-link to="/JoinApply"><button class="btn_orange" @click="toAbout('T')">加入旅行</button></router-link>
        </div>

    </div>
    <!-- join_condition end -->


    <VFooter></VFooter>
</template>

<script>
import LearnCondition from "../components/LearnCondition.vue";
import TravelCondition from "../components/TravelCondition.vue";
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import 'animate.css';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import { Autoplay} from 'swiper';

export default {
  name: "Join",
    data() {
        return {
            content: "LearnCondition",
            currentTab: "tab1",
        };
    },
    mounted() {
        this.$cookies.set("memberID","1")
        let x = $cookies.get('memberID')   
    },
    methods: {
       toAbout(e){
        this.$cookies.set("toAbout",e)
       },
       
    },

    components: {
    LearnCondition,
    TravelCondition,
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
