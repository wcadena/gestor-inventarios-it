<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<v-flex xs12 md12 lg12 sm12 class="col-height-auto">
					<div>
						<user-detail></user-detail>
						<div class="profile-body">
							<v-layout row wrap>
								<v-flex xs12 md5 lg4 class="col-height-auto">
									<app-card
										customClasses="mb-30"
									>
										<contact-request></contact-request>
									</app-card>
									<app-card
										heading="Education"
										customClasses="mb-30"
										:fullScreen="true" 
										:reloadable="true" 
										:closeable="true"
										:fullBlock="true"
									>
										<education></education>
									</app-card>
									<app-card
										heading="skills"
										customClasses="warning white--text heading-light mb-30"
										:fullScreen="true" 
										:reloadable="true" 
										:closeable="true"
										:fullBlock="true"
									>
										<skills></skills>
									</app-card>
								</v-flex>
								<v-flex xs12 md7 lg8>
									<app-card
										heading="Activity"
									>
										<user-activity></user-activity>
									</app-card>
								</v-flex>
							</v-layout>
						</div>
					</div>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
import UserDetail from "Components/Widgets/UserDetail";
import Skills from "Components/Widgets/Skills";
import Education from "Components/Widgets/Education";
import ContactRequest from "Components/Widgets/ContactRequest";
import UserActivity from "Components/Widgets/UserActivity";

export default {
  components: {
    UserDetail,
    Skills,
    Education,
    ContactRequest,
    UserActivity
  }
};
</script>
