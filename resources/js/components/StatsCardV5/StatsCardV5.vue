<template>
   <app-card customClasses="magazine-stats-card">
		<div class="d-custom-flex align-items-center justify-space-between">
			<div class="stats-card-title">
				<span class="fs-12">{{title}}</span>
				<h5 class="mb-0" :class="extraClass">{{value}}</h5>
			</div>
			<div class="stats-card-chart">
				<line-chartv2 
					:height="60" 
					:data="data" 
					:labels="labels"
					:color="color"
					:enableShadow="true"
				></line-chartv2>
			</div>
		</div>
	</app-card>
</template>

<script>
import LineChartv2 from "Components/Charts/LineChartV2";

export default {
  props: ["title", "value", "data", "color", "labels", "extraClass"],
  components: {
    LineChartv2
  }
};
</script>

