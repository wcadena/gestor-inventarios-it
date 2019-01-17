<template>
	<div>
		<div class="primary pos-relative white--text pt-4">
			<h5 class="mb-0 text-center">{{$t('message.topAuthors')}}</h5>
		</div>
		<slick :options="slickOptions" v-if="authors">
			<div v-for="author in authors" :key="author.id" class="author-detail-wrap">
				<div class="author-avatar primary pos-relative mb-5">
					<div class="avatar-img">
						<img :src="author.avatar" width="87" height="87" class="img-responsive mx-auto rounded-circle">
					</div>
				</div>
				<div class="pa-3 authors-info">
					<h5>{{author.name}}</h5>
					<ul class="list-unstyled author-contact-info mb-2">
						<li>
							<span class="mr-3"><i class="zmdi zmdi-phone-msg"></i></span>
							<a href="tel:123456" class="fs-12 grey--text">{{author.profileInfo.phone}}</a>
						</li>
						<li>
							<span class="mr-3"><i class="zmdi zmdi-email"></i></span>
							<a href="mailto:joan_parisian@gmail.com" class="fs-12 grey--text">{{author.profileInfo.email}}</a>
						</li>
						<li>
							<span class="mr-3"><i class="zmdi zmdi-pin"></i></span>
							<span class="fs-12 grey--text">{{author.profileInfo.address}}</span>
						</li>
					</ul>
					<ul class="d-custom-flex social-info list-unstyled">
						<li><a class="facebook" :href="author.socialLinks.facebookUrl"><i class="zmdi zmdi-facebook-box"></i></a></li>
						<li><a class="twitter" :href="author.socialLinks.twitterUrl"><i class="zmdi zmdi-twitter-box"></i></a></li>
						<li><a class="linkedin" :href="author.socialLinks.linkedinUrl"><i class="zmdi zmdi-linkedin-box"></i></a></li>
						<li><a class="instagram" :href="author.socialLinks.instagramUrl"><i class="zmdi zmdi-instagram"></i></a></li>
					</ul>
				</div>
				<ul class="d-custom-flex list-unstyled footer-content text-center w-100 border-top-1">
					<li>
						<h5 class="mb-0">{{author.metaDetails.articles}}</h5>
						<span class="fs-12 grey--text">Articles</span>
					</li>
					<li>
						<h5 class="mb-0">{{author.metaDetails.followers}}</h5>
						<span class="fs-12 grey--text">Followers</span>
					</li>
					<li>
						<h5 class="mb-0">{{author.metaDetails.likes}}</h5>
						<span class="fs-12 grey--text">Likes</span>
					</li>
				</ul>
			</div>
		</slick>
	</div>
</template>

<script>
	import Slick from "vue-slick";
	import api from "Api";
	
	export default {
		components: {
			Slick
		},
		computed: {
			slickOptions() {
				return {
					infinite: true,
					speed: 500,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					arrows: true,
					dots: false
				};
			}
		},
		mounted() {
			this.getAuthors();
		},
		methods: {
			getAuthors() {
				api
					.get("vuely/topAuthors.js")
					.then(response => {
						this.authors = response.data;
					})
					.catch(error => {
						console.log(error);
					});
			}
		},
		data() {
			return {
				authors: null
			};
		}
	};
</script>
