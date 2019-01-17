/**
 * Sales Chart Component
 */

import { Line } from 'vue-chartjs'

// Main Component
export default {
    extends: Line,
    props: ['label', 'chartdata', 'labels', 'borderColor', 'pointBackgroundColor', 'height', 'pointBorderColor', 'borderWidth'],
    data() {
        return {
            options: {
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            min: 0
                        },
                        gridLines: {
                            display: true,
                            drawBorder: false
                        }
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            suggestedMin: 0,
                            beginAtZero: true
                        }
                    }]
                }
            }
        }
    },
    mounted() {
        const { label, chartdata, labels, borderColor, borderWidth, pointBorderColor, pointBackgroundColor } = this;
        this.renderChart({
            labels,
            datasets: [
                {
                    label,
                    fill: false,
                    lineTension: 0,
                    fillOpacity: 0.3,
                    borderColor,
                    borderWidth,
                    pointBorderColor,
                    pointBackgroundColor,
                    pointBorderWidth: 3,
                    pointRadius: 6,
                    pointHoverBackgroundColor: pointBackgroundColor,
                    pointHoverBorderColor: borderColor,
                    pointHoverBorderWidth: 4,
                    pointHoverRadius: 7,
                    data: chartdata
                }
            ]
        }, this.options)
    }
}