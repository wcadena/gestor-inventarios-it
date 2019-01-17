/**
 * Space Pie Chart
 */
import { Pie } from 'vue-chartjs'

// chart config
import { ChartConfig } from 'Constants/chart-config';

export default {
   extends: Pie,
   props: ['labels', 'datasets'],
   data() {
      return {
         ChartConfig,
         options: {
            legend: {
               display: false,
               labels: {
                  fontColor: ChartConfig.legendFontColor
               }
            }
         }
      }
   },
   mounted() {
      const { labels, datasets } = this;
      this.renderChart({
         labels: labels,
         datasets: datasets
      }, this.options)
   }
}
