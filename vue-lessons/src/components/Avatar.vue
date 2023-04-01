<template>
  <div>
    <section class="top_box">
      <div class="avatar">
        <a href=""><i class="fa-solid fa-camera camera"></i></a>
      </div>
      <p>{{ memberName }}</p>
    </section>
  </div>
</template>

<script>
export default {
  name: "Avatar",
  data() {
    return {
      memberName: "倪小裴",
    };
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
