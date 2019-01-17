<!-- Shopping Cart Widget -->
<template>
  <div>
    <app-section-loader :status="loader"></app-section-loader>
  	<v-data-table :headers="headers" :items="items" v-model="selected" item-key="id" select-all hide-actions>
		<template slot="headers" slot-scope="props">
			<tr>
				<th>
					<v-checkbox color="primary" hide-details @click.native="toggleAll" :input-value="props.all" :indeterminate="props.indeterminate"></v-checkbox>
				</th>
				<th class="text-xs-left fw-bold" v-for="header in props.headers" :key="header.text">
					{{ header.text }}
				</th>
			</tr>
		</template>
		<template slot="items" slot-scope="props">
			<tr>
				<td>
					<v-checkbox color="primary" hide-details v-model="props.selected"></v-checkbox>
				</td>
				<td>{{ props.item.id }}</td>
				<td>{{ props.item.productName }}</td>
				<td>{{ props.item.quantity }}</td>
				<td><v-badge :class="props.item.labelClasses">{{ props.item.status }}</v-badge></td>
				<td>$ {{ props.item.amount }}</td>
				<td>
					<v-btn flat icon color="error" @click="onDeleteCartItem(props.item)">
              		<v-icon class="zmdi zmdi-delete"></v-icon>
            	</v-btn>
				</td>
			</tr>
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
      selected: [],
      headers: [
        {
          text: "Order Id",
          align: "center",
          sortable: false,
          value: "id"
        },
        {
          text: "Product Name",
          align: "center",
          sortable: false,
          value: "productName"
        },
        {
          text: "Quantity",
          align: "center",
          sortable: false,
          value: "quantity"
        },
        {
          text: "Status",
          align: "center",
          sortable: false,
          value: "status"
        },
        {
          text: "Amount",
          align: "center",
          sortable: false,
          value: "amount"
        },
        {
          text: "",
          align: "center",
          sortable: false
        }
      ],
      items: []
    };
  },
  mounted() {
    this.getShoppingCart();
  },
  methods: {
    toggleAll() {
      if (this.selected.length) this.selected = [];
      else this.selected = this.items.slice();
    },
    // on delete cart item
    onDeleteCartItem(item) {
      let index = this.items.indexOf(item);
      this.items.splice(index, 1);
    },
    getShoppingCart() {
      api
        .get("vuely/recentOrders.js")
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
