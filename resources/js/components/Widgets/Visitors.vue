<!-- News Vistors Widget -->
<template>
	<div>
		<div class="top-content">
			<span class="count-value d-block fw-semi-bold">
				<countTo :startVal='0' :endVal='12500' :duration='10000'></countTo>
			</span>
			<span class="icon-wrap">
				<i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2 success--text"></i>
				<span class="success--text fs-12">+24% </span>
			</span>
			<span class="grey--text fs-12">From Last Month</span>
		</div>
		<div class="visitors-chart">
			<stacked-bar-chart :height="200" :data1="data1" :data2="data2"></stacked-bar-chart>
		</div>
   </div>
</template>

<script>
import StackedBarChart from "Components/Charts/StackedBarChart";
import countTo from "vue-count-to";
// constants
import { ChartConfig } from "Constants/chart-config";

export default {
  props: ["label", "chartdata", "labels"],
  data() {
    return {
      ChartConfig,
      data1: [5,20,40,15,8,50,30,20,35,30,30,50],
      data2: [20,70,60,50,10,55,65,60,65,40,67,60]
    };
  },
  components: {
    StackedBarChart,
    countTo
  }
};
</script>
