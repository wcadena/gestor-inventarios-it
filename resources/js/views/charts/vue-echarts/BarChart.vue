<!-- Bar Chart -->
<template>
    <ECharts :options="bar" style="width:100%; height:300px"></ECharts>
</template>

<script>
import ECharts from "vue-echarts/components/ECharts.vue";
import "echarts/lib/chart/bar";
import "echarts/lib/component/title";
import { ChartConfig } from "Constants/chart-config";

export default {
  name: "buyers-stats",
  components: {
    ECharts
  },
  data() {
    return {
      bar: {
        tooltip: {
          trigger: "axis"
        },
        color: [ChartConfig.color.danger],
        legend: {
          data: ["Series A"]
        },
        xAxis: {
          type: "category",
          boundaryGap: true,
          data: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"]
        },
        yAxis: {
          type: "value",
          axisLabel: {
            formatter: "{value} K"
          }
        },
        series: [
          {
            name: "Series A",
            type: "bar",
            data: [11, 11, 15, 13, 12, 13, 10]
          }
        ]
      }
    };
  }
};
</script>
