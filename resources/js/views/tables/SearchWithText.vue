<template>
	<div>
		<page-title-bar></page-title-bar>
		<app-section-loader :status="loader"></app-section-loader>
  	<v-container fluid grid-list-xl py-0>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.searchRow')"
					:fullBlock="true"
					colClasses="xl12 lg12 md12 sm12 xs12"
				>
					<v-card-title>Nutrition
						<v-spacer></v-spacer>
						<v-text-field
							append-icon="search"
							label="Search"
							single-line
							hide-details
							v-model="search"
						>
						</v-text-field>
					</v-card-title>
					<v-data-table
						v-bind:headers="headers"
						v-bind:items="items"
						v-bind:search="search"
					>
						<template slot="items" slot-scope="props">
							<td>
								<v-edit-dialog lazy>
									{{ props.item.name }}
									<v-text-field
										slot="input"
										label="Edit"
										v-model="props.item.name"
										single-line
										counter
										:rules="[max25chars]">
									</v-text-field>
								</v-edit-dialog>
							</td>
							<td>{{ props.item.calories }}</td>
							<td>{{ props.item.fat }}</td>
							<td>{{ props.item.carbs }}</td>
							<td>{{ props.item.protein }}</td>
							<td>{{ props.item.sodium }}</td>
							<td>{{ props.item.calcium }}</td>
							<td>
								<v-edit-dialog
									@open="tmp = props.item.iron"
									@save="props.item.iron = tmp || props.item.iron"
									large
									lazy
									>
								<div>{{ props.item.iron }}</div>
								<div slot="input" class="mt-3 title">Update Iron</div>
								<v-text-field
									slot="input"
									label="Edit"
									v-model="tmp"
									single-line
									counter
									autofocus
									:rules="[max25chars]"
									>
								</v-text-field>
								</v-edit-dialog>
							</td>
						</template>
						<template slot="pageText" slot-scope="{ pageStart, pageStop }">
							From {{ pageStart }} to {{ pageStop }}
						</template>
					</v-data-table>
				</app-card>
			</v-layout>
  	</v-container>
	</div>
</template>

<script>
import api from "../../api";

export default {
  data() {
    return {
      loader: true,
      max25chars: v => v.length <= 25 || "Input too long!",
      tmp: "",
      search: "",
      pagination: {},
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
