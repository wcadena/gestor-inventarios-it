<!--Trending News Widget -->
<template>
	<div class="trending-news-widegt d-custom-flex align-items-center">
		<div class="d-flex align-items-center trending-block">
			<h2 class="mb-0 white--text">Trending</h2>
			<i class="zmdi zmdi-flash ml-3 zmdi-hc-2x white--text"></i>
		</div>
		<slick :options="slickOptions">
			<div v-for="news in trendingNews" :key="news.id" class="slider-content-wrap">
				<div class="d-custom-flex align-items-center">
					<div class="month-wrap white--text mr-4 text-center">
						<span class="date d-block font-2x fw-bold">{{news.date}}</span>
						<span class="month fs-12 d-block">{{news.month}}</span>
					</div>
					<div class="slider-text-wrap">
						<h4 class="mb-0 white--text">{{news.title}}</h4>
						<p class="mb-0 fs-12 white--text">{{news.body}}</p>
					</div>
				</div>
			</div>
		</slick>
	</div>
</template>

<script>
	import Slick from "vue-slick";

	export default {
		data() {
			return {
				trendingNews: [
					{
						id: 1,
						date: "01",
						month: "July",
						title: "Telecom Commission approved new telecom policy.",
						body: "Dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat…"
					},
					{
						id: 2,
						date: "05",
						month: "July",
						title: "Telecom Commission ",
						body: "Dolor sit amet,consectetuer edipiscing elit"
					},
					{
						id: 3,
						date: "07",
						month: "July",
						title: "Approved new telecom policy.",
						body: "Sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat…"
					},
					{
						id: 4,
						date: "10",
						month: "July",
						title: "Telecom Commission approved new telecom policy.",
						body: "Dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat…"
					},
					{
						id: 5,
						date: "12",
						month:"July",
						title: "Telecom Commission ",
						body: "Dolor sit amet,consectetuer edipiscing elit"
					},
				]
			}
		},
		computed: {
			slickOptions() {
				return {
					dots: false,
					infinite: true,
					speed: 500,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					vertical: true,
					responsive: [
						{
							breakpoint: 600,
							settings: {
								arrows:false
							}
						}
					]
				};
			}
		},
		components: {
			Slick
		}
  	};
</script>
