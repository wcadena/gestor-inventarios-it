<template>
   <app-card
		colClasses="xl4 lg4 md6 sm6 xs12"
		customClasses="product-item"
		:footer="true"
	>
		<h5 class="mb-2">{{data.name}}</h5>
		<div class="overlay-wrap pos-relative mb-4">
			<img class="img-responsive" :src="data.image" height="220" width="220">
			<div class="overlay-content primary lighten-2 d-custom-flex justify-center align-items-center">
				<v-btn
					v-if="ifItemExistInCart(data)"
					:to="`/${getCurrentAppLayoutHandler() + '/ecommerce/cart'}`"
					class="ma-0 warning"
					small
				>
					View Cart
				</v-btn>
				<v-btn
					v-else
					class="ma-0 light"
					@click="addProductToCart(data)"
					:loading="loading"
					:disabled="loading"
					small
				>
					Add To Cart
				</v-btn>
			</div>
		</div>
		<div class="product-info">
			<span class="error--text fw-semi-bold d-block mb-2">${{data.price}}</span>
			<span class="fs-12 grey--text d-block mb-2">{{data.category}}</span>
			<p class="fs-14 mb-0">{{ textTruncate(data.description) }}</p>
		</div>
		<div slot="footer" class="justify-space-between d-custom-flex align-items-center">
			<a href="javascript:void(0)" class="primary--text fs-14">Show details</a>
			<v-btn class="ma-0" icon>
				<v-icon class="grey--text">more_vert</v-icon>
			</v-btn>
		</div>
   </app-card>
</template>

<script>
import { mapGetters } from "vuex";
import { textTruncate, getCurrentAppLayout } from "Helpers/helpers";

export default {
  props: ["data"],
  data() {
    return {
      loading: false
    };
  },
  computed: {
    ...mapGetters(["cart"])
  },
  methods: {
		getCurrentAppLayoutHandler() {
			return getCurrentAppLayout(this.$router);
		},
	  textTruncate(text) {
      	return textTruncate(text, 100);
    	},
    /*
       * Function to add product in cart
      */
    addProductToCart(item) {
      this.loading = true;
      setTimeout(() => {
        this.loading = false;
        this.$store.dispatch("addProductToCart", item);
		}, 2000);
		console.log(item);
    },
    /**
     * Find item exists or not in cart
     */
    ifItemExistInCart(result) {
      let exists = false;
      for (let item of this.cart) {
        if (item.id == result.objectID) {
          exists = true;
        }
      }
      return exists;
    }
  }
};
</script>

