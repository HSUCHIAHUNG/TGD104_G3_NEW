<template>
 <div class="learningchooseflex">
  <div>
    <div class="learning_choose_wrapper">
      <!-- 左邊 -->
      <div class="learning_choose_side">
        <a href="/LearningOption"><div class="learning_question">我想學習的不在上面怎麼辦</div></a>
        

        <router-link to="/LearningChoose/Music">
          <div class="learning_items"><i class="fa-solid fa-music"></i> 陪你-音樂</div>
        </router-link>
        <router-link to="/LearningChoose/Study">
          <div class="learning_items"><i class="fa-solid fa-book-open"></i> 陪你-伴讀</div>
        </router-link>
        <router-link to="/LearningChoose/Subject">
          <div class="learning_items"><i class="fa-solid fa-school"></i> 陪你-科目</div>
        </router-link>
        <router-link to="/LearningChoose/Draw">
          <div class="learning_items"><i class="fa-solid fa-pencil"></i> 陪你-繪畫</div>
        </router-link>
        <router-link to="/LearningChoose/Code">
          <div class="learning_items"><i class="fa-solid fa-code"></i> 陪你-程式</div>
        </router-link>
        <router-link to="/LearningChoose/Dance">
          <div class="learning_items"><i class="fa-solid fa-child-reaching"></i> 陪你-舞蹈</div>
        </router-link>
        
        <!-- <a href=""><div class="learning_items"><i class="fa-solid fa-music"></i> 陪你-音樂</div></a>
        <a href=""><div class="learning_items"><i class="fa-solid fa-book-open"></i> 陪你-伴讀</div></a>
        <a href=""><div class="learning_items"><i class="fa-solid fa-school"></i> 陪你-科目</div></a>
        <a href=""><div class="learning_items"><i class="fa-solid fa-pencil"></i> 陪你-繪畫</div></a>
        <a href=""><div class="learning_items"><i class="fa-solid fa-code"></i> 陪你-程式</div></a>
        <a href=""><div class="learning_items"><i class="fa-solid fa-child-reaching"></i> 陪你-舞蹈</div></a> -->
        <!-- <router-view /> -->
      </div>
      <!-- 左邊end -->

        <router-view />

    </div>                
  </div>   

  </div>
  <VFooter></VFooter>
</template>
    
<script>
  import VFooter from "../components/VFooter.vue";
  export default {
    components: {
      VFooter,
    },
    data() {
      return {
      //   selectedProductId: null,
      //   products: [ 
      //     {
      //       id: 1,
      //       name: '裴小倪',
      //       description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
      //       image: require('../assets/image/consultant01.png'),
      //       liked: false
      //     },
      //     {
      //       id: 2,
      //       name: '裴小倪',
      //       description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
      //       image: require('../assets/image/consultant02.png'),
      //       liked: false
      //     },
      //     {
      //       id: 3,
      //       name: '裴小倪',
      //       description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
      //       image: require('../assets/image/consultant03.png'),
      //       liked: false
      //     },
      //     {
      //       id: 4,
      //       name: '裴小倪',
      //       description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
      //       image: require('../assets/image/consultant01.png'),
      //       liked: false
      //     },
      //     {
      //       id: 5,
      //       name: '裴小倪',
      //       description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
      //       image: require('../assets/image/consultant02.png'),
      //       liked: false
      //     },
      //     {
      //       id: 6,
      //       name: '裴小倪',
      //       description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
      //       image: require('../assets/image/consultant03.png'),
      //       liked: false
      //     },
      //     {
      //       id: 7,
      //       name: '裴小倪',
      //       description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
      //       image: require('../assets/image/consultant01.png'),
      //       liked: false
      //     },
      //     {
      //       id: 8,
      //       name: '裴小倪',
      //       description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
      //       image: require('../assets/image/consultant02.png'),
      //       liked: false
      //     },
      //     {
      //       id: 9,
      //       name: '裴小倪',
      //       description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
      //       image: require('../assets/image/consultant03.png'),
      //       liked: false
      //     },
      //     {
      //       id: 10,
      //       name: '裴小倪',
      //       description: 'Calvin 托福頂尖菁英培訓 國高中升學救星',
      //       image: require('../assets/image/consultant01.png'),
      //       liked: false
      //     },
      //   ]
      }
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