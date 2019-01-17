<!-- Traffic Channel Widget -->
<template>
  <div>
      <horizontal-bar-chart :label="data.label" :chartdata="data.chartdata" :labels="data.labels" height="200"></horizontal-bar-chart>
  </div>
</template>

<script>
// chart
import HorizontalBarChart from "../Charts/HorizontalBarChart";
export default {
  props: ["data"],
  components: {
    HorizontalBarChart
  }
};
</script>
