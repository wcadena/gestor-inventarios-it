<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container grid-list-xl fluid pt-0>
			<app-card
				:heading="$t('message.defaultInput')"
				contentCustomClass="input-label"
			>
				<v-layout row wrap>
					<v-flex xs12 sm4>
						<span class="small pt-4 d-block">Normal with hint text/label</span>
					</v-flex>
					<v-flex xs12 sm8>
					<v-text-field name="input-1" label="Label Text" id="testing"></v-text-field>
					</v-flex>
				</v-layout>
				<v-layout row wrap>
					<v-flex xs12 sm4>
						<span class="small pt-4 d-block">Focus</span>
					</v-flex>
					<v-flex xs12 sm8>
						<v-text-field name="input-2" label="Label Text" value="Input text" class="input-group--focused"></v-text-field>
					</v-flex>
				</v-layout>
				<v-layout row wrap>
					<v-flex xs12 sm4>
						<span class="small pt-4 d-block">Normal with input text + label</span>
					</v-flex>
					<v-flex xs12 sm8>
						<v-text-field name="input-3" label="Label Text" value="Input text"></v-text-field>
					</v-flex>
				</v-layout>
				<v-layout row wrap>
					<v-flex xs12 sm4>
						<span class="small pt-4 d-block">Disabled</span>
					</v-flex>
					<v-flex xs12 sm8>
						<v-text-field name="input-3" label="Label Text" value="Input text" disabled></v-text-field>
					</v-flex>
				</v-layout>
			</app-card>
		</v-container>
	</div>
</template>
