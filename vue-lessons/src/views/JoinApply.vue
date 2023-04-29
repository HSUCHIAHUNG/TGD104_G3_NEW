<template>
  <VHeader></VHeader>

    <!-- join_apply -->
  <div class="join_apply">
    <div class="container">
      <h1>表格申請</h1>
      <img src="../assets/image/join/step1.png" alt="" />
      <h2>基本資料</h2>
      <div class="personal_information" id="app">
        <form @submit.prevent="submitForm">
          <div class="input_row">
            <div class="form_group">
              <label for="" class="input_label">姓</label>
              <input type="text" class="input_text" placeholder="姓" v-model.trim="C_firstname" required/>
            </div>
            <div class="form_group">
              <label for="" class="input_label">名</label>
              <input type="text" class="input_text" placeholder="名" v-model.trim="C_lastname" required/>
            </div>
          </div>

          <div class="input_row">
            <div class="form_group">
              <label for="" class="input_label">信箱(帳號)</label>
              <input type="email" class="input_text" placeholder="信箱(帳號)" v-model.trim="C_mail" required/>
            </div>
            <div class="form_group">
              <label for="" class="input_label">暱稱</label>
              <input type="text" class="input_text" placeholder="暱稱" v-model.trim="C_nickname" required/>
            </div>
          </div>

          <div class="input_row">
            <div class="form_group">
              <label for="" class="input_label">身分證字號</label>
              <input type="text" class="input_text" placeholder="身分證字號" v-model.trim="C_id" required/>
              <p class="error_msg" v-if="cidErrorMsg">{{cidErrorMsg}}</p>
            </div>
            <div class="form_group">
              <label for="" class="input_label">個性</label>
              <input type="text" class="input_text" placeholder="個性" v-model.trim="C_personality" required/>
            </div>
          </div>

          <div class="input_row">
            <div class="form_group">
              <label for="" class="input_label">密碼</label>
              <input type="password" class="input_text" placeholder="請輸入8-12位數的密碼" v-model.trim="C_password" required/>
              <p class="password_error error_msg"></p>
            </div>
            <div class="form_group">
              <label for="" class="input_label">再次確認密碼</label>
              <input
                type="password"
                class="input_text "
                placeholder="再次確認密碼"
                v-model.trim="db_password"
              />
              <p class="password_dbcheck error_msg"></p>
            </div>
          </div>

          <div class="input_row">
            <div class="form_group">
              <label for="" class="input_label">電話號碼</label>
              <input type="text" class="input_text" placeholder="電話號碼" v-model.trim="C_phone" required/>
              <p class="phone_error error_msg"></p>
            </div>
            <div class="form_group">
              <label class="input_label" for="area">居住地區</label>
              <select id="area" class="input_select" v-model="C_area" required>
                <!-- <option value="">--請選擇--</option> -->
                <option v-for="area in areas">{{area}}</option>
                <!-- <option value="北部">北部</option>
                <option value="中部">中部</option>
                <option value="南部">南部</option>
                <option value="東部">東部</option> -->
              </select>
            </div>
          </div>

          <div class="input_row">
            <div class="form_group">
              <label class="input_label" for="gender">性別</label>
              <select id="gender" class="input_select" v-model="C_gender" required>
                <!-- <option value="">--請選擇--</option> -->
                <option v-for="gender in genders">{{gender}}</option>
                <!-- <option value="male">男性</option>
                <option value="female">女性</option> -->
              </select>
            </div>
            <div class="form_group">
              <label class="input_label" for="birthday">生日</label>

              <input
                type="date"
                min="1953-01-01"
                max="2004-12-31"
                class="input_text"
                v-model="C_birth"
                required
              />
            </div>
          </div>

          <div class="input_row">
            <div class="form_group">
              <label class="input_label" for="goodPeopleImage"
                >良民證上傳</label
              >
              <input
                type="file"
                id="goodPeopleImage"
                name="goodPeopleImage"
                class="input_file"
              />
            </div>
            <div class="form_group">
              <label class="input_label" for="IdImage">身分證上傳</label>
              <input
                type="file"
                id="IdImage"
                name="IdImage"
                class="input_file"
              />
            </div>
          </div>
          <div class="input_row" id="app">
            <div class="form_group">
              <label class="input_label" for="theFile"
                >生活照上傳(圖片寬&高請設定相同且檔案大小不得超過10mb)</label
              >
              <input type="file" ref="fileInput" @change="fileChange" class="input_img" id="ProductImage" name="profile"/>
              <input
                type="file"
                ref="fileInput2"
                @change="fileChange2"
                class="input_img"
              />
              <input
                type="file"
                ref="fileInput3"
                @change="fileChange3"
                class="input_img"
              />
            </div>
            <div class="form_group" id="image_container">
              <div class="image">
                <img ref="image1" />
              </div>
              <div class="image">
                <img ref="image2" />
              </div>
              <div class="image">
                <img ref="image3" />
              </div>
            </div>
          </div>
          <div class="join_btn">
            <!-- <a href="/Join"><button class="outline_btn_blue">回上一頁</button></a> -->
            <router-link to="/Join"
              ><button class="outline_btn_blue">回上一頁</button></router-link
            >
            <!-- <a href="/JoinLearn"><button class="btn_blue">下一步</button></a> -->

            <!-- <router-link to="/JoinLearn"
              ><button class="btn_blue">下一步</button></router-link
            > -->
            <button class="btn_blue" type="submit">下一步</button>
              <p id="result" style="height: 100px;"></p>
          </div>
        </form>
      </div>
    </div>

  </div>
  <!-- join_apply end -->

  <VFooter></VFooter>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import $ from "jquery";

