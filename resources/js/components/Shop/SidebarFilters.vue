<template>
   <div class="sidebar-filter-wrap">
		<app-card
			customClasses="mb-4"
		>
			<search-box></search-box>
      </app-card>
      <app-card
         customClasses="mb-4"
      >
			<ais-refinement-list 
				attribute-name="category"
				:limit="5"
			>
         	<h6 slot="header">CATEGORY</h6>
         </ais-refinement-list>
      </app-card>
      <app-card
         customClasses="mb-4"
      >
			<ais-range-input
  				attribute-name="price"
			>
        		<h6 slot="header">PRICE</h6>
         </ais-range-input>
      </app-card>

      <app-card
         customClasses="mb-4"
      >
         <ais-refinement-list 
				attribute-name="materials" 
				:limit="5"
			>
         	<h6 slot="header">MATERIAL</h6>
         </ais-refinement-list>
      </app-card>

      <app-card
         customClasses="mb-4"
      >
         <ais-refinement-list 
				attribute-name="colors" 
				:limit="5"
			>
         	<h6 slot="header">COLOR</h6>
         </ais-refinement-list>
      </app-card>

      <app-card
         customClasses="mb-4"
      >
         <ais-rating 
				attribute-name="rating"
			>
            <h6 slot="header">RATING</h6>
         </ais-rating>
      </app-card>
		 <app-card
		 	customClasses="mb-4"
		 >
         <ais-clear>
				<h5 class="mb-0">Clear all filters</h5>
			</ais-clear>
      </app-card>
   </div>
</template>
<script>
	import SearchBox from "./SearchBox";
	export default {
		components: {
			SearchBox
		}
	};
</script>