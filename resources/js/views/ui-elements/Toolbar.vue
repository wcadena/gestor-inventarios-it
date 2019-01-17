<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.theDefaultColorToolbar')"
					customClasses="mb-30"
					colClasses="xl12 lg12 md12 sm12 xs12"
				>
					<div class="mb-3">
						<p class="mb-0">The <code>v-toolbar</code> component is pivotal to any gui, as it generally is the primary source of site navigation.
							The toolbar component works great in conjunction with a navigation drawer for hiding links and presenting an activator to open the sidebar on mobile.</p>
					</div>
					<v-toolbar>
						<v-toolbar-title>Title</v-toolbar-title>
						<v-spacer></v-spacer>
						<v-toolbar-side-icon class="hidden-md-and-up"></v-toolbar-side-icon>
						<v-toolbar-items class="hidden-sm-and-down">
							<v-btn flat>Link One</v-btn>
							<v-btn flat>Link Two</v-btn>
							<v-btn flat>Link Three</v-btn>
						</v-toolbar-items>
					</v-toolbar>
				</app-card>
				<app-card
					:heading="$t('message.appBar')"
					customClasses="mb-30"
					colClasses="xl12 lg12 md12 sm12 xs12"
				>
					<v-toolbar dark color="primary">
						<v-toolbar-side-icon></v-toolbar-side-icon>
						<v-toolbar-title class="white--text">Title</v-toolbar-title>
						<v-spacer></v-spacer>
						<v-btn icon>
							<v-icon>search</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>apps</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>refresh</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>more_vert</v-icon>
						</v-btn>
					</v-toolbar>
				</app-card>
				<app-card
					:heading="$t('message.appBarWithExtension')"
					customClasses="mb-30"
					colClasses="xl12 lg12 md12 sm12 xs12"
				>
					<v-toolbar dark color="warning" extended>
						<v-toolbar-side-icon></v-toolbar-side-icon>
						<v-toolbar-title class="white--text" slot="extension">Title</v-toolbar-title>
						<v-spacer></v-spacer>
						<v-btn icon>
							<v-icon>search</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>apps</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>refresh</v-icon>
						</v-btn>
						<v-btn icon>
							<v-icon>more_vert</v-icon>
						</v-btn>
					</v-toolbar>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>
