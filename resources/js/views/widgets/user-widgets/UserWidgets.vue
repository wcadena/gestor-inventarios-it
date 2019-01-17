<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<!-- Support Request -->
				<app-card
					colClasses="xl4 lg4 md4 sm6 xs12"
					:heading="$t('message.supportRequest')"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
					:footer="true"
					:fullBlock="true"
					customClasses="support-widget-wrap"
				>
					<support-request></support-request>
					<div slot="footer" class="justify-space-between footer-flex align-items-center">
						<span class="grey--text d-custom-flex align-items-center">
							<i class="zmdi zmdi-replay mr-2"></i> 
							<span class="fs-12">Updated 10 min ago</span>
						</span>
						<v-btn class="ma-0" color="primary" small>{{$t('message.assignNow')}}</v-btn>
					</div>    
				</app-card>
				<app-card 
					:fullBlock="true"
					colClasses="xl4 lg4 md4 sm6 xs12"
				>
					<blog-layout-two></blog-layout-two>
				</app-card>
				<app-card 
					:fullBlock="true"
					colClasses="xl4 lg4 md4 sm12 xs12"
				>
					<blog-layout-three></blog-layout-three>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card 
					colClasses="xl12 lg12 md12 xs12 sm12"
					heading="New Emails"
					:fullBlock="true"
					:closeable="true"
					:reloadable="true"
					:fullScreen="true"
				>
					<new-emails></new-emails>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
import SupportTickets from "Components/Widgets/SupportTickets";
import ToDoList from "Components/Widgets/ToDoList";
import AddNewBlog from "Components/Widgets/AddNewBlog";
import ActiveUser from "Components/Widgets/ActiveUser";
import SupportRequest from "Components/Widgets/SupportRequest";
import UsersList from "Components/Widgets/UsersList";
import ProjectStatus from "Components/Widgets/ProjectStatus";
import Invoice from "Components/Widgets/Invoice";
import BlogLayoutOne from "Components/Widgets/BlogLayoutOne";
import BlogLayoutTwo from "Components/Widgets/BlogLayoutTwo";
import BlogLayoutThree from "Components/Widgets/BlogLayoutThree";
import QuoteOfTheDay from "Components/Widgets/QuoteOfTheDay";
import NewEmails from "Components/Widgets/NewEmails";

import { activeUser } from "../data";

export default {
  components: {
    SupportTickets,
    ToDoList,
    AddNewBlog,
    ActiveUser,
    SupportRequest,
    UsersList,
    ProjectStatus,
    Invoice,
    BlogLayoutOne,
    BlogLayoutTwo,
    BlogLayoutThree,
    QuoteOfTheDay,
    NewEmails
  },
  data() {
    return {
      activeUser
    };
  }
};
</script>
