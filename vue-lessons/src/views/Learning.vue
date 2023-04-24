<template>
    <!-- <VHeader></VHeader> -->
    <VHeader></VHeader>

    
    
    <div class="learning_body">
        <!-- <div class="bgsi bgsi_1" id="gear"></div>
        <div class="bgsi bgsi_2" id="gear2"></div>
        <div class="bgsi bgsi_3" id="gear3"></div>
        <div class="bgsi bgsi_4" id="gear4"></div>
        <div class="bgsi bgsi_5" id="gear5"></div> -->
        <!-- banner -->
        <div class="learning_content">

            <div class="container_learning container">
                <div>
                    <h1><span>陪你</span>學習。</h1>
                    <br>
                    <p>針對各個年齡層為您選擇最適合的陪你<br>提供活到老學到老 終身學習服務</p>
                    <br>
                    <p>我們包含英文.數學.樂器.寫程式<br>想得到的都替你安排!</p>
                </div>
                <img src="../assets/image/learning/learning_people.png" alt="">
            </div>


            <div class="container learning_tips">
                <div><p>01</p><h3>選擇課程</h3></div>
                <div><p>02</p><h3>選擇老師</h3></div>
                <div><p>03</p><h3>選擇時間</h3></div>
                <div><p>04</p><h3>成功陪你學習</h3></div>
            </div>

        </div>
        <!-- banner end -->

        <div class="learning_main">
            <h2 class="hot_learning">豐富多元課程</h2>

            <!-- 輪播 -->
            <swiper
                :slidesPerView="1"
                :spaceBetween="10"
                :autoplay="{
                    delay: 2500,
                    disableOnInteraction: false,
                }"

                :breakpoints="{
                    '@0.00': {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    '@0.60': {
                        slidesPerView: 2,
                        spaceBetween: 15,
                    },
                    '@1.0': {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    '@1.50': {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    },
                }"
                :modules="modules"
                :navigation="true"
                class="mySwiper"
            >

            <!-- <swiper-slide class="learning_swiper">
                <img src="../assets/image/learning/teacher_001.png" alt="">
            </swiper-slide>
            <swiper-slide class="learning_swiper">
                <img src="../assets/image/learning/teacher_002.png" alt="">
            </swiper-slide>
            <swiper-slide class="learning_swiper">
                <img src="../assets/image/learning/teacher_003.png" alt="">
            </swiper-slide>
            <swiper-slide class="learning_swiper">
                <img src="../assets/image/learning/teacher_004.png" alt="">
            </swiper-slide>
            <swiper-slide class="learning_swiper">
                <img src="../assets/image/learning/teacher_005.png" alt="">
            </swiper-slide> -->

            <swiper-slide class="learning_swiper">
                <div class="Consultant_learning_card">
                    <img src="../assets/image/learning/teacher_001.png" alt="">
                    <h2>公開透明的價格</h2>
                    <p>課程費用直接告訴你!</p>
                </div>
            </swiper-slide>
            <swiper-slide class="learning_swiper">
                <div class="Consultant_learning_card card_even">
                    <img src="../assets/image/learning/teacher_002.png" alt="">
                    <h2>會員心得全告訴你</h2>
                    <p>我們非常歡迎會員交流</p>
                </div>
            </swiper-slide>
            <swiper-slide class="learning_swiper">
                <div class="Consultant_learning_card">
                    <img src="../assets/image/learning/teacher_003.png" alt="">
                    <h2>顧問品質NO.1</h2>
                    <p>審核到上架都讓您放心</p>
                </div>
            </swiper-slide>
            <swiper-slide class="learning_swiper">
                <div class="Consultant_learning_card card_even">
                    <img src="../assets/image/learning/teacher_004.png" alt="">
                    <h2>傾聽你所有的意見</h2>
                    <p>想要什麼課程陪你來安排</p>
                </div>
            </swiper-slide>
            <swiper-slide class="learning_swiper">
                <div class="Consultant_learning_card">
                    <img src="../assets/image/learning/teacher_005.png" alt="">
                    <h2>最強大的團隊</h2>
                    <p>用心經營是我們的宗旨</p>
                </div>
            </swiper-slide>

            </swiper>
            <h2 class="learning_more"><router-link to="/LearningChoose"><button class="btn btn_solid_secondary btn_orange">更多陪你學習</button></router-link></h2>
            <!-- 輪播end -->

            <h2 class="hot_learning">會員學習心得</h2>
      

            <!-- card -->
            <div class="learning_card_all">
                <div class="learning_card">
                    <div class="charList-heading">
                        <h3 class="charList-heading-title">陪你讀英文<br>陳品魚</h3>                           
                        <div class="charList-heading-img">
                            <img class="Saly-33" src="../assets/image/learning/Saly-33.png" alt="">
                        </div>
                    </div>

                    <div class="charList-inner">
                        <p class="charList-text">
                            在這門課中，顧問專注於提高我的書面和口語溝通能力，
                            以及探討各種寫作風格和技巧，包括說服性寫作、學術寫作和創意寫作。還教我將涵蓋有效的溝通策略、專業電子郵件和人際溝通。
                            透過這門課程，讓我有效傳達想法的能力，更有助於未來的職業生涯。
                        </p>              


                        <!-- <button class="btn btn_solid_secondary btn_orange">Read More</button> -->

                    </div>
                </div>


                <div class="learning_card">
                    <div class="charList-heading">
                        <h3 class="charList-heading-title">陪你微積分<br>陳娟配</h3>                           
                        <div class="charList-heading-img">
                            <img class="Saly-34" src="../assets/image/learning/Saly-34.png" alt="">
                        </div>
                    </div>

                    <div class="charList-inner">
                        <p class="charList-text">
                            顧問深入探討微積分的基本原理和概念，包括極限、微分和積分。還將涵蓋一些基本的微積分應用，例如尋找極值、曲線的長度和曲面的面積。
                            理解微積分的核心原理和技巧，將這些技能應用於各種現實世界的問題中，例如工程學和經濟學等領域，讓我不再畏懼微積分，超棒的啦。
                        </p>              


                        <!-- <button class="btn btn_solid_secondary btn_orange">Read More</button> -->


                    </div>
                </div>


                <div class="learning_card">
                    <div class="charList-heading">
                        <h3 class="charList-heading-title">陪你繪畫<br>孫一敏</h3>                           
                        <div class="charList-heading-img">
                            <img class="Saly-35" src="../assets/image/learning/Saly-35.png" alt="">
                        </div>
                    </div>

                    <div class="charList-inner">
                        <p class="charList-text">
                            這個課程將從材料和工具的介紹開始，包括水彩顏料、畫筆和紙張的選擇。
                            顧問會探討基本的繪畫技巧，例如濕法、乾法、膠水法等，以及如何使用色彩、形狀和構圖來創作具有視覺效果的作品，課程精彩又有趣。
                        </p>              

                                <!-- <button class="btn btn_solid_secondary btn_orange">Read More</button> -->

                    </div>
                </div>


                <div class="learning_card">
                    <div class="charList-heading">
                        <h3 class="charList-heading-title">陪你寫JAVA<br>徐嘉紅</h3>                           
                        <div class="charList-heading-img">
                            <img class="Saly-36" src="../assets/image/learning/Saly-36.png" alt="">
                        </div>
                    </div>

                    <div class="charList-inner">
                        <p class="charList-text">
                            陪你幫助我學習JAVA程式設計的基礎知識和應用技巧，以及如何使用JAVA開發。
                            涵蓋JAVA的基本資料型別、流程控制語句、方法、物件和類等基本概念。
                            學習使用JAVA開發應用程序，例如圖形使用者介面、資料庫程式設計和網路應用程式開發。
                        </p>              

                                <!-- <button class="btn btn_solid_secondary btn_orange">Read More</button> -->

                    </div>
                </div>
            </div>
            <!-- card end -->
        </div>




        <!-- qa -->
        <div class="learning_bgc">
            <h2 class="student_share_word">常見問題</h2>
            <div class="learning_qa_all">
                <div v-for="(qa, index) in qas" :key="index" class="learning_qa">
                    <div class="learning_q" @click="toggleAnswer(index)">
                        <h3>{{ qa.question }}</h3>
                        <span>{{ qa.open ? '▼' : '▲' }}</span>
                    </div>
                    <div v-if="qa.open" class="learning_a">
                        <p>{{ qa.answer }}</p>
                    </div>
                </div>
            </div>
            <!-- qa end -->
            <h2 class="learning_more"><router-link to="/LearningOption"><button class="btn btn_solid_secondary btn_orange">提供更多想法</button></router-link></h2>
        </div>
        <!-- qa end -->

    </div>
    <VFooter></VFooter>
  
</template>
  
<script>
    import VHeader from "../components/VHeader.vue";
    import VFooter from "../components/VFooter.vue";
    import { Swiper, SwiperSlide } from 'swiper/vue';
    import 'swiper/css';
    import 'swiper/css/pagination';
    import 'swiper/css/navigation';
    import {Navigation } from 'swiper';
    // import './style.css';
    export default {
        name: "Learning",
        data() {
            return {
                qas: [
                    {
                        question: '我想要的課程陪你沒有怎麼辦?',
                        answer: '點選下方提供更多想法→提供意見 告訴我們你所想學習的內容和需求，如果你的意見獲得學員們的認同，我們將會為你找尋最適合你的學習方案，提供更進一步的學習諮詢和指導，讓你的學習之路更加順利~~',
                        open: false,
                    },
                    {
                        question: '我已經成功預約顧問，確切的時間陪你會替我安排嗎?',
                        answer:
                        '完成付款後點選查看訂單，就可以發送訊息與顧問協調當天時間囉!',
                        open: false,
                    },
                    {
                        question: '之前的體驗非常良好，如果我想要再次預約同一個顧問有更方便的方式嗎?',
                        answer:
                        '陪你目前沒有提供其他預約方式哦!不過對於大家意見陪你都會列入考量~',
                        open: false,
                    },
                    {
                        question: '如果臨時想要退款怎麼辦?',
                        answer:
                        '陪你只接受7天內申請退款(且要在課程日3天前)，退款需撥打我們的客服唷!',
                        open: false,
                    },
                    {
                        question: '請問上課地點可以更改嗎?',
                        answer:
                        '上課地點是由顧問決定，若有需求可以於下單後發送訊息與顧問協調!',
                        open: false,
                    },
                ],
            };
        },
        components: {
            VHeader,
            VFooter,
            Swiper,
            SwiperSlide,
        },
        setup() {
            return {
                modules: [Navigation],
            };
        },
        methods: {
            toggleAnswer(index) {
                this.qas.forEach((qa, i) => {
                    if (i === index) {
                        qa.open = !qa.open;
                    } else {
                        qa.open = false;
                    }
                });
            },
        }
    };
</script>

<style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
    .swiper {
        max-width: 1200px;
        width: 100%;
        //   height: 100%;
    }

    .learning_swiper{
        text-align: center;
        font-size: 18px;
        background: transparent;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .learning_swiper img {
        display: block;
        // width: 100%;
        // height: 100%;
        object-fit: cover;
    }

    .learning_body{
        background-image: url("../assets/image/bgi001.png");
        background-repeat: repeat;
        background-size: cover;
    }

    .learning_card_all{
        display: flex;
        flex-wrap: wrap;
        max-width: 1380px;
        margin: 0 auto;
        justify-content: space-evenly;
    }
    
    .learning_card{
        max-width: 500px;
        width: 95%;
        margin: 50px 20px;
    }

    .charList-heading{
        height: 120px;
    }

    .charList-heading{
        background-color: rgba(248, 182, 45, 0.2);
        border-bottom: 10px solid #FFE59D;
        padding: 1.7em 0 1.5em 2em;
        position: relative;
    }

    .charList-heading-title {
        font-size: 24px;
        font-weight: 600;
        letter-spacing: 0.05em;
        position: relative;
        z-index: 9;
    }

    .charList-heading-img {
        width: 120px;
        position: absolute;
        bottom: 50px;
        right: 10%;
        pointer-events: none;
    }

    .charList-heading-img img {
        width: 120px;
        border: 0;
        vertical-align: bottom;
        border-radius: 50%;
    }

    
    .charList-text{
        font-size: 18px;
        line-height: 35px;
        font-weight: 600;
        min-height: 180px;
        margin-bottom: 15px;
        margin-top: 15px;
    }

    .swiper-button-next,
    .swiper-button-prev {
    display: inline-block;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background-color: #585858;
    text-align: center;
    color: white;
    border-radius: 5px;
    }

    .swiper-button-next:after, .swiper-rtl .swiper-button-prev:after,
    .swiper-button-prev:after, .swiper-rtl .swiper-button-next:after{
        font-size: 20px;
        font-weight: 600;
    }

    .Consultant_learning_card{
    max-width: 380px;
    // height: 350px;
    text-align: center;
    background-color: #FAEECD;
    padding-top: 20px;
    border-radius: 5px;
  }
  .Consultant_learning_card img{
    max-width: 320px;
    width: 90%;
    border-radius: 5px;
    margin: 0 auto;
  }

  .Consultant_learning_card h2{
    color: #585858;
    font-size: 24px;
    font-weight: 600;
    margin-top: 10px;
  }

  .Consultant_learning_card p{
    color: #585858;
    font-size: 18px;
    font-weight: 600;
    margin-top: 20px;
    margin-bottom: 20px;
    letter-spacing: 2px;
  }
  
  .card_even{
    background-color: #FFE59D;
  }
</style>