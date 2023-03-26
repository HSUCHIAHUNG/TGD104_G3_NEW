<template>
   <div>
     <!-- <VHeader></VHeader> -->

     <!-- <div class="member_row container"> -->

      <!-------------側邊navbar---------------->

      <div class="BackendCenter">
         <SalesManagement></SalesManagement>
         <MemberManagement></MemberManagement>
         <OrderManagement></OrderManagement>
         <ConsultantReview></ConsultantReview>
         <ConsultantManagement></ConsultantManagement>
         <Exit></Exit>
      </div>

      <!------------ 主要區塊 ------------>

      <!-- <div class="main">
         <account-setting></account-setting>
      </div>
     </div> -->

     <!-- <VFooter></VFooter> -->
     
   </div>
 </template>
 
 <script>
//  import VHeader from '@/components/VHeader.vue'
//  import VFooter from '@/components/VFooter.vue'

 
 
 export default {
   name: 'BackendCenter',
   components: {
      // VHeader,
      // VFooter,
      
   }
 }
 </script>


<style lang="scss">
@import '../../../tgd104-sass/new_style.scss';

</style>