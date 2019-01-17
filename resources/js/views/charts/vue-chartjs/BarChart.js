// Bar Chart
import { Bar } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

export default {
	extends: Bar,
	data() {
		return {
			options: {
				responsive: true,
				maintainAspectRatio: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						},
						gridLines: {
							display: true
						}
					}],
					xAxes: [{
						gridLines: {
							display: false
						},
						categoryPercentage: 0.5,
						barPercentage: 0.8
					}]
				}
			}
		}
	},
	mounted() {
		this.renderChart({
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [
				{
					label: 'Series A',
					backgroundColor: ChartConfig.color.danger,
					data: [40, 35, 60, 70, 20, 35, 40]
				}
			]
		}, this.options)
	}
}
