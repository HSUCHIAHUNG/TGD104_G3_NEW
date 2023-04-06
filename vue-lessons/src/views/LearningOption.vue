<template>
    <VHeader></VHeader>
    <div class="learning_option_inner">

      <div class="option_allcontent">
      <div class="option_top">
          <select name="" id="" class="option_select">
                  <option value="option_new">最新</option>
                  <option value="option_hot">熱門</option>
          </select>
          <button type="button" class="option_box" @click.prevent="showOptionLightBox">提供意見 <i class="fa-solid fa-inbox"></i></button>
      </div>

        <Option></Option>
        <Option></Option>
        <Option></Option>
        <Option></Option>
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

    <div id="option_lightbox" class="none">
        <article>
            <label for="" class="option_input_label">HI! 請提供想要學習的項目，陪你來實現!</label>
            <br>
            <textarea name="" id="option_text" maxlength="100" placeholder="最多100字"></textarea>
            <div class="option_btn">
                <button type="button" class="option_no">取消</button>
                <button type="button" class="option_ok">送出</button>
            </div>
        </article>
    </div>



  </template>
    
    <script>
      import VHeader from "../components/VHeader.vue";
      import VFooter from "../components/VFooter.vue";
      import Option from "../components/Option.vue";
      
      export default {
          name: "LearningOption",
          data() {
            return {};
          },
          components: {
            VFooter,
            VHeader,
            Option
          },
          methods: {
            // 學習意見燈箱
            showOptionLightBox(){
              let option_lightbox = document.getElementById("option_lightbox");
              let scrollhide = document.querySelector('body');

              // 頁面上的按鈕
              let option_box= document.getElementsByClassName("option_box")[0];
              option_box.addEventListener("click", function(){
                option_lightbox.classList.remove("none");
                scrollhide.style.overflow ="hidden";
              });


              let option_no = document.getElementsByClassName("option_no")[0];
              option_no.addEventListener("click", function(){
                option_lightbox.classList.add("none");
                scrollhide.style.overflow ="auto";
              });


              option_lightbox.addEventListener("click", function(){
                this.classList.add("none");
                scrollhide.style.overflow ="auto";
              });

              // 點擊 lightbox 中的白色區域，不會關掉 modal
              option_lightbox.querySelector("article").addEventListener("click", function(e){
                e.stopPropagation();
              });
            },
          } 
      };
    </script>
    
    
    <style lang="scss">
      @import "../assets/tgd104-sass/new_style.scss";
    </style>