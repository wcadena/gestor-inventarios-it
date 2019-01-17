// Sales Widget
import { Bar } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

export default ({
   extends: Bar,
   data: function () {
      return {
         options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
               yAxes: [{
                  stacked: true,
                  ticks: {
                     display: false
                  },
                  gridLines: {
                     display: false,
                     drawBorder: false
                  }
               }],
               xAxes: [{
                  stacked: true,
                  ticks: {
                     padding: 10
                  },
                  barPercentage: 0.4,
                  categoryPercentage: 1.3,
                  gridLines: {
                     display: false,
                     drawBorder: false
                  }
               }]
            },
            legend: {
               display: false
            }
         }
      }
   },
   mounted() {
      this.renderChart({
         labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
         datasets: [
            {
               type: 'bar',
               label: 'Earned',
               backgroundColor: ChartConfig.color.primary,
               hoverBackgroundColor: ChartConfig.color.primary,
               borderWidth: 0,
               data: [45, 32, 50, 42, 32, 46, 30, 25, 29, 21, 21, 25]
            },
            {
               type: 'bar',
               label: 'Views',
               backgroundColor: ChartConfig.lineChartAxesColor,
               hoverBackgroundColor: ChartConfig.lineChartAxesColor,
               borderWidth: 0,
               data: [10, 20, 12, 30, 10, 32, 28, 30, 20, 18, 18, 30]
            }
         ]
      }, this.options)
   }
})
