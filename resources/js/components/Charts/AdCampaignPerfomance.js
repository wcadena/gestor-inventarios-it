// Sales Widget
import { Bar, Line } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

export default ({
   extends: Bar,
   Line,
   props: ['data'],
   data: function () {
      return {
         options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
               yAxes: [{
                  ticks: {
                     display: false,
                     max: 80
                  },
                  gridLines: {
                     display: false,
                     drawBorder: false
                  }
               }],
               xAxes: [{
                  ticks: {
                     padding: 10
                  },
                  barPercentage: 1.1,
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
      const { labels, lineChartData, barChartData, barChartData2 } = this.data;
      if (this.enableShadow !== false) {
         let ctx = this.$refs.canvas.getContext('2d')
         let _stroke = ctx.stroke
         ctx.stroke = function () {
            ctx.save()
            ctx.shadowColor = ChartConfig.shadowColor
            ctx.shadowBlur = 10
            ctx.shadowOffsetX = 0
            ctx.shadowOffsetY = 12
            _stroke.apply(this, arguments)
            ctx.restore()
         }
      }

      this.renderChart({
         labels,
         datasets: [
            {
               type: 'line',
               label: lineChartData.label,
               borderColor: lineChartData.color,
               pointBackgroundColor: ChartConfig.color.white,
               spanGaps: false,
               lineTension: 0,
               fill: false,
               cubicInterpolationMode: 'monotone',
               pointBorderWidth: 2,
               pointRadius: 6,
               pointBorderColor: lineChartData.color,
               data: lineChartData.data
            },
            {
               type: 'bar',
               label: barChartData.label,
               backgroundColor: barChartData.color,
               hoverBackgroundColor: barChartData.color,
               borderWidth: 0,
               data: barChartData.data
            },
            {
               type: 'bar',
               label: barChartData2.label,
               backgroundColor: barChartData2.color,
               hoverBackgroundColor: barChartData2.color,
               borderWidth: 0,
               data: barChartData2.data
            },
         ]
      }, this.options)
   }
})
