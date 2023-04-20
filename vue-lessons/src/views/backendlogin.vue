<template>
    
    <!-- 後台登入 -->
    <div id="consultant_box">
        <article>
            <div class="title_img">
                <img src="../assets/image/member/login_logo.png" alt="logo" />
            </div>

            <div class="inputs">
                <form style="margin:0 auto" @submit.prevent="backendLogin(m_mail,m_password)">
                    <h1>管理登入</h1>
                    <label for="" class="input_label">帳號</label>
                    <input 
                        type="text" 
                        v-model="m_mail"
                        required
                        class="input_text" />
                    <br />
                    <label for="" class="input_label">密碼</label>
                    <input
                        type="password"
                        class="input_text"
                        v-model="m_password"
                        required
                     />
                    <div class="btns">
                        <!-- <router-link to="/BackendCenter"> -->
                            <button type="submit" class="btn_blue">登入</button>
                        <!-- </router-link> -->
                    </div>
                </form>
            </div>
        </article>
    </div>
    <!-- 後台登入 End-->

</template>



<script>
import $ from "jquery";

export default {
    name: "backendlogin",
  data() {
    return {
      // 會員登入
  
        m_mail: "",
        m_password: "",
   
    };
  },

  components: {
    $
  },
  mounted() {
  },
  methods: {
    backendLogin(m_mail,m_password){
        if(m_mail === 'tgd104g3' && m_password === 'password'){
            this.$router.push("/BackendCenter");
            // alert('登入成功')
        }else{
            alert('帳號密碼輸入錯誤')
        }
    }
  },
}
</script>



<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
// 顧問登入
.input_label{
    margin-top: 15px;
}
#consultant_box {
    background-image: url("../assets/image/common_nav.png");
    height: 100vh;
  article {
    background-color: white;
    width: 90%;
    max-width: 550px;
    border-radius: 10px;
    box-shadow: 0 0 10px #ddd;
    padding: 40px 0px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    .title_img {
      display: flex;
      justify-content: center;
      img {
        width: 100px;
      }
    }
    .inputs {
      display: flex;
      flex-direction: column;
      h1 {
        font-size: 24px;
        width: 90%;
        // margin: 0 auto;
        margin-bottom: 10px;
        font-weight: 600;
        position: relative;
        &::after {
          content: ""; // 增加偽元素
          position: absolute;
          bottom: 5px; // 控制偽元素的位置
          left: 0;
          width: 100%;
          height: 8px;
          background-color: $dark_blue;
          z-index: -10;
          width: 98px;
        }
      }
      label,
      input,
      form,
      .btns {
        width: 90%;
        // margin: 0 auto;
      }
      a {
        color: #585858;
        margin-top: 20px;
        text-align: center;
        font-weight: 500;
        text-decoration: underline;
        &:hover {
          color: $dark_blue;
        }
      }
      .btns {
        display: flex;
        margin-top: 20px;
        justify-content: space-around;
        button {
          width: 160px;
        }
      }
    }
  }
}
    
</style>