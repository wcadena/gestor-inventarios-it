<template>
    <div class="site-logo">
        <router-link to="/">
            <img :src="darkLogo" alt="site logo" width="100" height="30" v-if="sidebarSelectedFilter.class == 'sidebar-overlay-light'">
            <img :src="appLogo" alt="site logo" width="100" height="30" v-else>
        </router-link>
    </div>
</template>

<script>
import AppConfig from "Constants/AppConfig";
import { mapGetters } from "vuex";

export default {
   computed: {
      ...mapGetters(["sidebarSelectedFilter"])
   },
   data() {
      return {
          appLogo: AppConfig.appLogo,
          darkLogo: AppConfig.darkLogo
      }
   }
}
</script>
