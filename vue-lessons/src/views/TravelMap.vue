<template>
<div>
    <VHeader></VHeader>

    <main class="travel_map_wrapper">
        <div class="container">
            <div class="travel_map">
                <h1 class="color_gray">請選擇地區</h1>
                <img src="../assets/image/travel/travel_map.png" alt="">
                <div class="travel_map_radio">
                    <input type="radio" name="map" id="north" value="北部">
                    <label for="north" class="north"></label>
                    <input type="radio" name="map" id="middle" value="中部">
                    <label for="middle" class="middle" ></label>
                    <input type="radio" name="map" id="south" value="南部">
                    <label for="south" class="south" ></label>
                    <input type="radio" name="map" id="east" value="東部">
                    <label for="east" class="east" ></label>
                </div>

                <a href="/Travel"><button class="travel_map_return outline_btn_orange">回上一頁</button></a>
                <a href="/SelTravelConsultant"><button class="travel_map_next btn_orange">下一步</button></a>
            </div>
        </div>
    </main>

    <VFooter></VFooter>
</div>
</template>

<script>
    import VHeader from "../components/VHeader.vue";
    import VFooter from "../components/VFooter.vue";
// import Slick from 'slick-carousel'

export default {
  name: "TravelMap",
  data() {
    return {
   
    };
  },
  components: {
      VHeader,
      VFooter,
  },

  

};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
// @import "../../../tgd104-sass/new_style.scss";
</style>
