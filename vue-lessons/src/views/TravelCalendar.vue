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
            <router-link to="/SelTravelConsultant"><button class="outline_btn_orange">回上一頁</button></router-link>
            <button @click="orderCheck" class="btn_orange">訂單確認</button>
        </div>
    </div>


    <VFooter></VFooter>
</template>
  
<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import { Calendar, DatePicker } from 'v-calendar';

export default {
    name: "TravelCalendar",
    data() {
    return {
        disabledDates: [new Date(), '2023-04-01', '2023-04-02', '2023-04-03', '2023-04-04', '2023-04-05', '2023-04-06', '2023-04-08', '2023-04-09', '2023-04-10', '2023-04-11', '2023-04-12', '2023-04-17', '2023-04-18', '2023-04-27', '2023-04-28'],
        date: new Date(),
    };
    },
    components: {
        VHeader,
        VFooter,
        Calendar,
        DatePicker,
    },

    mounted() {
        
        console.log(this.disabledDates);
    },

    methods: {
        orderCheck(){

            if (this.date === null || this.date === undefined || this.date.getDate() === new Date().getDate()) {
                alert('請選擇日期');
            } else {
                this.$router.push('/TravelOrderConfirmation');
                console.log(this.date); //印出所選日期
            }
        }
    },
};
</script>
  
  
<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>