<template>
  <div>
    <VHeader></VHeader>
    <div class="consultant_body">
      <div class="consultant_row container">
        <!-------------側邊navbar---------------->
        <div class="aside_bar">
          <c-avatar></c-avatar>
          <c-side-nav></c-side-nav>
        </div>
        <!------------ 下拉式選單 ------------>
        <c-drop-down :defaultOption="defaultOption"></c-drop-down>
        <!------------ 主要區塊 ------------>
        <div class="main">
          <div class="main_header">
            <h1>帳號設定</h1>
            <ul class="tabs">
              <li>
                <a
                  href="#"
                  :class="{ active: currentTab === 'tab1' }"
                  @click.prevent="
                    {
                      (content = 'ConsultantSetting'), (currentTab = 'tab1');
                    }
                  "
                  >基本資料</a
                >
              </li>
              <li>
                <a
                  href="#"
                  :class="{ active: currentTab === 'tab2' }"
                  @click.prevent="
                    {
                      (content = 'PasswordChange'), (currentTab = 'tab2');
                    }
                  "
                  >修改密碼</a
                >
              </li>
            </ul>
          </div>
          <!-- <keep-alive>
            <component :is="content"></component>
          </keep-alive> -->
          <div v-if="content == 'ConsultantSetting'">
                <!-- main_content -->
                <div class="consultant_content">
                  <form action="">
                    <div class="input_row">
                      <div class="form_group">
                        <label for="" class="input_label">姓</label>
                        <input 
                          type="text" 
                          class="input_text" 
                          placeholder="姓" 
                          v-model="consultantInfo[0].c_firstname"
                        />
                      </div>
                      <div class="form_group">
                        <label for="" class="input_label">名</label>
                        <input 
                          type="text" 
                          class="input_text" 
                          placeholder="名" 
                          v-model="consultantInfo[0].c_lastname"
                        />
                      </div>
                    </div>
                    <div class="input_row">
                      <div class="form_group">
                        <label for="" class="input_label">信箱(帳號)</label>
                        <input 
                          type="text" 
                          class="input_text" 
                          placeholder="信箱(帳號)" 
                          v-model="consultantInfo[0].c_mail"
                        />
                      </div>
                      <div class="form_group">
                        <label for="" class="input_label">暱稱</label>
                        <input 
                          type="text" 
                          class="input_text" 
                          placeholder="暱稱" 
                          v-model="consultantInfo[0].c_nickname"
                        />
                      </div>
                    </div>
                    <div class="input_row">
                      <div class="form_group">
                        <label for="" class="input_label">身分證字號</label>
                        <input 
                          type="text" 
                          class="input_text" 
                          placeholder="身分證字號" 
                          v-model="consultantInfo[0].c_id"
                        />
                      </div>
                      <div class="form_group">
                        <label for="" class="input_label">電話號碼</label>
                        <input 
                          type="text" 
                          class="input_text" 
                          placeholder="電話號碼" 
                          v-model="consultantInfo[0].c_phone"
                        />
                      </div>
                    </div>
                    <div class="input_row">
                      <div class="form_group">
                        <label class="input_label" for="area">居住地區</label>
                        <select 
                          name="area" 
                          id="area" 
                          class="input_select"
                          v-model="consultantInfo[0].c_area"
                        >
                          <option value="">--請選擇--</option>
                          <option value="北部">北部</option>
                          <option value="中部">中部</option>
                          <option value="南部">南部</option>
                          <option value="東部">東部</option>
                        </select>
                      </div>
                      <div class="form_group">
                        <label class="input_label" for="gender">性別</label>
                        <select 
                          name="gender" 
                          id="gender" 
                          class="input_select"
                          v-model="consultantInfo[0].c_gender"
                        >
                          <option value="">--請選擇--</option>
                          <option value="男性">男性</option>
                          <option value="女性">女性</option>
                        </select>
                      </div>
                    </div>
                    <div class="input_row">
                      <div class="form_group">
                        <label class="input_label" for="birthday">生日</label>

                        <input
                          type="date"
                          id="birthday"
                          name="trip-start"
                          min="1900-01-01"
                          max="2023-12-31"
                          class="input_text"
                          v-model="consultantInfo[0].c_birth"
                        />
                      </div>
                      <div class="form_group files">
                        <div class="goodpeople">
                          <label for="" class="file_upload"
                            >良民證上傳<i class="fa-regular fa-image"></i
                          ></label>
                          <input type="file" class="upload" id="goodpeople" />
                        </div>
                        <div class="id_upload">
                          <label for="" class="file_upload"
                            >身分證上傳<i class="fa-regular fa-image"></i
                          ></label>
                          <input type="file" class="upload" id="id" />
                        </div>
                      </div>
                    </div>
                    <div class="input_row">
                      <div class="form_group">
                        <label class="input_label" for="theFile"
                          >生活照上傳(圖片寬&高請設定相同且檔案大小不得超過10mb)</label
                        >
                        <input
                          type="file"
                          ref="fileInput"
                          @change="fileChange"
                          class="upload_avatar"
                        />
                        <input
                          type="file"
                          ref="fileInput2"
                          @change="fileChange2"
                          class="upload_avatar"
                        />
                        <input
                          type="file"
                          ref="fileInput3"
                          @change="fileChange3"
                          class="upload_avatar"
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
                  </form>
                  <div class="btns">
                    <button type="button" class="outline_btn_blue">取消</button>
                    <button type="button" class="btn_blue" @click="save">確定儲存</button>
                  </div>
                </div>
                <!-- main_content end-->
          </div>
          <div v-if="content == 'PasswordChange'">
            <!-- main_content -->
            <div class="main_content">
              <form class="pwd_change" @submit.prevent="changePwd">
                <div class="form_group">
                  <label for="" class="input_label">原密碼</label>
                  <input
                    type="password"
                    class="input_text"
                    placeholder="原密碼"
                    v-model="pwd.old"
                    required
                  />
                  <label for="" class="input_label">新密碼</label>
                  <input
                    type="password"
                    class="input_text"
                    placeholder="新密碼"
                    v-model="pwd.new"
                    required
                  />
                  <label for="" class="input_label">請重新確認密碼</label>
                  <input
                    type="password"
                    class="input_text"
                    placeholder="請重新確認密碼"
                    v-model="pwd.check_new"
                    required
                  />
                </div>
                <button class="btn_blue" type="submit">確認</button>
              </form>

              <!-- 已發送密碼重置信燈箱-->
              <div id="pwd_reset_lightbox" class="none">
                <article>
                  <div class="inputs">
                    <h1>已發送密碼重置信</h1>
                    <p>請至您的信箱重置密碼!</p>
                    <div class="btns">
                      <button
                        type="button"
                        class="btn_blue"
                        @click.prevent="closeModal"
                      >
                        確認
                      </button>
                    </div>
                  </div>
                </article>
              </div>
              <!-- 已發送密碼重置信燈箱 End-->
            </div>
            <!-- main_content end-->
          </div>

        </div>
        
      </div>
    </div>

    <VFooter></VFooter>
  </div>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "@/components/VFooter.vue";
