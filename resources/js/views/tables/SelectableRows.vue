<template>
	<div>
		<page-title-bar></page-title-bar>
		<app-section-loader :status="loader"></app-section-loader>
		<v-container fluid grid-list-xl py-0>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.selectableRows')"
					:fullBlock="true"
					colClasses="xl12 lg12 md12 sm12 xs12"
				>
					<v-data-table
						:headers="headers"
						:items="items"
						:search="search"
						v-model="selected"
						item-key="name"
						select-all
					>
					<template slot="headerCell" slot-scope="props">
						<v-tooltip bottom>
							<span slot="activator">
								{{ props.header.text }}
							</span>
							<span>
								{{ props.header.text }}
							</span>
						</v-tooltip>
					</template>
					<template slot="items" slot-scope="props">
						<td>
							<v-checkbox
								color="primary"
								hide-details
								v-model="props.selected"
							></v-checkbox>
						</td>
						<td>{{ props.item.name }}</td>
						<td>{{ props.item.calories }}</td>
						<td>{{ props.item.fat }}</td>
						<td>{{ props.item.carbs }}</td>
						<td>{{ props.item.protein }}</td>
						<td>{{ props.item.sodium }}</td>
						<td>{{ props.item.calcium }}</td>
						<td>{{ props.item.iron }}</td>
					</template>
					</v-data-table>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
import api from "Api";

export default {
  data() {
    return {
      loader: true,
      search: "",
      selected: [],
      headers: [
        {
          text: "Dessert (100g serving)",
          align: "left",
          sortable: false,
          value: "name"
        },
        { text: "Calories", value: "calories" },
        { text: "Fat (g)", value: "fat" },
        { text: "Carbs (g)", value: "carbs" },
        { text: "Protein (g)", value: "protein" },
        { text: "Sodium (mg)", value: "sodium" },
        { text: "Calcium (%)", value: "calcium" },
        { text: "Iron (%)", value: "iron" }
      ],
      items: []
    };
  },
  mounted() {
    this.getTablesData();
  },
  methods: {
    getTablesData() {
      api
        .get("vuely/tablesData.js")
        .then(response => {
          this.loader = false;
          this.items = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>
