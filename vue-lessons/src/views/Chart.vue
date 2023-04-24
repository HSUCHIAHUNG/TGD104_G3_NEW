<template>
   <div class="about">
     <h1>後台</h1>
     <bar-chart></bar-chart>
     <line-chart></line-chart>
     <pie-chart></pie-chart>
   </div>
</template>

<script>
import BarChart from '../components/BarChart.vue'
import LineChart from '../components/LineChart.vue'
import PieChart from '../components/PieChart.vue'
    import {API_URL} from "@/config";
// @ is an alias to /src


export default {
  name: 'Chart',
  components: {
    BarChart,
    LineChart,
    PieChart,
   
  }
}
</script>