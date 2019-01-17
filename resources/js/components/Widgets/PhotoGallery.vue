<template>
	<v-layout row wrap>
		<template v-for="photo in photos">
			<v-flex xl3 lg3 md3 sm6 xs12 :key="photo.id">
				<div class="grid-item pos-relative">
					<img :src="photo.src" alt="gallery-img" width="440" height="200" class="img-responsive">
					<div class="overlay-content primary">
						<div class="content-info">
							<h6 class="mb-0 white--text">{{photo.caption}}</h6>
							<span class="fs-12 white--text">From {{photo.author}},{{photo.likes}} Likes</span>
						</div>
					</div>
				</div>
			</v-flex>
		</template>
	</v-layout>
</template>

<script>
	export default {
		data() {
			return {
				photos: [{
						id: 1,
						src: "/static/img/blog-1.jpg",
						caption: "Caption 1",
						author: "Admin",
						likes: "250"
					},
					{
						id: 2,
						src: "/static/img/blog-2.jpg",
						caption: "Caption 2",
						author: "Erik Turner",
						likes: "150"
					},
					{
						id: 3,
						src: "/static/img/blog-3.jpg",
						caption: "Caption 3",
						author: "John Smith",
						likes: "200"
					},
					{
						id: 4,
						src: "/static/img/blog-4.jpg",
						caption: "Caption 4",
						author: "Antonio Rice",
						likes: "300"
					},
					{
						id: 5,
						src: "/static/img/blog-5.jpg",
						caption: "Caption 5",
						author: "Caleb Wilson",
						likes: "400"
					},
					{
						id: 6,
						src: "/static/img/blog-6.jpg",
						caption: "Caption 6",
						author: "Zachary Robbins",
						likes: "50"
					},
					{
						id: 7,
						src: "/static/img/blog-7.jpg",
						caption: "Caption 7",
						author: "Jon Wagner",
						likes: "100"
					},
					{
						id: 8,
						src: "/static/img/blog-8.jpg",
						caption: "Caption 8",
						author: "Dorothy Bass",
						likes: "75"
					}
				]
			};
		}
	};
</script>
