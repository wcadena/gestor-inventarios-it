// Product Sales Widget
import { HorizontalBar } from 'vue-chartjs'

export default {
   extends: HorizontalBar,
   data: function () {
      return {
         gradient1: null,
         gradient2: null,
         gradient3: null,
         gradient4: null,
         options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
               yAxes: [{
                  ticks: {
                     beginAtZero: true,
                     padding: 10
                  },
                  gridLines: {
                     display: true,
                     offsetGridLines: false,
                     drawTicks: false,
                     drawBorder: false
                  },
                  barPercentage: 1.0,
                  categoryPercentage: 0.4
               }],
               xAxes: [{
                  ticks: {
                     beginAtZero: true
                  },
                  gridLines: {
                     display: false
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
         ctx.shadowColor = '#000'
         ctx.shadowBlur = 50
         ctx.shadowOffsetX = 12
         ctx.shadowOffsetY = 140
         _stroke.apply(this, arguments)
         ctx.restore()
      }

      this.gradient1 = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 250, 0)
      this.gradient1.addColorStop(0, '#0087DB')
      this.gradient1.addColorStop(1, '#00D1C4')

      this.gradient2 = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 250, 0)
      this.gradient2.addColorStop(0, '#6814CC')
      this.gradient2.addColorStop(1, '#2E68F6')

      this.gradient3 = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 250, 0)
      this.gradient3.addColorStop(0, '#A742AF')
      this.gradient3.addColorStop(1, '#E5137B')

      this.gradient4 = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 250, 0)
      this.gradient4.addColorStop(0, '#FC6274')
      this.gradient4.addColorStop(1, '#FE8F4D')

      this.gradient5 = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 250, 0)
      this.gradient5.addColorStop(0, '#C46BD6')
      this.gradient5.addColorStop(1, '#5032B6')

      this.renderChart({
         labels: ['Clothing', 'Gadgets', 'Furniture', 'Wine', 'Toys', 'Nutrition'],
         datasets: [
            {
               label: 'Series A',
               backgroundColor: [this.gradient1, this.gradient2, this.gradient3, this.gradient4, this.gradient5, this.gradient1],
               hoverBackgroundColor: [this.gradient1, this.gradient2, this.gradient3, this.gradient4, this.gradient5, this.gradient1],
               data: [40, 35, 60, 70, 45, 35]
            }
         ]
      }, this.options)
   }
}
