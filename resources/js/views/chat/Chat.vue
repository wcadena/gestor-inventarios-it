<template>
	<v-container fluid py-0 px-0>
		<template v-if="!loadingChatModule">
			<v-navigation-drawer
				temporary
				absolute
				v-model="chatSidebar"
				:width="250"
			>
				<chat-sidebar></chat-sidebar>
			</v-navigation-drawer>
			<v-layout row wrap class="chat-layout">
				<v-flex xl2 lg3 md3 sm0 xs0 class="chat-sidebar">
					<chat-sidebar></chat-sidebar>
				</v-flex>
				<v-flex xl10 lg9 md9 sm12 xs12 class="chat-main">
					<chat-area></chat-area>
				</v-flex>
			</v-layout>
		</template>
		<template v-else>
			<div class="app-flex justify-center align-center h-vh-100">
				<chat-module-loader></chat-module-loader>
			</div>
		</template>
	</v-container>
</template>

<script>
import { mapGetters } from "vuex";
import ChatArea from "./components/ChatArea";
import ChatSidebar from "./components/ChatSidebar";
import ChatModuleLoader from "./components/ChatModuleLoader";

export default {
  beforeMount() {
    this.$store.dispatch("getUsers");
  },
  mounted() {
    document.querySelector("html").style.overflow = "hidden";
    const defaultLayout = document.querySelector(
      ".app-default-layout .v-content__wrap"
    );
    const miniLayout = document.querySelector(
      ".app-mini-layout .v-content__wrap"
    );
    const boxLayout = document.querySelector(".app-boxed-layout .app-content");
    if (defaultLayout) {
      defaultLayout.style.overflow = "hidden";
    } else if (miniLayout) {
      miniLayout.style.overflow = "hidden";
    } else if (boxLayout) {
      boxLayout.style.overflow = "hidden";
    } else {
      document.querySelector(
        ".app-horizontal-layout .v-content__wrap"
      ).style.overflow =
        "hidden";
    }
  },
  destroyed() {
    document.querySelector("html").style.overflow = "hidden";
    const defaultLayout = document.querySelector(
      ".app-default-layout .v-content__wrap"
    );
    const miniLayout = document.querySelector(
      ".app-mini-layout .v-content__wrap"
    );
    const boxLayout = document.querySelector(".app-boxed-layout .app-content");
    const horizontallayout = document.querySelector(
      ".app-horizontal-layout .v-content__wrap"
    );
    if (defaultLayout) {
      defaultLayout.style.overflow = "auto";
    }
    if (miniLayout) {
      miniLayout.style.overflow = "auto";
    }
    if (boxLayout) {
      boxLayout.style.overflow = "auto";
    }
    if (horizontallayout) {
      horizontallayout.style.overflow = "auto";
    }
  },
  components: {
    ChatArea,
    ChatSidebar,
    ChatModuleLoader
  },
  computed: {
    ...mapGetters(["loadingChatModule", "selectedUser"]),
    chatSidebar: {
      get() {
        return this.$store.getters.chatSidebar;
      },
      set(val) {
        this.$store.dispatch("toggleChatSidebar", val);
      }
    }
  }
};
</script>