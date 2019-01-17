// Line Chart
import { Line } from 'vue-chartjs'
import { ChartConfig } from "Constants/chart-config";

export default {
	extends: Line,
	mounted() {
		this.renderChart({
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [
				{
					label: 'Data One',
					backgroundColor: ChartConfig.color.danger,
					data: [40, 39, 10, 40, 39, 80, 40]
				}
			]
		}, { responsive: true, maintainAspectRatio: false })
	}
}
