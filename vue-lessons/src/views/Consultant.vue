<template>
  <div>
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
          <keep-alive>
            <component :is="content"></component>
          </keep-alive>
        </div>
      </div>
    </div>

    <VFooter></VFooter>
  </div>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from '@/components/VFooter.vue'
import CAvatar from "../components/CAvatar.vue";
import CSideNav from "@/components/CSideNav.vue";
import CDropDown from "@/components/CDropDown.vue";
import ConsultantSetting from "@/components/ConsultantSetting.vue";
import PasswordChange from "../components/PasswordChange.vue";

export default {
  name: "Consultant",
  data() {
    return {
      content: "ConsultantSetting",
      currentTab: "tab1",
      defaultOption: "帳號設定",
    };
  },
  components: {
    VHeader,
    VFooter,
    CAvatar,
    CSideNav,
    CDropDown,
    ConsultantSetting,
    PasswordChange,
  },
};
</script>

<style lang="scss">
// layout._consultant.scss
@import "../assets/tgd104-sass/new_style.scss";
</style>
