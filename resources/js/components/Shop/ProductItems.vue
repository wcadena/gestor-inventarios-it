<template>
   <div class="shop-content-wrap">
      <div class="d-custom-flex justify-space-between align-items-center">
			<div class="shop-header d-custom-flex">
				<div class="ham-menu-sm d-none">
					<v-btn flat  icon class="mr-3 my-0" @click="toggleEcommerceSidebar">
						<v-icon class="grey--text">menu</v-icon>
					</v-btn>
				</div>
				<div class="app-selectbox-sm">
					<ais-sort-by-selector :indices="[
							{ name: 'ikea', label: 'Default'},
							{ name: 'ikea_price_asc', label: 'Lowest price' },
							{ name: 'ikea_price_desc', label: 'Highest price' }
						]"
					></ais-sort-by-selector>
				</div>
			</div>
         <ais-stats></ais-stats>
      </div>
		<ais-results class="layout row wrap mb-4" :results-per-page="12">
			<template slot-scope="{ result }">
				<product-item :data="result"></product-item>
			</template>
		</ais-results>
		<div class="pagination-wrap">
			<ais-pagination class="mb-4" :classNames="{
				'ais-pagination': 'pagination',
				'ais-pagination__item': 'pagination__item',
				'ais-pagination__item--active': 'pagination__item--active primary',
				'ais-pagination__item--previous': 'pagination__navigation',
				'ais-pagination__item--next': 'pagination__navigation',
				'ais-pagination__item--disabled': 'disabled'

			}" v-on:page-change="onPageChange"/>
		</div>
   </div>   
</template>
<script>
import { mapGetters } from "vuex";
import ProductItem from "./ProductItem";

export default {
  components: {
    ProductItem
  },
  methods: {
    onPageChange() {
      window.scrollTo(0, 0);
    },
    toggleEcommerceSidebar() {
      this.$store.dispatch("toggleEcommerceSidebarFilter", true);
    }
  }
};
</script>
