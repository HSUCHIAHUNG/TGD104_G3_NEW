<template>
<VHeader></VHeader>
<Gallery></Gallery>
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