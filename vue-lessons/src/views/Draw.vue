<template>
<!-- 右邊 -->
<div class="learning_choose_content">

<ol class="learning_second_items_tab">
  <li :class="{ active: currentTab === 'tab1' }">
          <a
          href="#"
          :class="{ active: currentTab === 'tab1' }"
          @click.prevent="
              {
              (current = 'all'), (currentTab = 'tab1');
              }
          "
          ><div>全部</div></a
          >
      </li>
      <li :class="{ active: currentTab === 'tab2' }">
          <a
          href="#"
          :class="{ active: currentTab === 'tab2' }"
          @click.prevent="
              {
              (current = '素描'), (currentTab = 'tab2');
              }
          "
          ><div>素描</div></a
          >
      </li>
      <li :class="{ active: currentTab === 'tab3' }">
          <a
          href="#"
          :class="{ active: currentTab === 'tab3' }"
          @click.prevent="
              {
              (current = '油畫'), (currentTab = 'tab3');
              }
          "
          ><div>油畫</div></a
          >
      </li>
      <li :class="{ active: currentTab === 'tab4' }">
          <a
          href="#"
          :class="{ active: currentTab === 'tab4' }"
          @click.prevent="
              {
              (current = '水彩'), (currentTab = 'tab4');
              }
          "
          ><div>水彩</div></a
          >
      </li>
      <li :class="{ active: currentTab === 'tab5' }">
          <a
          href="#"
          :class="{ active: currentTab === 'tab5' }"
          @click.prevent="
              {
              (current = '電腦繪圖'), (currentTab = 'tab5');
              }
          "
          ><div>電腦繪圖</div></a
          >
      </li>
      <li :class="{ active: currentTab === 'tab6' }">
          <a
          href="#"
          :class="{ active: currentTab === 'tab6' }"
          @click.prevent="
              {
              (current = '蠟筆繪畫'), (currentTab = 'tab6');
              }
          "
          ><div>蠟筆繪畫</div></a
          >
      </li>
  </ol>
<!-- 顧問卡 -->
<div class="product-selection">
  <template v-for="product in products" :key="product.id" >
      <div v-if="current ==='all' || current === product.lesson"> 
        <div  class="product">
          <router-link to="/LearningGallery" target="_blank">
            <div class="product-image">
              <img :src="product.image" :alt="product.name">
            </div>
          </router-link>
          <div class="product-details">
            <router-link to="/LearningGallery" target="_blank">
            <h3>{{ product.name }}</h3>
            <p>{{ product.description }}</p>
            </router-link>
            <div class="product-actions">
              <button :class="{ 'liked': product.liked }" @click="toggleLike(product)"><i class="fas fa-heart"></i></button>
              <button v-if="selectedProductId === product.id" class="selected"><i class="fa-regular fa-square-check"></i></button>
              <button v-else @click="selectProduct(product)"><i class="fa-regular fa-square"></i></button>
            </div>
          </div>
      </div>
    </div>
  </template>
</div>

<!-- 顧問卡end -->
<div class="learning_go">
  <router-link to="/LearningCalendar"><button class="btn_orange">開始預約</button></router-link>
</div>
</div>
<!-- 右邊end -->
<!-- </div>                 -->
<!-- </div>    -->

<!-- <VFooter></VFooter> -->
  </template>
      
  <script>
    // import VFooter from "../components/VFooter.vue";
    export default {
      components: {
        // VFooter,
      },
      data() {
        return {
          selectedProductId: null,
          current:'all',
          products: [ 
            {
              id: 1,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '素描'
            },
            {
              id: 2,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '油畫'
            },
            {
              id: 3,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '電腦繪圖'
            },
            {
              id: 4,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '電腦繪圖'
            },
            {
              id: 5,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music004.png'),
              liked: false,
              lesson: '蠟筆繪畫'
            },
            {
              id: 6,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '素描'
            },
            {
              id: 7,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '電腦繪圖'
            },
            {
              id: 8,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '水彩'
            },
            {
              id: 9,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '蠟筆繪畫'
            },
            {
              id: 10,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '油畫'
            },
            {
              id: 11,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '素描'
            },
            {
              id: 12,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music005.png'),
              liked: false,
              lesson: '素描'
            },
            {
              id: 13,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '油畫'
            },
            {
              id: 14,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '蠟筆繪畫'
            },
            {
              id: 15,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music006.png'),
              liked: false,
              lesson: '油畫'
            },
            {
              id: 16,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '蠟筆繪畫'
            },
            {
              id: 17,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '油畫'
            },
            {
              id: 18,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '水彩'
            },
            {
              id: 19,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '水彩'
            },
            {
              id: 20,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '電腦繪圖'
            },
            {
              id: 21,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '蠟筆繪畫'
            },
            {
              id: 22,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music002.png'),
              liked: false,
              lesson: '電腦繪圖'
            },
            {
              id: 23,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '水彩'
            },
            {
              id: 24,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '蠟筆繪畫'
            },
            {
              id: 25,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music007.png'),
              liked: false,
              lesson: '素描'
            },
            {
              id: 26,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '水彩'
            },
            {
              id: 27,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '素描'
            },
            {
              id: 28,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '油畫'
            },
            {
              id: 29,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '油畫'
            },
            {
              id: 30,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '蠟筆繪畫'
            },
          ],
          currentTab: "tab1",
        };
      },
      methods: {
        selectProduct(product) {
          this.selectedProductId = product.id
          this.$cookies.set("cid",this.selectedProductId)
        },
        toggleLike(product) {
          product.liked = !product.liked
        }
      }
    }
  </script>
  
  <style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
    .fa-square-check,
    .fa-square{
      font-size: 30px;
    }
  </style>