import CAvatar from "../components/CAvatar.vue";
import CSideNav from "@/components/CSideNav.vue";
import CDropDown from "@/components/CDropDown.vue";
import ConsultantSetting from "@/components/ConsultantSetting.vue";
import PasswordChange from "../components/PasswordChange.vue";
import $ from "jquery";

export default {
  name: "Consultant",
  data() {
    return {
      content: "ConsultantSetting",
      currentTab: "tab1",
      defaultOption: "帳號設定",
      consultantInfo: [
        {
          id: "",
          c_firstname: "",
          c_lastname: "",
          c_mail: "",
          c_nickname: "",
          c_id: "",
          c_phone: "",
          c_area: "",
          c_gender: "",
          c_birth: "",
        },
      ],
      pwd: {
        old: "",
        new: "",
        check_new: "",
      },
    };
  },
  methods: {
    // 修改資料
    save() {
      $.ajax({
        url: "http://localhost/TGD104_G3_NEW/vue-lessons/src/api/consultantUpdate.php",
        dataType: "text",
        type: "POST",
        data: {
          id: this.consultantInfo[0].id,
          c_firstname: this.consultantInfo[0].c_firstname,
          c_lastname: this.consultantInfo[0].c_lastname,
          c_mail: this.consultantInfo[0].c_mail,
          c_nickname: this.consultantInfo[0].c_nickname,
          c_id: this.consultantInfo[0].c_id,
          c_phone: this.consultantInfo[0].c_phone,
          c_area: this.consultantInfo[0].c_area,
          c_gender: this.consultantInfo[0].c_gender,
          c_birth: this.consultantInfo[0].c_birth,
        },
        success: (response) => {
          alert(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    },
    // 修改密碼
    changePwd() {
      let id = this.$cookies.get("Consultant_id");
      if (this.pwd.new !== this.pwd.check_new) {
        alert("輸入的密碼不一致，請重新確認");
      } else {
        $.ajax({
          url: "http://localhost/TGD104_G3_NEW/vue-lessons/src/api/changePwdConsultant.php",
          dataType: "text",
          type: "POST",
          data: {
            id: id,
            c_password: this.pwd.old,
            new_pwd: this.pwd.new,
          },
          success: (response) => {
            alert(response);
            this.pwd.new = "";
            this.pwd.old = "";
            this.pwd.check_new = "";
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR, textStatus, errorThrown);
          },
        });
      }
    },
  },
  components: {
    VHeader,
    VFooter,
    CAvatar,
    CSideNav,
    CDropDown,
    ConsultantSetting,
    PasswordChange,
    $,
  },
  mounted() {
    let Consultant_id = $cookies.get("Consultant_id");
    console.log(Consultant_id);
    if (!Consultant_id) {
      this.$router.back();
      alert("請登入顧問");
    } else {
      $.ajax({
        url: "http://localhost/TGD104_G3_NEW/vue-lessons/src/api/consultantInfo.php",
        dataType: "json",
        type: "POST",
        data: {
          id: Consultant_id,
        },
        success: (response) => {
          this.consultantInfo = response;
          console.log(this.consultantInfo);
          console.log(this.consultantInfo[0].id);
          console.log(this.consultantInfo[0].c_id);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    }
  },
};
</script>

<style lang="scss">
// layout._consultant.scss
@import "../assets/tgd104-sass/new_style.scss";
</style>
