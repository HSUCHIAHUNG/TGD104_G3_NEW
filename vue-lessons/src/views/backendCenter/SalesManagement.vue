
<template>
    <div class="SalesContainer">
        <div class="memberdata_container">
            <div class="memberdata">
                <p>累積會員人</p>
                <h1>735</h1>
                <p>2023/04/07</p>
            </div>
            <div class="memberdata">
                <p>已下訂未完成訂單數</p>
                <h1>223</h1>
                <p>2023/04/07</p>
            </div>
            <div class="memberdata">
                <p>已下訂且已完成訂單數</p>
                <h1>535</h1>
                <p>2023/04/07</p>
            </div>
        </div>
        <line-chart></line-chart>
        <!-- <pie-chart></pie-chart> -->
        <pie-chart></pie-chart>
        <bar-chart></bar-chart>
    </div>
</template>

<script setup>

import BarChart from '../../components/BarChart.vue'
import LineChart from '../../components/LineChart.vue'
import PieChart from '../../components/PieChart.vue'

</script>



<style lang="scss">
.SalesContainer{
    // display: flex;
    margin: 25px auto;
    padding-left: 10px;
    padding-right: 10px;

    .memberdata_container{
        display: flex;
        justify-content: space-between;
        .memberdata{
            width: 28%;
            height: 250px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 1px 2px 10px  #adadad;

            p{  
                padding-top: 5px;
                padding-bottom: 5px;
                font-size: 28px;
                font-weight: bold;
            }

            h1{
                font-size: 60px;
                font-weight: bold;
            }

            & p:last-child{
                font-size: 26px;
                font-weight: bold;
            }
        }
    }

    .LineChar{
        margin-top: 30px;
        height: 60vh !important;
        width: 70vw !important;
        border-radius: 10px;
        background: #fff;
        box-shadow: 1px 2px 10px  #adadad;
    }

    .PieChar{

        background: #fff;
        box-shadow: 1px 2px 10px  #adadad;
        margin-top: 30px;   
        border-radius: 10px;
    }

    .BarChar{
        margin-top: 30px;
        margin-bottom: 10px;
        height: 60vh !important;
        width: 70vw !important;
        border-radius: 10px;
        background: #fff;
        box-shadow: 1px 2px 10px  #adadad;
    }

}


</style>