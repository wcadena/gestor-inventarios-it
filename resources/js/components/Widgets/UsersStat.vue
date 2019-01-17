<template>
	<app-card
		customClasses="user-stats-wrap"
	>
		<p class="grey--text fs-12 mb-2">{{$t('message.maleUsers')}}</p>
		<h4>4250(56%)</h4>
		<v-progress-linear height="6" v-model="maleUsers"></v-progress-linear>
		<p class="grey--text fs-12 mb-2">{{$t('message.femaleUsers')}}</p>
		<h4>3250(44%)</h4>
		<v-progress-linear color="warning" height="6" v-model="femaleUsers"></v-progress-linear>
	</app-card>
</template>

<script>
export default {
  data() {
    return {
      maleUsers: 70,
      femaleUsers: 50
    };
  }
};
</script>
