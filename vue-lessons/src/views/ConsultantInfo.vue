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
            <h1>顧問資訊</h1>
            <ul class="tabs">
              <li>
                <a
                  href="#"
                  :class="{ active: currentTab === 'tab1' }"
                  @click.prevent="
                    {
                      (content = 'ConsultantInfoL'), (currentTab = 'tab1');
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
                      (content = 'ConsultantInfoT'), (currentTab = 'tab2');
                    }
                  "
                  >陪你旅行</a
                >
              </li>
            </ul>
          </div>
          <div class="order_list">
            <keep-alive>
              <component :is="content"></component>
            </keep-alive>
          </div>

       
          <!-- calender -->
          <div class="calendar">
          <!-- <VCalendar :attributes="attributes"/> -->
            <p>📆 請選擇不可被預約日期</p>
            <v-calendar :attributes="attributes" :disabled-dates="disabledDates" @dayclick="onDayClick" />

            <button type="button" class="btn_blue calendar_btn">確認送出</button>

          </div>
          <!-- calender end-->

        </div>
      </div>
    </div>

    <VFooter></VFooter>
  </div>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "@/components/VFooter.vue";
import CAvatar from "@/components/CAvatar.vue";
import CSideNav from "../components/CSideNav.vue";
import CDropDown from "@/components/CDropDown.vue";
import ConsultantInfoL from "@/components/ConsultantInfoL.vue";
import ConsultantInfoT from "@/components/ConsultantInfoT.vue";

export default {
  name: "ConsultantInfo",
  data() {
    return {
      content: "ConsultantInfoL",
      currentTab: "tab1",
      defaultOption: "顧問資訊",
      //日期陣列
      days: [],
      disabledDates: [{end: new Date()},],
      // disabledDates: [new Date()],

      
    };
  },
  components: {
    VHeader,
    CAvatar,
    CSideNav,
    CDropDown,
    ConsultantInfoL,
    ConsultantInfoT,
    VFooter,
  },

    computed: {
    dates() {
      return this.days.map(day => day.date);
    },
    attributes() {
      return this.dates.map(date => ({
        highlight: true,
        dates: date,
      }));
    },
  },
  methods: {
    onDayClick(day) {
      const idx = this.days.findIndex(d => d.id === day.id);
      if (idx >= 0) {
        this.days.splice(idx, 1);
      } else {
        this.days.push({
          id: day.id,
          date: day.date,
        });
      }
      this.days.forEach(day => {
      const id = day.id;
      console.log(id);
      // 在這裡進行您想要的操作
    });
    },
  },





};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";

/* calendar */
.calendar{
  margin: 50px 0;
  text-align: center;
  border-top: 1px solid #eee;
}
p{
  margin: 30px 0;
}
.vc-container{
    width: 580px;
}
.vc-header {
    margin-bottom: 20px;
}

.vc-header .vc-title{
    font-size: 16px;
    color: #585858;
    span{
        font-size: 20px;
    }
}

.vc-weekday{
    font-size: 20px;
    margin: 5px 0;
    color: #585858;
}


.vc-day-content{
    font-size: 20px;
    width: 65px;
    height: 65px;
    margin: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    background-color: #79cbd4;

    cursor: pointer;

    &:hover {
      // color: #7f7f7f;
      background-color: #aeabab;
    }
    &.vc-disabled {
      cursor: default;
    }

}.vc-focus .vc-day-content {
    background-color: #79cbd4;
    color: #fff;
}

//上下月icon
.vc-header .vc-arrow {
   width: 35px;
   height: 35px;
   &:hover{
    color: #fff;
    background-color: #aeabab;
   }
}
.vc-base-icon {
    stroke-width: 4px;
}

.vc-day-content.vc-disabled{
    color: #7f7f7f;
    background-color: #aeabab;
}

.vc-bordered {
    border: 3px solid;
    border-color: #DCECEE;
}
//被選擇的日期
.vc-highlight-content-solid{
   background-color: #aeabab;
} 

.vc-focus{
    color: #fff;
}

.vc-highlight-bg-solid{
    background-color: #aeabab;
}

//送出按鈕
.calendar_btn{
  display: block;
  margin: 30px auto 0;
}
/* calendar end */

/* calendar rwd start */
@include rwd(768px){
  .calendar{
    .vc-container {
        width: 500px;
    }
    .vc-header .vc-title{
        span{
            font-size: 18px;
        }
    }
    .vc-weekday{
        font-size: 18px;
        margin: 5px 0;
        color: #585858;
    }
    .vc-day-content{
        font-size: 18px;
        width: 50px;
        height: 50px;
    }
  }
    
}


@include rwd(576px){
  .calendar{
    .vc-container {
        width: 300px;
    }
    .vc-header .vc-title{
        span{
            font-size: 16px;
        }
    }
    .vc-weekday{
        font-size: 16px;
        margin: 5px 0;
        color: #585858;
    }
    .vc-day-content{
        font-size: 16px;
        width: 30px;
        height: 30px;
    }
  }
}
/* calendar rwd end */
</style>
