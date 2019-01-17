// Radar Chart
import { Radar } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";
import { hexToRgbA } from "Helpers/helpers";

export default {
	extends: Radar,
	mounted() {
		this.renderChart({
			labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
			datasets: [
				{
					label: 'Series A',
					backgroundColor: hexToRgbA(ChartConfig.color.warning, 0.2),
					borderColor: hexToRgbA(ChartConfig.color.warning, 1),
					pointBackgroundColor: hexToRgbA(ChartConfig.color.warning, 1),
					pointBorderColor: ChartConfig.color.white,
					pointHoverBackgroundColor: ChartConfig.color.white,
					pointHoverBorderColor: hexToRgbA(ChartConfig.color.warning, 1),
					data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
					label: 'Series B',
					backgroundColor: hexToRgbA(ChartConfig.color.danger, 0.2),
					borderColor: hexToRgbA(ChartConfig.color.danger, 1),
					pointBackgroundColor: hexToRgbA(ChartConfig.color.danger, 1),
					pointBorderColor: ChartConfig.color.white,
					pointHoverBackgroundColor: ChartConfig.color.white,
					pointHoverBorderColor: hexToRgbA(ChartConfig.color.danger, 1),
					data: [28, 48, 40, 19, 96, 27, 100]
				}
			]
		}, { responsive: true, maintainAspectRatio: false })
	}
}
