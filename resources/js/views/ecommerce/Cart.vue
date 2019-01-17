<template>
	<div class="cart-wrapper">
		<page-title-bar></page-title-bar>
		<v-container fluid pt-0> 
       <v-layout row wrap>
          <app-card
            :fullBlock="true"
            colClasses="xl12 lg12 md12 sm12 xs12 pa-0"
          >
          <app-section-loader :status="loader"></app-section-loader>
          <v-data-table :headers="headers" :items="cart" hide-actions>
            <template slot="items" slot-scope="props">
              <td class="d-custom-flex align-items-center justify-center product-item px-1">
                <img :src="props.item.productImg" class="img-responsive" height="100" width="100">
              </td>
              <td><h6 class="mb-0">{{ props.item.name }}</h6></td>
              <td class="text-center count-wrap">
                <input
                  type="number"
                  min="1"
                  :value="props.item.quantity"
                  @change="onChangeQuantity($event, props.item)"
                >
              </td>
              <td class="text-center">
                <span class="fw-light error--text">$ {{ props.item.price }}</span>
              </td>
              <td class="text-center">${{ props.item.total }}</td>
              <td class="text-center">
                <v-btn icon class="mx-0" @click="deleteProductFromCart(props.item)">
                  <v-icon color="grey lighten-1" >close</v-icon>
                </v-btn>
              </td>
            </template>
            <template slot="no-data">
              <span>{{$t('message.noItemsFound')}}</span>
            </template>
            <template slot="footer">
              <td colspan="2">
                <v-text-field solo placeholder="Apply Promo Code"></v-text-field>
              </td>
              <td class="text-center">
                <v-btn class="ma-0" color="warning">Apply</v-btn>
              </td>
              <td class="text-center">
                <span class="fw-semi-bold">{{$t('message.total')}}</span>
              </td>
              <td class="text-center">
                <span class="fw-semi-bold">${{getTotalPrice}}</span>
              </td>
              <td>
                <v-btn
                  class="ma-0"
                  color="primary"
                  :to="`/${getCurrentAppLayoutHandler() + '/ecommerce/checkout'}`"
                >
                  Checkout
                </v-btn>
              </td>
            </template>
          </v-data-table>
          <delete-confirmation-dialog
            ref="deleteConfirmationDialog"
            heading="Are You Sure You Want To Delete?"
            message="Are you sure you want to delete this product permanently?"
            @onConfirm="onDeleteProductFromCart"
          >
          </delete-confirmation-dialog>
        </app-card>
			</v-layout>
		</v-container>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import { getCurrentAppLayout } from "Helpers/helpers";
export default {
  data() {
    return {
      selectDeletedProduct: null,
      loader: false,
      headers: [
        {
          text: "",
          align: "center",
          sortable: false,
          class: "w-10"
        },
        {
          text: "Product",
          value: "product",
          sortable: false,
          class: "w-50"
        },
        {
          text: "Quantity",
          value: "quantity",
          sortable: false,
          align: "center",
          class: "w-10"
        },
        {
          text: "Price",
          value: "price",
          sortable: false,
          align: "center",
          class: "w-10"
        },
        {
          text: "Total",
          value: "total",
          sortable: false,
          align: "center",
          class: "w-10"
        },
        {
          text: "Remove",
          sortable: false,
          align: "center",
          class: "w-10"
        }
      ]
    };
  },
  computed: {
    ...mapGetters(["cart"]),
    /**
     *  to get total price of all the items
     */
    getTotalPrice() {
      let totalPrice = 0;
      if (this.cart.length > 0) {
        for (const item of this.cart) {
          totalPrice += item.total;
        }
        return totalPrice.toFixed(2);
      } else {
        return totalPrice;
      }
    }
  },
  methods: {
    getCurrentAppLayoutHandler() {
      return getCurrentAppLayout(this.$router);
    },
    /**
     * show total price of product according to quantity change
     */
    onChangeQuantity(e, cartItem) {
      this.$store.dispatch("changeQuantityHandler", {
        e,
        cartItem
      });
    },
    /**
     * open dialog to delete product
     */
    deleteProductFromCart(product) {
      this.$refs.deleteConfirmationDialog.openDialog();
      this.selectDeletedProduct = product;
    },
    /**
     * delete product
     */
    onDeleteProductFromCart() {
      this.$refs.deleteConfirmationDialog.close();
      this.loader = true;
      setTimeout(() => {
        this.loader = false;
        this.$store.dispatch(
          "onDeleteProductFromCart",
          this.selectDeletedProduct
        );
      }, 1500);
    }
  }
};
</script>
