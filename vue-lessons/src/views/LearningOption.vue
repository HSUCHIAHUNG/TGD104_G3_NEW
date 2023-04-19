<template>
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
            <div><img src="../assets/image/learning/student003.png" alt=""></div>
            <p>{{ answer.name }}</p>
          <!-- </div> -->
          <div class="option_content">
            <div class="option_content_inner">
              {{ answer.sr_content }}
            </div>
            <div>
              <i class="fa-regular fa-heart"></i>
              <span>{{ answer.likes }}</span>
            </div>
          </div>
          <p class="option_time">{{ answer.time }}</p>
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
          showLightbox: false,
          // 使用者輸入的內容
          // inputOption: '',
          SR_content:'',
          options: [ // 存放option的陣列
            // {
            //   id: 1,
            //   // name: 'a*******1',
            //   content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores  non nisi optio cupiditate, neque soluta consequatur ut, ratione molestiae quas, perspiciatis dolor aut? Ipsa dolorum dolorem iure similique? Quis, hic?',
            //   likes: 32,
            //   time: '2023/03/07'
            // },
            // {
            //   id: 2,
            //   // name: 'b*******2',
            //   content: 'qwqwjeiwe qjeiwoejiwe opvvkw kl;kl. Maiores  non nisi optio cupiditate, neque soluta consequatur ut, ratione molestiae quas, perspiciatis dolor aut? Ipsa dolorum dolorem iure similique? Quis, hic?',
            //   likes: 10,
            //   time: '2023/04/05'
            // },
            // {
            //   id: 3,
            //   // name: 'c*******3',
            //   content: 'qwqwjeiwe qjeiwoejiwe opvvkw kl;kl. Maiores  non nisi optio cupiditate, neque soluta consequatur ut, ratione molestiae quas, perspiciatis dolor aut? Ipsa dolorum dolorem iure similique? Quis, hic?',
            //   likes: 10,
            //   time: '2023/04/10'
            // },
          ]
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
        // 學習意見燈箱
        showOptionLightBox(){
          // let option_lightbox = document.getElementById("option_lightbox");
          // let scrollhide = document.querySelector('body');

          // 頁面上的按鈕
          // let option_box= document.getElementsByClassName("option_box")[0];
          // option_box.addEventListener("click", function(){
          //   option_lightbox.classList.remove("none");
          //   scrollhide.style.overflow ="hidden";
          // });


          // let option_no = document.getElementsByClassName("option_no")[0];
          // option_no.addEventListener("click", function(){
          //   option_lightbox.classList.add("none");
          //   scrollhide.style.overflow ="auto";
          // });


          // option_lightbox.addEventListener("click", function(){
          //   this.classList.add("none");
          //   scrollhide.style.overflow ="auto";
          // });

          // 點擊 lightbox 中的白色區域，不會關掉 modal
          // option_lightbox.querySelector("article").addEventListener("click", function(e){
          //   e.stopPropagation();
          // });
        },
        submitForm(){
          let Option_Member_id = $cookies.get("Option_Member_id")
          
          if (Option_Member_id) {
            if (!L_consultant_id) {
              alert("登入才可以留言唷!");
            } else {
              this.$router.push("/LearningCalendar");
            }
          } else {
            alert('請先登入會員');
          }


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
        }
      },


      mounted() {
        $.getJSON('http://localhost/TGD104_G3_NEW/vue-lessons/src/api/LearningOption_Select.php').then(response => this.study_option = response)

        // 先假放Option_Member_id
        this.$cookies.set("Option_Member_id","23")
      }, 
    };
  </script>
    
    
  <style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
  </style>
