// Pie chart
import { Pie } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

export default {
	extends: Pie,
	data() {
		return {
			options: {
				legend: {
					display: false
				}
			}
		}
	},
	mounted() {
		this.renderChart({
			labels: ['Men', 'Women', 'Kids'],
			datasets: [{
				data: [250, 100, 70],
				backgroundColor: [
					ChartConfig.color.primary,
					ChartConfig.color.danger,
					ChartConfig.color.warning
				],
				borderWidth: [0, 0, 0],
				hoverBackgroundColor: [
					ChartConfig.color.primary,
					ChartConfig.color.danger,
					ChartConfig.color.warning
				]
			}]
		}, this.options)
	}
}
