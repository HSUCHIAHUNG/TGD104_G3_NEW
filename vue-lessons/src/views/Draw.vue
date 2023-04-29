<template>
<!-- 右邊 -->
<div class="learning_choose_content">


<!-- <ol class="learning_second_items_tab">
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
  </ol> -->


  <ol class="learning_second_items_tab">
        <li :class="{ active: currentTab === 'tab1' }">
          <a href="#" :class="{ active: currentTab === 'tab1' }" @click.prevent="{(current = 'all'), (currentTab = 'tab1');}">
            <div>全部</div>
          </a>
        </li>
        <li :class="{ active: currentTab === 'tab2' }">
          <a href="#" :class="{ active: currentTab === 'tab2' }" @click.prevent="{(current = '素描'), (currentTab = 'tab2');}">
            <div>素描</div>
          </a>
        </li>
        <li :class="{ active: currentTab === 'tab3' }">
          <a href="#" :class="{ active: currentTab === 'tab3' }" @click.prevent="{(current = '油畫'), (currentTab = 'tab3');}">
            <div>油畫</div></a>
        </li>
        <li :class="{ active: currentTab === 'tab4' }">
          <a href="#" :class="{ active: currentTab === 'tab4' }" @click.prevent="{(current = '水彩'), (currentTab = 'tab4');}">
            <div>水彩</div>
          </a>
        </li>
        <li :class="{ active: currentTab === 'tab5' }">
          <a href="#" :class="{ active: currentTab === 'tab5' }" @click.prevent="{(current = '電腦繪圖'), (currentTab = 'tab5');}">
            <div>電腦繪圖</div>
          </a>
        </li>
        <li :class="{ active: currentTab === 'tab6' }">
          <a href="#" :class="{ active: currentTab === 'tab6' }" @click.prevent="{(current = '蠟筆繪畫'), (currentTab = 'tab6');}">
            <div>蠟筆繪畫</div>
          </a>
        </li>
      </ol>


<!-- 顧問卡 -->
<div class="product-selection" :class="{'-loading' : loading}">
      <template v-for="(product, index) in products">
        <div v-if="current ==='all' || current === product.about_class"  :key="index" > 
          <div class="product">

            <!-- 打勾 -->
            <label>
              <input  @change=" consultant_select(product.id)"  type="radio" class="option-input radio" name="product" v-model="selectedConsultant" :value="product.id"/>
            </label>
            <!-- 打勾 end-->

            <!-- 顧問圖片 -->
            <router-link to="/LearningGallery">
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
                <i 
                class="fa-regular fa-heart" 
                :class="{ 'fa-solid': isFavorite(product.id) }" 
                @click="toggleFavorite(product.id)">
              </i>
              </div>
            </div>
            <!-- 顧問名.課程title.收藏 end-->

          </div>
        </div>
      </template>
    </div>
    <!-- 顧問卡end -->

    <div class="learning_go">
      <button class="btn_orange" @click="startBooking">開始預約</button>
    </div>
  </div>

</template>
      
<script>
  import $ from "jquery";
  import {API_URL} from "@/config";
  import {API_ARC} from "@/config";
  export default {
    components: {
      $
    },
    data() {
      return {
        current:'all',
        currentTab: "tab1",
        favorites: [],
        selectedConsultant: '',
        products: [],
        Member_id: '',
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
      // isFavorite(index) {
        
      //   return this.favorites.includes(index);
      // },
      // toggleFavorite(index) {
      //   if (this.isFavorite(index)) {
      //     const favoriteIndex = this.favorites.indexOf(index);
      //     this.favorites.splice(favoriteIndex, 1);
      //   } else {
      //     this.favorites.push(index);
      //   }
      // },
      isFavorite(index) {
      let id = index.toString()
      return this.favorites.includes(id);
    },
    
    toggleFavorite(index) {

      let id = index.toString()
      if (this.isFavorite(index)) {
        const favoriteIndex = this.favorites.indexOf(id);
        this.favorites.splice(favoriteIndex, 1);
        alert("收藏取消");
      } else {
        this.favorites.push(id);
        alert("收藏成功");
      }
      console.log(this.favorites);


      
      //撈資料庫對應會員id，更新收藏愛心欄位m_collect
      if (this.favorites && this.favorites.length > 0) {
      $.ajax({
          method: "POST",
          url: `${process.env.VUE_APP_AJAX_URL}LearningHeartCollect_Update.php`, 
          data: {
            M_collect: this.favorites,
            Id: this.Member_id,
          },
          dataType: "text",
          success: function(response) {
              // alert("收藏成功");
          },
          error: function(exception) {
              // alert("發生錯誤: " + exception.status);
          },

      }); 
      }else{
        //讓m_collect值不為null
        $.ajax({
          method: "POST",
          url: `${process.env.VUE_APP_AJAX_URL}LearningHeartCollect_Update2.php`, 
          data: {
            Id: this.Member_id,
          },
          dataType: "text",
          success: function(response) {
          },
          error: function(exception) {
              // alert("發生錯誤: " + exception.status);
          },

      }); 
      }
    },




  },


    mounted() {
      this.img_src = `${API_ARC}`;
      // console.log(this.img_src);
      $.getJSON(`${process.env.VUE_APP_AJAX_URL}draw_Select.php`).then(response => this.products = response)

      //抓已選擇顧問id
      this.selectedConsultant = this.$cookies.get("L_consultant_id");

      // 先假放Member_id
      // this.$cookies.set("Member_id","1")
      this.Member_id = this.$cookies.get("Member_id");


          //撈已收藏愛心，畫面重整時收藏愛心還會存在
      $.ajax({
          method: "POST",
          url: `${process.env.VUE_APP_AJAX_URL}LearningChoose_Select.php`, 
          data: {
            Id: this.Member_id,
              
          },
          dataType: "json",
          success: response => {
            console.log(response,'res');
              if (response !== null && typeof response !== 'undefined' && response.length > 0) { // 修改判空处理
              let array = response[0].m_collect;
              array = JSON.parse(array);
              for (let index = 0; index < array.length; index++) {
                const collect = array[index];
                this.favorites.push(collect);
              }
            }
          },
          error: function(exception) {
              // alert("發生錯誤: " + exception.status);
          },

      }); 


    },
  }
</script>



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