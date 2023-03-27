<template>
   <div>
     <canvas id="myChart2" class="LineChar"></canvas>
   </div>
 </template>
 
 <script>
 import Chart from 'chart.js/auto';
 export default {
   name: 'LineChart',
   mounted(){
     console.log('chartjs');
     // 抓到canvas 
     const ctx = document.getElementById('myChart2');
     const labels = ['2022/10', '2022/11', '2022/12', '2023/01', '2023/02', '2023/03'];
     const data = {
       labels: labels,
       datasets: [{
         label: '每月訂單數量',
         data: [65, 59, 80, 81, 56, 55],
         fill: false,
         borderColor: '#FFCD56',
         tension: 0
       }]
     };
     // 選項
     const options = {
       scales: {
         y: {
           beginAtZero: true
         }
       }
     };
     // 新建一個 Line Chart
     new Chart(ctx, {
       type: 'line',
       data: data,
       options: options
     });
   }
 }
 </script>
 
 <style scoped>
 
 </style>
 