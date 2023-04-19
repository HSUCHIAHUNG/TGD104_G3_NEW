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

</style>