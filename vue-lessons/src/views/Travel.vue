<template>

    <VHeader></VHeader>
    <!-- banner  -->
        <div class="travel_banner">
            <div class="container">
                <div class="left_block">
                    <h1>陪你</h1><span>旅行。</span>
                    <h2 class="typing">
                        <!-- 比起走了多少公里<br>
                        一路上結交了多少朋友是衡量一趟旅行更好的方式 -->
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
                            <i class="fa-solid fa-star"></i>
                            <p>4.5</p>
                            <div class="card_img">
                                <img src="../assets/image/travel/travel_member_1.png" alt="">
                            </div>
                            <h2>徐宏宏</h2>
                            <h3>登山</h3>
                        </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                        <div class="card">
                            <i class="fa-solid fa-star"></i>
                            <p>4.5</p>
                            <div class="card_img">
                                <img src="../assets/image/travel/travel_member_2.png" alt="">
                            </div>
                            <h2>陳霈霈</h2>
                            <h3>潛水</h3>
                        </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                        <div class="card">
                            <i class="fa-solid fa-star"></i>
                            <p>4.5</p>
                            <div class="card_img">
                                <img src="../assets/image/travel/consultant_c09.png" alt="">
                            </div>
                            <h2>陳諭諭</h2>
                            <h3>單車</h3>
                        </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                        <div class="card">
                            <i class="fa-solid fa-star"></i>
                            <p>4.5</p>
                            <div class="card_img">
                                <img src="../assets/image/travel/consultant_c08.png" alt="">
                            </div>
                            <h2>徐阿宏</h2>
                            <h3>登山</h3>
                        </div>
                </swiper-slide>

                <swiper-slide class="autoplay">
                        <div class="card">
                            <i class="fa-solid fa-star"></i>
                            <p>4.5</p>
                            <div class="card_img">
                                <img src="../assets/image/travel/consultant_c16.png" alt="">
                            </div>
                            <h2>孫敏敏</h2>
                            <h3>單車</h3>
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

                        <div class="box" v-for="(box, index) in travelComment" :key="index" ref="box">
                            <div class="travel_comment">
                                <h2>{{box.id}}</h2>
                                <p>{{box.comments}}</p>
                                <h3>{{box.time}}</h3>
                            </div>
                            <div class="travel_consultant_wrapper">
                                <img :src="box.url" alt="">
                                <div class="travel_consultant">
                                    <h4>{{box.name}}</h4>
                                    <i class="fa-solid fa-star"></i>
                                    <p>{{box.star}}</p>
                                    <h5>{{box.category}}</h5>
                                </div>
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
                    <router-link to="/TravelMap"><button class="bike btn_orange" @click="toTravelClass('H')">陪你登山</button></router-link>
                </div>
                <div class="travel_button_bike">
                    <img src="../assets/image/travel/travel_button_bike.png" alt="">
                    <router-link to="/TravelMap"><button class="bike btn_orange" @click="toTravelClass('B')">陪你單車</button></router-link>
                </div>
                <div class="travel_button_swim">
                    <img src="../assets/image/travel/travel_button_swim.png" alt="">
                    <router-link to="/TravelMap"><button class="bike btn_orange" @click="toTravelClass('S')">陪你潛水</button></router-link>
                </div>
            </div>
        </div>
        <!-- travel_button end -->

    <VFooter></VFooter>
</template>

<script>
    import VHeader from "@/components/VHeader.vue";
    import VFooter from "../components/VFooter.vue";
    import gsap from 'gsap'
    import ScrollTrigger from 'gsap/ScrollTrigger'
    import { Swiper, SwiperSlide } from 'swiper/vue';
    import {API_URL} from "@/config";

    import 'swiper/css';
    // import required modules
    import { Autoplay} from 'swiper';

    import Typed from 'typed.js';

    export default {
        name: "Travel",
        data() {
            return {
                travelComment: [
                    {
                        id: 'a**********1',
                        comments: '第一次使用陪你找到登山旅伴，體驗非常好! 下次再試試騎單車或潛水:]讚啦~~~~~~ 而且顧問好幽默風趣!讚讚讚讚讚讚讚讚讚*10000 ! ',
                        time: '2023-02-18 11:58',
                        url:require('../assets/image/travel/consultant_c02.png'),
                        name: '徐大宏',
                        star: 4.5,
                        category: '登山',
                    },
                    {
                        id: 'b**********1',
                        comments: '常常想登山卻找不到朋友一起，能夠在這找到志同道合的登山旅伴而且又是相當有經驗的顧問，給你500顆星星!',
                        time: '2023-03-18 17:58',
                        url:require('../assets/image/travel/consultant_c01.png'),
                        name: '徐小宏',
                        star: 4.3,
                        category: '登山',
                    },
                    {
                        id: 'c**********1',
                        comments: '今天使用陪你找到潛水旅伴，我們跑去龍洞某個潛水點一起自由潛水，顧問好專業身材又保養的很好!讚讚~~',
                        time: '2023-03-28 21:00',
                        url:require('../assets/image/travel/consultant_c08.png'),
                        name: '徐宏',
                        star: 4.2,
                        category: '潛水',
                    },
                ],

            };
        },
        components: {
            VHeader,
            VFooter,
            Swiper,
            SwiperSlide,
            Typed,
        },
        setup() {
            return {
            modules: [Autoplay],
            };
        },
        mounted() {
            //滾到評論區才彈出來
            gsap.registerPlugin(ScrollTrigger)

            const boxes = this.$refs.box

            boxes.forEach((box, index) => {
            const comment = box.querySelector('.travel_comment')
            const consultant = box.querySelector('.travel_consultant_wrapper')

            gsap.set(comment, { y: 150, opacity: 0 })
            gsap.set(consultant, { y: -150, opacity: 0 })

            ScrollTrigger.create({
                trigger: box,
                start: 'top center+=100',
                onEnter: () => {
                gsap.to(comment, {
                    y: 0,
                    opacity: 1,
                    ease: 'elastic.out(1, 0.3)',
                    duration: 1
                })
                gsap.to(consultant, {
                    y: 0,
                    opacity: 1,
                    ease: 'elastic.out(1, 0.3)',
                    duration: 1,
                    delay: 0.2
                })
                },
                onLeaveBack: () => {
                gsap.to(comment, {
                    y: 150,
                    opacity: 0,
                    ease: 'power3.out',
                    duration: 0.5
                })
                gsap.to(consultant, {
                    y: -150,
                    opacity: 0,
                    ease: 'power3.out',
                    duration: 0.5
                })
                }
             })
            });

            //打字機
            const options = {
            strings: ['比起走了多少公里<br>一路上結交了多少朋友是衡量一趟旅行更好的方式'],
            typeSpeed: 100,
            showCursor: false,
            };

            const typed = new Typed('.typing', options);
            
        },

        methods: {
            toTravelClass(e){
                this.$cookies.set("toTravelClass",e)
            },
        },

    };

</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
