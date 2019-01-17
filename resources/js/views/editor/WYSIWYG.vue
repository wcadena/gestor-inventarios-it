<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<app-card
				:heading="$t('message.wYSIWYG')"
			>
				<wysiwyg v-model="myHTML" />
			</app-card>
		</v-container>
	</div>
</template>

<script>
export default {
  data: function() {
    return {
      myHTML: ""
    };
  }
};
</script>
