<template>
  <div>
    <page-title-bar></page-title-bar>
    <app-section-loader :status="loader"></app-section-loader>
  	<v-container fluid grid-list-xl>
      <v-layout row wrap>
        <app-card
          :heading="$t('message.standard')"
            :fullBlock="true"
            colClasses="xl12 lg12 md12 sm12 xs12"
          >
          <div class="pa-3">
            <p class="mb-0">The standard data-table contains data with no additional functionality. You can opt out of displaying table actions that allow you to control the pagination of information with the <code>hide-actions</code> prop.</p>
          </div>
          <v-data-table
            v-bind:headers="headers"
            :items="items"
            hide-actions
          >
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
