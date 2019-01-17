<template>
	<div class="hover-wrapper">
		<page-title-bar></page-title-bar>
		<v-container grid-list-xl pt-0>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.simple')"
					customClasses="mb-30"
					colClasses="xl6 lg6 md6 sm6 xs12"
					contentCustomClass="d-flex justify-space-between"
				>
					<div class="mb-4">
						<p>The <code>v-hover</code> component provides a clean interface for handling hover states for any component.</p>
					</div>
					<v-hover>
						<v-card
							slot-scope="{ hover }"
							:class="`elevation-${hover ? 12 : 2}`"
							class="mx-auto img-responsive"
							width="500"
						>
							<v-img
							:aspect-ratio="16/9"
							src="/static/img/blog-3.jpg	"
							></v-img>
							<v-card-title>
							<div>
								<h3 class="mb-0 fw-normal">Cafe Badilico</h3>
								<div class="d-flex align-end">
									<v-rating
									:value="value"
									color="amber"
									dense
									half-increments
									readonly
									size="14"
									></v-rating>
									<div class="ml-2 grey--text text--darken-2 fs-12">
										<span>{{ value }}</span>
										<span>({{ reviews }})</span>
									</div>
								</div>
							</div>
							<v-spacer></v-spacer>
							<v-btn icon class="mr-0">
								<i class="zmdi zmdi-chevron-right font-lg"></i>
							</v-btn>
							</v-card-title>
						</v-card>
					</v-hover>
				</app-card>
				<app-card
					:heading="$t('message.transitions')"
					customClasses="mb-30"
					colClasses="xl6 lg6 md6 sm6 xs12"
				>
					<div class="mb-4">
						<p>Create highly customized components that respond to user interaction.</p>
					</div>
					<v-hover>
						<v-card
							slot-scope="{ hover }"
							class="mx-auto"
							color="white lighten-4"
							max-width="450"
						>
							<v-img
							:aspect-ratio="16/9"
							src="https://cdn.vuetifyjs.com/images/cards/kitchen.png"
							>
								<v-expand-transition>
									<div
										v-if="hover"
										class="d-flex transition-fast-in-fast-out primary darken-3 v-card--reveal font-2x white--text"
										style="height: 100%;"
									>
										QW cooking utensils
									</div>
								</v-expand-transition>
							</v-img>
							<v-card-text
							class="pt-4"
							style="position: relative;"
							>
								<v-btn
									absolute
									color="primary"
									class="white--text"
									fab
									right
									top
								>
									<i class="zmdi zmdi-shopping-cart-plus font-lg"></i>
								</v-btn>
								<h3 class="fw-normal primary--text mb-0">QW cooking utensils</h3>
								<span class="font-sm grey--text mb-2 d-block">For the perfect meal</span>
								<p class="mb-2">
									Our Vintage kitchen utensils delight any chef.<br>
									Made of bamboo by hand
								</p>
							</v-card-text>
						</v-card>
					</v-hover>
				</app-card>
			</v-layout>
		</v-container>
    </div>
</template>

<script>
  export default {
    data: () => ({
      reviews: 413,
      value: 4.5
    })
  }
</script>

<style>
.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: .5;
  position: absolute;
  width: 100%;
}
</style>