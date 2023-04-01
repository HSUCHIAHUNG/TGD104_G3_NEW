<template>


    <main class="travel_map_wrapper">
        <div class="container">
            <div class="travel_map">
                <h1 class="color_gray">請選擇地區</h1>
                <img src="../assets/image/travel/travel_map.png" alt="">
                <div class="travel_map_radio">
                    <input type="radio" name="map" id="north" value="北部" v-model="selected">
                    <label for="north" class="north" :class="{ 'selected': selected === '北部' }"></label>
                    <input type="radio" name="map" id="middle" value="中部" v-model="selected">
                    <label for="middle" class="middle" :class="{ 'selected': selected === '中部' }"></label>
                    <input type="radio" name="map" id="south" value="南部" v-model="selected">
                    <label for="south" class="south" :class="{ 'selected': selected === '南部' }"></label>
                    <input type="radio" name="map" id="east" value="東部" v-model="selected">
                    <label for="east" class="east" :class="{ 'selected': selected === '東部' }"></label>
                </div>

                <a href="/Travel"><button class="travel_map_return outline_btn_orange">回上一頁</button></a>
                <a href="/SelTravelConsultant"><button class="travel_map_next btn_orange">下一步</button></a>
            </div>
        </div>
    </main>


</template>

<script>


export default {
  name: "TravelMap",
  data() {
    return {
        selected: '',
    };
  },
  components: {

  },

  

};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
