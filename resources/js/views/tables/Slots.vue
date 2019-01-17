<template>
	<div>
		<page-title-bar></page-title-bar>
		<app-section-loader :status="loader"></app-section-loader>
  	<v-container fluid grid-list-xl py-0>
			<v-layout row wrap>
			<app-card
				:heading="$t('message.itemsAndHeaders')"
				:fullBlock="true"
				customClasses="mb-30"
				colClasses="xl12 lg12 md12 sm12 xs12"
			>
				<v-data-table
					v-model="selected"
					v-bind:headers="headers"
					v-bind:items="items"
					select-all
					v-bind:pagination.sync="pagination"
					item-key="name"
				>
					<template slot="headers" slot-scope="props">
						<tr>
							<th>
								<v-checkbox
									color="primary"
									hide-details
									@click.native="toggleAll"
									:input-value="props.all"
									:indeterminate="props.indeterminate"
								></v-checkbox>
							</th>
							<th v-for="header in props.headers" :key="header.text"
								:class="['column sortable', pagination.descending ? 'desc' : 'asc', header.value === pagination.sortBy ? 'active' : '']"
								@click="changeSort(header.value)">
								<v-icon>arrow_upward</v-icon>
								{{ header.text }}
							</th>
						</tr>
					</template>
					<template slot="items" slot-scope="props">
						<tr :active="props.selected" @click="props.selected = !props.selected">
							<td>
								<v-checkbox
								color="primary"
								hide-details
								:input-value="props.selected"
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
						</tr>
					</template>
				</v-data-table>
			</app-card>
			<app-card
				:heading="$t('message.headerCell')"
				:fullBlock="true" 
				customClasses="mb-30"
				colClasses="xl12 lg12 md12 sm12 xs12"
			>
				<v-data-table
					v-bind:headers="headers"
					:items="items"
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
			<app-card
				:heading="$t('message.expand')"
				:fullBlock="true" 
				customClasses="mb-30"
				colClasses="xl12 lg12 md12 sm12 xs12"
			>
				<v-data-table
					:headers="headers"
					:items="items"
					hide-actions
					item-key="name"
				>
					<template slot="items" slot-scope="props">
						<tr @click="props.expanded = !props.expanded">
							<td>{{ props.item.name }}</td>
							<td>{{ props.item.calories }}</td>
							<td>{{ props.item.fat }}</td>
							<td>{{ props.item.carbs }}</td>
							<td>{{ props.item.protein }}</td>
							<td>{{ props.item.sodium }}</td>
							<td>{{ props.item.calcium }}</td>
							<td>{{ props.item.iron }}</td>
						</tr>
					</template>
					<template slot="expand" slot-scope="props">
						<v-card flat>
							<v-card-text>Peek-a-boo!</v-card-text>
						</v-card>
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
      items: [],
      pagination: {
        sortBy: "name"
      },
      selected: [],
      headers: [
        {
          text: "Dessert (100g serving)",
          align: "left",
          value: "name"
        },
        { text: "Calories", value: "calories" },
        { text: "Fat (g)", value: "fat" },
        { text: "Carbs (g)", value: "carbs" },
        { text: "Protein (g)", value: "protein" },
        { text: "Sodium (mg)", value: "sodium" },
        { text: "Calcium (%)", value: "calcium" },
        { text: "Iron (%)", value: "iron" }
      ]
    };
  },
  mounted() {
    this.getTablesData();
  },
  methods: {
    toggleAll() {
      if (this.selected.length) this.selected = [];
      else this.selected = this.items.slice();
    },
    changeSort(column) {
      if (this.pagination.sortBy === column) {
        this.pagination.descending = !this.pagination.descending;
      } else {
        this.pagination.sortBy = column;
        this.pagination.descending = false;
      }
    },
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
