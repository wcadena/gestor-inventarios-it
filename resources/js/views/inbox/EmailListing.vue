<template>
	<div class="inbox-listing">
		<vue-perfect-scrollbar class="inbox-content-scroll" :style="getScrollHeight()">
			<v-flex class="d-custom-flex align-items-center justify-center h-100" v-if="loadingEmails">
				<v-progress-circular indeterminate color="primary"></v-progress-circular>
			</v-flex>
			<template v-else>
				<v-list class="list-aqua-ripple" v-if="emails && emails.length > 0">
					<v-list-tile v-for="(item, key) in emails" :key="key" @click="onViewEmail(item)" ripple>
						<v-list-tile-content>
							<v-checkbox color="primary" :input-value="item.value" @click.stop="onSelectEmail(item)"></v-checkbox>
							<v-btn icon @click.stop="markAsStarEmail(item)">
								<i class="zmdi zmdi-star font-lg" :class="{'warning--text': item.starred, 'grey--text': !item.starred}"></i>
							</v-btn>
							<div class="media">
								<v-list-tile-avatar class="media-left">
									<img :src="item.avatarSrc" alt="avatar" height="40" width="40" class="img-responsive" />
								</v-list-tile-avatar>
								<div class="media-body d-custom-flex align-items-center">
									<div class="d-inline-block">
										<h6 class="mb-1">{{ item.userName }}</h6>
										<span class="fs-12 d-inline-block">{{item.subject}}</span>
									</div>
									<p class="fs-12 grey--text w-75 d-inline-block mb-0 mx-4">{{item.body}}</p>
								</div>
							</div>
						</v-list-tile-content>
						<v-list-tile-action>
							<span class="fs-12 grey--text">{{item.time}} hour ago </span>
						</v-list-tile-action>
					</v-list-tile>
				</v-list>
				<div class="" v-else>
					<h3>No Emails Found In Selected Folder</h3>
				</div>
			</template>
		</vue-perfect-scrollbar>
	</div>
</template>

<script>
import { mapGetters } from "vuex";
import { getCurrentAppLayout } from "Helpers/helpers";

export default {
  computed: {
    ...mapGetters(["emails", "loadingEmails"])
  },
  mounted() {
    this.$store.dispatch("getEmails");
  },
  methods: {
    onSelectEmail(email) {
      this.$store.dispatch("onSelectEmail", email);
    },
    markAsStarEmail(email) {
      this.$store.dispatch("markAsStarEmail", email);
    },
    onViewEmail(email) {
      this.$store.dispatch("onViewEmail", email);
    },
    getScrollHeight() {
      let layout = getCurrentAppLayout(this.$router);
      switch (layout) {
			case "default":
				return "height:calc(100vh - 220px)";
			case "mini":
				return "height:calc(100vh - 220px)";
			case "horizontal":
				return "height:calc(100vh - 268px)";
			case "boxed":
				return "height:calc(100vh - 390px)";
			case "boxed-v2":
				return "height:calc(100vh - 390px)";
			default:
				return "height:calc(100vh - 220px)";
			}
		}
	},
  data() {
    return {
      notifications: false
    };
  }
};
</script>
