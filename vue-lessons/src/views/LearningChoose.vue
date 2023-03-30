<template>
    <div>
      <VHeader></VHeader>
  
  
  
      <div class="learning_choose_wrapper">
      <!-- 左邊 -->
      <div class="learning_choose_side">
        <a href=""><div class="learning_question">我想學習的不在上面怎麼辦</div></a>
        <a href=""><div class="learning_items">陪你-音樂</div></a>
        <a href=""><div class="learning_items">陪你-伴讀</div></a>
        <a href=""><div class="learning_items">陪你-科目</div></a>
        <a href=""><div class="learning_items">陪你-繪畫</div></a>
        <a href=""><div class="learning_items">陪你-程式</div></a>
        <a href=""><div class="learning_items">陪你-舞蹈</div></a>
      </div>
      <!-- 左邊end -->
      <!-- 右邊 -->
      <div class="learning_choose_content">

        <div class="learning_second_items">
          <button>鋼琴</button>
          <button>吉他</button>
          <button>烏克麗麗</button>
          <button>爵士鼓</button>
        </div>


        <div class="learning_consultant">


          
            <div class="consultant_card">
              <ul>
                  <li>
                      <input type="checkbox" name="" id="button_id">
                      <!-- <label for="button_id"></label> -->
                      <a href=""><img src="../assets/image/consultant_card.png" alt=""></a>
                      <h1>裴大尼 </h1>
                      <h2>5年經驗登山嚮導</h2>
                      <i class="fa-regular fa-heart"></i>
                  </li>
              </ul>
            </div>
            <div class="consultant_card">
              <ul>
                  <li>
                      <input type="checkbox" name="" id="button_id">
                      <!-- <label for="button_id"></label> -->
                      <a href=""><img src="../assets/image/consultant_card.png" alt=""></a>
                      <h1>裴大尼 </h1>
                      <h2>5年經驗登山嚮導</h2>
                      <i class="fa-regular fa-heart"></i>
                  </li>
              </ul>
            </div>
            <div class="consultant_card">
              <ul>
                  <li>
                      <input type="checkbox" name="" id="button_id">
                      <!-- <label for="button_id"></label> -->
                      <a href=""><img src="../assets/image/consultant_card.png" alt=""></a>
                      <h1>裴大尼 </h1>
                      <h2>5年經驗登山嚮導</h2>
                      <i class="fa-regular fa-heart"></i>
                  </li>
              </ul>
            </div>
            <div class="consultant_card">
              <ul>
                  <li>
                      <input type="checkbox" name="" id="button_id">
                      <!-- <label for="button_id"></label> -->
                      <a href=""><img src="../assets/image/consultant_card.png" alt=""></a>
                      <h1>裴大尼 </h1>
                      <h2>5年經驗登山嚮導</h2>
                      <i class="fa-regular fa-heart"></i>
                  </li>
              </ul>
            </div>
            <div class="consultant_card">
              <ul>
                  <li>
                      <input type="checkbox" name="" id="button_id">
                      <!-- <label for="button_id"></label> -->
                      <a href=""><img src="../assets/image/consultant_card.png" alt=""></a>
                      <h1>裴大尼 </h1>
                      <h2>5年經驗登山嚮導</h2>
                      <i class="fa-regular fa-heart"></i>
                  </li>
              </ul>
            </div>
            <div class="consultant_card">
              <ul>
                  <li>
                      <input type="checkbox" name="" id="button_id">
                      <!-- <label for="button_id"></label> -->
                      <a href=""><img src="../assets/image/consultant_card.png" alt=""></a>
                      <h1>裴大尼 </h1>
                      <h2>5年經驗登山嚮導</h2>
                      <i class="fa-regular fa-heart"></i>
                  </li>
              </ul>
            </div>
            <div class="consultant_card">
              <ul>
                  <li>
                      <input type="checkbox" name="" id="button_id">
                      <!-- <label for="button_id"></label> -->
                      <a href=""><img src="../assets/image/consultant_card.png" alt=""></a>
                      <h1>裴大尼 </h1>
                      <h2>5年經驗登山嚮導</h2>
                      <i class="fa-regular fa-heart"></i>
                  </li>
              </ul>
            </div>
            <div class="consultant_card">
              <ul>
                  <li>
                      <input type="checkbox" name="" id="button_id">
                      <!-- <label for="button_id"></label> -->
                      <a href=""><img src="../assets/image/consultant_card.png" alt=""></a>
                      <h1>裴大尼 </h1>
                      <h2>5年經驗登山嚮導</h2>
                      <i class="fa-regular fa-heart"></i>
                  </li>
              </ul>
            </div>
            <div class="consultant_card">
              <ul>
                  <li>
                      <input type="checkbox" name="" id="button_id">
                      <!-- <label for="button_id"></label> -->
                      <a href=""><img src="../assets/image/consultant_card.png" alt=""></a>
                      <h1>裴大尼 </h1>
                      <h2>5年經驗登山嚮導</h2>
                      <i class="fa-regular fa-heart"></i>
                  </li>
              </ul>
            </div>


            
          </div>
          <div class="reserve">
            <button class="btn_orange">預約</button>
          </div>
    </div>
    <!-- 右邊end -->
    </div>
  
  
  
  
      <VFooter></VFooter>
    </div>
  </template>
    
    <script>
      import VHeader from "../components/VHeader.vue";
      import VFooter from "../components/VFooter.vue";
      import ConsultantCard from "../components/ConsultantCard.vue";
      
      export default {
          name: "LearningChoose",
          data() {
          return {};
          },
          components: {
          VHeader,
          VFooter,
          ConsultantCard
          },
      };
    </script>
    
    
    <style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";
    </style>