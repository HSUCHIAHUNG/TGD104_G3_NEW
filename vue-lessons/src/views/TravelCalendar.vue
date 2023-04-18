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
import $ from "jquery";

export default {
    name: "TravelCalendar",
    data() {
    return {
        disabledDates: [new Date(), ],
        date: new Date(),
        attributes: [],
        id: '',
        C_date: [],
    };
    },
    components: {
        VHeader,
        VFooter,
        Calendar,
        DatePicker,
        $,
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
                // console.log(this.date); //印出所選日期
                //所選日期 set cookie
            }
        },

    },

    mounted() {
        // 第一步:　先從cookie當中抓取顧問id的c_date欄位
        this.id = this.$cookies.get("selectedConsultant")
        console.log(this.id);
        console.log(this.disabledDates);


        // 第二步: 下Select敘述抓取顧問c_date的資料條件是(Id = 資料庫顧問的id)
        $.ajax({
            method: "POST",
            url: 'http://localhost/TGD104_G3_NEW/vue-lessons/src/api/TravelCalendar_Select.php', 
            data: {
                Id: this.id,
                
            },
            dataType: "json",
            // success: response => {
            // Array.prototype.push.apply(this.disabledDates, response);
            // console.log(this.disabledDates);
            // },

            // success: response => {
            //     console.log(response);
            //     this.disabledDates.push(...response)
            //     // Array.prototype.push.apply(this.disabledDates, ...response);
            //     console.log(this.disabledDates);
            // },

            success: response => {
            // 使用Array.map()方法提取c_date的值並轉為日期物件
                // this.disabledDates.push(...response.map(item => new Date(item.c_date))) 
                this.disabledDates.push(...response.map(item => item.c_date)) 
                // console.log(this.disabledDates);
                // console.log(this.disabledDates.toLocaleDateString());
            },

            error: function(exception) {
                alert("發生錯誤: " + exception.status);
            },

         }); 

        // 第三步: 將使用者選到的日期 
        // 使用者點擊到的日期{0: Tue Apr 18 2023 11:43:01 GMT+0800 (台北標準時間)}
        // 從this.date 抓到時間後轉換格式存進cookie 轉換語法toLocaleDateString()
    },
};
</script>
  
  
<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>