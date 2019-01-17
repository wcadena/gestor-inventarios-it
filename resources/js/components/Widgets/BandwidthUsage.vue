<template>
	<div class="widget">
		<v-card-text>
			<div class="layout justify-space-between pa-3 mb-2">
				<div class="align-item-start">
					<h3 class="fw-bold">{{$t("message.bandwidthUsage")}}</h3>
					<p class="fs-14 mb-0">March 2018</p>
				</div>
				<div class="align-item-end">
					<h3 class="fw-bold">50 GB</h3>
				</div>
			</div>
			<line-chart-shadow
				:dataSet="bandwidthData"
				:lineTension="0.1"
				:dataLabels="labels"
				:width="370"
				:height="100"
				:enableGradient='false'>
			</line-chart-shadow>
		</v-card-text>
	</div>
</template>

<script>
import LineChartShadow from "Components/Charts/LineChartShadow";

export default {
  data() {
    return {
      labels: ["A", "B", "C", "D", "E", "F", "J", "K", "L", "M", "N", "P"],
      bandwidthData: [30, 50, 20, 80, 60, 70, 60, 150, 110, 130, 115, 180]
    };
  },
  components: {
    LineChartShadow
  }
};
</script>
