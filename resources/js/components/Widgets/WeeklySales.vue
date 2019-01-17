<template>
	<div class="widget">
		<v-card-text class="pa-0">
			<line-chart-with-area
				:dataSet="weeklySales"
				:lineTension="0.5"
				:dataLabels="labels"
				:width="370"
				:height="80"
        :enableXAxesLine="enableXAxesLine"
        :color="ChartConfig.color.primary">
			</line-chart-with-area>
		</v-card-text>
	</div>
</template>

<script>
import LineChartWithArea from "../Charts/LineChartWithArea";
import { ChartConfig } from "Constants/chart-config";

export default {
  components: {
    LineChartWithArea
  },
  props: ["enableXAxesLine"],
  data() {
    return {
      ChartConfig,
      weeklySales: [10, 25, 55, 40, 45, 50, 75, 70, 72, 60, 25],
      labels: ["A", "B", "C", "D", "E", "F", "J", "K", "L", "M", "N"]
    };
  }
};
</script>
