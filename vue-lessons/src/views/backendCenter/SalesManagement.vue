
<template>
    <div class="SalesContainer">
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
    margin: 0 auto;
    padding-left: 10px;
    padding-right: 10px;

    .LineChar{
        margin-top: 30px;
        height: 60vh !important;
        width: 70vw !important;
        border-radius: 10px;
        background: #fff;
        box-shadow: 1px 2px 5px  #adadad;
    }

    .PieChar{

        background: #fff;
        box-shadow: 1px 2px 5px  #adadad;
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
        box-shadow: 1px 2px 5px  #adadad;

    }

}


</style>