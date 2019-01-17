import { Line } from 'vue-chartjs'

export default {
  extends: Line,
  data() {
    return {
      gradient1: null,
      gradient2: null,
      options: {
        scales: {
          yAxes: [{
            gridLines: {
              display: true,
              drawBorder: false
            },
            ticks: {
              stepSize: 500
            }
          }],
          xAxes: [{
            gridLines: {
              display: false,
              drawBorder: false
            }
          }]
        },
        legend: {
          display: false
        },
        responsive: true,
        maintainAspectRatio: false
      }
    }
  },
  mounted() {
    let ctx = this.$refs.canvas.getContext('2d')
    let _stroke = ctx.stroke
    ctx.stroke = function () {
      ctx.save()
      ctx.shadowColor = 'rgba(0,0,0,0.6)'
      ctx.shadowBlur = 22
      ctx.shadowOffsetX = 0
      ctx.shadowOffsetY = 15
      _stroke.apply(this, arguments)
      ctx.restore()
    }

    this.gradient1 = this.$refs.canvas.getContext('2d').createLinearGradient(1000, 0, 100, 0)
    this.gradient2 = this.$refs.canvas.getContext('2d').createLinearGradient(1000, 0, 100, 0)

    this.gradient1.addColorStop(0, '#1E3C72')
    this.gradient1.addColorStop(1, '#3B7CFF')

    this.gradient2.addColorStop(0, '#F7981C')
    this.gradient2.addColorStop(1, '#F56074')

    this.renderChart({
      labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
      datasets: [
        {
          label: 'Open Rate',
          lineTension: 0.4,
          borderColor: this.gradient2,
          pointBorderColor: this.gradient2,
          pointBorderWidth: 2,
          pointRadius: 7,
          fill: false,
          pointBackgroundColor: '#FFF',
          borderWidth: 3,
          data: [2200, 2100, 1950, 1600, 800, 350, 250, 650, 1200, 1900, 2900, 3100]
        },
        {
          label: 'Recurring Payments',
          lineTension: 0.4,
          borderColor: this.gradient1,
          pointBorderColor: this.gradient1,
          pointBorderWidth: 2,
          pointRadius: 7,
          fill: false,
          fillColor: 'Black',
          pointBackgroundColor: '#FFF',
          borderWidth: 3,
          data: [500, 1100, 1600, 2000, 2500, 2600, 2300, 1900, 1500, 1100, 750, 850]
        }
      ]
    }, this.options)
  }
}
