// Doughnut Chart
import { Doughnut } from 'vue-chartjs'
import { ChartConfig } from 'Constants/chart-config';

export default {
   extends: Doughnut,
   data() {
      return {
         ChartConfig,
         options: {
            legend: {
               display: false
            },
            cutoutPercentage: 60,
            padding: 10,
         }
      }
   },
   mounted() {
      this.renderChart({
         labels: ['Total Request', 'New', 'Pending'],
         datasets: [{
            data: [250, 25, 125],
            backgroundColor: [
               ChartConfig.color.primary,
               ChartConfig.color.warning,
               ChartConfig.color.danger
            ],
            hoverBackgroundColor: [
               ChartConfig.color.primary,
               ChartConfig.color.warning,
               ChartConfig.color.danger
            ]
         }]
      }, this.options)
   }
}
