<template>
    <div>
    <VHeader></VHeader>
    <!-- main_banner -->
    <div class="main_banner">
        <div class="main_container">
            <div class="main_title animate__animated animate__bounceIn animate__delay-1s">
                不再孤單旅行、不再獨自學習，<br><span>「陪你」</span>陪您走過每個旅程與學習。
            </div>
            <!-- 雲 -->
            <div class="clouds">
                <div class="cloud cloud1"></div> <!-- 第一朵雲 -->
                <div class="cloud cloud2"></div> <!-- 第二朵雲 -->
                <div class="cloud cloud3"></div> <!-- 第三朵雲 -->
            </div>
            <!-- 雲 結束-->
            <!-- 太陽 -->
            <div class="container-sun">
                <svg class="svg-sun" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
                <circle cx="50" cy="50" r="35" id="sun"></circle>
                </svg>
            </div>
            <!-- 太陽 結束-->
            <!-- 城市 人物 對話框-->
            <div class="main_img">
                <div><img src="../assets/image/city.png" alt="" class="floating-img"></div>
                <div class="falling-object-container">
                    <router-link to="/Travel">
                        <img src="../assets/image/people1.png" alt="" class="falling-object">
                    </router-link>
                    <div class="dialogue_box animate__animated animate__bounceIn animate__delay-2s">
                        <div class="dialogue_content">
                            {{ dialogue1 }}
                        </div>
                    </div>
                </div>
                <div class="falling-object-container">
                    <router-link to="/Join">
                        <img src="../assets/image/people2.png" alt="" class="falling-object2">
                    </router-link>
                    <div class="dialogue_box2 animate__animated animate__bounceIn animate__delay-3s">
                        <div class="dialogue_content">
                            {{ dialogue2 }}
                        </div>
                    </div>
                </div>
                <div class="falling-object-container">
                    <router-link to="/Learning">
                        <img src="../assets/image/people3.png" alt="" class="falling-object3">
                    </router-link>
                    <div class="dialogue_box3 animate__animated animate__bounceIn animate__delay-4s">
                        <div class="dialogue_content">
                            {{ dialogue3 }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- 城市 人物 對話框 結束-->
        </div>
    </div>
    <!-- main_banner end-->

    <!-- main_section -->
    <div class="main_section">
        <ul>
            <li>
                <div class="main_section_left">
                    <h1>學習路上的路標<br>陪你學習，助你前行！</h1>
                    <router-link to="/learning"><button class="btn_blue">陪你學習</button></router-link>
                </div>
                <div class="main_section_right">
                    <img src="../assets/image/index/main_section_01.png" alt="">
                </div>
            </li>
            <li>
                <div class="main_section_left">
                    <h1>不孤單的旅行<br>就從有陪你開始。</h1>
                    <router-link to="/travel"><button class="btn_blue">陪你旅行</button></router-link>
                </div>
                <div class="main_section_right">
                    <img src="../assets/image/index/main_section_02.png" alt="">
                </div>
            </li>
            <li>
                <div class="main_section_left">
                    <h1>成為陪你顧問</h1>
                    <router-link to="/join"><button class="btn_blue">加入陪你</button></router-link>
                </div>
                <div class="main_section_right">
                    <img src="../assets/image/index/main_section_03.png" alt="">
                </div>
            </li>
            <li>
                <div class="main_section_left">
                    <h1>「陪你」如何誕生?</h1>
                    <router-link to="/Respect"><button class="btn_blue">關於陪你</button></router-link>
                </div>
                <div class="main_section_right">
                    <img src="../assets/image/index/main_section_04.png" alt="">
                </div>
            </li>
        </ul>

    </div>

    <!-- main_section end-->

    <VFooter></VFooter>
    </div>
</template>

<script>
// Import Swiper Vue.js components
import VHeader from "@/components/VHeader.vue";
import VFooter from '@/components/VFooter.vue';
import 'animate.css';

export default {
    name: "mainNew",
    components: {
      VHeader,
      VFooter,
    },
    data() {
        return {
            showDialog1: false, // 控制第一個對話框的顯示/隱藏
            showDialog2: false, // 控制第二個對話框的顯示/隱藏
            showDialog3: false, // 控制第三個對話框的顯示/隱藏
            dialogue1: "好想旅行，沒人陪...😟", // 第一個對話框的內容
            dialogue2: "讓我來陪你😉", // 第二個對話框的內容
            dialogue3: "想學習JavaScript嗎? 我可以分享🧐", // 第三個對話框的內容
        };
    },
    methods: {
        showDialogue(dialogue) {
            if (dialogue === '旅行') {
                this.showDialog1 = true;
            } else if (dialogue === '顧問') {
                this.showDialog2 = true;
            }  else{
                this.showDialog3 = true;
            }
        }
    },


};
</script>

<style lang="scss" scope>
    @import "../assets/tgd104-sass/new_style.scss";
    
    .main_banner {
        padding: 20px 0;
        background-color: #fdf8ee;
    }
    .main_container{
        // background-color: #fff;
        border-radius: 15px;
        margin: 0 auto;
        width:80%;
        .main_title{
            font-size: 32px;
            font-weight: 600;
            text-align: center;
            color: #585858;
            width: 60%;
            margin: 0 auto;
            position: absolute;
            left: 20%;
            top: 30%;
            // background-image: url('');
            letter-spacing: 2px;
            span{
                color: #ff7d33;
            }
        }
        //雲
        .clouds {
            position: relative; 
            height: 80px;
            .cloud {
                position: absolute; 
                width: 200px; 
                height: 100%; 
                background: url('../assets/image/cloud.png') no-repeat center center; 
                background-size: contain;  
                animation: cloudAnimation 20s linear infinite; 
            }
            .cloud1 {
                top: 0;
                left: -500px;
                }
            .cloud2 {
                top: 20px; 
                left: -15px;
            }
            .cloud3 {
                top: 40px;
                left: -400px; 
            }  
            @keyframes cloudAnimation {
                0% {
                transform: translateX(-100%); 
                }
                100% {
                transform: translateX(1200%);
                }
            }
        }
        //雲 結束
        //城市 人物 對話框
        .main_img{
            position: relative; 
            .floating-img {
                display: block;
                width: 100%;
                animation: floatingAnimation 3s ease infinite; /* 設定漂浮動畫效果 */
            }
            @keyframes floatingAnimation {
                0% {
                    transform: translateY(0); /* 設定起始位置 */
                }
                50% {
                    transform: translateY(-10px); /* 設定漂浮的最高點位置 */
                }
                100% {
                    transform: translateY(0); /* 設定終點位置 */
                }
            }
            //人物1
            .falling-object{
                position: absolute; 
                left: 50%; /* 將物體置中 */
                transform: translateX(-50%); /* 將物體置中 */
                display: block;
                width: 100%;
                width: 40px;
                &:hover{
                    cursor: pointer;
                }
                animation: fallingObject 1s ease forwards; 
            }
            @keyframes fallingObject {
                0% {
                    top: 35%; 
                    opacity: 0;
                }
                100% {
                    top: 55%; 
                }
            }
            //人物1對話框
            .dialogue_box {
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                margin: auto;
                width: 200px;
                background-color: #ffffff;
                padding: 10px;
                text-align: center;
                opacity: 0.9;
                border-radius: 5px;
            }

            .dialogue_content {
                font-size: 14px;
                font-weight: 600;
                color: #585858;
                letter-spacing: 2px;
            }
            //人物2
            .falling-object2{
                position: absolute; 
                left: 28%;
                transform: translateX(-28%); 
                width: 40px;
                &:hover{
                    cursor: pointer;
                }
                animation: fallingObject2 2s ease forwards; 
            }
            @keyframes fallingObject2 {
                0% {
                    top: 35%; 
                    opacity: 0;
                }
                100% {
                    top: 55%; 
                }
            }
            //人物2對話框
            .dialogue_box2{
                position: absolute;
                top: 50%;
                left: -50%;
                right: 0;
                margin: auto;
                width: 150px;
                background-color: #ffffff;
                padding: 10px;
                text-align: center;
                opacity: 0.9;
                border-radius: 5px;
            }
            //人物3
            .falling-object3{
                position: absolute; 
                left: 65%; 
                transform: translateX(-65%); 
                width: 55px;
                &:hover{
                    cursor: pointer;
                }
                animation: fallingObject3 3s ease forwards; 
            }
            @keyframes fallingObject3 {
                0% {
                    top: 15%; 
                    opacity: 0;
                }
                100% {
                    top: 35%; 
                }
            }
            //人物3對話框
            .dialogue_box3{
                position: absolute;
                top: 27%;
                left: 40%;
                right: 0;
                margin: auto;
                width: 200px;
                background-color: #ffffff;
                padding: 10px;
                text-align: center;
                opacity: 0.9;
                border-radius: 5px;
            }
        }
        //城市 人物 對話框 結束

        // 太陽 開始
        .container-sun{
            text-align:right;
            padding-right: 15%;
        }
        /* the svg element */
        .svg-sun{
            width:100px;
            height:100px;

            -webkit-transform-origin: center center;
            -moz-transform-origin: 50% 50%;
            -o-transform-origin: center center;
            -ms-transform-origin: center center;
            transform-origin:50% 50%;

            -webkit-animation: spin 25s linear infinite, sun-glow 3s 0s linear infinite;
            -moz-animation: spin 25s linear infinite, sun-glow 3s 0s linear infinite;
            -o-animation:spin 25s linear infinite, sun-glow 3s 0s linear infinite;
            -ms-animation: spin 25s linear infinite, sun-glow 3s 0s ease-in-out infinite;
            animation: spin 25s linear infinite,sun-glow 3s 0s linear infinite;

        }
        /* the circle element in the svg itself */
        #sun{
            stroke-width:18;
            stroke-dasharray:2;
            stroke-dashoffset:2;
        }
        /* animation for the sun glowing effect */
        @-webkit-keyframes sun-glow { 
            0% { fill: #f1c40f; stroke:#f1c40f;}
            50% { fill: #e67e22; stroke:#e67e22;}
            100% { fill: #f1c40f; stroke:#f1c40f;}
        }
        @-moz-keyframes sun-glow { 
            0% { fill: #f1c40f; stroke:#f1c40f;}
            50% { fill: #e67e22; stroke:#e67e22;}
            100% { fill: #f1c40f; stroke:#f1c40f;}
        }
        @-o-keyframes sun-glow { 
            0% { fill: #f1c40f; stroke:#f1c40f;}
            50% { fill: #e67e22; stroke:#e67e22;}
            100% { fill: #f1c40f; stroke:#f1c40f;}
        }
        @-ms-keyframes sun-glow { 
            0% { fill: #f1c40f; stroke:#f1c40f;}
            50% { fill: #e67e22; stroke:#e67e22;}
            100% { fill: #f1c40f; stroke:#f1c40f;}
        }
        @keyframes sun-glow { 
            0% { fill: #f1c40f; stroke:#f1c40f;}
            50% { fill: #e67e22; stroke:#e67e22;}
            100% { fill: #f1c40f; stroke:#f1c40f;}
        }

        /* start spin animation */
        @-webkit-keyframes spin{
            100% {
                -webkit-transform: rotate(360deg);
            }
        }
        @-moz-keyframes spin{
            100% {
                -moz-transform: rotate(360deg);
            }
        }
        @-o-keyframes spin{
            100% {
                -o-transform: rotate(360deg);
            }
        }
        @-ms-keyframes spin{
            100% {
                -ms-transform: rotate(360deg);
            }
        }
        @keyframes spin{
            100% {
                transform: rotate(360deg);
            }
        }
        // 太陽 結束


    }

    // main_section
    .main_section{
        background-color: #fdf8ee;
        padding: 50px 0;
        ul{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            li{
                width: 35%;
                background-color: #dcecee;
                border-radius: 15px;
                margin: 35px;
                display: flex;
                padding: 50px;
                .main_section_left{
                    h1{
                    font-size: 18px;
                    font-weight: 600;
                    padding-bottom: 25px;
                    }
                }

                .main_section_right{
                    width: 90%;
                    position: relative;
                    img{
                        display: block;
                        width: 100%;
                        position: absolute;
                        bottom: 0%;
                        right: -10%;
                        min-width: 160px;
                    }
                }
            }
        }
    }
    // main_section end

    // rwd start 

    @include rwd(1200px){
        .main_banner{
            .main_container{
                width: auto;
                .main_title{
                    font-size: 24px;
                    top: 25%;
                }
                .svg-sun {
                    width: 70px;
                    height: 70px;
                }
                .clouds {
                    height: 55px;
                }
                .cloud1 {
                    top: 0;
                    left: 3%;
                }
                .cloud2 {
                    top: 20px; 
                    left: 10%;
                }
                .cloud3 {
                    top: 40px;
                    left: 950px; 
                }  
                @keyframes cloudAnimation {
                    0% {
                    transform: translateX(0%); 
                    }
                    50% {
                    transform: translateX(30%); 
                    }
                    100% {
                    transform: translateX(0%);
                    }
                }
                .main_img{
                    .falling-object {
                        width: 30px;
                    }
                    @keyframes fallingObject {
                        0% {
                            top: 30%; 
                            opacity: 0;
                        }
                        100% {
                            top: 50%; 
                        }
                    }
                    .dialogue_box {
                        top: 40%;
                        width: 180px;
                    }
                    .dialogue_content {
                        letter-spacing: 1px;
                    }
                    .falling-object2{
                        width: 30px;
                    }
                    @keyframes fallingObject2 {
                        0% {
                            top: 30%; 
                            opacity: 0;
                        }
                        100% {
                            top: 50%; 
                        }
                    }
                    .dialogue_box2{
                        top: 40%;
                        width: 120px;
                    }
                    .falling-object3{
                        width: 35px;
                    }
                    @keyframes fallingObject3 {
                        0% {
                            top: 10%; 
                            opacity: 0;
                        }
                        100% {
                            top: 30%; 
                        }
                    }
                    //人物3對話框
                    .dialogue_box3{
                        top: 17%;
                    }
                    
                }
            }
        }
        .main_section{
            ul{
                li{
                    padding: 30px;
                    .main_section_left{
                        h1{
                        font-size: 16px;
                        }
                    }
                }
            }
        }
    }
    @include rwd(992px){
        .main_banner{
            .main_container{
                .main_title{
                    font-size: 20px;
                    top: 20%;
                }
                .svg-sun {
                    width: 50px;
                    height: 50px;
                }
                .clouds {
                    height: 45px;
                }
                .cloud3 {
                    display: none;
                }  
                .main_img{
                    .dialogue_box {
                        top: 37%;
                        z-index: 10;
                    }
                }
            }
        }
        .main_section{
            ul{
                li{
                    .main_section_right{
                        width: 90%;
                        position: relative;
                        img{
                            right: -10%;
                            min-width: 130px;
                        }
                    }
                }
            }
        }
    }
    @include rwd(768px){
        .main_banner{
            .main_container{
                .main_title{
                    font-size: 18px;
                    letter-spacing: 1.5px;
                    top: 20%;
                }
                .svg-sun {
                    width: 40px;
                    height: 40px;
                }
                .clouds {
                    height: 35px;
                }
                .main_img{
                    .falling-object {
                        width: 25px;
                    }
                    .dialogue_box {
                        top: 37%;
                        z-index: 5;
                        padding: 5px;
                    }
                    .dialogue_content {
                        width: 140px;
                        font-size: 12px;
                        margin: 0 auto;
                    }
                    .falling-object2{
                        width: 25px;
                    }
                    .dialogue_box2{
                        left: -60%;
                        width: 140px;
                        padding: 5px;
                    }
                    .falling-object3{
                        width: 25px;
                    }
                    @keyframes fallingObject3 {
                        0% {
                            top: 10%; 
                            opacity: 0;
                        }
                        100% {
                            top: 30%; 
                        }
                    }
                    //人物3對話框
                    .dialogue_box3{
                        top: 15%;
                        padding: 5px;
                        width: 140px;
                    }
                }
            }
        }
        .main_section{
            ul{
                flex-direction: column;
                align-content: center;
                li{
                    width: 70%;
                    .main_section_right{
                        width: 50%;
                        img{
                            right: -30%;
                        }
                    }
                }
            }
        }
    }
    @include rwd(576px){
        .main_banner{
            .main_container{
                padding-top: 100px;
                .main_title{
                    font-size: 16px;
                    top: 15%;
                }
                .svg-sun {
                    width: 30px;
                    height: 30px;
                }
                .clouds {
                    height: 20px;
                }
                .cloud1{
                    left: -5%;
                }
                .main_img{
                    @keyframes fallingObject {
                        0% {
                            top: 35%; 
                        }
                        100% {
                            top: 45%; 
                        }
                    }
                    .dialogue_box {
                        top: 35%;
                        width: 150px;
                    }
                    @keyframes fallingObject2 {
                        0% {
                            top: 35%; 
                        }
                        100% {
                            top: 45%; 
                        }
                    }
                    .dialogue_box2{
                        top: 35%;
                        width: 140px;
                    }
                    .falling-object3{
                        width: 30px;
                    }
                    @keyframes fallingObject3 {
                        0% {
                            top: 15%; 
                        }
                        100% {
                            top: 25%; 
                        }
                    }
                    //人物3對話框
                    .dialogue_box3{
                        top: 10%;
                    }
                    
                }
            }
        }
        .main_section{
            ul{
                li{
                    padding: 30px;
                    .main_section_left{
                        h1{
                        font-size: 16px;
                        }
                    }
                }
            }
        }
    }

</style>