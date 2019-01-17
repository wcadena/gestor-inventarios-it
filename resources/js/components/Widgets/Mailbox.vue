<template>
	<app-card 
		:heading="$t('message.mailbox')" 
		:fullBlock="true" 
		:withTabs="true" 
		:footer="true" 
		:tabs="[$t('message.inbox'), $t('message.sent'), $t('message.draft')]" 
		@onChangeTabCallback="onChangeTab" 
		customClasses="mailbox-wrapper"
	>
		<v-list three-line v-if="emails && emails.length > 0" class="list-aqua-ripple">
			<template v-for="mail in emails">
				<v-list-tile avatar :key="mail.id" @click="" ripple>
					<v-list-tile-avatar>
						<img :src="mail.from.avatar" class="img-responsive" v-if="mail.type === 'inbox'">
						<img :src="mail.to.avatar" class="img-responsive" v-else>
					</v-list-tile-avatar>
					<v-list-tile-content>
						<div v-if="mail.type === 'inbox'">
							<h5 class="mb-0">{{mail.from.name}}</h5>
							<span class="grey--text fs-12">{{mail.from.email}}</span>
						</div>
						<template v-else>
							<h5 class="mb-0">{{mail.to.name}}</h5>
							<span class="grey--text fs-12">{{mail.to.email}}</span>
						</template>
						<span class="fs-12"><strong>Subject:</strong> {{mail.subject}}</span>
					</v-list-tile-content>
               <v-list-tile-action>
                  <v-list-tile-action-text>
                     <span class="grey--text fs-12 mb-2 d-block text-xs-right">{{mail.date}}</span>
                     <ul class="d-custom-flex list-unstyled icon-wrap">
                        <li v-show="mail.type !== 'draft'">
                           <v-btn small icon>
                              <v-icon>archive</v-icon>
                           </v-btn>
                        </li>
                        <li>
                           <v-btn small icon @click="deleteEmail(mail)">
                              <v-icon>delete</v-icon>
                           </v-btn>
                        </li>
                        <li v-show="mail.type !== 'draft'">
                           <v-btn small icon @click="markAsStar(mail)">
                              <v-icon>{{ mail.starred ? 'star' : 'star_border' }}</v-icon>
                           </v-btn>
                        </li>
                        <li>
                           <v-btn small icon>
                              <v-icon>more_horiz</v-icon>
                           </v-btn>
                        </li>
                     </ul>
                  </v-list-tile-action-text>
               </v-list-tile-action>
            </v-list-tile>
         </template>
      </v-list>
      <div class="pa-4" v-else>
         <h3 class="text-xs-center">No Emails Found</h3>
      </div>
      <div class="action" slot="footer">
         <v-btn small color="error" @click="onComposeEmail">{{$t('message.composeNewEmail')}}</v-btn>
      </div>
      <compose-email-dialog ref="composeEmailDialog"></compose-email-dialog>
   </app-card>
</template>

<script>
	import ComposeEmailDialog from "Components/DialogBox/ComposeEmail";
	
	const allEmails = [{
			id: 1,
			from: {
				avatar: "/static/avatars/user-1.jpg",
				name: "Precious Munoz",
				email: "Precious@example.com"
			},
			type: "inbox",
			subject: "Praesent fringilla arcu vel metus vehicula sagittis",
			date: "7 Mar 2018",
			starred: false
		},
		{
			id: 2,
			from: {
				avatar: "/static/avatars/user-2.jpg",
				name: "Anita Barker",
				email: "Anita@example.com"
			},
			type: "inbox",
			subject: "Mauris congue ipsum eros",
			date: "10 Mar 2018",
			starred: true
		},
		{
			id: 3,
			to: {
				avatar: "/static/avatars/user-3.jpg",
				name: "Alexus Ellis",
				email: "Alexus@example.com"
			},
			type: "sent",
			subject: "Quisque eu justo sed nisl facilisis fermentum",
			date: "11 Mar 2018",
			starred: false
		},
		{
			id: 4,
			to: {
				avatar: "/static/avatars/user-4.jpg",
				name: "Connor Griffith",
				email: "Connor@example.com"
			},
			type: "sent",
			subject: "Maecenas volutpat tortor non maximus suscipit",
			date: "11 Mar 2018",
			starred: false
		},
		{
			id: 5,
			to: {
				avatar: "/static/avatars/user-5.jpg",
				name: "Alonzo Owens",
				email: "Alonzo@example.com"
			},
			type: "draft",
			subject: "Lorem ipsum is simply dummy text",
			date: "11 Mar 2018"
		},
		{
			id: 6,
			from: {
				avatar: "/static/avatars/user-6.jpg",
				name: "Holly Bowen",
				email: "Holly@example.com"
			},
			type: "inbox",
			subject: "Sed vestibulum sagittis lorem, non pharetra sapien finibus",
			date: "15 Mar 2018",
			starred: false
		},
		{
			id: 7,
			from: {
				avatar: "/static/avatars/user-7.jpg",
				name: "Tylor Vasquez",
				email: "Tylor@example.com"
			},
			type: "inbox",
			subject: " Quisque euismod est eget nulla commodo",
			date: "17 Mar 2018",
			starred: false
		},
		{
			id: 8,
			from: {
				avatar: "/static/avatars/user-8.jpg",
				name: "Teresa Cortez",
				email: "Teresa@example.com"
			},
			type: "inbox",
			subject: "Nullam sit amet volutpat ex, sed porttitor",
			date: "17 Mar 2018",
			starred: false
		}
	];
	export default {
		data() {
			return {
				allEmails,
				emails: allEmails.filter(email => email.type === "inbox")
			};
		},
		components: {
			ComposeEmailDialog
		},
		methods: {
			deleteEmail(selectedEmail) {
				let indexOfSelectedEmailInAllEmails = this.allEmails.indexOf(
					selectedEmail
				);
				let indexOfSelectedEmailInCurrentEmails = this.emails.indexOf(
					selectedEmail
				);
				this.allEmails.splice(indexOfSelectedEmailInAllEmails, 1);
				this.emails.splice(indexOfSelectedEmailInCurrentEmails, 1);
			},
			onChangeTab(value) {
				switch (value) {
					case 0:
						this.emails = this.allEmails.filter(email => email.type === "inbox");
						break;
					case 1:
						this.emails = this.allEmails.filter(email => email.type === "sent");
						break;
					case 2:
						this.emails = this.allEmails.filter(email => email.type === "draft");
						break;
					default:
						break;
				}
			},
			markAsStar(email) {
				let indexOfEmailInCurrentEmails = this.emails.indexOf(email);
				this.emails[indexOfEmailInCurrentEmails].starred = !email.starred;
			},
			onComposeEmail() {
				this.$refs.composeEmailDialog.open();
			}
		}
	};
</script>
