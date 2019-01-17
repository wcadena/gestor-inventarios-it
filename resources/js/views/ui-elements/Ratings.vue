<template>
  <div>
		<page-title-bar></page-title-bar>
		<v-container grid-list-xl pt-0>
			<v-layout row wrap>
         	<app-card
					:heading="$t('message.default')"
					customClasses="mb-30"
					colClasses="xl6 lg6 md6 sm12 xs12"
				>
					<div class="mb-4">
						<p>The <code>v-rating</code> component provides a simple interface for gathering user feedback.</p>
					</div>
					<div class="text-xs-center">
						<v-rating v-model="defaultRating"></v-rating>
					</div>
         	</app-card>
				<app-card
					:heading="$t('message.sizeVariants')"
					customClasses="mb-30"
					colClasses="xl6 lg6 md6 sm12 xs12"
				>
					<div class="mb-4">
						<p>Utilize the same sizing classes available in <code>v-icon</code> or provide your own with the size prop.</p>
					</div>
					<div class="text-xs-center">
						<v-rating
							v-model="rating"
							background-color="purple lighten-3"
							color="purple"
							small
						></v-rating>
						<v-rating
							v-model="rating"
							background-color="pink lighten-3"
							color="pink"
						></v-rating>
						<v-rating
							v-model="rating"
							background-color="orange lighten-3"
							color="orange"
							medium
						></v-rating>
						<v-rating
							v-model="rating"
							background-color="green lighten-3"
							color="green"
							large
						></v-rating>
						<v-rating
							v-model="rating"
							background-color="red lighten-3"
							color="red"
							x-large
						></v-rating>
						<v-rating
							v-model="rating"
							background-color="indigo lighten-3"
							color="indigo"
							size="55"
						></v-rating>
					</div>
         	</app-card>
			</v-layout>
		</v-container>
   </div>
</template>

<script>
  export default {
    data: () => ({
	  defaultRating: 3,
      rating: 3
    })
  }
</script>