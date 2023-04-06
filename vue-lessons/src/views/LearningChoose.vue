
<template>
  

 <div class="learningchooseflex">
  <!-- <VHeader></VHeader> -->
  <div>
    <div class="learning_choose_wrapper">

      <div class="learning_choose_side">
        <router-link to="/LearningOption"><div class="learning_question">我想學習的不在上面怎麼辦</div></router-link>

        <div class="choose_items_rwdbefore">
          <router-link to="/LearningChoose/Music">
            <div class="learning_items"><i class="fa-solid fa-music"></i> 陪你音樂</div>
          </router-link>
          <router-link to="/LearningChoose/Study">
            <div class="learning_items"><i class="fa-solid fa-book-open"></i> 陪你伴讀</div>
          </router-link>
          <router-link to="/LearningChoose/Subject">
            <div class="learning_items"><i class="fa-solid fa-school"></i> 陪你科目</div>
          </router-link>
          <router-link to="/LearningChoose/Draw">
            <div class="learning_items"><i class="fa-solid fa-pencil"></i> 陪你繪畫</div>
          </router-link>
          <router-link to="/LearningChoose/Code">
            <div class="learning_items"><i class="fa-solid fa-code"></i> 陪你程式</div>
          </router-link>
          <router-link to="/LearningChoose/Dance">
            <div class="learning_items"><i class="fa-solid fa-child-reaching"></i> 陪你舞蹈</div>
          </router-link>
        </div>


        <div  class="choose_items_rwdafter">
          <select v-model="selectedOption">
            <option class="ttt" disabled value="">請選擇一個項目</option>
            <option class="ttt" v-for="item in items" :key="item.value" :value="item.value">{{ item.label }}</option>
          </select>
        </div>

      </div>


      <router-view />

    </div>                
  </div>   

  </div>
  <VFooter></VFooter>
</template>
    
<script>
  import VFooter from "../components/VFooter.vue";
  import VHeader from "../components/VHeader.vue";
  export default {
    components: {
      VFooter,
      VHeader
    },
    data() {
      return {
        selectedOption: '',
      items: [
        { label: '陪你音樂', value: '/LearningChoose/Music' },
        { label: '陪你伴讀', value: '/LearningChoose/Study' },
        { label: '陪你科目', value: '/LearningChoose/Subject' },
        { label: '陪你繪畫', value: '/LearningChoose/Draw' },
        { label: '陪你程式', value: '/LearningChoose/Code' },
        { label: '陪你舞蹈', value: '/LearningChoose/Dance' },
      ]
      }
    },
    methods: {
      selectProduct(product) {
        this.selectedProductId = product.id
      },
      toggleLike(product) {
        product.liked = !product.liked
      }
    },
    watch: {
    selectedOption(newValue) {
      this.$router.push(newValue);
    }
  }
  }
</script>

<style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";

</style>