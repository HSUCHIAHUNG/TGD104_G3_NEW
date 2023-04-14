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
          <keep-alive>
            <component :is="content"></component>
          </keep-alive>
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
      memberInfo: [],
    };
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
    let m_id = $cookies.get("m_id");
    console.log(m_id);
    if (!m_id) {
      this.$router.back();
      alert("請登入會員");
    } else {
      $.ajax({
        url: "http://localhost/NEW_G3/vue-lessons/src/api/memberInfo.php",
        dataType: "json",
        type: "POST",
        data: {
          id: m_id,
        },
        success: function (response) {
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
