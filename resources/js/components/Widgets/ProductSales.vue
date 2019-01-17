<template>
	<div class="widget">
		<div class="ladgend-wrapper mb-3">
			<p class="mb-0"><span class="ladgend ladgend-success"></span> <span>iPhone 8</span></p>
			<p class="mb-0"><span class="ladgend ladgend-warning"></span> <span>Samsung X8</span></p>
		</div>
		<product-sales-chart :height="height"></product-sales-chart>
	</div>
</template>

<!-- Product Sales Widget -->
<script>
import ProductSalesChart from "../Charts/ProductSalesChart";
export default {
  props: ["height"],
  components: {
    ProductSalesChart
  }
};
</script>
