<template>
	<app-card
		customClasses="platform-user-stats"
	>
		<p class="grey--text fs-12 mb-2">{{$t('message.androidUsers')}}</p>
		<h4>4250(56%)</h4>
		<v-progress-linear height="6" color="info" v-model="androidUsers"></v-progress-linear>
		<p class="grey--text fs-12 mb-2">{{$t('message.iOSUsers')}}</p>
		<h4>3250(44%)</h4>
		<v-progress-linear color="error" height="6" v-model="iosUsers"></v-progress-linear>
	</app-card>
</template>

<script>
export default {
  data() {
    return {
      androidUsers: 70,
      iosUsers: 50
    };
  }
};
</script>

