<!-- Daily Sales Widget -->
<template>
   <div>
      <div class="app-flex justify-start align-start">
         <v-icon class="success--text mr-3 font-2x">arrow_upward</v-icon>
         <div>
            <h2 class="mb-0">12,255 Today</h2>
            <span class="fs-14 gray--text">10% increase from yesterday</span>
         </div>
      </div>
      <SalesChart
         :label="label"
         :chartdata="chartdata"
         :labels="labels"
         :borderColor="ChartConfig.color.success"
         :pointBackgroundColor="ChartConfig.color.success"
         :height="160"
         :pointBorderColor="ChartConfig.color.white"
         :borderWidth="4"
      >
      </SalesChart>
   </div>
</template>

<script>
import SalesChart from "../Charts/SalesChart";

// constants
import { ChartConfig } from "Constants/chart-config";

export default {
  props: ["label", "chartdata", "labels"],
  data() {
    return {
      ChartConfig
    };
  },
  components: {
    SalesChart
  }
};
</script>