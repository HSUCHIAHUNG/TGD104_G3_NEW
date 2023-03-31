<template>
<Gallery></Gallery>
<MessageBoard></MessageBoard>
<VFooter></VFooter>
  </template>
    
    <script>
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
          Gallery,
          MessageBoard
          },
      };
    </script>
    
    
    <style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";
    </style>