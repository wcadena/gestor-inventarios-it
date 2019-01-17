<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.radiosDefault')"
					colClasses="xs12 md6"
				>
					<p class="ma-0">{{ radioButton || 'null' }}</p>
					<v-radio-group v-model="radioButton">
						<v-radio color="primary" label="Radio 1" value="Radio-1"></v-radio>
						<v-radio color="primary" label="Radio 2" value="Radio-2"></v-radio>
					</v-radio-group>
				</app-card>
				<app-card 
					:heading="$t('message.radiosDirectionRow')" 
					colClasses="xs12 md6"
				>
					<v-radio-group v-model="row" row class="pt-0">
						<v-radio color="primary" label="Option 1" value="radio-1"></v-radio>
						<v-radio color="primary" label="Option 2" value="radio-2"></v-radio>
					</v-radio-group>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card :heading="$t('message.radiosDirectionColumn')" colClasses="xs12 md6">
					<v-radio-group v-model="column" column class="pt-0">
						<v-radio color="primary" label="Option 1" value="radio-1"></v-radio>
						<v-radio color="primary" label="Option 2" value="radio-2"></v-radio>
						<v-radio color="primary" label="Option 3" value="radio-3"></v-radio>
						<v-radio color="primary" label="Option 4" value="radio-4"></v-radio>
					</v-radio-group>
				</app-card>
				<app-card
					:heading="$t('message.radiosColors')"
					colClasses="xs12 md6"
				>
					<v-layout row wrap>
						<v-flex xs12 sm6 md6 class="col-height-auto">
							<v-radio-group v-model="ex7" column class="pt-0">
								<v-radio label="red" color="red" value="red"></v-radio>
								<v-radio label="red darken-3" color="red darken-3" value="red darken-3"></v-radio>
								<v-radio label="indigo" color="indigo" value="indigo"></v-radio>
								<v-radio 
									label="indigo darken-3"
									color="indigo darken-3"
									value="indigo darken-3"
								></v-radio>
								<v-radio 
									label="orange"
									color="orange"
									value="orange">
								</v-radio>
								<v-radio 
									label="orange darken-3"
									color="orange darken-3"
									value="orange darken-3">
								</v-radio>
							</v-radio-group>
						</v-flex>
						<v-flex xs12 sm6 md6 class="col-height-auto">
							<v-radio-group v-model="ex8" column class="pt-0">
								<v-radio 
									label="primary"
									color="primary"
									value="primary">
								</v-radio>
								<v-radio 
									label="secondary"
									color="secondary"
									value="secondary">
								</v-radio>
								<v-radio 
									label="success"
									color="success"
									value="success">
								</v-radio>
								<v-radio 
									label="info"
									color="info"
									value="info">
								</v-radio>
								<v-radio 
									label="warning"
									color="warning"
									value="warning">
								</v-radio>
								<v-radio 
									label="error"
									color="error"
									value="error">
								</v-radio>
							</v-radio-group>
						</v-flex>
					</v-layout>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.switchesColors')"
					colClasses="lg12 col-height-auto"
				>
					<v-layout row wrap>
						<v-flex xs12 sm6 md4 class="col-height-auto">
							<v-switch 
								label="red"
								v-model="ex11"
								color="red"
								value="red"
								hide-details>
							</v-switch>
							<v-switch 
								label="red darken-3"
								v-model="ex11"
								color="red darken-3"
								value="red darken-3"
								hide-details>
							</v-switch>
						</v-flex>
						<v-flex xs12 sm6 md4 class="col-height-auto">
							<v-switch 
								label="indigo"
								v-model="ex11"
								color="indigo"
								value="indigo"
								hide-details>
							</v-switch>
							<v-switch 
								label="indigo darken-3"
								v-model="ex11"
								color="indigo darken-3"
								value="indigo darken-3"
								hide-details>
							</v-switch>
						</v-flex>
						<v-flex xs12 sm6 md4 class="col-height-auto">
							<v-switch 
								label="orange"
								v-model="ex11"
								color="orange"
								value="orange"
								hide-details>
							</v-switch>
							<v-switch 
								label="orange darken-3"
								v-model="ex11"
								color="orange darken-3"
								value="orange darken-3"
								hide-details>
							</v-switch>
						</v-flex>
					</v-layout>
					<v-layout row wrap>
						<v-flex xs12 sm6 md4 class="col-height-auto">
							<v-switch 
								label="primary"
								v-model="ex11"
								color="primary"
								value="primary"
								hide-details>
							</v-switch>
							<v-switch 
								label="secondary"
								v-model="ex11"
								color="secondary"
								value="secondary"
								hide-details>
							</v-switch>
						</v-flex>
						<v-flex xs12 sm6 md4 class="col-height-auto">
							<v-switch 
								label="success"
								v-model="ex11"
								color="success"
								value="success"
								hide-details>
							</v-switch>
							<v-switch 
								label="info"
								v-model="ex11"
								color="info"
								value="info"
								hide-details>
							</v-switch>
						</v-flex>
						<v-flex xs12 sm6 md4 class="col-height-auto">
							<v-switch 
								label="warning"
								v-model="ex11"
								color="warning"
								value="warning"
								hide-details>
							</v-switch>
							<v-switch 
								label="error"
								v-model="ex11"
								color="error"
								value="error"
								hide-details>
							</v-switch>
						</v-flex>
					</v-layout>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
export default {
  data: function() {
    return {
      radioButton: "radio-1",
      column: null,
      row: null,
      ex7: [
        "red",
        "red darken-3",
        "indigo",
        "indigo darken-3",
        "orange",
        "orange darken-3"
      ],
      ex8: ["primary", "secondary", "success", "info", "warning", "error"],
      ex11: [
        "red",
        "indigo",
        "orange",
        "primary",
        "secondary",
        "success",
        "info",
        "warning",
        "error",
        "red darken-3",
        "indigo darken-3",
        "orange darken-3"
      ]
    };
  }
};
</script>
