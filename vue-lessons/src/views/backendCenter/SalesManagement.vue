
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
        <div class="line_chart">
            <line-chart></line-chart>
        </div>
        <!-- <pie-chart></pie-chart> -->
        <div class="pie_chart">
            <pie-chart></pie-chart>
        </div>
        <div class="bar_chart">
            <bar-chart></bar-chart>
        </div>  
    </div>
</template>

<script setup>

import BarChart from '../../components/BarChart.vue'
import LineChart from '../../components/LineChart.vue'
import PieChart from '../../components/PieChart.vue'

</script>



<style lang="scss">
.SalesContainer{
    margin: 25px auto;
    padding-left: 10px;
    padding-right: 10px;
    text-align: center;

    .memberdata_container{
        display: flex;
        justify-content: space-between;
        .memberdata{
            width: 28%;
            height: 150px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 1px 2px 10px  #adadad;
            

            p{  
                padding-top: 5px;
                padding-bottom: 5px;
                font-size: 18px;
                font-weight: bold;
            }

            h1{
                font-size: 30px;
                font-weight: bold;
            }

            & p:last-child{
                font-size: 22px;
                font-weight: bold;
            }
        }
    }


    .line_chart{
        margin-top: 30px;
        border-radius: 10px;
        background: #fff;
        box-shadow: 1px 2px 10px  #adadad;

        .LineChar{
            margin: 0 auto;
            height: 50vh !important;
            width: 55vw !important;
        }
    }
    .pie_chart{
        width: 300px;
        height: 300px;
        margin-top: 30px;
        border-radius: 10px;
        background: #fff;
        box-shadow: 1px 2px 10px  #adadad;
        
            .PieChar{
            
        }
    }
    
    .bar_chart{
        margin-top: 30px;
        border-radius: 10px;
        width: 600px;
        height: 300px;
        background: #fff;
        box-shadow: 1px 2px 10px  #adadad;

        .BarChar{
        margin-bottom: 10px;
        // height: 40vh !important;
        // width: 50vw !important;
        
    }
    }

    

}


</style>