// News Letter Campaign Widget
import { Line } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

const lineTension = 0.1;
const borderWidth = 3;
const pointRadius = 6;
const pointBorderWidth = 2;

export default {
	extends: Line,
	props: {
		data1: {
			type: Array,
			default: () => [10, 30, 30, 60, 75, 10]
		},
		data2: {
			type: Array,
			default: () => [10, 30, 30, 60, 75, 10]
		},
		label1: {
			type: String,
			default: () => 'Subscribed'
		},
		label2: {
			type: String,
			default: () => 'Unsubscribed'
		},
		labels: {
			type: Array,
			default: () => ['A', 'B', 'C', 'D', 'E', 'F']
		}
	},
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
							stepSize: 5,
							padding: 5
						}
					}],
					xAxes: [{
						gridLines: {
							display: false,
							drawBorder: false
						},
						ticks: {
							padding: 10
						}
					}]
				},
				tooltip: {
					enabled: true
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
			labels: this.labels,
			datasets: [
				{
					label: this.label1,
					lineTension,
					borderColor: ChartConfig.color.primary,
					pointBorderColor: ChartConfig.color.primary,
					pointBorderWidth,
					pointRadius,
					fill: false,
					pointBackgroundColor: ChartConfig.color.white,
					borderWidth,
					data: this.data1
				},
				{
					label: this.label2,
					lineTension,
					borderColor: ChartConfig.color.info,
					pointBorderColor: ChartConfig.color.info,
					pointBorderWidth,
					pointRadius,
					fill: false,
					backgroundColor: ChartConfig.color.white,
					borderWidth,
					data: this.data2
				}
			]
		}, this.options)
	}
}
