<template>
   <div class="shop-wrapper">
		<page-title-bar></page-title-bar>
      <v-container fluid px-4 py-0 grid-list-xl>
         <ais-index 
            app-id="latency" 
            api-key="6be0576ff61c053d5f9a3225e2a90f76"
            index-name="ikea"
         >
				<v-navigation-drawer
					temporary
					absolute
					v-model="ecommerceSidebarFilter"
					:width="250"
				>
					<sidebar-filters></sidebar-filters>
				</v-navigation-drawer>
            <v-layout row wrap>
					<v-flex xl9 lg9 md9 sm12 xs12>
                  <product-items></product-items>  
               </v-flex>  
               <v-flex xl3 lg3 md3 sm0 xs0 class="shop-filter">
                  <sidebar-filters></sidebar-filters>
               </v-flex>
            </v-layout>  
         </ais-index>
      </v-container>   
  </div>
</template>

<script>
import ProductItems from "Components/Shop/ProductItems";
import SidebarFilters from "Components/Shop/SidebarFilters";
export default {
  components: {
    ProductItems,
    SidebarFilters
  },
  computed: {
    ecommerceSidebarFilter: {
      get() {
        return this.$store.getters.ecommerceSidebarFilter;
      },
      set(val) {
        this.$store.dispatch("toggleEcommerceSidebarFilter", val);
      }
    }
  }
};
</script>
