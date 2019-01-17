<template>
   <div class="checkout-wrap">
     <page-title-bar></page-title-bar>
      <v-container fluid pt-0>
			<app-card :fullBlock="true">
				<v-layout row wrap>
					<v-flex xs12 sm12 xl8 lg6 md6 class="col-height-auto">
						<h2 class="px-3 py-4 mb-0">{{$t('message.billingDetails')}}</h2>
						<div>
							<v-layout row wrap>
								<v-flex xs12 sm6 md6 >
									<v-text-field prepend-icon="perm_identity" label="First name" required></v-text-field>
								</v-flex>                     
								<v-flex xs12 sm6 md6>
									<v-text-field prepend-icon="perm_identity" label="Last name" required></v-text-field>
								</v-flex>
							</v-layout> 
							<v-layout row wrap>
								<v-flex xs12 sm6 md6>
									<v-text-field prepend-icon="mail" label="Email" required></v-text-field>
								</v-flex>
								<v-flex xs12 sm6 md6>
									<v-text-field prepend-icon="phone" label="Mobile No" required></v-text-field>
								</v-flex>
							</v-layout>
							<v-layout row wrap>
								<v-flex xs12 md12 sm12>
									<v-text-field prepend-icon="home" label="Address 1" required></v-text-field>
								</v-flex>
								<v-flex xs12 md12 sm12>
									<v-text-field prepend-icon="home"  label="Address 2"></v-text-field>
								</v-flex>
							</v-layout>
							<v-layout row wrap>
								<v-flex xs12 sm4 md4>
									<v-autocomplete
										:items="['Australia', 'Argentina', 'China','India', 'Japan', 'Spain', 'United States', 'United Kingdom', 'Germany']"
										label="Country"
										v-model="selectCountry"
										prepend-icon="public"
									></v-autocomplete>
								</v-flex>
								<v-flex xs12 sm4 md4>
									<v-text-field prepend-icon="location_city" label="State"></v-text-field>
								</v-flex>
								<v-flex xs12 sm4 md4>
									<v-text-field prepend-icon="domain" label="City"></v-text-field>
								</v-flex>
							</v-layout>	
							<v-layout row wrap>
								<v-flex xs12 sm12 md12 xl12 lg12 mb-4 class="col-height-auto">
									<v-checkbox v-model="addressCheck" label="Shipping address is the same as billing address." value=""></v-checkbox>
									<span class="error--text fs-12 d-block">All fields marked with an asterisk (*) are required</span>
								</v-flex>
							</v-layout>	
						</div>
					</v-flex>
					<v-flex xs12 sm12 xl4 lg6 md6 border-left-1>
						<div class="py-4 px-3">
							<v-data-table
								:headers="headers"
								:items="cart"
								hide-actions
							>
								<template slot="items" slot-scope="props">
									<td class="d-custom-flex align-items-center justify-center product-img">
										<img :src="props.item.productImg" class="img-responsive" height="63" width="63">
									</td>
									<td>{{ props.item.name }}</td>
									<td class="text-center">{{props.item.quantity}}</td>
									<td class="text-center">$ {{ props.item.total }}</td>
								</template>
							</v-data-table>
							<div class="d-custom-flex justify-space-between pa-4">
								<h4 class="mb-0">{{$t('message.total')}}</h4>
								<h4 class="mb-0">$ {{getTotalPrice}}</h4>
							</div> 
							<span class="text-xs-right d-block">
								<v-btn color="primary">{{$t('message.placeOrder')}}</v-btn>
							</span>
						</div>
					</v-flex>
				</v-layout>
			</app-card>
      </v-container>   
   </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      selectCountry: ["United Kingdom"],
      addressCheck: [],
      headers: [
        { text: "Product", sortable: false, align: "center" },
        { text: "", sortable: false },
        { text: "Quantity", sortable: false, align: "center" },
        { text: "Total", sortable: false, align: "center" }
      ]
    };
  },
  computed: {
    ...mapGetters(["cart"]),
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
  }
};
</script>