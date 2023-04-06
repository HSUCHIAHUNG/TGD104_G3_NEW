<template>
  <VHeader />
  <div>
    <p>123</p>
  </div>
  <VueTypedJs :strings="strings">
    <h1 class="typing"></h1>
  </VueTypedJs>
</template>

<script>
import VueTypedJs from 'vue-typed-js';
import VHeader from '@/components/VHeader.vue';

export default {
  name: 'Test',
  components: {
    VueTypedJs,
    VHeader,
  },
  data() {
    return {
      strings: ['First text', 'Second Text'],
    };
  },
};
</script>

<style lang="scss">
/* Your styles here */
</style>