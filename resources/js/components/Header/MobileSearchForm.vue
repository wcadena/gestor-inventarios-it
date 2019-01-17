<template>
	<div class="search-form-wrap" :class="{'search-slide': mobileSearchForm}">
		<v-btn fab dark small class="close-btn" @click="toggleSearchForm">
			<v-icon dark>close</v-icon>
		</v-btn>
		<div class="d-flex align-center justify-center centered">
			<v-form>
				<v-text-field 
					dark
					v-model="search"
					prepend-icon="search"
					placeholder="What are you looking for.."
					autocomplete="true"
					@click.stop="onClickSearch"
					color="white"
				>
				</v-text-field>
			</v-form>
		</div>
	</div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  data() {
    return {
      search: ""
    };
  },
  computed: {
    ...mapGetters(['mobileSearchForm'])
  },
  methods: {
    onClickSearch() {
      console.log("work");
    },
    toggleSearchForm() {
		 this.$store.dispatch('toggleSearchForm');
	 }
  }
};
</script>

