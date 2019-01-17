<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<app-card
					colClasses="xs12 md6"
					:heading="$t('message.select')"
					contentCustomClass="input-label"
				>
					<div class="mb-3">
						<p>Select fields components are used for collecting user provided information from a list of options.</p>
					</div>
					<v-card flat>
						<v-card-text>
							<v-layout row wrap>
								<v-flex xs12 sm6>
									<span class="small pt-4 d-block">Standard</span>
								</v-flex>
								<v-flex xs12 sm6>
									<v-select  hide-details v-bind:items="items"  v-model="e1"  label="Select"  single-line  menu-props="bottom" ></v-select>
								</v-flex>
								<v-flex xs12 sm6>
									<span class="small pt-4 d-block">Standard with focus</span>
								</v-flex>
								<v-flex xs12 sm6>
									<v-select  hide-details v-bind:items="items"  v-model="e2"  label="Select"  class="input-group--focused"  item-value="text"></v-select>
								</v-flex>
								<v-flex xs12 sm6>
									<span class="small pt-4 d-block">Error</span>
								</v-flex>
								<v-flex xs12 sm6>
									<v-select  hide-details label="Select"  v-bind:items="items"  v-model="e3"  v-bind:error-messages="['Please select an option']"  item-value="text"></v-select>
								</v-flex>
								<v-flex xs12 sm6>
									<span class="small pt-4 d-block">Disabled</span>
								</v-flex>
								<v-flex xs12 sm6>
									<v-select  hide-details label="Select"  v-bind:items="items"  v-model="e4"  disabled></v-select>
								</v-flex>
							</v-layout>
						</v-card-text>
					</v-card>
				</app-card>
				<app-card
					:heading="$t('message.icons')"
					colClasses="xs12 md6"
					contentCustomClass="input-label"
				>
					<div class="mb-3">
						<p>Use a custom prepended or appended icon.</p>
					</div>
					<v-layout row wrap>
						<v-flex xs12 sm6>
							<span class="small pt-4 d-block">Prepended icon</span>
						</v-flex>
						<v-flex xs12 sm6>
							<v-select  hide-details v-bind:items="states"  v-model="e1"  label="Select"  single-line menu-props="auto" prepend-icon="map"></v-select>
						</v-flex>
						<v-flex xs12 sm6>
							<span class="small pt-4 d-block">Appended icon</span>
						</v-flex>
						<v-flex xs12 sm6>
							<v-select  hide-details v-bind:items="states"  v-model="e5"  label="Select"  single-line  menu-props="auto"  append-icon="map"></v-select>
						</v-flex>
					</v-layout>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
export default {
  data() {
    return {
      e1: null,
      e2: null,
      e3: null,
      e4: null,
      e5: "Arkansas",
      items: [
        { text: "State 1" },
        { text: "State 2" },
        { text: "State 3" },
        { text: "State 4" },
        { text: "State 5" },
        { text: "State 6" },
        { text: "State 7" }
      ],
      states: [
        "Alabama",
        "Alaska",
        "American Samoa",
        "Arizona",
        "Arkansas",
        "California",
        "Colorado",
        "Connecticut",
        "Delaware",
        "District of Columbia",
        "Federated States of Micronesia",
        "Florida",
        "Georgia",
        "Guam",
        "Hawaii",
        "Idaho",
        "Illinois",
        "Indiana",
        "Iowa",
        "Kansas",
        "Kentucky",
        "Louisiana",
        "Maine",
        "Marshall Islands",
        "Maryland",
        "Massachusetts",
        "Michigan",
        "Minnesota",
        "Mississippi",
        "Missouri",
        "Montana",
        "Nebraska",
        "Nevada",
        "New Hampshire",
        "New Jersey",
        "New Mexico",
        "New York",
        "North Carolina",
        "North Dakota",
        "Northern Mariana Islands",
        "Ohio",
        "Oklahoma",
        "Oregon",
        "Palau",
        "Pennsylvania",
        "Puerto Rico",
        "Rhode Island",
        "South Carolina",
        "South Dakota",
        "Tennessee",
        "Texas",
        "Utah",
        "Vermont",
        "Virgin Island",
        "Virginia",
        "Washington",
        "West Virginia",
        "Wisconsin",
        "Wyoming"
      ]
    };
  }
};
</script>
