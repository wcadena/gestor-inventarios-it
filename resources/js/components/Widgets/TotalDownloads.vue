<template>
	<div class="widget">
		<v-card-text>
			<div class="layout justify-space-between pa-3 mb-2">
				<div class="align-item-start">
					<h3 class="fw-bold">{{$t("message.totalDownloads")}}</h3>
					<p class="fs-14 mb-0">March 2018</p>
				</div>
				<div class="align-item-end">
					<h3 class="fw-bold">3578</h3>
				</div>
			</div>
			<line-chart-shadow
				:dataSet="totalDownloads"
				:lineTension="0.3"
				:dataLabels="labels"
				:width="370"
				:height="100"
				:enableGradient='false'>
			</line-chart-shadow>
		</v-card-text>
	</div>
</template>

<script>
import LineChartShadow from "../Charts/LineChartShadow";

export default {
  components: {
    LineChartShadow
  },
  data() {
    return {
      totalDownloads: [10, 60, 40, 25, 60, 70, 60, 45, 25, 20, 25, 60],
      labels: ["A", "B", "C", "D", "E", "F", "J", "K", "L", "M", "N", "P"]
    };
  }
};
</script>
