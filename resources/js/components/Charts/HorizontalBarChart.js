/**
 * Horizontal Bar Chart
 */

import { HorizontalBar } from 'vue-chartjs'
import { ChartConfig } from 'Constants/chart-config';

export default {
   extends: HorizontalBar,
   props: ['labels', 'label', 'chartdata', 'height'],
   data() {
      return {
         ChartConfig,
         options: {
            legend: {
               display: false
            },
            scales: {
               xAxes: [{
                  gridLines: {
                     color: ChartConfig.chartGridColor,
                     drawBorder: false
                  },
                  ticks: {
                     fontColor: ChartConfig.axesColor,
                     min: 0,
                     max: 9
                  },
               }],
               yAxes: [{
                  gridLines: {
                     display: false
                  },
                  ticks: {
                     fontColor: ChartConfig.axesColor
                  },
                  barPercentage: 1.0,
                  categoryPercentage: 0.5,
               }]
            }
         }
      }
   },
   mounted() {
      const { labels, label, chartdata, height } = this;
      this.renderChart({
         labels: labels,
         datasets: [
            {
               label: label,
               backgroundColor: ChartConfig.color.success,
               borderColor: ChartConfig.color.success,
               borderWidth: 1,
               hoverBackgroundColor: ChartConfig.color.success,
               hoverBorderColor: ChartConfig.color.success,
               data: chartdata,
            }
         ]
      }, this.options)
   }
}
