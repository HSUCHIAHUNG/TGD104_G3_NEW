<template>
  <div>
    <VHeader></VHeader>



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
            <img src="../../../image/learning/learning_people.png" alt="">
        </div>

        <div class="container_learning_bottom container">
            <img src="../../../image/learning/learning_people2.png" alt="">
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
            <div class="owl-carousel owl-theme learning_carousel">
                <div class="item"><h4><img src="../../../image/learning/teacher_001.png" alt=""></h4></div>
                <div class="item"><h4><img src="../../../image/learning/teacher_002.png" alt=""></h4></div>
                <div class="item"><h4><img src="../../../image/learning/teacher_003.png" alt=""></h4></div>
                <div class="item"><h4><img src="../../../image/learning/teacher_004.png" alt=""></h4></div>
                <div class="item"><h4><img src="../../../image/learning/teacher_005.png" alt=""></h4></div>
            </div>


            <h2 class="hot_learning">熱門陪你學習</h2>
            <div class="owl-carousel owl-theme learning_icon">
                <div class="item">
                    <h4>
                        <img src="../../../image/learning/book.png" alt="">
                        <div class="content_p">陪你讀英文</div>
                        <div>熱門顧問: 陳品魚</div>
                    </h4>
                </div>
                <div class="item">
                    <h4>
                        <img src="../../../image/learning/calculator.png" alt="">
                        <div class="content_p">陪你微積分</div>
                        <div>熱門顧問: 陳娟配</div>
                    </h4>
                </div>
                <div class="item">
                    <h4>
                        <img src="../../../image/learning/coding.png" alt="">
                        <div class="content_p">陪你寫JavaScript</div>
                        <div>熱門顧問: 徐嘉紅</div>
                    </h4>
                </div>
                <div class="item">
                    <h4>
                        <img src="../../../image/learning/color-palette.png" alt="">
                        <div class="content_p">陪你繪畫</div>
                        <div>熱門顧問: 孫一敏</div>
                    </h4>
                </div>
                <div class="item">
                    <h4>
                        <img src="../../../image/learning/guitar.png" alt="">
                        <div class="content_p">陪你烏克麗麗</div>
                        <div>熱門顧問: 裴大尼</div>
                    </h4>
                </div>
                <div class="item">
                    <h4>
                        <img src="../../../image/learning/study.png" alt="">
                        <div class="content_p">陪你讀書</div>
                        <div>熱門顧問: 倪小培</div>
                    </h4>
                </div>
            </div>
            <h2 class="learning_more"><button class="btn btn_solid_secondary btn_orange">更多陪你學習</button></h2>
        </div>




    <!-- 學員心得 -->
    <h2 class="student_share_word">學員心得分享</h2>
    <div class="student_share">

        <div class="student_share_img">
            <div>
                <img class="share01" src="../../../image/learning/learning_float01.png" alt="">
                <img class="share02" src="../../../image/learning/learning_float02.png" alt="">
            </div>
            <div><button class="btn_orange">提供更多想法!</button></div>
        </div>
        <div class="feelings">

            <div class="learning_wrapper">
                <div class="box box_1">
                    <div class="card front">
                        <img src="../../../image/learning/student001.png" alt="">
                        <p>台北 陳同學</p>
                        <h5>
                            第一次使用陪你的學習課程，體驗非常好! 下次再試試其他課程:)讚啦~~~~~~ 而且老師好溫柔! 
                        </h5>
                    </div>
                </div>
                <div class="box box_2">
                    <div class="card front">
                        <img src="../../../image/learning/student002.png" alt="">
                        <p>新竹 林同學</p>
                        <h5>
                            上課地點也很方便~~~~~~~~~~~~~~~~~讚讚讚讚讚讚讚讚讚*10000
                        </h5>
                    </div>
                </div>
                <div class="box box_3">
                    <div class="card front">
                        <img src="../../../image/learning/student003.png" alt="">
                        <p>高雄 李同學</p>
                        <h5>
                            顧問品質高!下課問問題也很細心解答! 預約方便~~
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 學員心得 end -->




    <VFooter></VFooter>
  </div>
</template>
  
  <script>
    import VHeader from "../components/VHeader.vue";
    import VFooter from "../components/VFooter.vue";
    
    export default {
        name: "Learning",
        data() {
        return {};
        },
        components: {
        VHeader,
        VFooter
        },
    };
  </script>
  
  
  <style lang="scss">
  @import "../../../tgd104-sass/new_style.scss";
  </style>