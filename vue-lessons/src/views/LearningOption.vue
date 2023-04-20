<template>
  <div>
    <VHeader></VHeader>

  <div class="learning_option_inner">

    <div class="option_allcontent">
      
      <div class="option_top">
        <select name="" id="" class="learning_option_select">
          <option value="option_new">最 新</option>
          <option value="option_hot">熱 門</option>
        </select>
      </div>

      <article>
          <label for="" class="option_input_label">HI! 請提供想要學習的項目，陪你來實現!</label>
          <br>
          <textarea name="" id="option_text" maxlength="200" placeholder="最多200字" v-model="SR_content"></textarea>
          <div class="option_btn">
              <button type="button" class="option_no" @click="hideLightboxAndClearTextarea">清空</button>
              <button type="button" class="option_ok" @click="submitForm">送出</button>
          </div>
      </article>

      <div>      
        <div v-for="(answer, index) in study_option" :key="index" class="option">
          <!-- <div class="option_inner"> -->
          <div class="option_flex">  
            <div><img src="../assets/image/learning/student003.png" alt=""></div>
            <p>{{ answer.m_nickname }}</p>
          </div>
          <!-- </div> -->
          <div class="option_content">
            <div class="option_content_inner">
              {{ answer.sr_content }}
            </div>
            <div>
              <!-- <i class="fa-regular fa-heart"></i> -->
              <!-- <i class="fa-solid fa-heart"></i> -->
              <i class="fa-solid fa-heart" :class="{ 'liked': answer.liked }" @click="toggleLike(answer)"></i>
              <span>{{ answer.likes_count }}</span>
            </div>
          </div>
          <p class="option_time">{{ answer.sr_time }}</p>
        </div>
      </div>




      <!-- <div v-for="answer in study_option">
        <h1 style="height: 20px;">{{answer.sr_content}}</h1>
      </div> -->
    </div>
    

    <div class="page_number">
      <router-link to="/"><i class="fa-solid fa-angle-left"></i></router-link>
        <router-link to="/">1</router-link>
        <router-link to="/">2</router-link>
        <router-link to="/">3</router-link>
      <router-link to="/"><i class="fa-solid fa-angle-right"></i></router-link>
    </div>

    <VFooter></VFooter>
  </div>


</div>
</template>    
  <script>
    import VHeader from "../components/VHeader.vue";
    import VFooter from "../components/VFooter.vue";
    import Option from "../components/Option.vue";
    import $ from "jquery";

    export default {
      name: "LearningOption",
      data() {
        return {
          study_option:[],
          likes: 0,
          // showLightbox: false,
          // 使用者輸入的內容
          // inputOption: '',
          // SR_content:'',

          
        };
      },
      components: {
        VFooter,
        VHeader,
        Option,
        $
      },
      methods: {
        hideLightboxAndClearTextarea() {
          this.showLightbox = false;
          this.SR_content = "";
        },

        submitForm(){
          let Option_Member_id = $cookies.get("Option_Member_id")
          
          if (Option_Member_id) {
            $.ajax({
              // type: 'POST',
              method: "POST",
              url: 'http://localhost/TGD104_G3_NEW/vue-lessons/src/API/LearningOption.php',
              dataType: 'json', 
              data: {
                SR_content: this.SR_content,
              },
              success: function(response) {
                  //更新html內容
                  $("#result").html(response);
              },
              error: function(exception) {
                  alert("發生錯誤: " + exception.status);
              }
            });

            location.reload();
          } else {
            alert('請先登入才可以留言唷🤍🤍🤍');
          }



        },
        toggleLike(answer) {
          let Option_Member_id = $cookies.get("Option_Member_id")
          
          if (Option_Member_id) {
            answer.liked = !answer.liked; // 如果Option_Member_id存在則可以切換 liked 屬性的值

            if (answer.liked) {
              answer.likes_count++; // 按下按鈕，likes +1

            } else {
              answer.likes_count--; // 再按一次，likes -1
              
            }

            // location.reload();
          } else {
            alert('請先登入才可以留言唷🤍🤍🤍');
          }



        },
      },


      mounted() {
        // Promise.all([
        //   $.getJSON('http://localhost/TGD104_G3_NEW/vue-lessons/src/api/LearningOption_Select.php'),
        //   $.getJSON('http://localhost/TGD104_G3_NEW/vue-lessons/src/api/LearningOption_Select2.php')
        // ]).then(([response1, response2]) => {
        //   // 將兩個回傳的資料合併
        //   this.study_option = [...response1, ...response2];
        // });
        $.getJSON('http://localhost/TGD104_G3_NEW/vue-lessons/src/api/LearningOption_Select.php').then(response => this.study_option = response),
        // $.getJSON('http://localhost/TGD104_G3_NEW/vue-lessons/src/api/LearningOption_Select2.php').then(response => this.study_option = response);

        // 先假放Option_Member_id
        this.$cookies.set("Option_Member_id","23")
      }, 
    };
  </script>
    
    
  <style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
    textarea{
      padding: 5px;
    }

    .option_flex{
      display: flex;
      align-items: center;
    }






    .fa-heart.liked {
      color: $dark_blue;
      // background-color: $dark_blue;
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
    
  </style>
