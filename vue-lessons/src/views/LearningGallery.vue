<template>
<VHeader></VHeader>
<Gallery></Gallery>
<h2 class="learning_more"><router-link to="/LearningChoose"><button class="btn btn_solid_secondary btn_blue">回上一頁</button></router-link></h2>
<MessageBoard></MessageBoard>
<VFooter></VFooter>
  </template>
    
    <script>
      import VHeader from "../components/VHeader.vue";
      import VFooter from "../components/VFooter.vue";
      import Gallery from "../components/Gallery.vue";
      import MessageBoard from "../components/MessageBoard.vue";
      
      export default {
          name: "LearningGallery",
          data() {
          return {};
          },
          components: {
          VFooter,
          VHeader,
          Gallery,
          MessageBoard
          },
      };
    </script>
    
    
    <style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";
    </style>