<template> 
    <div>
      <canvas id="myChart" class="BarChar"></canvas>
    </div>
</template>

<script>
import Chart from 'chart.js/auto';
export default {
  name: 'BarChart',
  mounted(){
    console.log('chartjs');
    // 抓到canvas 
    const ctx = document.getElementById('myChart');

    // boiler temp
    new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['1月', '2月', '3月', '4月', '5月', '6月'],
      datasets: [{
        label: '男會員註冊數量',
        data: [60, 90, 20, 30, 10, 20],
        backgroundColor: '#9AD0F5',
        borderWidth: 1
      },
      {
        label: '女會員註冊數量',
        data: [60, 11, 100, 28, 50, 25],
        backgroundColor: '#FFB1C1',
        borderWidth: 1
      },]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
