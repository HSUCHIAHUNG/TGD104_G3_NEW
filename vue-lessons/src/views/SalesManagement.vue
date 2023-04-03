
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
                <p>已下訂已完成訂單數</p>
                <h1>535</h1>
                <p>2023/04/07</p>
            </div>
        </div>

        <div class="line_chart">
            <line-chart></line-chart>
        </div>

        <div class="pie_chart">
            <pie-chart></pie-chart>
        </div>
        
        <div class="bar_chart">
            <bar-chart></bar-chart>
        </div>  
    </div>
</template>

<script setup>

import BarChart from '../components/BarChart.vue'
import LineChart from '../components/LineChart.vue'
import PieChart from '../components/PieChart.vue'

</script>




<style lang="scss">
*{
    // outline: 1px solid red;
}

.SalesContainer{
    margin: 25px auto;
    padding-left: 10px;
    padding-right: 10px;
    text-align: center;
    width: 70%;
    overflow-y: auto;
    height: 790px;
    &::-webkit-scrollbar {
        display: none;
    }
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
        width: 100%;
        max-width: 1200px;
        height: 350px;
        background: #fff;
        box-shadow: 1px 2px 10px  #adadad;
        position: relative;
        

        .LineChar{
            position: absolute;
            max-width: 1100px !important; 
            max-height: 260px !important;
            width: 100% !important;
            height: 80% !important;
            margin: 0 auto;
            top: 0; bottom: 0; left: 0; right: 0;
            margin: auto;
        }
    }

    .pie_chart{
        display: flex;
        justify-content: space-between;

       

        .PieCharcontainer1{
        max-width: 360px;
        max-height: 360px;
        width: 100% !important;
        height: 100% !important;
        margin-top: 30px;
        border-radius: 10px;
        background: #fff;
        box-shadow: 1px 2px 10px  #adadad;
        padding: 10px;

            .PieChar{
                width: 100% !important;
                height: 100% !important;
            }
        
        }

        .PieCharcontainer2{
            max-width: 360px;
            max-height: 360px;
            width: 100% !important;
            height: 100% !important;
            margin-top: 30px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 1px 2px 10px  #adadad;
            padding: 10px;
            
            .PieChar{
                width: 100% !important;
                height: 100% !important;
            }
        }

        .PieCharcontainer3{
        max-width: 360px;
        max-height: 360px;
        width: 100% !important;
        height: 100% !important;
        margin-top: 30px;
        border-radius: 10px;
        background: #fff;
        box-shadow: 1px 2px 10px  #adadad;
        padding: 10px;

            .PieChar{
                width: 100% !important;
                height: 100% !important;
            }
        }
    }
    
    .bar_chart{
        margin: 30px auto;
        border-radius: 10px;
        max-width: 1200px;
        max-height: 400px;
        width: 100%;
        height: 100%;
        background: #fff;
        box-shadow: 1px 2px 10px  #adadad;

        .BarChar{
            padding: 40px;
            margin-bottom: 10px;
            max-width: 1200px;
            max-height: 400px;
            width: 100% !important;
            height: 100% !important;
        }
    }
}


</style>