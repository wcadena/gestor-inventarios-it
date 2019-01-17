// Line Chart Widget
import { Line } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

export default {
	extends: Line,
	props: {
		data: {
			type: Array,
			default: () => [10, 30, 30, 60, 75, 10]
		},
		lineTension: {
			type: Number,
			default: () => 0.6
		},
		labels: {
			type: Array,
			default: () => ['A', 'B', 'C', 'D', 'E', 'F']
		},
		color: {
			type: String,
			default: () => ChartConfig.color.info
		},
		enableShadow: {
			type: Boolean,
			default: false
		}
	},
	data() {
		return {
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
						},
						display: false
					}],
					xAxes: [{
						ticks: {
							display: false,
							beginAtZero: true
						},
						gridLines: {
							display: true,
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
		if (this.enableShadow !== false) {
			let ctx = this.$refs.canvas.getContext('2d')
			let _stroke = ctx.stroke
			ctx.stroke = function () {
				ctx.save()
				ctx.shadowColor = ChartConfig.shadowColor
				ctx.shadowBlur = 10
				ctx.shadowOffsetX = 0
				ctx.shadowOffsetY = 6
				_stroke.apply(this, arguments)
				ctx.restore()
			}
		}

		this.renderChart({
			labels: this.labels,
			datasets: [{
				label: 'My First dataset',
				data: this.data,
				lineTension: this.lineTension,
				borderColor: this.color,
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
