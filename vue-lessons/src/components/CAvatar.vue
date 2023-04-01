<template>
  <div>
    <section class="top_box">
      <div class="avatar c-avatar">
        <a href=""><i class="fa-solid fa-camera camera"></i></a>
      </div>
      <p>{{ consultantName }}</p>
    </section>
  </div>
</template>

<script>
export default {
  name: "CAvatar",
  data() {
    return {
      consultantName: "裴大尼",
    };
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
