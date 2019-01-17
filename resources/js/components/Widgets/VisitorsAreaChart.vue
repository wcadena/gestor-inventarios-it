<template>
   <div class="mt-4 visitor-area-chart">
		<div class="d-custom-flex justify-space-between px-4 mb-4 label-wrap">
			<h4>Visitors</h4>
			<div class="d-custom-flex justify-space-between w-30">
				<div class="w-50">
					<h4 class="info--text mb-0">$ 35,455</h4>
					<p class="fs-12 grey--text mb-0">International Visior</p>
				</div>
				<div class="w-50">
					<h4 class="primary--text mb-0">$ 35,455</h4>
					<p class="fs-12 grey--text mb-0">Domestic Visior</p>
				</div>
			</div>
		</div>
		<div class="px-4 pos-relative">
			<visitors-stacked-area-chart :height="220"></visitors-stacked-area-chart>
		</div>
	</div>
</template>

<script>
import VisitorsStackedAreaChart from "Components/Charts/VisitorsStackedAreaChart";
export default {
  components: {
    VisitorsStackedAreaChart
  }
};
</script>

