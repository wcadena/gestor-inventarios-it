<!-- Device Share Widget -->
<template>
   <div class="profit-share-chart d-custom-flex justify-space-between h-100">
      <div class="mb-2 pos-relative">
         <doughnut-chart-v2
            :height="275"
            :data="profitShare"
         >
         </doughnut-chart-v2>
         <div class="overlay-content d-custom-flex justify-center align-items-center">
            <span class="grey--text font-2x fw-semi-bold">$2500</span>
         </div>
      </div>
      <div class="d-custom-flex justify-space-between">
         <div class="fs-12 grey--text">
            <span class="v-badge primary px-2 py-1"></span>
            <span class="d-block">65%</span>
            <span class="d-block">Sport Tickets</span>
         </div>
         <div class="fs-12 grey--text">
            <span class="v-badge success px-2 py-1"></span>
            <span class="d-block">25%</span>
            <span class="d-block">Business Events</span>
         </div>
         <div class="fs-12 grey--text">
            <span class="v-badge warning px-2 py-1"></span>
            <span class="d-block">10%</span>
            <span class="d-block">Others</span>
         </div>
      </div>
   </div>
</template>

<script>
import DoughnutChartV2 from "../Charts/DoughnutChartV2";

// constants
import { ChartConfig } from "Constants/chart-config";

//data
import { profitShare } from "../../views/dashboard/data";

export default {
   components: {
      DoughnutChartV2
   },
   data() {
      return {
         ChartConfig,
         profitShare
      };
   }
};
</script>