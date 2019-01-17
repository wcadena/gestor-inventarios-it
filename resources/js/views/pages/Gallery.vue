<template>
	<div>
		<page-title-bar></page-title-bar>
    <app-section-loader :status="loader"></app-section-loader>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
			<template v-for="item in gallery">
				<v-flex xs12 sm6 md4 lg3 :key="item.id">
					<figure class="img-wrapper">
					<img :src="item.imageUrl" class="img-responsive" alt="gallery image" />
					<figcaption>
						<h4>{{item.caption}}</h4>
						<h2>{{item.title}}</h2>
					</figcaption>
					<a href="javascript:void(0)"></a>
					</figure>
				</v-flex>
			</template>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
import api from "Api";

export default {
  data() {
    return {
      loader: true,
      gallery: null
    };
  },
  mounted() {
    this.getGallery();
  },
  methods: {
    getGallery() {
      api
        .get("galleryImages.js")
        .then(response => {
          this.loader = false;
          this.gallery = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>
