<!-- Space Widget -->
<template>
  <div class="app-flex justify-start">
    <space-pie-chart
      :labels="data.chartData.labels"
      :datasets="data.chartData.datasets"
      :height="50"
      :width="50"
      class="w-40 mr-3"
    >
    </space-pie-chart>
    <div>
      <p class="mb-0">Space Used</p>
      <p class="font-2x mb-1">30<sub>/50GB</sub></p>
      <v-btn small color="primary">Buy Now</v-btn>
    </div>
  </div>
</template>

<script>
// chart component
import SpacePieChart from "../Charts/SpacePieChart";

export default {
  props: ["data"],
  components: {
    SpacePieChart
  }
};
</script>
