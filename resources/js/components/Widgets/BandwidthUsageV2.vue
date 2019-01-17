<template>
	<div class="bandwidth-widget">
		<div class="mb-3 pl-4">
      <h2>{{$t("message.bandwidthUsage")}}</h2>
      <p class="fs-14 mb-0 fw-light">March 2018</p>
		</div>
		<line-chart-with-area
			:dataSet="bandwidthData"
			:dataLabels="labels"
			:lineTension="0.5"
			:height="105"
			:color="ChartConfig.color.info"
			:enableXAxesLine="false"
		></line-chart-with-area>
	</div>
</template>

<script>
import LineChartWithArea from "Components/Charts/LineChartWithArea";
import { ChartConfig } from "Constants/chart-config";

export default {
  data() {
    return {
      labels: [
        "1",
        "2",
        "3",
        "4",
        "5",
        "6",
        "7",
        "8",
        "9",
        "10",
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "20",
        "21",
        "22",
        "23",
        "24",
        "25",
        "26",
        "27",
        "28",
        "29",
        "30",
        "31",
        "32",
        "33",
        "34",
        "35",
        "36",
        "37",
        "38",
        "39",
        "40",
        "41",
        "42",
        "43",
        "44"
      ],
      bandwidthData: [
        40,
        10,
        30,
        40,
        60,
        70,
        60,
        40,
        80,
        25,
        44,
        59,
        20,
        52,
        40,
        80,
        45,
        68,
        40,
        38,
        85,
        64,
        25,
        45,
        65,
        95,
        40,
        10,
        30,
        40,
        60,
        70,
        60,
        40,
        80,
        25,
        14,
        18,
        22,
        65,
        85,
        75,
        95,
        40
      ],
      ChartConfig
    };
  },
  components: {
    LineChartWithArea
  }
};
</script>
