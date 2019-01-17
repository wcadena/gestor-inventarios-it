<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.centeredTabs')"
					colClasses="xs12 md6"
				>
					<div class="mb-3">
						<p class="mb-0">Tabs can be centered by using the <code>centered prop</code>. Here we have also applied
						the <code>fixed</code> prop which gives all tab items a fixed size, regardless of content.</p>
					</div>
					<v-toolbar
						color="primary"
						dark
						tabs2
					>
						<v-tabs
							centered
							v-model="tabs2"
							slider-color="pink darken-1"
							color="transparent"
						>
							<v-tab                
								v-for="i in items"
								:key="i"
							>
								{{ i }}
							</v-tab>
						</v-tabs>
					</v-toolbar>
					<v-tabs-items v-model="tabs2">
						<v-tab-item
							v-for="i in items"
							:key="i"
						>
							<v-card>
								<v-card-text>{{ text }}</v-card-text>
							</v-card>
						</v-tab-item>
					</v-tabs-items>
				</app-card>
				<app-card
					:heading="$t('message.icons')"
					colClasses="xs12 md6"
				>
					<div class="mb-3">
						<p class="mb-0">By using the <code>icons</code> prop you can add icons to each tab item.</p>
					</div>
					<v-tabs icons-and-text centered dark color="warning">
						<v-tabs-slider color="red darken-1"></v-tabs-slider>
						<v-tab href="#tab-1">
							Recents
							<v-icon>phone</v-icon>
						</v-tab>
						<v-tab href="#tab-2">
							Favorites
							<v-icon>favorite</v-icon>
						</v-tab>
						<v-tab href="#tab-3">
							Nearby
							<v-icon>account_box</v-icon>
						</v-tab>
						<v-tab-item
							v-for="i in 3"
							:key="i"
							:id="'tab-' + i"
						>
							<v-card flat>
								<v-card-text>{{ text }}</v-card-text>
							</v-card>
						</v-tab-item>
					</v-tabs>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.toolbarTabs')"
					colClasses="xs12 md6"
				>
					<div class="mb-3">
						<p class="mb-0">The <code>v-tabs</code> component is highly customizable to suit your needs.
						You can get and set the currently active tab by using the v-model prop on the <code>v-tabs</code> component.</p>
					</div>
					<v-tabs 
						color="success"
						dark
						v-model="active"
						slider-color="red"
					>
						<v-tab
							v-for="tab in tabs"
							:key="tab"
							ripple>
							Item {{ tab }}
						</v-tab>
						<v-tab-item
							v-for="tab in tabs"
							:key="tab"
						>
							<v-card flat>
								<v-card-text>{{ text }}</v-card-text>
							</v-card>
						</v-tab-item>
					</v-tabs>
					<div class="text-xs-center mt-3">
						<v-btn @click.native="next" color="error">next tab</v-btn>
					</div>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
export default {
  data() {
    return {
      tabs: ["1", "2", "3"],
      tabs2: null,
      active: null,
      items: ["Item One", "Item Seventeen", "Item Five"],
      text:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
    };
  },
  methods: {
    next() {
      const active = parseInt(this.active);
      this.active = (active < 2 ? active + 1 : 0).toString();
    }
  }
};
</script>
