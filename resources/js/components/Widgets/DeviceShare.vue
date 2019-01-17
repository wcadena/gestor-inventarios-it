<!-- Device Share Widget -->
<template>
   <div class="device-share-wrap">
      <div class="mb-10 pos-relative">
         <doughnut-chart-v2
            :height="240"
            :data="devicesShare"
         >
         </doughnut-chart-v2>
         <div class="overlay-content d-custom-flex justify-center align-items-center">
            <span class="grey--text font-2x fw-semi-bold">$2000</span>
         </div>
      </div>
      <div class="hidden-xs-only">
         <div class="d-custom-flex widget-footer">
            <div class="fs-12 grey--text">
               <span class="v-badge primary px-2 py-1"></span>
               <span class="d-block">65%</span>
               <span class="d-block">Website</span>
            </div>
            <div class="fs-12 grey--text">
               <span class="v-badge success px-2 py-1"></span>
               <span class="d-block">25%</span>
               <span class="d-block">iOS Devices</span>
            </div>
            <div class="fs-12 grey--text">
               <span class="v-badge warning px-2 py-1"></span>
               <span class="d-block">10%</span>
               <span class="d-block">Android Devices</span>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
import DoughnutChartV2 from "../Charts/DoughnutChartV2";

// constants
import { ChartConfig } from "Constants/chart-config";

//data
import { devicesShare } from "../../views/dashboard/data";

export default {
   components: {
      DoughnutChartV2
   },
   data() {
      return {
         ChartConfig,
         devicesShare
      };
   }
};
</script>