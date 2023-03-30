<template>
   <div class="PieCharcontainer1">
     <canvas id="myChart3" class="PieChar"></canvas>
   </div>

  <div class="PieCharcontainer2">
     <canvas id="myChart4" class="PieChar"></canvas>
   </div>

 </template>
 
 <script>
 import Chart from 'chart.js/auto';
 export default {
   name: 'DoughnutChart',
   mounted(){
     const ctx = document.getElementById('myChart3');
     const ctx2 = document.getElementById('myChart4'); 
     new Chart(ctx, {
       type: 'doughnut',
       data: {
         labels: ['學習', '旅行'],
         datasets: [{
           label: '3月份銷售概況(訂單數)',
           data: [10, 20],
           backgroundColor: [
             'rgb(255, 99, 132)',
             'rgb(54, 162, 235)',
           ],
           hoverOffset: 4,
         }]
       },
       options: {
          plugins: {
            legend: {
              labels: {
                fontSize: 10
            },
          },
        },
      },
     });

     new Chart(ctx2, {
       type: 'doughnut',
       data: {
         labels: ['學習', '旅行'],
         datasets: [{
           label: '3月份銷售概況(訂單數)',
           data: [10, 20],
           backgroundColor: [
             'rgb(255, 99, 132)',
             'rgb(54, 162, 235)',
           ],
           hoverOffset: 4,
         }]
       },
       options: {
          plugins: {
            legend: {
              labels: {
                fontSize: 10
            },
          },
        },
      },
     });
   }
 }
 </script>
 
 <!-- Add "scoped" attribute to limit CSS to this component only -->
 <!-- 因為本身帶有inline style的樣式 所以要用!important才能夠蓋過去 -->
<style scoped>


  #myChart3 {

  }

  #myChart4 {

  }

  @media screen and (max-width:768px) {
    #myChart3 {
      width: 300px!important;
      height: 300px !important;
    }

    #myChart4 {
      width: 300px!important;
      height: 300px !important;
    }
  }
</style>
 