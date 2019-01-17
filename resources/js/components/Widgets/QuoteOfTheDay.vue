<!-- Quote Of The Day Widget -->
<template>
	<div class="pa-4 quote-wrapper">
		<app-section-loader :status="loaderStatus"></app-section-loader>
		<h5 class="mb-4 text-center">Quote of the day</h5>
		<slick :options="slickOptions" v-if="!loaderStatus">
			<div v-for="quotes in quotesOfTheDay" :key="quotes.id">
				<div class="text-center px-4 py-3">
					<div class="avatar-wrap mb-5 pos-relative d-inline-block">
						<img :src="quotes.avatar" class="img-responsive rounded-circle mx-auto" alt="reviwers" width="80" height="80">
						<span class="quote-icon primary--text">
	              		<i class="zmdi font-3x zmdi-quote zmdi-hc-rotate-180"></i>
	            	</span>
					</div>
					<div class="quote-content">
						<h6 class="mb-4">{{quotes.author}}</h6>
						<p>{{quotes.body}}</p>
					</div>
				</div>
			</div>
		</slick>
	</div>
</template>

<script>
	import Slick from "vue-slick";
	import api from "Api";
	
	export default {
		data() {
			return {
				loaderStatus: false,
				quotesOfTheDay: null
			};
		},
		mounted() {
			this.getQuotesOfTheDay();
		},
		computed: {
			slickOptions() {
				return {
					dots: true,
					infinite: true,
					speed: 500,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					arrows: false,
					rtl: this.$store.getters.rtlLayout
				};
			}
		},
		methods: {
			getQuotesOfTheDay() {
				this.loaderStatus = true;
				api
					.get("vuely/quotesOfTheDay.js")
					.then(response => {
						this.loaderStatus = false;
						this.quotesOfTheDay = response.data;
					})
					.catch(error => {
						console.log(error);
					});
			}
		},
		components: {
			Slick
		}
	};
</script>