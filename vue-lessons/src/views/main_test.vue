<template>
    <div>
        <VHeader></VHeader>
        <div class="main_banner">
            <div class="main_container">
                <!-- title -->
                <div class="main_text animate__animated animate__bounceIn animate__delay-2s">
                    不再孤單旅行、不再獨自學習，
                    <br>
                    <span>「陪你」</span>
                    陪您走過每個旅程與學習
                </div>
                <!-- 雲 -->
                <div class="clouds">
                    <div class="cloud cloud1"></div> <!-- 第一朵雲 -->
                    <div class="cloud cloud2"></div> <!-- 第二朵雲 -->
                    <div class="cloud cloud3"></div> <!-- 第三朵雲 -->
                </div>
                <!-- 雲 結束-->
                <!-- 太陽開始 -->
                <div class="container-sun">
                    <svg class="svg-sun" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
                        <circle cx="50" cy="50" r="35" id="sun"></circle>
                    </svg>
                </div>
                <!-- 太陽結束 -->
                <!-- 城市 人物 對話框-->
                <div class="main_img">
                    <div><img src="../assets/image/city.png" alt="" class="floating-img"></div>
                    <div class="falling-object-container">
                        <router-link to="/Travel">
                            <img src="../assets/image/people1.png" alt="" class="falling-object">
                        </router-link>
                        <div class="dialogue_box animate__animated animate__bounceIn animate__delay-2s">
                            <div class="dialogue_content">
                                好想旅行，沒人陪...😟
                            </div>
                        </div>
                    </div>
                    <div class="falling-object-container">
                        <!-- <router-link to="/Join">
                            <img src="../assets/image/people2.png" alt="" class="falling-object2">
                        </router-link>
                        <div class="dialogue_box2 animate__animated animate__bounceIn animate__delay-3s">
                            <div class="dialogue_content">
                                {{ dialogue2 }}
                            </div>
                        </div> -->
                    </div>
                    <div class="falling-object-container">
                        <!-- <router-link to="/Learning">
                            <img src="../assets/image/people3.png" alt="" class="falling-object3">
                        </router-link>
                        <div class="dialogue_box3 animate__animated animate__bounceIn animate__delay-4s">
                            <div class="dialogue_content">
                                {{ dialogue3 }}
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- 城市 人物 對話框 結束-->
            </div>
        </div>

        <!-- <VFooter></VFooter> -->
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
          
        };
    },
    methods: {
      
    },


};
</script>

<style lang="scss" scope>
    @import "../assets/tgd104-sass/new_style.scss";
    *{
        outline: 3px solid red;
    }

    .main_banner{
        background-color: #fdf8ee;
        padding: 10px 0;
        overflow: hidden;
     

        .main_container{
            width: 80%;
            margin: 0 auto;

            .main_text{
                position: absolute;
                text-align: center;
                font-size: 32px;
                font-weight: bold;
                width: 80%;
                top: 30%;
                margin: 0 auto;
                
                    span{
                        color: #ff7d33;
                    }
            }

            // 雲
            .clouds{
                position: relative;
                height: 80px;

                .cloud{
                    position: absolute;
                    background: url('../assets/image/cloud.png') no-repeat center center;
                    height: 100%;
                    width: 150px;
                    background-size: contain;
                    animation: cloud 20s linear infinite;
                }

                .cloud1{
                    top: 0;

                }

                .cloud2{
                    top: 20%;
                    right: 50%;
                }

                .cloud3{
                    top: 50%;
                    right: 0%;
                }

                @keyframes cloud {
                    0% {
                    transform: translateX(-1000%); 
                    }
                    100% {
                    transform: translateX(1400%);
                    }
                }
            }

            // 城市開始
            .main_img{
                position: relative;

                .floating-img{
                    width: 100%;
                }

                .falling-object-container{

                    .falling-object{
                        position: absolute;
                        top: 52%;
                        left: 0;
                        right: 0;
                        margin: auto;
                        width: 3%;
                        
                    }
                    .dialogue_box{
                        position: absolute;
                        top: 47%;
                        left: 0;
                        right: 0;
                        margin: auto;
                        width: 15%;
                        text-align: center;
                        background-color: #ffffff;
                        border-radius: 5px;
                        padding: 10px;

                        .dialogue_content{
                            font-size: 14px;
                            font-weight: bold;
                        }
                    }
                    

                }
            }
            // 城市結束

            // 太陽開始
            .container-sun{
                text-align: right;
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
            // 太陽結束
        }
    }
    

    // rwd start 

    @include rwd(1200px){
        
    }
    @include rwd(992px){
        
    }
    @include rwd(768px){
        
    }
    @include rwd(576px){
        .main_banner{
            background-color: #fdf8ee;
            padding: 10px 0;
            height: 100vh;

            .main_container{
                

                .main_text{
                    
                    font-size: 16px;
                    
                    
                        span{
                            color: #ff7d33;
                        }
                
                }


            }
        }
    }

</style>