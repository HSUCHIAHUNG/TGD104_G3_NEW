<template>
    <!-- <VHeader></VHeader> -->
    <VHeader></VHeader>
    <!-- banner -->
    <div>
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

        <div class="container_learning_bottom container">
            <img src="../assets/image/learning/learning_people2.png" alt="">
            <div class="lesson_tip">
                <P><span>01</span> 選擇課程</P>
                <P><span>02</span> 選擇老師</P>
                <P><span>03</span> 選擇時間</P>
                <P><span>04</span> 成功陪你學習</P>
            </div>
        </div>
    </div>
  <!-- banner end -->

  <div class="learning_main">
      <h2 class="hot_learning">豐富多元課程</h2>

      <!-- 輪播1 -->
      <swiper
        :slidesPerView="1"
        :spaceBetween="10"
                :autoplay="{
                delay: 2500,
                disableOnInteraction: false,
                }"

        :breakpoints="{
          '@0.00': {
            slidesPerView: 2,
            spaceBetween: 5,
          },
          '@0.75': {
            slidesPerView: 3,
            spaceBetween: 5,
          },
          '@1.2': {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          '@1.50': {
            slidesPerView: 4,
            spaceBetween: 10,
          },
        }"
        :modules="modules"
        class="mySwiper"
      >
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_001.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_002.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_003.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_004.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_005.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_001.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_002.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_003.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_004.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_005.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_001.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_002.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_003.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_004.png" alt=""></swiper-slide>
        <swiper-slide class="learning_swiper"><img src="../assets/image/learning/teacher_005.png" alt=""></swiper-slide>
      </swiper>
      <!-- 輪播1 end -->

      <h2 class="hot_learning">熱門陪你學習</h2>
      <!-- 輪播2 -->
      <swiper
          :slidesPerView="1"
          :spaceBetween="10"
                  :autoplay="{
                  delay: 2500,
                  disableOnInteraction: false,
                  }"

          :breakpoints="{
            '@0.00': {
              slidesPerView: 2,
              spaceBetween: 5,
            },
            '@0.75': {
              slidesPerView: 3,
              spaceBetween: 5,
            },
            '@1.2': {
              slidesPerView: 3,
              spaceBetween: 10,
            },
            '@1.50': {
              slidesPerView: 4,
              spaceBetween: 10,
            },
          }"
          :modules="modules"
          class="mySwiper"
        >
          <swiper-slide class="learning_swiper">
              <div class="item">
                  <h4>
                      <img src="../assets/image/learning/book.png" alt="">
                      <div class="content_p">陪你讀英文</div>
                      <div class="hot_name">熱門顧問: 陳品魚</div>
                  </h4>
              </div>
          </swiper-slide>
          <swiper-slide class="learning_swiper">
              <div class="item">
                  <h4>
                      <img src="../assets/image/learning/calculator.png" alt="">
                      <div class="content_p">陪你微積分</div>
                      <div class="hot_name">熱門顧問: 陳娟配</div>
                  </h4>
              </div>
          </swiper-slide>
          <swiper-slide class="learning_swiper">
              <div class="item">
                  <h4>
                      <img src="../assets/image/learning/code.png" alt="">
                      <div class="content_p">陪你寫Java</div>
                      <div class="hot_name">熱門顧問: 徐嘉紅</div>
                  </h4>
              </div>
          </swiper-slide>
          <swiper-slide class="learning_swiper">
              <div class="item">
                  <h4>
                      <img src="../assets/image/learning/color-palette.png" alt="">
                      <div class="content_p">陪你繪畫</div>
                      <div class="hot_name">熱門顧問: 孫一敏</div>
                  </h4>
              </div>
          </swiper-slide>
          <swiper-slide class="learning_swiper">
              <div class="item">
                  <h4>
                      <img src="../assets/image/learning/guitar.png" alt="">
                      <div class="content_p">陪你烏克麗麗</div>
                      <div class="hot_name">熱門顧問: 裴大尼</div>
                  </h4>
              </div>
          </swiper-slide>
          <swiper-slide class="learning_swiper">
              <div class="item">
                  <h4>
                      <img src="../assets/image/learning/study.png" alt="">
                      <div class="content_p">陪你讀書</div>
                      <div class="hot_name">熱門顧問: 倪小培</div>
                  </h4>
              </div>
          </swiper-slide>
      </swiper>
      <!-- 輪播2 end -->
      <h2 class="learning_more"><router-link to="/LearningChoose"><button class="btn btn_solid_secondary btn_orange">更多陪你學習</button></router-link></h2>
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



    <VFooter></VFooter>
  </div>
</template>
  
  <script>
    import VHeader from "../components/VHeader.vue";
    import VFooter from "../components/VFooter.vue";
    import { Swiper, SwiperSlide } from 'swiper/vue';
    import 'swiper/css';
    import 'swiper/css/pagination';
    import { Autoplay, Navigation } from 'swiper';
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
                modules: [Autoplay, Navigation],
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
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>