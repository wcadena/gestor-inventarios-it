<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl py-0>
			<app-card
				:heading="$t('message.stepper')"
			>
				<v-stepper v-model="e1">
					<v-stepper-header>
						<v-stepper-step step="1" :complete="e1 > 1">{{$t("message.step1")}}</v-stepper-step>
						<v-divider></v-divider>
						<v-stepper-step step="2" :complete="e1 > 2">{{$t("message.step2")}}</v-stepper-step>
						<v-divider></v-divider>
						<v-stepper-step step="3">{{$t("message.step3")}}</v-stepper-step>
					</v-stepper-header>
					<v-stepper-items>
						<v-stepper-content step="1">
							<v-card color="grey lighten-1" height="200px"></v-card>
							<v-btn color="primary" @click.native="e1 = 2">{{ $t('message.continue') }}</v-btn>
							<v-btn color="error">{{ $t('message.cancel') }}</v-btn>
						</v-stepper-content>
						<v-stepper-content step="2">
							<v-card color="grey lighten-1" height="200px"></v-card>
							<v-btn color="primary" @click.native="e1 = 3">{{ $t('message.continue') }}</v-btn>
							<v-btn color="error">{{ $t('message.cancel') }}</v-btn>
						</v-stepper-content>
						<v-stepper-content step="3">
							<v-card color="grey lighten-1" height="200px"></v-card>
							<v-btn color="primary" @click.native="e1 = 1">{{ $t('message.continue') }}</v-btn>
							<v-btn color="error">{{ $t('message.cancel') }}</v-btn>
						</v-stepper-content>
					</v-stepper-items>
				</v-stepper>
			</app-card>
		</v-container>
	</div>
</template>

<script>
export default {
  data() {
    return {
      e1: 0
    };
  }
};
</script>
