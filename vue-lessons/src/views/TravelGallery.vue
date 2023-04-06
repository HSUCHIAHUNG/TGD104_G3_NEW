<template>

    <Gallery2></Gallery2>
    <MessageBoard></MessageBoard>
    <VFooter></VFooter>

</template>


<script>
import VFooter from "../components/VFooter.vue";
import Gallery2 from "../components/Gallery2.vue";
import MessageBoard from "../components/MessageBoard.vue";

export default {
  name: "TravelGallery",
  data() {
    return {
    };
  },

  components: {
    VFooter,
    Gallery2,
    MessageBoard,
  },

  

};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
