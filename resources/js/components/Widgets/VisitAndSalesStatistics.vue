<template>
   <div class="widget">
      <div class="ladgend-wrapper mb-3">
         <p class="mb-0"><span class="ladgend ladgend-success"></span> <span>Sales</span></p>
         <p class="mb-0"><span class="ladgend ladgend-warning"></span> <span>Visits</span></p>
      </div>
      <sales-analysis
         :width="370"
         :height="300"
      >
      </sales-analysis>
   </div>
</template>

<script>
import SalesAnalysis from "../Charts/SalesAnalysisChart";
export default {
  components: {
    SalesAnalysis
  }
};
</script>
