// Line Chart Widget
import { Line } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

export default {
   extends: Line,
   props: {
      dataSet: {
         type: Array,
         default: () => [10, 30, 30, 60, 75, 10]
      },
      lineTension: {
         type: Number,
         default: () => 0.3
      },
      dataLabels: {
         type: Array,
         default: () => ['A', 'B', 'C', 'D', 'E', 'F']
      },
      gradientColor1: {
         type: String,
         default: () => ChartConfig.color.white
      },
      gradientColor2: {
         type: String,
         default: () => ChartConfig.color.white
      },
      enableGradient: {
         type: Boolean,
         default: () => true
      },
      borderColor: {
         type: String,
         default: () => ChartConfig.color.white
      }
   },
   data() {
      return {
         gradient1: null,
         options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
               yAxes: [{
                  ticks: {
                     beginAtZero: true,
                     display: false
                  },
                  gridLines: {
                     display: false,
                     drawBorder: false,
                     drawTicks: false
                  }
               }],
               xAxes: [{
                  ticks: {
                     display: false,
                     beginAtZero: true
                  },
                  gridLines: {
                     display: true,
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
      let ctx = this.$refs.canvas.getContext('2d')
      let _stroke = ctx.stroke
      ctx.stroke = function () {
         ctx.save()
         ctx.shadowColor = 'rgba(0,0,0,0.5)'
         ctx.shadowBlur = 8
         ctx.shadowOffsetX = 0
         ctx.shadowOffsetY = 4
         _stroke.apply(this, arguments)
         ctx.restore()
      }

      let gradientColor = ' '
      if (this.enableGradient) {
         this.gradient1 = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 250, 0)
         this.gradient1.addColorStop(0, this.gradientColor1)
         this.gradient1.addColorStop(1, this.gradientColor2)
         gradientColor = this.gradient1
      } else {
         gradientColor = this.borderColor
      }

      this.renderChart({
         labels: this.dataLabels,
         datasets: [{
            label: 'My First dataset',
            data: this.dataSet,
            lineTension: this.lineTension,
            borderColor: gradientColor,
            pointBorderWidth: 0,
            pointHoverRadius: 0,
            pointRadius: 0,
            pointHoverBorderWidth: 0,
            borderWidth: 3,
            fill: false
         }]
      }, this.options)
   }
}
