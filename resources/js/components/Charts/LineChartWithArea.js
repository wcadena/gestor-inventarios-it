import { Line } from "vue-chartjs";
import { ChartConfig } from "Constants/chart-config";
import { hexToRgbA } from "Helpers/helpers";

export default {
   extends: Line,
   props: {
      dataSet: {
         type: Array,
         default: () => [85,50, 80,90,10,5, 15,60,30,20,50]
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
      color: {
         type: String,
         default: () => ChartConfig.color.white
      },
      gridLines: {
         type: Boolean,
         default: false
      }
   },
   data() {
      return {
         gradient: null,
         options: {
            scales: {
               yAxes: [
                  {
                     gridLines: {
                        display: false,
                        drawBorder: false
                     },
                     ticks: {
                        display: false
                     },
                     display: false
                  }
               ],
               xAxes: [
                  {
                     gridLines: {
                        display: this.gridLines,
                        drawBorder: false
                     },
                     ticks: {
                        display: this.enableXAxesLine
                     },
                     display: this.enableXAxesLine
                  }
               ]
            },
            tooltip: {
               enabled: true
            },
            legend: {
               display: false
            },
            responsive: true,
            maintainAspectRatio: true
         }
      };
   },
   mounted() {
      this.gradient = this.$refs.canvas.getContext("2d").createLinearGradient(0, 280, 0, 0);
      this.gradient.addColorStop(0, hexToRgbA('#FFF', 0.1));
      this.gradient.addColorStop(1, hexToRgbA(this.color, 0.4));

      this.renderChart(
         {
            labels: this.dataLabels,
            datasets: [
               {
                  label: "Data",
                  lineTension: this.lineTension,
                  pointRadius: 0,
                  fill: true,
                  backgroundColor: this.gradient,
                  borderColor: this.color,
                  data: this.dataSet,
                  borderWidth: 3
               }
            ]
         },
         this.options
      );
   }
};
