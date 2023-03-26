<template>
   <div>
     <!-- <VHeader></VHeader> -->
     <div class="member_row container">
      <!-------------側邊navbar---------------->
      <div class="aside_bar">
         <Avatar></Avatar>
         <SideNav></SideNav>
      </div>
      <!------------ 主要區塊 ------------>
      <div class="main">
         <account-setting></account-setting>
      </div>
     </div>
     <!-- <VFooter></VFooter> -->
     
   </div>
 </template>
 
 <script>
//  import VHeader from '@/components/VHeader.vue'
//  import VFooter from '@/components/VFooter.vue'
 import Avatar from '@/components/Avatar.vue'
 import SideNav from '@/components/SideNav.vue'
import AccountSetting from '../components/AccountSetting.vue'
 
 
 export default {
   name: 'MemberCenter',
   components: {
      // VHeader,
      // VFooter,
      Avatar,
      SideNav,
      AccountSetting
   }
 }
 </script>


<style lang="scss">
@import '../../../tgd104-sass/new_style.scss';

</style>