// Sales Widget
import { Bar, Line } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";
export default ({
   extends: Bar,
   props: ['data1', 'data2'],
   data: function () {
      return {
         options: {
            responsive: true,
            maintainAspectRatio: true,
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
                  barPercentage: 0.3,
                  categoryPercentage: 2,
                  gridLines: {
                     display: false,
                     drawBorder: false
                  },
                  display: false
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
               data: this.data1
            },
            {
               type: 'bar',
               label: 'Views',
               backgroundColor: ChartConfig.lineChartAxesColor,
               hoverBackgroundColor: ChartConfig.lineChartAxesColor,
               borderWidth: 0,
               data: this.data2
            }
         ]
      }, this.options)
   }
})
