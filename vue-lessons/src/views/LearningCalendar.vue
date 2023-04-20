<template>
    <VHeader></VHeader>
    

    <div class="datePicker">

        <h1>請選擇日期</h1>
        <div class="calendar_color"><span class="calendar_color_1">●</span><span>不可預約 </span><span class="calendar_color_2">●</span><span>可預約 </span><span class="calendar_color_3">●</span><span>已預約</span></div>

        <VDatePicker
            v-model="date"
            :disabled-dates="disabledDates"
            :attributes="attributes"
            mode="date"
        />

        <div class="datePicker_button">
            <!-- <a href="/SelTravelConsultant"><button class="outline_btn_orange">回上一頁</button></a> -->
            <router-link to="/LearningChoose"><button class="outline_btn_orange">回上一頁</button></router-link>
            <button @click="orderCheck" class="btn_orange">訂單確認</button>
        </div>
    </div>


    <VFooter></VFooter>
</template>
  
<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import { Calendar, DatePicker } from 'v-calendar';
import $ from "jquery";

export default {
    name: "LearningCalendar",
    data() {
    return {
        disabledDates: [new Date(),],
        date: new Date(),
        C_date: [],
        L_consultant_id_calendar: '',
    };
    },
    components: {
        VHeader,
        VFooter,
        Calendar,
        DatePicker,
        $
    },

    methods: {
        orderCheck(){

            if (this.date === null || this.date === undefined || this.date.getDate() === new Date().getDate()) {
                alert('請選擇日期');
            } else {
                this.$router.push('/LearningOrderConfirmation');
                console.log(this.date); //印出所選日期
            }
        }
    },
    mounted() {
        this.L_consultant_id_calendar = this.$cookies.get("L_consultant_id");
        console.log(this.L_consultant_id_calendar);


        // $.ajax({
        //         method: "POST",
        //         url: 'http://localhost/TGD104_G3_NEW/vue-lessons/src/api/LearningCalendar_Select.php', 
        //         data: {
        //         Id: this.L_consultant_id_detail,         
        //         },
        //         dataType: "json",
        //         success: response => {
        //             this.disabledDates.push(...response.map(item => item.c_date)) 
        //         },
        //         error: function(exception) {
        //             alert("發生錯誤: " + exception.status);
        //         },

        // });
        
    },
};
</script>
  
  
<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
    // .calendar_color{
    //     font-weight: 600;
    //     line-height: 32px;
    //     margin-bottom: 15px;
    // }

    // .calendar_color_1,
    // .calendar_color_2,
    // .calendar_color_3{
    //     font-size: 32px;
    // }

    // .calendar_color_1{
    //     color: #aeabab;
    // }

    // .calendar_color_2{
    //     color: #79cbd4;
    // }

    // .calendar_color_3{
    //     color: #ebc43a;
    // }

    @import "../assets/tgd104-sass/new_style.scss";

.datePicker{
    text-align: center;
    padding: 50px 0;
    h1{
        font-size: 20px;
        font-weight: 600;
        color: #585858;
        margin-bottom: 30px;
    }
    button{
        margin: 50px 10px 0 10px;
    }
    .calendar_color{
        font-weight: 600;
        line-height: 32px;
        margin-bottom: 15px;
    }

    .calendar_color_1,
    .calendar_color_2,
    .calendar_color_3{
        font-size: 32px;
    }

    .calendar_color_1{
        color: #aeabab;
    }

    .calendar_color_2{
        color: #79cbd4;
    }

    .calendar_color_3{
        color: #ebc43a;
    }
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
      background-color: #ebc43a;
      color: #fff;
    }

    &.vc-disabled {
      cursor: default;
    }
}
.vc-focus .vc-day-content {
    background-color: #79cbd4;
    color: #fff;
}


.vc-header .vc-arrow {
   width: 35px;
   height: 35px;
   &:hover{
    background-color: #ebc43a;
    color: #fff;
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
    // border: none;
    border: 3px solid;
    border-color: #DCECEE;
}

.vc-highlight-content-solid{
    background-color: #ebc43a;
} 

.vc-focus{
    color: #fff;
}

.vc-highlight-bg-solid{
    background-color: #ebc43a;
}


/*  rwd start */
@include rwd(768px){
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


@include rwd(576px){
    .vc-container {
        width: 350px;
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
        width: 35px;
        height: 35px;
    }
}

</style>