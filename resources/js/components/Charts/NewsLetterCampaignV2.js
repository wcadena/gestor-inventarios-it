import { Line } from "vue-chartjs";
import { ChartConfig } from "Constants/chart-config";
import { hexToRgbA } from "Helpers/helpers";

export default {
   extends: Line,
   props: {
      dataSet1: {
         type: Array,
         default: () => [85, 50, 80, 90, 10, 5, 15, 60, 30, 20, 50]
      },
      dataSet2: {
         type: Array,
         default: () => [100, 80, 55, 60, 40, 45, 70, 60, 50, 20, 65]
      },
      label1: {
        type: String,
        default: () => "Data-1"
      },
      label2: {
        type: String,
        default: () => "Data-2"
      },
      lineTension: {
         type: Number,
         default: () => 0
      },
      dataLabels: {
         type: Array,
         default: () => ['A', 'B', 'C', 'D', 'E', 'F','G','H','I','J','K']
      },
      enableXAxesLine: {
         type: Boolean,
         default: true
      },
      enableYAxesLine: {
         type: Boolean,
         default: true
      },
      color1: {
         type: String,
         default: () => ChartConfig.color.white
      },
      color2: {
         type: String,
         default: () => ChartConfig.color.white
      },
      gridLines: {
         type: Boolean,
         default: false
      },
      gridLines2: {
         type: Boolean,
         default: true
      }
   },
   data() {
      return {
         gradient: null,
         gradient2: null,
         options: {
            scales: {
               yAxes: [
                  {
                     gridLines: {
                        display: this.gridLines,
                        drawBorder: false
                     },
                     ticks: {
                        display: this.enableYAxesLine
                     }
                  }
               ],
               xAxes: [
                  {
                     gridLines: {
                        display: this.gridLines2,
                        drawBorder: this.gridLines2
                     },
                     ticks: {
                        display: this.enableXAxesLine
                     }
                  }
               ]
            },
            tooltip: {
               enabled: true
            },
            legend: {
               display: true
            },
            responsive: true,
            maintainAspectRatio: true
         }
      };
   },
   mounted() {
      this.gradient = this.$refs.canvas.getContext("2d").createLinearGradient(0, 0, 0, 350);
      this.gradient.addColorStop(0, hexToRgbA(this.color1, 1));
      this.gradient.addColorStop(1, hexToRgbA("#FFF", 1));
      this.gradient2 = this.$refs.canvas.getContext("2d").createLinearGradient(0, 0, 0, 325);
      this.gradient2.addColorStop(0, hexToRgbA(this.color2, 1));
      this.gradient2.addColorStop(1, hexToRgbA("#FFF", 0.8));

      this.renderChart(
         {
            labels: this.dataLabels,
            datasets: [
               {
                  label: this.label1,
                  lineTension: this.lineTension,
                  pointRadius: 0,
                  fill: true,
                  backgroundColor: this.gradient,
                  borderColor: this.color1,
                  data: this.dataSet1,
                  borderWidth: 3
               },
               {
                  label: this.label2,
                  lineTension: this.lineTension,
                  pointRadius: 0,
                  fill: true,
                  backgroundColor: this.gradient2,
                  borderColor: this.color2,
                  data: this.dataSet2,
                  borderWidth: 3
               }
            ]
         },
         this.options
      );
   }
};
