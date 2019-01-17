// Sales Analysis Chart
import { Line } from 'vue-chartjs'

export default {
  extends: Line,
  data () {
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
        tooltip: {
          enabled: true
        },
        responsive: true,
        maintainAspectRatio: false
      }
    }
  },
  mounted () {
    let ctx = this.$refs.canvas.getContext('2d')
    let _stroke = ctx.stroke
    ctx.stroke = function () {
      ctx.save()
      ctx.shadowColor = 'rgba(0,0,0,0.5)'
      ctx.shadowBlur = 10
      ctx.shadowOffsetX = 0
      ctx.shadowOffsetY = 15
      _stroke.apply(this, arguments)
      ctx.restore()
    }
    this.gradient1 = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 800, 0)
    this.gradient2 = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 1000, 0)

    this.gradient1.addColorStop(0, '#1E3C72')
    this.gradient1.addColorStop(1, '#3B7CFF')

    this.gradient2.addColorStop(0, '#F7981C')
    this.gradient2.addColorStop(1, '#F56074')

    this.renderChart({
      labels: ['January 2014', 'January 2015', 'January 2016', 'January 2017'],
      datasets: [
        {
          label: 'Sales',
          lineTension: 0.5,
          data: [0, 1000, 1250, 1000],
          borderColor: this.gradient1,
          borderWidth: 5,
          pointRadius: 0,
          fill: false
        },
        {
          label: 'Visits',
          lineTension: 0.5,
          data: [750, 900, 450, 500],
          borderColor: this.gradient2,
          borderWidth: 5,
          pointBackgroundColor: this.gradient2,
          pointBorderColor: this.gradient2,
          pointHoverBackgroundColor: this.gradient2,
          pointHoverBorderColor: this.gradient2,
          pointBorderWidth: 5,
          pointHoverRadius: 5,
          pointHoverBorderWidth: 1,
          pointRadius: 0,
          fill: false
        }
      ]
    }, this.options)
  }
}
