<template>
  <div>
    <!-- <VHeader></VHeader> -->
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
            <h1>歷史訂單</h1>
            <ul class="tabs">
              <li>
                <a
                  href="#"
                  :class="{ active: currentTab === 'tab1' }"
                  @click.prevent="
                    {
                      currentTab = 'tab1';
                    }
                  "
                  >陪你學習</a
                >
              </li>
              <li>
                <a
                  href="#"
                  :class="{ active: currentTab === 'tab2' }"
                  @click.prevent="
                    {
                      currentTab = 'tab2';
                    }
                  "
                  >陪你旅行</a
                >
              </li>
            </ul>
          </div>
          <div class="order_list">
            <c-history-order-sum></c-history-order-sum>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
//  import VHeader from '@/components/VHeader.vue'
//  import VFooter from '@/components/VFooter.vue'
import CAvatar from "@/components/CAvatar.vue";
import CSideNav from "../components/CSideNav.vue";
import CDropDown from "@/components/CDropDown.vue";
import CHistoryOrderSum from "../components/CHistoryOrderSum.vue";

export default {
  name: "ConsultantHistory",
  data() {
    return {
      currentTab: "tab1",
      defaultOption: "歷史訂單",
    };
  },
  components: {
    // VHeader,
    // VFooter,
    CAvatar,
    CSideNav,
    CDropDown,
    CHistoryOrderSum,
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
