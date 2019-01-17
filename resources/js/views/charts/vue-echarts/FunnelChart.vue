<!-- Funnel Chart -->
<template>
    <ECharts :options="funnel" style="width:100%; height:300px"></ECharts>
</template>

<script>
import ECharts from "vue-echarts/components/ECharts.vue";
import "echarts/lib/chart/funnel";
import "echarts/lib/component/title";
import { ChartConfig } from "Constants/chart-config";

export default {
  components: {
    ECharts
  },
  data() {
    return {
      funnel: {
        tooltip: {
          trigger: "item"
        },
        legend: {
          data: [
            "Product A",
            "Product B",
            "Product C",
            "Product D",
            "Product E"
          ]
        },
        calculable: true,
        color: [
          ChartConfig.color.primary,
          ChartConfig.color.danger,
          ChartConfig.color.success,
          ChartConfig.color.info,
          ChartConfig.color.warning
        ],
        series: [
          {
            name: "Sales",
            type: "funnel",
            left: "10%",
            top: 60,
            // x2: 80,
            bottom: 60,
            width: "80%",
            // height: {totalHeight} - y - y2
            min: 0,
            max: 100,
            minSize: "0%",
            maxSize: "100%",
            sort: "descending",
            gap: 2,
            label: {
              normal: {
                show: true,
                position: "inside"
              },
              emphasis: {
                textStyle: {
                  fontSize: 20
                }
              }
            },
            labelLine: {
              normal: {
                length: 10,
                lineStyle: {
                  width: 1,
                  type: "solid"
                }
              }
            },
            itemStyle: {
              normal: {
                borderColor: "#fff",
                borderWidth: 1
              }
            },
            data: [
              { value: 60, name: "Product A" },
              { value: 40, name: "Product B" },
              { value: 20, name: "Product C" },
              { value: 80, name: "Product D" },
              { value: 100, name: "Product E" }
            ]
          }
        ]
      }
    };
  }
};
</script>
