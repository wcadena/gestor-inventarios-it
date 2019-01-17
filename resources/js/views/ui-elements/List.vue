<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container grid-list-xl fluid pt-0>
			<app-card
				:heading="$t('message.list')"
			>
				<v-layout row wrap>
					<v-flex xs12 md6>
						<v-card class="elevation-5">
							<v-toolbar color="primary" dark>
								<v-toolbar-side-icon></v-toolbar-side-icon>
								<v-card-title>List 1</v-card-title>
							</v-toolbar>
							<v-list two-line>
								<v-subheader>Today</v-subheader>
								<template v-for="item in list1">
									<v-list-tile avatar v-bind:key="item.title" @click="">
									<v-list-tile-avatar>
										<img v-bind:src="item.avatar">
									</v-list-tile-avatar>
									<v-list-tile-content>
										<v-list-tile-title v-html="item.title"></v-list-tile-title>
										<v-list-tile-sub-title v-html="item.subtitle"></v-list-tile-sub-title>
									</v-list-tile-content>
									</v-list-tile>
								</template>
							</v-list>
						</v-card>
					</v-flex>
					<v-flex xs12 md6>
						<v-card class="elevation-5">
							<v-toolbar color="warning" dark>
								<v-toolbar-side-icon></v-toolbar-side-icon>
								<v-card-title>List 2</v-card-title>
								<v-spacer></v-spacer>
							</v-toolbar>
							<v-divider></v-divider>
							<v-list>
								<v-list-tile avatar v-for="item in list2" v-bind:key="item.title" @click="">
									<v-list-tile-action>
										<v-icon v-if="item.icon" color="orange">star</v-icon>
									</v-list-tile-action>
									<v-list-tile-content>
										<v-list-tile-title v-text="item.title"></v-list-tile-title>
									</v-list-tile-content>
									<v-list-tile-avatar>
										<img v-bind:src="item.avatar"/>
									</v-list-tile-avatar>
								</v-list-tile>
							</v-list>
						</v-card>
					</v-flex>
				</v-layout>
			</app-card>
		</v-container>
	</div>
</template>

<script>
export default {
  data() {
    return {
      list1: [
        {
          avatar: "/static/avatars/user-6.jpg",
          title: "Brunch this weekend?",
          subtitle:
            "<span class='grey--text text--darken-2'>Ali Connors</span> — I'll be in your neighborhood doing errands this weekend. Do you want to hang out?"
        },
        {
          avatar: "/static/avatars/user-7.jpg",
          title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
          subtitle:
            "<span class='grey--text text--darken-2'>to Alex, Scott, Jennifer</span> — Wish I could come, but I'm out of town this weekend."
        },
        {
          avatar: "/static/avatars/user-10.jpg",
          title: "Oui oui",
          subtitle:
            "<span class='grey--text text--darken-2'>Sandra Adams</span> — Do you have Paris recommendations? Have you ever been?"
        }
      ],
      list2: [
        {
          icon: true,
          title: "Jason Oner",
          avatar: "/static/avatars/user-11.jpg"
        },
        {
          icon: true,
          title: "Smith Oner",
          avatar: "/static/avatars/user-7.jpg"
        },
        { title: "Travis Howard", avatar: "/static/avatars/user-12.jpg" },
        { title: "Ali Connors", avatar: "/static/avatars/user-9.jpg" },
        { title: "Cindy Baker", avatar: "/static/avatars/user-8.jpg" }
      ]
    };
  }
};
</script>
