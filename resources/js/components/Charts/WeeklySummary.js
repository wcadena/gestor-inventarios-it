// Weekly Summary Widget
import { Bar } from 'vue-chartjs'

export default {
  extends: Bar,
  data: function () {
    return {
      gradient1: null,
      options: {
        responsive: true,
        maintainAspectRatio: false,
        maxBarThickness: 0,
        scales: {
          yAxes: [{
            ticks: {
              stepSize: 5
            },
            gridLines: {
              display: false
            }
          }],
          xAxes: [ {
            gridLines: {
              display: false
            },
            barPercentage: 0.4
          }]
        },
        legend: {
          display: false
        }
      }
    }
  },
  mounted () {
    this.gradient1 = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 0, 250)

    this.gradient1.addColorStop(0, '#3B7CFF')
    this.gradient1.addColorStop(1, '#1E3C72')

    this.renderChart({
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [
        {
          label: 'Series A',
          backgroundColor: this.gradient1,
          hoverBackgroundColor: this.gradient1,
          data: [12, 7, 14, 9, 14, 9, 17]
        }
      ]
    }, this.options)
  }
}
