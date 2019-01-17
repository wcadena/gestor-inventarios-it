<template>
	<div class="pos-relative h-100 overflow-hidden server-load-widget">
		<div class="d-custom-flex justify-space-between align-items-center mb-3">
			<div>
				<span class="fs-12 grey--text">Space</span>
				<h5 class="mb-0"><span class="primary--text">98GB </span><span class="info--text">/ 124GB</span></h5>
			</div>
			<div>
				<span class="fs-12 grey--text">Bandwidth</span>
        <h5 class="mb-0"><span class="error--text">512MB </span><span class="info--text">/ 1024MB</span></h5>
			</div>
		</div>
		<div id="chartdiv" class="server-load-chart" :style="styles"></div>
	</div>
</template>

<script>
import { ChartConfig } from "Constants/chart-config";
export default {
  props: ["styles"],
  mounted() {
    var chart = AmCharts.makeChart("chartdiv", {
      theme: "none",
      type: "gauge",
      axes: [
        {
          topTextFontSize: 16,
          topTextYOffset: 50,
          axisColor: "#354052",
          axisThickness: 1,
          endValue: 100,
          gridInside: true,
          inside: true,
          radius: "75%",
          valueInterval: 20,
          tickColor: "#354052",
          startAngle: -90,
          endAngle: 90,
          bandOutlineAlpha: 0,
          bands: [
            {
              color: "#E2E7EE",
              endValue: 100,
              innerRadius: "105%",
              radius: "140%",
              startValue: 0
            },
            {
              color: "#39B54A",
              endValue: 0,
              innerRadius: "105%",
              radius: "140%",
              gradientRatio: [-1, 0, 1],
              startValue: 0
            }
          ]
        }
      ],
      arrows: [
        	{
          alpha: 1,
          innerRadius: "25%",
          nailRadius: 0,
          radius: "140%"
        	}
      ]
    });

    setTimeout(function() {
      setInterval(randomValue, 2000);
    }, 4000);

    // set random value
    function randomValue() {
      var value = Math.round(Math.random() * 100);
      if (value > 70) {
        chart.axes[0].bands[1].color = ChartConfig.color.danger;
      } else if (value > 50 && value < 70) {
        chart.axes[0].bands[1].color = ChartConfig.color.warning;
      } else {
        chart.axes[0].bands[1].color = ChartConfig.color.success;
      }
      chart.arrows[0].setValue(value);
      chart.axes[0].setTopText(value + "%");
      // adjust darker band to new value
      chart.axes[0].bands[1].setEndValue(value);
    }
  }
};
</script>
