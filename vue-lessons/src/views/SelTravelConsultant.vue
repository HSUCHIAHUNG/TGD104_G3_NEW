<template>
  <div>
    <VHeader></VHeader>

    <!-- sel_travel_consultant_banner -->
    <div class="sel_travel_consultant_banner">
      <div class="container">
        <h1>
          不孤單的旅行，<br>
          就從有<span>陪你</span>開始。
        </h1>
        <h2>喜歡登山？喜歡單車？喜歡潛水？</h2>
        <h3>就讓<span>陪你</span>成為你的好旅伴，一起來場無限可能的旅行吧！</h3>
        <h4>開始預約<span>陪你</span>顧問</h4>
        <i class="fa-regular fa-circle-down"></i>
      </div>
    </div>
    <!-- sel_travel_consultant_banner end -->

     <!-- sel_travel_consultant -->
    <div class="sel_travel_consultant">

      <div class="self_or_random">
        <div class="self">自定義</div>
        <div class="random"><a href="">隨機</a></div>
      </div>

      <div class="self_consultant">
        <ul class="tabs">
                <li>
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab1' }"
                    @click.prevent="
                        {
                        (content = 'TravelConsultantAll'), (currentTab = 'tab1');
                        }
                    "
                    >全部</a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab2' }"
                    @click.prevent="
                        {
                        (content = 'TravelConsultantBoy'), (currentTab = 'tab2');
                        }
                    "
                    >男性</a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab3' }"
                    @click.prevent="
                        {
                        (content = 'TravelConsultantGirl'), (currentTab = 'tab3');
                        }
                    "
                    >女性</a
                    >
                </li>
        </ul>
      </div> 
      <component :is="content"></component>

      <div class="page_number">
        <a href=""><i class="fa-solid fa-angle-left"></i></a> 
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#"><i class="fa-solid fa-angle-right"></i></a>
      </div>


    </div>
    <!-- sel_travel_consultant end-->

    <div class="sel_travel_consultant_button">
      <div class="container">
          <button class="outline_btn_orange">重新選擇地區</button>
          <button class="btn_orange">開始預約</button>
      </div>
    </div>

  
    <VFooter></VFooter>
  </div>
</template>

<script>
import VHeader from "../components/VHeader.vue";
import TravelConsultantAll from "../components/TravelConsultantAll.vue";
import TravelConsultantBoy from "../components/TravelConsultantBoy.vue";
import TravelConsultantGirl from "../components/TravelConsultantGirl.vue";
import VFooter from "../components/VFooter.vue";

export default {
  name: "SelTravelConsultant",
  data() {
    return {
        content: "TravelConsultantAll",
        currentTab: "tab1",
        // favorites: [],

    };
  },
  components: {
    VHeader,
    VFooter,
    TravelConsultantAll,
    TravelConsultantBoy,
    TravelConsultantGirl,

  },

};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
