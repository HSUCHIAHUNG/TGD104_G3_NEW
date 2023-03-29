<template>
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

      <div id="app"> <!-- HTML DOM template -->    
          <div class="self_consultant">
              <button @click="content='all'" :class="{ 'self_consultant_all': content === 'all', 'self_consultant_unall': content !== 'all' }">全部</button>
              <button @click="content='boy'" :class="{ 'self_consultant_boy': content === 'boy', 'self_consultant_unboy': content !== 'boy' }">男性</button>
              <button @click="content='girl'" :class="{ 'self_consultant_girl': content === 'girl', 'self_consultant_ungirl': content !== 'girl' }">女性</button>
          </div> 
          <div class="container">                
              <component :is="content"></component>

              <div class="all_wrapper">
                <!-- <template v-for="header in headers"> -->
                <template v-for="(header, index) in headers">
                    <div class="consultant_card">
                      <ul>
                          <li>
                              <input type="checkbox" name="" id="button_id">
                              <a href=""><img src="../assets/image/consultant_card.png" alt=""></a>
                              <h1>裴大尼 </h1>
                              <h2>5年經驗登山嚮導</h2>
                              <!-- <i class="fa-regular fa-solid fa-heart"></i> -->
                              <!-- <i class="fa-regular fa-heart" :class="{ 'fa-solid': isFavorite(header) }" @click="toggleFavorite(header)"></i> -->
                              <i class="fa-regular fa-heart" :class="{ 'fa-solid': isFavorite(index) }" @click="toggleFavorite(index)"></i>
                              <!-- <span v-if="isFavorite(header)">已收藏</span> -->
                              <!-- <i class="fa-solid fa-heart"></i> -->
                          </li>
                      </ul>
                    </div>                  
                </template>
              </div>

              <div class="page_number">
                <a href=""><i class="fa-solid fa-angle-left"></i></a> 
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#"><i class="fa-solid fa-angle-right"></i></a>
              </div>
              
          </div>       
      </div>

    </div>
    <!-- sel_travel_consultant end-->


    <div class="sel_travel_consultant_button">
      <div class="container">
          <button class="outline_btn_orange">重新選擇地區</button>
          <button class="btn_orange">開始預約</button>
      </div>
    </div>
</template>

<script>
// import Slick from 'slick-carousel'

export default {
  name: "SelTravelConsultant",
  data() {
    return {
        content: 'all',
        headers: ['','','','','','','','','','','','','','','',''],
        favorites: [],
    }
  },
  methods: {
        isFavorite(index) {
            return this.favorites.includes(index)
        },
        toggleFavorite(index) {
            if (this.isFavorite(index)) {
            const favoriteIndex = this.favorites.indexOf(index)
            this.favorites.splice(favoriteIndex, 1)
            } else {
            this.favorites.push(index)
            }
        },
  },
  
  

  

};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
