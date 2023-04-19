<template>
    <VHeader></VHeader>

    <main class="travel_map_wrapper">
        <div class="container">
            <div class="travel_map">
                <h1 class="color_gray animate__animated animate__bounceIn animate__delay-0.5s">請選擇地區</h1>
                <img src="../assets/image/travel/travel_map.png" alt="" class="animate__animated animate__bounceIn animate__delay-0.5s">
                <div class="travel_map_radio">
                    <input type="radio" name="map" id="north" value="北部" v-model="selected" @change="showSelected">
                    <label for="north" class="north" :class="{ 'selected': selected === '北部' }"></label>
                    <input type="radio" name="map" id="middle" value="中部" v-model="selected" @change="showSelected">
                    <label for="middle" class="middle" :class="{ 'selected': selected === '中部' }"></label>
                    <input type="radio" name="map" id="south" value="南部" v-model="selected" @change="showSelected">
                    <label for="south" class="south" :class="{ 'selected': selected === '南部' }"></label>
                    <input type="radio" name="map" id="east" value="東部" v-model="selected" @change="showSelected">
                    <label for="east" class="east" :class="{ 'selected': selected === '東部' }"></label>
                </div>

                <!-- <a href="/Travel"><button class="travel_map_return outline_btn_orange">回上一頁</button></a> -->
                <router-link to="/Travel"><button class="travel_map_return outline_btn_orange">回上一頁</button></router-link>
                <!-- <a href="/SelTravelConsultant"><button class="travel_map_next btn_orange">下一步</button></a> -->
                <!-- <router-link to="/SelTravelConsultant"><button @click="selectArea" class="travel_map_next btn_orange">下一步</button></router-link> -->
                <button @click="selectArea" class="travel_map_next btn_orange">下一步</button>

                <transition name="fade">
                    <div class="selected_hint" v-show="showHint">{{ selected }} 已選擇</div>
                </transition>

            </div>
        </div>
        
    </main>

    <VFooter></VFooter>
</template>

<script>
import 'animate.css';
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";

export default {
  name: "TravelMap",
  data() {
    return {
        selected: '',
        showHint: false,
    };
  },
  methods: {
    showSelected() {
      this.showHint = true;
      setTimeout(() => {
        this.showHint = false;
      }, 2000);
      console.log(this.selected);
      //encodeURIComponent() 進行 URL 编码
      // this.$cookies.set("travelArea",encodeURIComponent(this.selected))
      this.$cookies.set("travelArea",this.selected)

      //decodeURIComponent() 解碼
      //console.log(decodeURIComponent(this.$cookies.get("travelArea")));
    },

    selectArea(){
            if (this.selected === '') {
                alert('請選擇地區');
            } else {
                this.$router.push('/SelTravelConsultant');
            }
    },
  },
  components: {
      VHeader,
      VFooter,
  },

  

};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
