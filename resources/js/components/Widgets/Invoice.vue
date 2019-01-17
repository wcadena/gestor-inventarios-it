<template>
   <div class="table-responsive">
    <app-section-loader :status="loader"></app-section-loader>
		<v-data-table
			:headers="headers"
			:items="invoice"
			hide-actions
		>
			<template slot="headers" slot-scope="props">
				<tr>
					<th class="text-xs-left fw-bold" v-for="header in props.headers" :key="header.text">
						{{ header.text }}
					</th>
				</tr>
			</template>
			<template slot="items" slot-scope="props">
				<td>{{ props.item.id }}</td>
				<td>
					{{ props.item.name }}
				</td>
				<td>{{ props.item.date }}</td>
				<td><v-badge :class="props.item.labelClasses">{{ props.item.status }}</v-badge></td>
				<td>{{ props.item.amount }}</td>
			</template>
		</v-data-table>
	</div>
</template>

<script>
import api from "Api";

export default {
  data() {
    return {
      loader: true,
      invoice: [],
      headers: [
        {
          text: "#",
          sortable: false,
          value: "#"
        },
        {
          text: "Buyer",
          sortable: false,
          value: "Buyer"
        },
        {
          text: "Date",
          sortable: false,
          value: "Date"
        },
        {
          text: "Status",
          sortable: false,
          value: "status"
        },
        {
          text: "Amount",
          sortable: false,
          value: "amount"
        }
      ]
    };
  },
  mounted() {
    this.getInvoice();
  },
  methods: {
    getInvoice() {
      const self = this;
      api
        .get("vuely/invoice.js")
        .then(response => {
          self.loader = false;
          self.invoice = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>
