<template>
  <div>
    <VHeader></VHeader>
    <div class="member_body">
      <div class="member_row container">
        <!-------------側邊navbar---------------->
        <div class="aside_bar">
          <Avatar></Avatar>
          <SideNav></SideNav>
        </div>
        <!------------ 下拉式選單 ------------>
        <drop-down :defaultOption="defaultOption"></drop-down>
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
                      (content = 'MemberSetting'), (currentTab = 'tab1');
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
          <div v-if="content == 'MemberSetting'">
            <!-- main_content -->
            <div class="main_content">
              <form action="">
                <div class="input_row">
                  <div class="form_group">
                    <label for="" class="input_label">姓</label>
                    <input
                      type="text"
                      class="input_text"
                      placeholder="姓"
                      v-model="memberInfo[0].m_firstname"
                    />
                  </div>
                  <div class="form_group">
                    <label for="" class="input_label">名</label>
                    <input
                      type="text"
                      class="input_text"
                      placeholder="名"
                      v-model="memberInfo[0].m_lastname"
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
                      v-model="memberInfo[0].m_mail"
                    />
                  </div>
                  <div class="form_group">
                    <label for="" class="input_label">暱稱</label>
                    <input
                      type="text"
                      class="input_text"
                      placeholder="暱稱"
                      v-model="memberInfo[0].m_nickname"
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
                      v-model="memberInfo[0].m_id"
                    />
                  </div>
                  <div class="form_group">
                    <label for="" class="input_label">電話號碼</label>
                    <input
                      type="text"
                      class="input_text"
                      placeholder="電話號碼"
                      v-model="memberInfo[0].m_phone"
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
                      v-model="memberInfo[0].m_area"
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
                      v-model="memberInfo[0].m_gender"
                    >
                      <option value="">--請選擇--</option>
                      <option value="male">男性</option>
                      <option value="female">女性</option>
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
                      v-model="memberInfo[0].m_birth"
                    />
                  </div>
                </div>
              </form>
              <div class="btns">
                <button type="button" class="outline_btn_blue">取消</button>
                <button type="button" class="btn_blue" @click="save">
                  確定儲存
                </button>
              </div>
            </div>
            <!-- main_content end-->
          </div>
          <div v-if="content == 'PasswordChange'">
            <!-- main_content -->
            <div class="main_content">
              <form action="" class="pwd_change">
                <h3>請輸入註冊信箱，我們將發送密碼重置信。</h3>
                <div class="form_group">
                  <label for="" class="input_label">信箱(帳號)</label>
                  <input
                    type="text"
                    class="input_text"
                    placeholder="信箱(帳號)"
                  />
                </div>
                <button class="btn_blue" @click.prevent="pwdReset">確認</button>
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
          <chat-bot-new></chat-bot-new>
        </div>
      </div>
    </div>
    <VFooter></VFooter>
  </div>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import Avatar from "@/components/Avatar.vue";
import SideNav from "@/components/SideNav.vue";
import DropDown from "../components/DropDown.vue";
import MemberSetting from "../components/MemberSetting.vue";
import PasswordChange from "../components/PasswordChange.vue";
import VFooter from "../components/VFooter.vue";
import ChatBotNew from "../components/ChatBotNew.vue";
import $ from "jquery";

export default {
  name: "Member",
  data() {
    return {
      content: "MemberSetting",
      currentTab: "tab1",
      defaultOption: "帳號設定",
      memberInfo: [
        {
          id: "",
          m_firstname: "",
          m_lastname: "",
          m_mail: "",
          m_nickname: "",
          m_id: "",
          m_phone: "",
          m_area: "",
          m_gender: "",
          m_birth: "",
        },
      ],
    };
  },
  methods: {
    save() {
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}memberUpdate.php`,
        dataType: "text",
        type: "POST",
        data: {
          id: this.memberInfo[0].id,
          m_firstname: this.memberInfo[0].m_firstname,
          m_lastname: this.memberInfo[0].m_lastname,
          m_mail: this.memberInfo[0].m_mail,
          m_nickname: this.memberInfo[0].m_nickname,
          m_id: this.memberInfo[0].m_id,
          m_phone: this.memberInfo[0].m_phone,
          m_area: this.memberInfo[0].m_area,
          m_gender: this.memberInfo[0].m_gender,
          m_birth: this.memberInfo[0].m_birth,
        },
        success: (response) => {
          alert(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    },
  },
  components: {
    VHeader,
    VFooter,
    Avatar,
    SideNav,
    MemberSetting,
    PasswordChange,
    DropDown,
    ChatBotNew,
  },
  mounted() {
    let m_id = $cookies.get("M_id");
    console.log(m_id);
    if (!m_id) {
      this.$router.back();
      alert("請登入會員");
    } else {
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}memberInfo.php`,
        dataType: "json",
        type: "POST",
        data: {
          id: m_id,
        },
        success: (response) => {
          this.memberInfo = response;
          console.log(this.memberInfo);
          console.log(this.memberInfo[0].id);
          console.log(this.memberInfo[0].m_id);
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
@import "../assets/tgd104-sass/new_style.scss";
</style>
