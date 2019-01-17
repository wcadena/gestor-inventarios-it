<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container grid-list-xl fluid pt-0>
			<app-card
				:heading="$t('message.grid')"
				contentCustomClass="text-xs-center"
			>
				<v-layout row wrap>
					<v-flex xs12>
						<v-card color="primary" class="theme--dark">
						<v-card-text>12</v-card-text>
						</v-card>
					</v-flex>
					<v-flex xs4 v-for="{n, index} in 3" :key="index">
						<v-card color="primary" class="white--text">
						<v-card-text>6</v-card-text>
						</v-card>
					</v-flex>
					<v-flex xs3 v-for="{n, index} in 4" :key="index">
						<v-card color="primary" class="theme--dark">
						<v-card-text>3</v-card-text>
						</v-card>
					</v-flex>
					<v-flex xs3 md1 v-for="{n,index} in 12" :key="index">
						<v-card color="primary" class="theme--dark">
						<v-card-text>1</v-card-text>
						</v-card>
					</v-flex>
				</v-layout>
			</app-card>
		</v-container>
	</div>
</template>
