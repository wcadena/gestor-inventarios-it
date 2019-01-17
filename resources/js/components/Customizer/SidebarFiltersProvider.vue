<template>
  	<div class="sidebar-filter" v-if="isDefaultLayout()">
  	<h5 class="text-xs-center mb-3">{{$t('message.sidebarFilters')}}</h5>
      <v-list>
        <v-list-tile  :class="{'active-theme': sidebarFilter === sidebarSelectedFilter}" @click="emitSidebarFilters(sidebarFilter)" v-for="sidebarFilter in sidebarFilters" :key="sidebarFilter.id">
            <span :class="sidebarFilter.class"></span>
        </v-list-tile>
      </v-list>
  	</div>
</template>

<script>
import { getCurrentAppLayout } from "Helpers/helpers";
import { mapGetters } from "vuex";

export default {
   computed: {
      ...mapGetters(['sidebarFilters', 'sidebarSelectedFilter'])
   },
   methods: {
      // color filter handler
    emitSidebarFilters(value) {
      this.$store.dispatch("changeSidebarFilter", value);
    },
      // function which return app current layout
    isDefaultLayout() {
      const layout  = getCurrentAppLayout(this.$router);
      if (layout === "boxed" || layout === "horizontal" || layout === "boxed-v2") {
        return false;
      } else {
        return true;
      }
    }
   }   
}
</script>
