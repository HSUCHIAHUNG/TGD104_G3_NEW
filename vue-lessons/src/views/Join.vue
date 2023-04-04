<template>
    <!-- join_benefit -->
    <div class="join_benefit">
        <div class="container">
            <h1 class="animate__animated animate__rubberBand animate__delay-0.5s">歡迎<span>加入</span>陪你顧問團!</h1>
            <div class="benefit_wrapper animate__animated animate__bounce animate__delay-0.5s">
                <div class="learn_benefit">
                    <h2>陪你<span>學習</span></h2>
                    <h3>時間彈性 <i class="fa-regular fa-clock"></i></h3>
                    <h3>累積教學經驗 <i class="fa-solid fa-chalkboard-user"></i></h3>
                    <h3>拓展人脈 <i class="fa-solid fa-people-group"></i></h3>
                </div>
                <div class="travel_benefit">
                    <h2>陪你<span>旅行</span></h2>
                    <h3>時間彈性 <i class="fa-regular fa-clock"></i></h3>
                    <h3>邊賺邊玩 <i class="fa-solid fa-hand-holding-dollar"></i></h3>
                    <h3>集結志同道合的朋友 <i class="fa-solid fa-people-arrows"></i></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- join_benefit end -->

    <!-- join_condition -->
    <div class="join_condition">

           
        <div class="join_btn">
            <!-- <button @click="content='learn'" :class="{ 'join_learn_select': content === 'learn', 'join_learn_unselect': content !== 'learn' }">學習</button>
            <button @click="content='travel'" :class="{ 'join_travel_select': content === 'travel', 'join_travel_unselect': content !== 'travel' }">旅行</button> -->
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
                      

    </div>
    <!-- join_condition end -->

    <div class="join_button">
        <div class="container">
            <a href="/JoinApply"><button class="btn_orange">加入學習</button></a>
            <a href="/JoinApply"><button class="btn_orange">加入旅行</button></a>
        </div>
    </div>

    <VFooter></VFooter>
</template>

<script>
import LearnCondition from "../components/LearnCondition.vue";
import TravelCondition from "../components/TravelCondition.vue";
import VFooter from "../components/VFooter.vue";
import 'animate.css';

export default {
  name: "Join",
  data() {
    return {
        content: "LearnCondition",
        currentTab: "tab1",
    };
  },
  components: {
    LearnCondition,
    TravelCondition,
    VFooter,
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
