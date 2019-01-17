<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<v-flex xs12 class="col-height-auto">
					<app-card
						customClasses="mb-4"
						:heading="$t('message.default')"
					>
						<v-carousel>
							<v-carousel-item v-for="(item,i) in items" v-bind:src="item.src" :key="i"></v-carousel-item>
						</v-carousel>
					</app-card>
					<app-card
						customClasses="mb-4"
						:heading="$t('message.customTransition')"
					>
						<v-carousel>
							<v-carousel-item v-for="(item,i) in items" v-bind:key="i" v-bind:src="item.src" transition="fade" reverseTransition="fade"></v-carousel-item>
						</v-carousel>
					</app-card>
					<app-card
						customClasses="mb-4"
						:heading="$t('message.customDelimiter')"
					>
						<v-carousel delimiter-icon="stop">
							<v-carousel-item v-for="(item,i) in items" v-bind:src="item.src" :key="i"></v-carousel-item>
						</v-carousel>
					</app-card>
					<app-card
						customClasses="mb-4"
						:heading="$t('message.hideControls')"
					>
						<v-carousel hide-controls>
							<v-carousel-item v-for="(item,i) in items" v-bind:src="item.src" :key="i"></v-carousel-item>
						</v-carousel>
					</app-card>
					<app-card
						:heading="$t('message.hideDelimiters')"
					>
						<v-carousel hide-delimiters>
							<v-carousel-item v-for="(item,i) in items" v-bind:src="item.src" :key="i"></v-carousel-item>
						</v-carousel>
					</app-card>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          src: "/static/img/carousel-slider-1.jpg"
        },
        {
          src: "/static/img/carousel-slider-2.jpg"
        },
        {
          src: "/static/img/carousel-slider-3.jpg"
        }
      ]
    };
  }
};
</script>
