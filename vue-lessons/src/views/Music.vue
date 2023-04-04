<template>
    
        
        <!-- 右邊 -->
        <div class="learning_choose_content">

          
          <!-- <div class="learning_second_items_tab">
            <a href="/LearningChoose"><div>鋼琴</div></a>
            <a href="#"><div>吉他</div></a>
            <a href="#"><div>烏克麗麗</div></a>
            <a href="#"><div>爵士鼓</div></a>
          </div> -->

          <ol class="learning_second_items_tab">
                <li>
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
                <li>
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab2' }"
                    @click.prevent="
                        {
                        (current = '鋼琴'), (currentTab = 'tab2');
                        }
                    "
                    ><div>鋼琴</div></a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab3' }"
                    @click.prevent="
                        {
                        (current = '吉他'), (currentTab = 'tab3');
                        }
                    "
                    ><div>吉他</div></a
                    >
                </li>
                                <li>
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab4' }"
                    @click.prevent="
                        {
                        (current = '烏克麗麗'), (currentTab = 'tab4');
                        }
                    "
                    ><div>烏克麗麗</div></a
                    >
                </li>
                                <li>
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab5' }"
                    @click.prevent="
                        {
                        (current = '爵士鼓'), (currentTab = 'tab5');
                        }
                    "
                    ><div>爵士鼓</div></a
                    >
                </li>
            </ol>
          <!-- 顧問卡 -->
          <div class="product-selection">
            <template v-for="product in products" :key="product.id" >
                <div v-if="current ==='all' || current === product.lesson"> 
                  <div  class="product">
                    <div class="product-image">
                      <img :src="product.image" :alt="product.name">
                    </div>
                    <div class="product-details">
                      <h3>{{ product.name }}</h3>
                      <p>{{ product.description }}</p>
                      <div class="product-actions">
                        <button :class="{ 'liked': product.liked }" @click="toggleLike(product)"><i class="fas fa-heart"></i></button>
                        <button v-if="selectedProductId === product.id" class="selected">已選擇 <i class="fa-solid fa-basket-shopping"></i></button>
                        <button v-else @click="selectProduct(product)">選擇</button>
                      </div>
                    </div>
                </div>
              </div>
            </template>
          </div>

          <!-- 顧問卡end -->
          <div class="learning_go">
            <a href="/LearningOrderConfirmation"><button class="btn_orange">開始預約</button></a>
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
              lesson: '烏克麗麗'
            },
            {
              id: 2,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 3,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 4,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 5,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music004.png'),
              liked: false,
              lesson: '吉他'
            },
            {
              id: 6,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '烏克麗麗'
            },
            {
              id: 7,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 8,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 9,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 10,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 11,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '烏克麗麗'
            },
            {
              id: 12,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music005.png'),
              liked: false,
              lesson: '吉他'
            },
            {
              id: 13,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 14,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 15,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music006.png'),
              liked: false,
              lesson: '吉他'
            },
            {
              id: 16,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '烏克麗麗'
            },
            {
              id: 17,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 18,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 19,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 20,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 21,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '烏克麗麗'
            },
            {
              id: 22,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music002.png'),
              liked: false,
              lesson: '吉他'
            },
            {
              id: 23,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 24,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 25,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music007.png'),
              liked: false,
              lesson: '吉他'
            },
            {
              id: 26,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '烏克麗麗'
            },
            {
              id: 27,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 28,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 29,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 30,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
          ],
          currentTab: "tab1",
        };
      },
      methods: {
        selectProduct(product) {
          this.selectedProductId = product.id
        },
        toggleLike(product) {
          product.liked = !product.liked
        }
      }
    }
  </script>
  
  <style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
  </style>