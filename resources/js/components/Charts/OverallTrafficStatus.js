// Sales Widget
import { Bar } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

export default ({
   extends: Bar,
   props: ['data'],
   data: function () {
      return {
         options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
               yAxes: [{
                  ticks: {
                     max: 80
                  }
               }],
               xAxes: [{
                  ticks: {
                     padding: 10
                  },
                  barPercentage: 0.2,
                  categoryPercentage: 0.4,
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
      const { chartLabels, chartDatasets } = this.data;
      this.renderChart({
         chartLabels,
         datasets: [
            {
               type: 'bar',
               label: chartDatasets[0].labelA,
               backgroundColor: chartDatasets[0].borderColor,
               hoverBackgroundColor: chartDatasets[0].borderColor,
               borderWidth: chartDatasets[0].borderWidth,
               data: chartDatasets[0].dataA
            },
            {
               type: 'bar',
               label: chartDatasets[1].labelB,
               backgroundColor: chartDatasets[1].borderColor,
               hoverBackgroundColor: chartDatasets[1].borderColor,
               borderWidth: chartDatasets[1].borderWidth,
               data: chartDatasets[1].dataB
            },
         ]
      }, this.options)
   }
})
