<template>
	<div>
      <div class="pos-relative mb-5">
         <device-seprations :height="180">
			</device-seprations>
         <div class="overlay-content d-custom-flex justify-center align-items-center">
            <span class="grey--text font-2x fw-semi-bold">2500</span>
         </div>
      </div>
      <div class="d-custom-flex px-4 justify-space-between align-items-center">
         <div class="fs-12 grey--text">
            <span class="v-badge rounded primary mr-2"></span>
            <span>Computer</span>
         </div>
         <div class="fs-12 grey--text">
            <span class="v-badge rounded info mr-2"></span>
            <span>Mobile</span>
         </div>
         <div class="fs-12 grey--text">
            <span class="v-badge rounded warning mr-2"></span>
            <span>Tablets</span>
         </div>
      </div>
   </div>
</template>

<script>
	import DeviceSeprations from "Components/Charts/DeviceSeprations";
	export default {
		components: {
			DeviceSeprations
		}
	};
</script>
