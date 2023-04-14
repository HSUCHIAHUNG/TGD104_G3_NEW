<template>
    
        <!-- <VHeader></VHeader> -->
        <!-- 右邊 -->
        <div class="learning_choose_content">

          
          <!-- <div class="learning_second_items_tab">
            <a href="/LearningChoose"><div>鋼琴</div></a>
            <a href="#"><div>吉他</div></a>
            <a href="#"><div>烏克麗麗</div></a>
            <a href="#"><div>爵士鼓</div></a>
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
                        (current = '鋼琴'), (currentTab = 'tab2');
                        }
                    "
                    ><div>鋼琴</div></a
                    >
                </li>
                <li :class="{ active: currentTab === 'tab3' }">
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
                <li :class="{ active: currentTab === 'tab4' }">
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
                <li :class="{ active: currentTab === 'tab5' }">
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
                  <div class="product">
                    <router-link to="/LearningGallery"   target="_blank" >
                      <div class="product-image">
                        <img :src="product.image" :alt="product.name" >
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
    import VHeader from "../components/VHeader.vue";
    export default {
      components: {
        // VFooter,
        VHeader
      },
      data() {
        return {
          selectedProductId: null,
          current:'all',
          cid:'',
          products: [ 
            {
              id: 1,  //顧問
              name: '鐵人', //顧問
              description: '學烏克麗麗，輕鬆享受甜美音色！',
              image: require('../assets/image/consultant02.png'),
              lesson: '烏克麗麗' //顧問
            },
            {
              id: 2,
              name: '小甜甜',
              description: '優秀老師帶你成就鋼琴夢想',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 3,
              name: '鐵娘子',
              description: '讓老師教你，如何把爵士鼓融入生活！',
              image: require('../assets/image/learning/teacher_009.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 4,
              name: '金剛不壞',
              description: '跟著老師學習，讓你的鋼琴技巧更上一層樓！',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 5,
              name: '鐵娘子',
              description: '學吉他，彈出屬於你的音樂風格！',
              image: require('../assets/image/learning/music004.png'),
              liked: false,
              lesson: '吉他'
            },
            {
              id: 6,
              name: '肥皂泡',
              description: '學烏克麗麗，輕鬆享受甜美音色！',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '烏克麗麗'
            },
            {
              id: 7,
              name: '鐵人',
              description: '優秀老師帶你成就鋼琴夢想',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 8,
              name: '小甜甜',
              description: '學習爵士鼓，體驗獨特的節奏感！',
              image: require('../assets/image/learning/teacher_009.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 9,
              name: '大嘴巴',
              description: '鋼琴大師為你開啟音樂之門！',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 10,
              name: '鐵娘子',
              description: '學習爵士鼓，體驗獨特的節奏感！',
              image: require('../assets/image/learning/teacher_009.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 11,
              name: '金剛不壞',
              description: '學烏克麗麗，輕鬆享受甜美音色！',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '烏克麗麗'
            },
            {
              id: 12,
              name: '大嘴巴',
              description: '跟著老師探索吉他的神秘世界！',
              image: require('../assets/image/learning/music005.png'),
              liked: false,
              lesson: '吉他'
            },
            {
              id: 13,
              name: '小霸王',
              description: '優秀老師帶你成就爵士鼓夢想',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 14,
              name: '老鷹眼',
              description: '鋼琴大師為你開啟音樂之門！',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 15,
              name: '大嘴巴',
              description: '學吉他，彈出屬於你的音樂風格！',
              image: require('../assets/image/learning/music006.png'),
              liked: false,
              lesson: '吉他'
            },
            {
              id: 16,
              name: '肥皂泡',
              description: '跟著老師探索烏克麗麗的神秘世界！',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '烏克麗麗'
            },
            {
              id: 17,
              name: '鐵娘子',
              description: '跟著老師探索鋼琴的神秘世界！',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 18,
              name: '金剛不壞',
              description: '學習爵士鼓，體驗獨特的節奏感！',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 19,
              name: '老鷹眼',
              description: '讓老師教你，如何把鋼琴融入生活！',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 20,
              name: '小甜甜',
              description: '學習爵士鼓，體驗獨特的節奏感！',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 21,
              name: '花心大少',
              description: '學烏克麗麗，輕鬆享受甜美音色！',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '烏克麗麗'
            },
            {
              id: 22,
              name: '肥皂泡',
              description: '學吉他，彈出屬於你的音樂風格！',
              image: require('../assets/image/learning/music002.png'),
              liked: false,
              lesson: '吉他'
            },
            {
              id: 23,
              name: '小霸王',
              description: '跟著老師學習，讓你的爵士鼓技巧更上一層樓！',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 24,
              name: '花心大少',
              description: '鋼琴大師為你開啟音樂之門！',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 25,
              name: '鐵娘子',
              description: '學吉他，彈出屬於你的音樂風格！',
              image: require('../assets/image/learning/music007.png'),
              liked: false,
              lesson: '吉他'
            },
            {
              id: 26,
              name: '金剛不壞',
              description: '讓老師教你，如何把烏克麗麗融入生活！',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '烏克麗麗'
            },
            {
              id: 27,
              name: '小霸王',
              description: '鋼琴大師為你開啟音樂之門！',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 28,
              name: '花心大少',
              description: '學習爵士鼓，體驗獨特的節奏感！',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
            {
              id: 29,
              name: '肥皂泡',
              description: '跟著老師學習，讓你的鋼琴技巧更上一層樓！',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: '鋼琴'
            },
            {
              id: 30,
              name: '老鷹眼',
              description: '學習爵士鼓，體驗獨特的節奏感！',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: '爵士鼓'
            },
          ],
          currentTab: "tab1",
        };
      },
      
      mounted() {
        console.log(this.cid);
      },

      methods: {
        selectProduct(product) {
          this.selectedProductId = product.id
        },
        toggleLike(product) {
          product.liked = !product.liked
          
        }
      },

      
    }
  </script>
  
  <style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
  </style>