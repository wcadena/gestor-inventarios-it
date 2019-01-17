// Gradient Line Chart
import { Line } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";
import { hexToRgbA } from 'Helpers/helpers';

export default {
  extends: Line,
  data() {
    return {
      gradient: null,
      gradient2: null
    }
  },
  mounted() {
    this.gradient = this.$refs.canvas.getContext('2d').createLinearGradient(500, 0, 100, 0)
    this.gradient2 = this.$refs.canvas.getContext('2d').createLinearGradient(500, 0, 100, 0)

    this.gradient.addColorStop(0, ChartConfig.color.danger)
    this.gradient.addColorStop(1, ChartConfig.color.warning)

    this.gradient2.addColorStop(0, hexToRgbA(ChartConfig.color.danger, 0.6))
    this.gradient2.addColorStop(1, hexToRgbA(ChartConfig.color.warning, 0.6))

    this.renderChart({
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'Data',
        borderColor: this.gradient,
        pointBorderColor: this.gradient,
        pointBackgroundColor: this.gradient,
        pointHoverBackgroundColor: this.gradient,
        pointHoverBorderColor: this.gradient,
        pointBorderWidth: 10,
        pointHoverRadius: 10,
        pointHoverBorderWidth: 1,
        pointRadius: 3,
        fill: true,
        backgroundColor: this.gradient2,
        borderWidth: 4,
        data: [100, 120, 150, 170, 180, 170, 160, 190]
      }]
    }, { responsive: true, maintainAspectRatio: false, legend: { position: 'bottom' } })
  }
}
