<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container grid-list-xl fluid pt-0>
			<v-layout row wrap>
				<app-card 
					:heading="$t('message.activator')" 
					colClasses="xs12 sm4 md4"
				>
					<v-menu offset-y>
						<v-btn color="primary" dark slot="activator">Dropdown</v-btn>
						<v-list>
							<v-list-tile v-for="item in list1" :key="item.title" @click="">
								<v-list-tile-title>{{ item.title }}</v-list-tile-title>
							</v-list-tile>
						</v-list>
					</v-menu>
				</app-card>
				<app-card 
					:heading="$t('message.hover')" 
					colClasses="xs12 sm4 md4"
				>
					<v-menu open-on-hover top offset-y>
						<v-btn color="error" dark slot="activator">Dropdown</v-btn>
						<v-list>
							<v-list-tile v-for="item in list1" :key="item.title" @click="">
								<v-list-tile-title>{{ item.title }}</v-list-tile-title>
							</v-list-tile>
						</v-list>
					</v-menu>
				</app-card>
				<app-card 
					:heading="$t('message.menus')" 
					colClasses="xs12 sm4 md4"
				>
					<v-menu bottom right>
						<v-btn icon slot="activator">
							<v-icon>more_vert</v-icon>
						</v-btn>
						<v-list>
							<v-list-tile v-for="item in list1" :key="item.title" @click="">
								<v-list-tile-title>{{ item.title }}</v-list-tile-title>
							</v-list-tile>
						</v-list>
					</v-menu>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
export default {
  data: () => ({
    list1: [
      { title: "Refresh" },
      { title: "Settings" },
      { title: "Help" },
      { title: "Sign Out" }
    ]
  })
};
</script>
