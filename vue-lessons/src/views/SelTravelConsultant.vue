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

      <div class="self_consultant container">
        <div class="consultant_card">

            <!-- <div @click="current = 'all'" class="tab actives" >全部</div>
            <div @click="current = '男'" class="tab actives">男性</div>
            <div @click="current = '女'" class="tab actives">女性</div> -->
            <ol class="tabs">
                <li>
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab1' }"
                    @click.prevent="
                        {
                        (current = 'all'), (currentTab = 'tab1');
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
                        (current = '男'), (currentTab = 'tab2');
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
                        (current = '女'), (currentTab = 'tab3');
                        }
                    "
                    >女性</a
                    >
                </li>
            </ol>


            <ul>
                <template v-for="(consultant, index) in consultantInfo" :key="index">
                    <li  v-if="current === 'all' || current === consultant.gender">
                    <input type="checkbox" name="" id="button_id">
                    <!-- <label for="button_id"></label> -->
                    <a href=""><img :src="consultant.url" alt="consultant.url"></a>
                    <!-- <a href=""><img src="../assets/image/travel/consultant_c01.png" alt=""></a> -->
                    <h1>{{consultant.name}}</h1>
                    <h2>{{consultant.experience}}</h2>
                    <i class="fa-regular fa-heart" :class="{ 'fa-solid': consultant.favorites === true }" @click="consultant.favorites = true;toggleFavorite(index)"></i>
                    </li>
                </template>
            </ul>
        </div>     
 
      </div> 


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
          <a href="/TravelMap"><button class="outline_btn_orange">重新選擇地區</button></a>
          <a href="/"><button class="btn_orange">開始預約</button></a>
      </div>
    </div>

  

</template>

<script>

export default {
  name: "SelTravelConsultant",
  data() {
    return {
        current:'all',
        consultantInfo: [
        {id: 'C01',url:require('../assets/image/travel/consultant_c01.png'),name: '裴大尼 ',experience: '5年經驗登山嚮導', gender:'男', favorites:false},
        {id: 'C02',url:require('../assets/image/travel/consultant_c02.png'),name: '裴中尼 ',experience: '台灣百岳征服者', gender:'男', favorites:false},
        {id: 'C03',url:require('../assets/image/travel/consultant_c03.png'),name: '裴小尼 ',experience: '3年經驗登山嚮導 ', gender:'男', favorites:false},
        {id: 'C04',url:require('../assets/image/travel/consultant_c04.png'),name: '裴上尼',experience: '4年經驗登山嚮導', gender:'男', favorites:false},
        {id: 'C05',url:require('../assets/image/travel/consultant_c05.png'),name: '裴下尼',experience: '1年經驗登山嚮導', gender:'男', favorites:false},
        {id: 'C06',url:require('../assets/image/travel/consultant_c06.png'),name: '裴左尼',experience: '5年經驗登山嚮導', gender:'男', favorites:false},
        {id: 'C07',url:require('../assets/image/travel/consultant_c07.png'),name: '裴右尼',experience: '5年經驗登山嚮導', gender:'男', favorites:false},
        {id: 'C08',url:require('../assets/image/travel/consultant_c08.png'),name: '裴尼',experience: '5年經驗登山嚮導', gender:'男', favorites:false},
        {id: 'C09',url:require('../assets/image/travel/consultant_c09.png'),name: '倪大裴',experience: '1年經驗登山嚮導', gender:'女',  favorites:false},
        {id: 'C10',url:require('../assets/image/travel/consultant_c10.png'),name: '倪中裴',experience: '2年經驗登山嚮導', gender:'女',  favorites:false},
        {id: 'C11',url:require('../assets/image/travel/consultant_c11.png'),name: '倪小裴',experience: '3年經驗登山嚮導', gender:'女',  favorites:false},
        {id: 'C12',url:require('../assets/image/travel/consultant_c12.png'),name: '倪上裴',experience: '3年經驗登山嚮導', gender:'女',  favorites:false},
        {id: 'C13',url:require('../assets/image/travel/consultant_c13.png'),name: '倪下裴',experience: '2年經驗登山嚮導', gender:'女',  favorites:false},
        {id: 'C14',url:require('../assets/image/travel/consultant_c14.png'),name: '倪左裴',experience: '1年經驗登山嚮導', gender:'女',  favorites:false},
        {id: 'C15',url:require('../assets/image/travel/consultant_c15.png'),name: '倪右裴',experience: '1年經驗登山嚮導', gender:'女',  favorites:false},
        {id: 'C16',url:require('../assets/image/travel/consultant_c16.png'),name: '倪裴',experience: '1年經驗登山嚮導', gender:'女',  favorites:false},
        ],
        favorites: [],
        currentTab: "tab1",
    };
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
