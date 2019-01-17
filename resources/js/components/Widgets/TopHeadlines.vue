<template>
	<v-list v-if="headlinesData.length > 0" class="list-aqua-ripple">
		<v-list-tile v-for="(item,index) in headlinesData" :key="index" ripple @click="" class="news-content">
			<div class="mr-3 img-wrap">
				<img :src="item.imgUrl" width="80" height="80" class="img-responsive d-block">
			</div>
			<v-list-tile-content class="text-content">
				<v-badge class="white--text fs-12 mb-2" :class="item.badgeColor">{{item.category }}</v-badge>
				<h6 class="mb-2">{{ item.title }}</h6>
				<div class="d-custom-flex fs-12 fw-light grey--text">
					<span class="mx-1">{{ item.place }}</span>
					<span class="mx-1">{{ item.date }}</span>
				</div>
			</v-list-tile-content>
			<v-list-tile-action class="news-time fs-12 grey--text">
				{{ item.time}}
			</v-list-tile-action>
		</v-list-tile>
	</v-list>
</template>

<script>
	import api from "Api";
  export default {
    mounted() {
      this.getTopHeadlines();
    },
    methods: {
			getTopHeadlines() {
				api
					.get("vuely/topHeadlines.js")
					.then(response => {
						this.headlinesData = response.data;
					})
					.catch(error => {
						console.log(error);
					});
			}
		},
    data () {
      return {
        headlinesData: []
      };
    }
  }
</script>
