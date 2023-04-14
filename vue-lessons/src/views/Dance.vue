<template>

  
        
        <!-- 右邊 -->
        <div class="learning_choose_content">
          <!-- <div class="learning_second_items">
            <a href="/LearningChoose"><div>街舞</div></a>
            <a href="#"><div>芭蕾舞</div></a>
            <a href="#"><div>兒童舞蹈</div></a>
            <a href="#"><div>爵士舞</div></a>
          </div> -->

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
                        (current = '街舞'), (currentTab = 'tab2');
                        }
                    "
                    ><div>街舞</div></a
                    >
                </li>
                <li :class="{ active: currentTab === 'tab3' }">
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab3' }"
                    @click.prevent="
                        {
                        (current = '芭蕾舞'), (currentTab = 'tab3');
                        }
                    "
                    ><div>芭蕾舞</div></a
                    >
                </li>
                <li :class="{ active: currentTab === 'tab4' }">
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab4' }"
                    @click.prevent="
                        {
                        (current = '兒童舞蹈'), (currentTab = 'tab4');
                        }
                    "
                    ><div>兒童舞蹈</div></a
                    >
                </li>
                <li :class="{ active: currentTab === 'tab5' }">
                    <a
                    href="#"
                    :class="{ active: currentTab === 'tab5' }"
                    @click.prevent="
                        {
                        (current = '爵士舞'), (currentTab = 'tab5');
                        }
                    "
                    ><div>爵士舞</div></a
                    >
                </li>
            </ol>

          <!-- 顧問卡 -->
          <div class="product-selection">
            <template v-for="product in products" :key="product.id">
              <div v-if="current ==='all' || current === product.lesson">
                <div class="product">
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
                  <button v-if="selectedProductId === product.id" class="selected">已選擇 <i class="fa-solid fa-basket-shopping"></i></button>
                  <button v-else @click="selectProduct(product)">選擇</button>
                </div>
              </div>
              </div>
              </div>


              <!-- <div v-for="order_test in order_m">
                <h1>{{order_m.tr_experience}}</h1>
              </div> -->


            </template>
          </div>


          <!-- 顧問卡end -->
          <div class="learning_go">
            <router-link to="/LearningCalendar"><button class="btn_orange">開始預約</button></router-link>
          </div>
        </div>
        <!-- 右邊end -->

    
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
          // order_m:[],
          selectedProductId: null,
          current:'all',
          products: [ 
            {
              id: 1,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '兒童舞蹈'
            },
            {
              id: 2,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '街舞'
            },
            {
              id: 3,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士舞'
            },
            {
              id: 4,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '兒童舞蹈'
            },
            {
              id: 5,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music004.png'),
              liked: false,
              lesson: '街舞'
            },
            {
              id: 6,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '兒童舞蹈'
            },
            {
              id: 7,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '芭蕾舞'
            },
            {
              id: 8,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士舞'
            },
            {
              id: 9,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '街舞'
            },
            {
              id: 10,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士舞'
            },
            {
              id: 11,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '兒童舞蹈'
            },
            {
              id: 12,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music005.png'),
              liked: false,
              lesson: '街舞'
            },
            {
              id: 13,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士舞'
            },
            {
              id: 14,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '芭蕾舞'
            },
            {
              id: 15,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music006.png'),
              liked: false,
              lesson: '街舞'
            },
            {
              id: 16,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '兒童舞蹈'
            },
            {
              id: 17,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '芭蕾舞'
            },
            {
              id: 18,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '芭蕾舞'
            },
            {
              id: 19,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '街舞'
            },
            {
              id: 20,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士舞'
            },
            {
              id: 21,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '兒童舞蹈'
            },
            {
              id: 22,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music002.png'),
              liked: false,
              lesson: '街舞'
            },
            {
              id: 23,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士舞'
            },
            {
              id: 24,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '街舞'
            },
            {
              id: 25,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music007.png'),
              liked: false,
              lesson: '兒童舞蹈'
            },
            {
              id: 26,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '芭蕾舞'
            },
            {
              id: 27,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '兒童舞蹈'
            },
            {
              id: 28,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士舞'
            },
            {
              id: 29,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '街舞'
            },
            {
              id: 30,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士舞'
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
      },
      // mounted() {
      //   $.getJSON('http://localhost/TGD104_G3_NEW/vue-lessons/src/api/Select.php').then(response => this.order_m = response)
      // },
    }
  </script>
  
  <style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
  </style>