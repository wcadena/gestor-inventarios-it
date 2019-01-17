<template>
	<v-menu offset-y origin="left top"  transition="slide-y-transition" content-class="quciklink-dropdown" right nudge-top="-10" class="v-step-1 quick-link">
		<v-btn icon large slot="activator" class="my-0">
			<i class="zmdi grey--text zmdi-hc-fw font-lg zmdi-apps"></i>
		</v-btn>
		<div class="dropdown-content">
			<div class="dropdown-top d-custom-flex justify-space-between primary">
				<span class="white--text fw-bold">Quick Links</span>
				<span class="v-badge warning">1 NEW</span>
			</div>
			<v-list class="dropdown-list">
				<v-list-tile v-for="link in links" :key="link.title" :to="getMenuLink(link.to)">
					<i class="mr-3" :class="link.icon"></i>
					<span>{{ $t(link.title) }}</span>
				</v-list-tile>
			</v-list>
		</div>
	</v-menu>
</template>

<script>
import { getCurrentAppLayout } from "Helpers/helpers";
	export default {
		data(){
			return {
				links: [
					{
						title: "message.gallery",
						to: "/pages/gallery",
						icon: "ti-gallery primary--text"
					},
					{
						title: "message.tables",
						to: "/tables/searchwithtext",
						icon: "ti-layout error--text"
					},
					{
						title: "message.inbox",
						to: "/inbox",
						icon: "ti-email success--text"
					},
					{
						title: "message.calendar",
						to: "/calendar",
						icon: "ti-calendar info--text"
					},
					{
						title: "message.chat",
						to: "/chat",
						icon: "ti-comments error--text"
					},
					{
						title: "message.userProfile",
						to: "/users/user-profile",
						icon: "ti-user warning--text"
					}
				]
			}
		},
		methods: {
			getMenuLink(link) {
				return '/' + getCurrentAppLayout(this.$router) + link;
			}
		}
	};
</script>