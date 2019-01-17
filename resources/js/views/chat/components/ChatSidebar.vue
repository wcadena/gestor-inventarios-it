<template>
   <v-card class="chat-content">
      <v-toolbar color="primary" dark>
         <v-toolbar-title>Chat</v-toolbar-title>
         <v-spacer></v-spacer>
         <v-btn icon>
            <v-icon>search</v-icon>
         </v-btn>
      </v-toolbar>
      <v-list>
         <vue-perfect-scrollbar class="chat-sidebar-scroll" :style="getScrollHeight()" :settings="settings">
            <template v-for="(item, index) in users">
					<v-list-tile 
						avatar
						:key="index" 
						@click="openChat(item)" 
						:class="{'grayish-blue': item.selected }"
					>
						<v-list-tile-avatar>
							<img :src="item.avatar">
						</v-list-tile-avatar>
						<v-list-tile-content>
							<h6 class="mb-1" v-html="item.name"></h6>
							<span class="fs-12 grey--text" v-if="item.chats.length > 0" v-html="item.chats[item.chats.length - 1].body"></span>
						</v-list-tile-content>
					</v-list-tile>
            </template>
         </vue-perfect-scrollbar>
      </v-list>
   </v-card>
</template>

<script>
import { mapGetters } from "vuex";
import { getCurrentAppLayout } from "Helpers/helpers";

export default {
  computed: {
    ...mapGetters(["users", "selectedUser"])
  },
  data() {
    return {
      settings: {
        maxScrollbarLength: 160
      }
    };
  },
  methods: {
    openChat(user) {
      this.$store.dispatch("openChat", user);
    },
    getScrollHeight() {
      let layout = getCurrentAppLayout(this.$router);
      switch (layout) {
        case "default":
          return "height: calc(100vh - 130px)";
        case "horizontal":
          return "height: calc(100vh - 180px)";
        case "boxed":
          return "height: calc(100vh - 305px)";
        case "boxed-v2":
          return "height: calc(100vh - 305px)";
        default:
          return "height: calc(100vh - 130px)";
      }
    }
  }
};
</script>
