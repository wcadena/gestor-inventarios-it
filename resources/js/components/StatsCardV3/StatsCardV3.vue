<template>
   <app-card>
		<div class="d-custom-flex justify-space-between">
			<div>
				<h2>{{value}}</h2>
				<p class="mb-0 fs-12 grey--text">{{title}}</p>
			</div>
			<div>
				<span class="icon-style">
					<i :class="`material-icons font-2x ${color}--text`">{{ icon }}</i>
				</span>
			</div>
		</div>
	</app-card>
</template>

<script>
export default {
  props: ["icon", "title", "value", "color"]
};
</script>

