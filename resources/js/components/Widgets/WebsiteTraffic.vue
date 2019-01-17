<template>
   <div class="website-traffic-widget pos-relative">
		<div class="px-4">
			<h3 class="warning--text mb-0">4580+</h3>
			<p>Avg Daily Traffic</p>
		</div>
		<line-chart-with-area 
			:color="ChartConfig.color.warning" 
			:enableXAxesLine="false" 
			:height="140"
		></line-chart-with-area>
	</div>
</template>

<script>
import LineChartWithArea from "Components/Charts/LineChartWithArea";
import { ChartConfig } from "Constants/chart-config";

export default {
  components: {
    LineChartWithArea
  },
  data() {
    return {
      ChartConfig
    };
  }
};
</script>