export default {
  name: "JoinApply",
  data() {
    return {
      C_firstname:'',
      areas: ["北部","中部","南部","東部"],
      genders: ["男性","女性"],
      About_class:'',
      Consultant_id: '',
      C_photo1: 'b10.png',
      //身分證
      C_id: '',
      cidErrorMsg: '',
      
    };
  },

  components: {
    VHeader,
    VFooter,
    $,
  },

  mounted() {
    let x = $cookies.get('toAbout')
    this.About_class = x
  },

  methods: {
    fileChange() {
      const file = this.$refs.fileInput.files[0];
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.addEventListener("load", () => {
        const image = this.$refs.image1;
        image.src = reader.result;
        image.style.maxWidth = "130px";
        image.style.maxHeight = "130px";

        console.log(file);
      });
    },
    fileChange2() {
      const file = this.$refs.fileInput2.files[0];
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.addEventListener("load", () => {
        const image = this.$refs.image2;
        image.src = reader.result;
        image.style.maxWidth = "130px";
        image.style.maxHeight = "130px";
      });
    },
    fileChange3() {
      const file = this.$refs.fileInput3.files[0];
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.addEventListener("load", () => {
        const image = this.$refs.image3;
        image.src = reader.result;
        image.style.maxWidth = "130px";
        image.style.maxHeight = "130px";
      });
    },


    submitForm(){
      // 初始化驗證結果為true
      let isValid = true;

      //---- 檢查電話號碼 ----
      const isValidPhoneNumber = /^09\d{8}$/.test(this.C_phone);
      const errorElm = document.querySelector('.phone_error');
      if (!isValidPhoneNumber) {
        // 如果不是10個數字，則顯示提示訊息
        isValid = false;
        errorElm.innerText = '請輸入09開頭有效的電話號碼';
      }else{
        errorElm.innerText = '';
      }

      //---- 檢查密碼 ----
      
      const errorPas = document.querySelector('.password_error');
      const errorDbPas = document.querySelector('.password_dbcheck');
      const isValidPaaword = this.C_password && /^[A-Za-z0-9]{8,12}$/.test(this.C_password);
      if (!isValidPaaword) {
        isValid = false
        errorPas.innerText = '密碼需8-12位英數字';
      }else{
        errorPas.innerText = '';
      } 
      if (this.db_password != this.C_password) {
        isValid = false
        errorDbPas.innerText = '密碼不一致';
      }else if(this.db_password = this.C_password){
        errorDbPas.innerText = '';
      }

      //---- 檢查身分證 ----
      let myId = this.C_id.toUpperCase();//首字母轉大寫
      let letters = [
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
      ];
      let areaCodeAll = [
        "10", "11", "12", "13", "14", "15", "16", "17", "34", "18", "19", "20", "21", "22", "35", "23", "24", "25", "26", "27", "28", "29", "30", "31", "32", "33"
      ];

      let firstLetter = false;
      let num9 = myId.substring(1, myId.length);
      num9 = parseInt(num9);
      num9 = num9.toString().length;

      // 檢查第一個字是否是 A ~ Z
      for (let i = 0; i < letters.length; i++) {
        if (myId.charAt(0) == letters[i]) {
          firstLetter = true;
          break;
        } else {
          firstLetter = false;
          continue;
        }
      }

      // 檢查輸入的長度
      if (myId.length !== 10) {
        this.cidErrorMsg = '輸入資料的長度要有 10 位';
        isValid = false;
      } else if (firstLetter === false) {
        this.cidErrorMsg = '首字須為字母 A ~ Z';
        isValid = false;
      } else if (num9 !== 9) {
        this.cidErrorMsg = '後面九個字都要是數字';
        isValid = false;
      } else if (myId.charAt(1) !== '1' && myId.charAt(1) !== '2') {
        this.cidErrorMsg = '第二個字要是 1 或 2';
        isValid = false;
      } else {
        // 檢查碼&計算第一個英文字母的加權
        let checkCode = 0;
        let letter = myId[0];
        let index = letters.indexOf(letter);
        let areaCode = areaCodeAll[index];

        checkCode += areaCode[0] * 1 + areaCode[1] * 9;
        for (let i = 1; i <= 8; i++) {
          checkCode += parseInt(myId.charAt(i)) * (9 - i);
        }

        checkCode %= 10;
        if (checkCode !== 0) {
          checkCode = 10 - checkCode;
        }

        if (checkCode !== parseInt(myId.charAt(9))) {
          this.cidErrorMsg = '不是合法的身分證字號';
          isValid = false;
        } else {
          this.cidErrorMsg = '';
        }

        this.C_id = myId
        // console.log(this.C_id); 
      }

      // 如果驗證成功，則提交表單
      if (isValid) {
        $.ajax({
            method: "POST",
            url: `${process.env.VUE_APP_AJAX_URL}JoinApply.php`, 
            data: {
                C_firstname: this.C_firstname,
                C_birth: this.C_birth,
                C_lastname: this.C_lastname,
                C_mail: this.C_mail,
                C_nickname: this.C_nickname,
                C_id: this.C_id,
                C_personality: this.C_personality,
                C_password: this.C_password,
                C_phone: this.C_phone,
                C_area: this.C_area,
                C_gender: this.C_gender,
                C_photo1: this.C_photo1,
                
                // C_photo1: this.$refs.fileInput.files[0],
            },
            dataType: "text",
            success: response => {
                // $("#result").html(response);
                console.log('成功');
                // console.log(this);
                this.setCid()
            
            },
            error: function(exception) {
                // alert("發生錯誤: " + exception.status);
            },

        });

      }
    },
  
    setCid(){
      // alert()
       $.ajax({
            method: "POST",
            url: `${process.env.VUE_APP_AJAX_URL}JoinApply_id.php`, 
            data: {
              C_id: this.C_id,
               
            },
            dataType: "json",
            success: function(response) {
              // $("#result").html(response);

              //set cookie
              console.log( response[0].id);
              $cookies.set("Consultant_id",response[0].id)
            },
            error: function(exception) {
                // alert("發生錯誤: " + exception.status);
            },

        });

      if (this.About_class == "L") {
          this.$router.push('/JoinLearn');
        } else{
            this.$router.push('/JoinTravel');
        }
    },

  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
.error_msg {
  font-size: 14px;
  color: red;
  text-align: left;
}
</style>
