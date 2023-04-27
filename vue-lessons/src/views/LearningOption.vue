<template>
  <div>
    <VHeader></VHeader>
<div class="process7">
    <div class="learning_option_inner">
      <div class="option_allcontent">
        <!-- <div class="option_top">
          <select name="" id="" class="learning_option_select">
            <option value="option_new">最 新</option>
            <option value="option_hot">熱 門</option>
          </select>
        </div> -->

        <article>
          <label for="" class="option_input_label"
            >HI! 請提供想要學習的項目，陪你來實現! <i class="fa-regular fa-pen-to-square"></i></label
          >
          <br />
          <textarea
            name=""
            id="option_text"
            maxlength="200"
            placeholder="最多200字"
            v-model="SR_content"
          ></textarea>
          <div class="option_btn">
            <button
              type="button"
              class="option_no"
              @click="hideLightboxAndClearTextarea"
            >
              清空
            </button>
            <button type="button" class="option_ok" @click="submitForm">
              送出
            </button>
          </div>
        </article>

        <div>
          <div
            v-for="(answer, index) in study_option"
            :key="index"
            class="option"
          >
            <!-- <div class="option_inner"> -->
            <div class="option_flex">
              <div>
                <img src="../assets/image/learning/student003.png" alt="" />
              </div>
              <p>{{ answer.m_nickname }}</p>
            </div>
            <!-- </div> -->
            <div class="option_content">
              <div style="word-break:break-all" class="option_content_inner">
                {{ answer.sr_content }}
              </div>
              <div>
                <!-- <i class="fa-regular fa-heart"></i> -->
                <!-- <i class="fa-solid fa-heart"></i> -->
                <i
                  class="fa-solid fa-heart"
                  :class="{ liked: click_like.includes(index) }"
                  @click="toggleLike(index, answer.id, answer)"
                ></i>
                <span>{{ answer.love }}</span>
              </div>
            </div>
            <p class="option_time">{{ answer.sr_time }}</p>
          </div>
        </div>

        <!-- <div v-for="answer in study_option">
        <h1 style="height: 20px;">{{answer.sr_content}}</h1>
      </div> -->
      </div>

      <!-- <div class="page_number">
        <router-link to="/"><i class="fa-solid fa-angle-left"></i></router-link>
        <router-link to="/">1</router-link>
        <router-link to="/">2</router-link>
        <router-link to="/">3</router-link>
        <router-link to="/"
          ><i class="fa-solid fa-angle-right"></i
        ></router-link>
      </div> -->
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
      study_option: [],
      likes: 0,
      Member_id: "",
      click_like: [],
      Require_id: "",
      Like_status: "",
      // showLightbox: false,
      // 使用者輸入的內容
      // inputOption: '',
      SR_content:'',

      //分頁
      perpage: 10, //一頁的資料數
      currentPage: 1,

    };
  },
  components: {
    VFooter,
    VHeader,
    Option,
    $,
  },
  methods: {
    hideLightboxAndClearTextarea() {
          this.showLightbox = false;
          this.SR_content = "";
        },

    submitForm() {
      this.Member_id = $cookies.get("Member_id");

      if (this.Member_id) {
        $.ajax({
          // type: 'POST',
          method: "POST",
          url: `${process.env.VUE_APP_AJAX_URL}LearningOption.php`,
          dataType: "json",
          data: {
            SR_content: this.SR_content,
            Member_id: this.Member_id,
          },
          success: function (response) {
            //更新html內容
            $("#result").html(response);
          },
          error: function (exception) {
            alert("發生錯誤: " + exception.status);
          },
        });

        location.reload();
      } else {
        alert("請先登入才可以留言唷🤍🤍🤍");
      }
    },
    toggleLike(index, id, answer) {
      console.log(id);
      const self = this
      console.log(answer.love, "answer");
      this.Require_id = id;
      this.Member_id = $cookies.get("Member_id");
      // console.log(this.Require_id);

      if (this.Member_id) {
        if (this.click_like.includes(index)) {
          this.Member_id = $cookies.get("Member_id");
          this.click_like.splice(this.click_like.indexOf(index), 1);
          this.Like_status = "-";
        } else {
          this.Member_id = $cookies.get("Member_id");
          this.click_like.push(index);
          this.Like_status = "+";
          
        }
        $.ajax({
            // type: 'POST',
            method: "POST",
            url: `${process.env.VUE_APP_AJAX_URL}LearningOption_update.php`,
            dataType: "json",
            data: {
              Require_id: this.Require_id,
              Like_status: this.Like_status,
            },
            success: function (response) {
              $("#result").html(response);
              if(self.Like_status === '+'){
              answer.love = Number(answer.love + 1);

              }else{
              answer.love = Number(answer.love - 1);

              }
            },
            error: function (exception) {
              alert("發生錯誤: " + exception.status);
            },
          });
      } else {
        alert("請先登入才可以按愛心唷🤍🤍🤍");
      }
    },
  },

  mounted() {
    $.getJSON(
      `${process.env.VUE_APP_AJAX_URL}LearningOption_Select.php`
    ).then((response) => (this.study_option = response));
      // $.getJSON(`${process.env.VUE_APP_AJAX_URL}LearningOption_Select2.php`).then(response => this.study_option = response);

      // 先假放Option_Member_id
      // this.$cookies.set("Option_Member_id", "23");
  },
};
</script>
    
    
  <style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
textarea {
  padding: 5px;
}

.option_flex {
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

.process7{
  // background-color: #f8f4eb;
    background-image: url("../assets/image/bgi001.png");
    background-repeat: repeat;
    background-size: cover;
}
</style>
