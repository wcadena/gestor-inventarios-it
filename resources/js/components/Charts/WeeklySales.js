// Line Chart Shadow
import { Line } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

export default {
   extends: Line,
   props: {
      enableShadow: {
         type: Boolean,
         default: true
      },
      dataSet: {
         type: Array,
         default: () => [10, 30, 39, 65, 85, 10, 10]
      },
      lineTension: {
         type: Number,
         default: () => 0.4
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
                     display: false
                  },
                  barPercentage: 0.8,
                  gridLines: {
                     display: true,
                     drawBorder: false
                  }
               }]
            },
            legend: {
               display: false
            },
            tooltip: {
               enabled: true
            }
         }
      }
   },
   mounted() {
      if (this.enableShadow !== false) {
         let ctx = this.$refs.canvas.getContext('2d')
         let _stroke = ctx.stroke
         ctx.stroke = function () {
            ctx.save()
            ctx.shadowColor = '#000'
            ctx.shadowBlur = 10
            ctx.shadowOffsetX = 0
            ctx.shadowOffsetY = 12
            _stroke.apply(this, arguments)
            ctx.restore()
         }
      }

      let gradientColor = ' '
      if (this.enableGradient) {
         this.gradient1 = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 140, 0)
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
            borderWidth: 2,
            fill: false
         }]
      }, this.options)
   }
}
