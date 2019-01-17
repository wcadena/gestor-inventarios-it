// Doughnut Chart

import { Doughnut } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

export default {
   extends: Doughnut,
   data() {
      return {
         options: {
            cutoutPercentage: 70,
            legend: {
               display: false,
               position: 'bottom'
            }
         }
      }
   },
   mounted() {
      this.renderChart({
         labels: ['Computer', 'Mobile', 'Tablets'],
         datasets: [{
            data: [250, 100, 70],
            backgroundColor: [
               ChartConfig.color.primary,
               ChartConfig.color.info,
               ChartConfig.color.warning
            ],
            borderWidth: [0, 0, 0],
            hoverBackgroundColor: [
               ChartConfig.color.primary,
               ChartConfig.color.info,
               ChartConfig.color.warning
            ]
         }]
      }, this.options)
   }
}
