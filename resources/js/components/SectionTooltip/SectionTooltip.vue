<template>
	<div class="dash-title">
		<span>{{title}}</span>
		<v-tooltip v-model="open" top>
			<a href="javascript:void(0);" slot="activator">
				<v-icon>ti-help-alt</v-icon>
			</a>
			<span>{{tooltip}}</span>
		</v-tooltip>
	</div>
</template>

<script>
export default {
  props: ["title", "tooltip"],
  data() {
    return {
      open: false
    };
  }
};
</script>

