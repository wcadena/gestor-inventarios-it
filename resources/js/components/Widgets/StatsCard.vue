<template>
	<div class="dash-card">
		<div class="pa-3">
			<div class="layout justify-space-between mb-2">
				<div class="align-item-start">
					<h3>$<countTo :startVal='0' :endVal="amount" :duration='5000'></countTo></h3>
					<p class="ma-0 fs-14">{{heading}}</p>
				</div>
				<div class="align-item-end">
					<h3 class="dash-icon"><i :class="icon"></i></h3>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
  props: ["heading", "icon", "amount"]
};
</script>

