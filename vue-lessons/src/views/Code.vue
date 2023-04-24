<template>

  <div class="learning_choose_content">
    <!-- 右邊 -->
      <ol class="learning_second_items_tab">
          <li :class="{ active: currentTab === 'tab1' }">
            <a href="#" :class="{ active: currentTab === 'tab1' }" @click.prevent="{(current = 'all'), (currentTab = 'tab1');}">
              <div>全部</div>
            </a>
          </li>
          <li :class="{ active: currentTab === 'tab2' }">
            <a href="#" :class="{ active: currentTab === 'tab2' }" @click.prevent="{(current = 'Java'), (currentTab = 'tab2');}">
              <div>Java</div>
            </a>
          </li>
          <li :class="{ active: currentTab === 'tab3' }">
            <a href="#" :class="{ active: currentTab === 'tab3' }" @click.prevent="{(current = 'C++'), (currentTab = 'tab3');}">
              <div>C++</div></a>
          </li>
          <li :class="{ active: currentTab === 'tab4' }">
            <a href="#" :class="{ active: currentTab === 'tab4' }" @click.prevent="{(current = 'JavaScript'), (currentTab = 'tab4');}">
              <div>JavaScript</div>
            </a>
          </li>
          <li :class="{ active: currentTab === 'tab5' }">
            <a href="#" :class="{ active: currentTab === 'tab5' }" @click.prevent="{(current = 'Python'), (currentTab = 'tab5');}">
              <div>Python</div>
            </a>
          </li>
          <li :class="{ active: currentTab === 'tab6' }">
            <a href="#" :class="{ active: currentTab === 'tab6' }" @click.prevent="{(current = 'MySQL'), (currentTab = 'tab5');}">
              <div>MySQL</div>
            </a>
          </li>
      </ol>
    <!-- 右邊 end -->

          <!-- 顧問卡 -->
          <!-- <div class="product-selection">
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


            </template>
          </div> -->


          <!-- 顧問卡end -->

          <!-- 顧問卡 -->
    <div class="product-selection">
      <template v-for="(product, index) in products" :key="index" >
        <div v-if="current ==='all' || current === product.about_class"> 
          <div class="product">

            <!-- 打勾 -->
            <label>
              <input  @change=" consultant_select(product.id)"  type="radio" class="option-input radio" name="product" v-model="selectedConsultant" :value="product.id"/>
            </label>
            <!-- 打勾 end-->

            <!-- 顧問圖片 -->
            <router-link to="/LearningGallery" target="_blank" >
              <div class="product-image">
                <!-- <img :src="product.image" :alt="product.c_nickname"> -->
                <img :src="`${img_src}${product.c_photo1}`" @click="L_consultant_detail(product.id)">
              </div>
            </router-link>
            <!-- 顧問圖片 end -->

            <!-- 顧問名.課程title.收藏 -->
            <div class="product-details">
              <h3>{{ product.c_nickname }}</h3>
              <p>{{ product.about_title }}</p>
              <div class="product-actions">
                <i class="fa-regular fa-heart" :class="{ 'fa-solid': isFavorite(index) }" @click="toggleFavorite(index)"></i>
              </div>
            </div>
            <!-- 顧問名.課程title.收藏 end-->

          </div>
        </div>
      </template>
    </div>
    <!-- 顧問卡end -->

          <!-- <div class="learning_go">
            <router-link to="/LearningCalendarn"><button class="btn_orange">開始預約</button></router-link>
          </div>
        </div>


  </template> -->

  <div class="learning_go">
      <button class="btn_orange" @click="startBooking">開始預約</button>
    </div>
  </div>

