// Bar Chart

import { Bar } from 'vue-chartjs'
import { ChartConfig } from '../../constants/chart-config';

export default {
   extends: Bar,
   props: ['websiteViews', 'labels', 'emailSubscription'],
   data() {
      return {
         ChartConfig,
         options: {
            legend: {
               display: false
            },
            tooltips: {
               titleSpacing: 6,
               cornerRadius: 5
            },
            scales: {
               xAxes: [{
                  gridLines: {
                     display: false,
                     color: ChartConfig.chartGridColor
                  },
                  ticks: {
                     fontColor: ChartConfig.axesColor
                  },
                  barPercentage: 1.3,
                  categoryPercentage: 0.5,
               }],
               yAxes: [{
                  gridLines: {
                     color: ChartConfig.chartGridColor,
                     drawBorder: false
                  },
                  ticks: {
                     fontColor: ChartConfig.axesColor,
                     min: 100,
                     max: 1000
                  },
               }]
            }
         }
      }
   },
   mounted() {
      this.renderChart({
         labels: this.labels,
         datasets: [
            {
               label: 'Website view',
               backgroundColor: ChartConfig.color.primary,
               borderColor: ChartConfig.color.primary,
               borderWidth: 1,
               hoverBackgroundColor: ChartConfig.color.primary,
               hoverBorderColor: ChartConfig.color.primary,
               data: this.websiteViews,
            },
            {
               label: 'Email Subscription',
               backgroundColor: ChartConfig.color.warning,
               borderColor: ChartConfig.color.warning,
               borderWidth: 1,
               hoverBackgroundColor: ChartConfig.color.warning,
               hoverBorderColor: ChartConfig.color.warning,
               data: this.emailSubscription,
            }
         ]
      }, this.options)
   }
}
