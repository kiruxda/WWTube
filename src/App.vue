<template>
  <component :is="currentTemplate">
      <router-view></router-view>
  </component>
</template>

<script>
import MainLayout from './layouts/MainLayout.vue';
import LoginLayout from './layouts/LoginLayout.vue';
import VideoLayout from './layouts/VideoLayout.vue';

export default {
  computed:{
   currentTemplate(){
      return this.$route.meta.template
   }
  },
  components : {
      MainLayout,
      LoginLayout,
      VideoLayout
  }
}
</script>