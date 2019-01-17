<!-- Subscribers Widget -->
<template>
  <div class="mb-10 pos-relative">
     <doughnut-chart-v2
        :height="210"
        :data="subscribers"
     >
     </doughnut-chart-v2>
     <div class="overlay-content d-custom-flex justify-center align-items-center">
        <span class="grey--text count-value fw-semi-bold">
          <countTo :startVal='0' :endVal='15800' :duration='10000'></countTo>
        </span>
     </div>
  </div>
</template>

<script>
import DoughnutChartV2 from "../Charts/DoughnutChartV2";

// constants
import { ChartConfig } from "Constants/chart-config";

import countTo from "vue-count-to";
//data
import { subscribers } from "Views/dashboard/data";

export default {
   components: {
      DoughnutChartV2,
      countTo
   },
   data() {
      return {
         ChartConfig,
         subscribers
      };
   }
};
</script>
