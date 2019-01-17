<template>
	<v-flex :class="colClasses">
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
				<slot></slot>
			</div>
		</div>
	</v-flex>
</template>

<script>
import countTo from "vue-count-to";
export default {
  props: ["heading", "icon", "amount", "colClasses"],
  components: {
    countTo
  }
};
</script>

