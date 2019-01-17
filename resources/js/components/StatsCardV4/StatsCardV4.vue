<template>
   <app-card>
		<div class="d-custom-flex justify-space-between align-items-center pa-2">
			<div class="w-50">
				<p class="mb-2">{{title}}</p>
				<h4 class="mb-2">{{value}} <i :class="[{'ti-arrow-up success--text ml-2': status ===1, 'ti-arrow-down warning--text ml-2': status ===0 }]"></i></h4>
				<p class="fs-12 grey--text mb-0">{{body}}</p>
			</div>
			<div class="w-50">
				<line-chartv2 
					:height="60" 
					:data="data" 
					:labels="labels"
					:color="color"
				></line-chartv2>
			</div>
		</div>
	</app-card>
</template>

<script>
import LineChartv2 from "Components/Charts/LineChartV2";

export default {
  props: ["title", "value", "body", "status", "data", "color", "labels"],
  components: {
    LineChartv2
  }
};
</script>

