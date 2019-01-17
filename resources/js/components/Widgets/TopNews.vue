<!-- Top News Widget-->
<template>
	<div class="top-selling-widget" v-if="newsData.length > 0">
		<slick :options="slickOptions" id="slick1" class="main-slider-wrap">
			<div v-for="news in newsData" :key="news.id" class="main-slider-item overlay-wrap">
				<img :src="news.newsSrc" width="100" height="100" class="img-responsive d-block">
				<div class="overlay-content d-custom-flex justify-end align-end rounded-top">
					<div class="overlay-holder pa-3 mb-5 w-50">
						<h4 class="mb-2 white--text">{{news.newsTitle}}</h4>
						<div class="meta-info d-custom-flex align-center fs-12 white--text">
							<span class="mx-2">
								<i class="zmdi zmdi-thumb-up mr-2"></i>
								<span>{{news.likes}}</span>
							</span>
							<span class="mx-2">
								<i class="zmdi zmdi-eye mr-2"></i>
								<span>{{news.views}}</span>
							</span>
							<span class="mx-2">
								<i class="zmdi zmdi-comment-text mr-2"></i>
								<span>{{news.comments}}</span>
							</span>
						</div>
						<p class="mb-0 mt-2 fs-12 white--text">{{textTruncate(news.newsContent,100)}}</p>
					</div>
				</div>
			</div>
		</slick>
		<slick id="slick2" :options="slickOptions2" class="slider-btn-wrap py-2">
			<div v-for="news in newsData" :key="news.id">
				<img :src="news.newsSrc" width="150" height="50" class="img-responsive d-block mx-auto">
			</div>
		</slick>
	</div>
</template>

<script>
import Slick from "vue-slick";
import api from "Api";
import { textTruncate } from "Helpers/helpers";

export default {
  components: {
    Slick
  },
	computed: {
		slickOptions() {
			return {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				fade: true,
				adaptiveHeight: true,
				asNavFor: "#slick2"
			}
		},
		slickOptions2() {
			return {
				slidesToShow: 4,
				slidesToScroll: 1,
				dots: false,
				autoplay: true,
				speed: 2000,
				infinite: true,
				focusOnSelect: true,
				asNavFor: "#slick1",
				arrows: true,
				adaptiveHeight: true,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
						}
					},
					{
						breakpoint: 959,
						settings: {
								slidesToShow: 4,
								slidesToScroll: 1,
						}
					}
				]}
			}
		},
		mounted() {
			this.getTopNews();
		},
		methods: {
			getTopNews() {
				api
					.get("vuely/topNews.js")
					.then(response => {
						this.newsData = response.data;
						})
					.catch(error => {
						console.log(error);
					});
			},
			textTruncate(text,limit) {
			return textTruncate(text,limit);
		}
	},
   data() {
      return {
        newsData: []
      }
   }
}
</script>
