<!-- Doughnut Chart -->
<template>
    <ECharts :options="pie" style="width:100%; height:300px"></ECharts>
</template>

<script>
import ECharts from "vue-echarts/components/ECharts.vue";
import "echarts/lib/chart/pie";
import "echarts/lib/component/title";
import { ChartConfig } from "Constants/chart-config";

export default {
  components: {
    ECharts
  },
  data() {
    return {
      pie: {
        backgroundColor: "transparent",
        tooltip: {
          trigger: "item",
          formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        color: [
          ChartConfig.color.primary,
          ChartConfig.color.danger,
          ChartConfig.color.info,
          ChartConfig.color.success,
          ChartConfig.color.warning
        ],
        series: [
          {
            name: "Product Sales",
            type: "pie",
            radius: ["50%", "70%"],
            avoidLabelOverlap: false,
            data: [
              {
                value: 1548,
                name: "Product A"
              },
              {
                value: 310,
                name: "Product B"
              },
              {
                value: 234,
                name: "Product C"
              },
              {
                value: 135,
                name: "Product D"
              },
              {
                value: 335,
                name: "Product E"
              }
            ],
            label: {
              normal: {
                show: false,
                position: "center"
              },
              emphasis: {
                show: true,
                textStyle: {
                  fontSize: "30",
                  fontWeight: "bold"
                }
              }
            },
            labelLine: {
              normal: {
                show: false
              }
            }
          }
        ]
      }
    };
  }
};
</script>
