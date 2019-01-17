<!-- Header Structure -->
<template>
	<div>
		<v-navigation-drawer
			v-if="!horizontal"
			app
			fixed
			v-model="drawer"
			:mini-variant.sync="collapseSidebar"
			mini-variant-width="70"
			:width="250"
			class="Vuely-sidebar"
			:style="{backgroundImage: 'url(' + selectedSidebarBgImage.url + ')'}"
			:class="{'background-none': !backgroundImage}"
			:right="rtlLayout"
		>
			<!-- App Sidebar -->
			<app-sidebar></app-sidebar>
		</v-navigation-drawer>
		<v-toolbar 
			class="Vuely-toolbar"
			app
			:color="activeHeaderFilter.class"
			fixed
		>	
			<div class="d-custom-flex align-items-center navbar-left">
				<div v-if="!horizontal">
					<v-toolbar-side-icon icon large @click.stop="drawer = !drawer" class="v-step-0"></v-toolbar-side-icon>
				</div>
				<div class="site-logo-wrap d-custom-flex ml-0 align-items-center" v-else>
					<router-link to="/horizontal/dashboard/ecommerce" class="grayish-blue site-logo-img">
						<img src="/static/img/site-logo.png" alt="site logo" width="100" height="30">
					</router-link>
				</div>
				<quick-links></quick-links>
				<v-text-field flat solo prepend-icon="search" :placeholder="$t('message.search')" class="search-bar"></v-text-field>
				<div class="mobile-search d-none">
					<v-btn flat icon  small class="mobile-search-btn" @click="toggleSearchForm">
						<v-icon class="font-md">search</v-icon>
					</v-btn>
				</div>
			</div>
			<div class="navbar-right">
				<v-btn class="v-step-2 upgrade-btn" color="primary" tag="link" :to="getMenuLink('/pages/pricing-1')">{{ $t('message.plans') }}</v-btn>
				<v-btn icon large @click="toggleFullScreen" class="full-screen ma-0">
					<v-icon color="grey">fullscreen</v-icon>
				</v-btn>
				<v-btn class="ma-0" icon large @click.stop="chatSidebar = !chatSidebar">
					<v-icon color="grey">forum</v-icon>
				</v-btn>
				<notifications></notifications>
				<cart :horizontal="horizontal"></cart>
				<language-provider></language-provider>
				<user></user>
			</div>
		</v-toolbar>
		<!-- Chat Searchbar -->
		<v-navigation-drawer fixed v-model="chatSidebar" :right="!rtlLayout" temporary app class="chat-sidebar-wrap">
			<chat-sidebar></chat-sidebar>
		</v-navigation-drawer>
		<mobile-search-form></mobile-search-form>
	</div>
</template>

<script>
import Sidebar from "../Sidebar/Sidebar.vue";
import ChatSidebar from "../ChatSidebar/ChatSidebar.vue";
import screenfull from "screenfull";
import LanguageProvider from "./LanguageProvider";
import Notifications from "./Notifications";
import User from "./User";
import Cart from "./Cart";
import QuickLinks from "./QuickLinks";
import MobileSearchForm from "./MobileSearchForm";
import { getCurrentAppLayout } from "Helpers/helpers";
import { mapGetters } from "vuex";

export default {
	props: {
		horizontal: {
			default: false,
			type: Boolean
		}
	},
	data() {
		return {
			collapsed: false, // collapse sidebar
			drawer: null, // sidebar drawer default true
			chatSidebar: false, // chat component right sidebar
			sidebarImages: "", // sidebar background images
			enableDefaultSidebar: false
		};
	},
	computed: {
		...mapGetters([
			"rtlLayout",
			"backgroundImage",
			"backgroundImage",
			"selectedSidebarBgImage",
			"darkMode",
			"collapseSidebar",
			"activeHeaderFilter"
		])
	},
	methods: {
		// toggle full screen method
		toggleFullScreen() {
			if (screenfull.enabled) {
			screenfull.toggle();
			}
		},
		getMenuLink(link) {
			return "/" + getCurrentAppLayout(this.$router) + link;
		},
			toggleSearchForm() {
			this.$store.dispatch('toggleSearchForm');
		}
	},
	components: {
		appSidebar: Sidebar,
		ChatSidebar,
		LanguageProvider,
		Notifications,
		Cart,
		QuickLinks,
		MobileSearchForm,
		User
	}
};
</script>
