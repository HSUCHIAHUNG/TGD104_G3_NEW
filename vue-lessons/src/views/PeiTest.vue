<template>
  <div>
    <VHeaderTest></VHeaderTest>
    <UpLoadImg></UpLoadImg>
  </div>
</template>

<script>
import $ from "jquery";
import VHeaderTest from "@/components/VHeaderTest.vue";
import UpLoadImg from "@/components/UpLoadImg.vue";

export default {
  name: "PeiTest",
  data() {
    return {
      account: "",
    };
  },
  mounted() {},
  components: {
    $,
    VHeaderTest,
    UpLoadImg,
  },
  methods: {},
};
</script>

<style></style>
