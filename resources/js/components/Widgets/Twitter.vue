<!-- Twitter Widget -->
<template>
	<div v-if="twitterFeeds.length > 0">
		<slick :options="slickOptions">
			<div v-for="twitter in twitterFeeds" :key="twitter.id" class="twitter-content">
				<div class="avatar-wrap d-custom-flex align-start justify-center">
               <div class="overlay-wrap">
						<img :src="twitter.avatar" class="img-responsive rounded-circle mx-auto" alt="reviwers" width="80" height="80">
						<div class="overlay-content">
							<v-badge class="d-custom-flex align-center justify-center rounded-circle primary">
								<i class="zmdi zmdi-twitter"></i>
							</v-badge>
						</div>
					</div>
				</div>
				<div class="text-center px-4">
					<p v-html="twitter.tweets"></p>
				</div>
			</div>
		</slick>
	</div>
</template>
<script>
	import Slick from "vue-slick";
	import api from "Api";
	export default {
		mounted() {
			this.getTwitterFeeds();
		},
		methods: {
			getTwitterFeeds() {
				api
					.get("vuely/twitterFeeds.js")
					.then(response => {
						this.twitterFeeds = response.data;
					})
					.catch(error => {
						console.log(error);
					});
			}
		},
		data() {
			return {
			  twitterFeeds: []
      };
		},
		computed: {
			slickOptions() {
				return {
					infinite: true,
					speed: 500,
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false
				};
			}
		},
		components: {
			Slick
		}
	};
</script>