</template>
      
  <!-- <script>

    export default {
      components: {

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
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: 'JavaScript'
            },
            {
              id: 2,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: 'Java'
            },
            {
              id: 3,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'JavaScript'
            },
            {
              id: 4,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: 'Java'
            },
            {
              id: 5,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music004.png'),
              liked: false,
              lesson: 'JavaScript'
            },
            {
              id: 6,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'Java'
            },
            {
              id: 7,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: 'JavaScript'
            },
            {
              id: 8,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'JavaScript'
            },
            {
              id: 9,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: 'JavaScript'
            },
            {
              id: 10,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'Java'
            },
            {
              id: 11,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'C++'
            },
            {
              id: 12,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music005.png'),
              liked: false,
              lesson: 'Java'
            },
            {
              id: 13,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'JavaScript'
            },
            {
              id: 14,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: 'C++'
            },
            {
              id: 15,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music006.png'),
              liked: false,
              lesson: 'Python'
            },
            {
              id: 16,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'Java'
            },
            {
              id: 17,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: 'C++'
            },
            {
              id: 18,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'C++'
            },
            {
              id: 19,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: 'MySQL'
            },
            {
              id: 20,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'C++'
            },
            {
              id: 21,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'Python'
            },
            {
              id: 22,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music002.png'),
              liked: false,
              lesson: 'MySQL'
            },
            {
              id: 23,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'MySQL'
            },
            {
              id: 24,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music003.png'),
              liked: false,
              lesson: 'Python'
            },
            {
              id: 25,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music007.png'),
              liked: false,
              lesson: 'MySQL'
            },
            {
              id: 26,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'Python'
            },
            {
              id: 27,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: 'MySQL'
            },
            {
              id: 28,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'Python'
            },
            {
              id: 29,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/learning/music001.png'),
              liked: false,
              lesson: 'MySQL'
            },
            {
              id: 30,
              name: '裴小倪',
              description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
              image: require('../assets/image/consultant02.png'),
              liked: false,
              lesson: 'Python'
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
  </script> -->

  <script>
  import $ from "jquery";
  import {API_URL} from "@/config";
  import {API_ARC} from "@/config";
  export default {
    components: {},
    data() {
      return {
        current:'all',
        currentTab: "tab1",
        favorites: [],
        selectedConsultant: '',
        products: [],
        img_src: '',
      };
    },

    // mounted() {
    //   console.log(this.cid);
    // },


    methods: {
      consultant_select(id){
        this.$cookies.set("L_consultant_id",id)
      },

      L_consultant_detail(id){
        this.$cookies.set("L_about_consultant",id)
      },

      // selectProduct(product) {
      //   // console.log(product)
      //   this.selectedProductId = product.id
      //   // console.log(this.selectedProductId)
      //   this.$cookies.set("L_consultant_id",this.selectedProductId)
      // },

      // 判斷是否已登入會員和選擇顧問才進入下一頁
      startBooking() {
        let Member_id = $cookies.get("Member_id")
        let L_consultant_id = $cookies.get("L_consultant_id")
        if (Member_id) {
          if (!L_consultant_id) {
            alert("請選擇陪你顧問");
          } else {
            this.$router.push("/LearningCalendar");
          }
        } else {
          alert('請先登入會員');
        }
      },

      // 點擊愛心收藏
      isFavorite(index) {
        return this.favorites.includes(index);
      },
      toggleFavorite(index) {
        if (this.isFavorite(index)) {
          const favoriteIndex = this.favorites.indexOf(index);
          this.favorites.splice(favoriteIndex, 1);
        } else {
          this.favorites.push(index);
        }
      },
    },


    mounted() {
      this.img_src = `${API_ARC}`;
      $.getJSON(`${process.env.VUE_APP_AJAX_URL}code_Select.php`).then(response => this.products = response)

      //抓已選擇顧問id
      this.selectedConsultant = this.$cookies.get("L_consultant_id");

      // 先假放Member_id
      this.$cookies.set("Member_id","1")
    },
  }
</script>
  
  <!-- <style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
  </style> -->

  <style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";

  .product-actions .fa-heart {
    font-size: 24px;
    cursor: pointer;
    transition: all 0.3s ease;
    color: $dark_blue;
    // margin-left: 22px;
    display: inline-block;

    position: absolute;
    right: 20px;
    bottom: 20px;
    &:hover {
      transform: scale(1.2);
    }
  }
    
  .product-actions .fa-heart.fa-solid {
    color: $dark_blue;
    animation: pulse 1s backwards;
  }

  @keyframes pulse {
    0% {
      box-shadow: 0 0 0 0 rgba(121, 203, 212, 0.4);
      border-radius: 50%;
    }

    70% {
      box-shadow: 0 0 0 15px rgba(121, 203, 212, 0);
      border-radius: 50%;
    }

    100% {
      box-shadow: 0 0 0 0 rgba(121, 203, 212, 0);
      border-radius: 50%;
    }
  }

  label{
    display: block;
  }

  .option-input {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    height: 35px;
    width: 35px;
    transition: all 0.15s ease-out 0s;
    background: $clear_white;
    border: none;
    color: $clear_white;
    cursor: pointer;
    display: inline-block;
    margin-right: 0.5rem;
    outline: none;
    position: relative;
    // z-index: 1000;
    border-radius: 10px;
  }

  .option-input:hover {
    background: #9faab7;
  }

  .option-input:checked {
    background: $clear_white;
    color: $dark_blue;
  }

  .option-input:checked::before {
    width: 35px;
    height: 35px;
    display:flex;
    content: '\f00c';
    font-size: 33px;
    font-weight: 600;
    position: absolute;
    align-items:center;
    justify-content:center;
    font-family:'Font Awesome 5 Free';
  }

  .option-input:checked::after {
    -webkit-animation: click-wave 0.65s;
    -moz-animation: click-wave 0.65s;
    animation: click-wave 0.65s;
    background: $dark_blue;
    content: '';
    display: block;
    position: relative;
    z-index: 100;
  }

  //勾選後背景效果
  .option-input.radio::after {
    border-radius: 50%;
  }

  @keyframes click-wave {
    0% {
      height: 40px;
      width: 40px;
      opacity: 0.35;
      position: relative;
    }
    100% {
      height: 200px;
      width: 200px;
      margin-left: -80px;
      margin-top: -80px;
      opacity: 0;
    }
  }


  .product-selection .product{
    position: relative;
  }

  .option-input{
    position: relative;
    left: -110px;
  }

  /* ----------螢幕小於700px時---------- */
  @media screen and (max-width: 700px){
    .option-input{
      position: relative;
      left: -83px;
    }
  }

  @media screen and (max-width: 596px){
    .option-input{
      position: relative;
      left: -110px;
    }
  }

</style>