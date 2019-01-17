<!-- New Emails Widget -->
<template>
   <div>
      <app-section-loader :status="loader"></app-section-loader>
      <vue-perfect-scrollbar style="height:540px" :settings="settings">
         <ul class="new-mail list-unstyled">
            <li v-for="email in emails" :key="email.id">
               <div class="clearfix mb-2">
                  <div class="left d-flex justify-start">
                     <v-list-tile-avatar v-if="email.sender_avatar !== ''">
                        <img 
									class="img-responsive" 
									:src="email.sender_avatar" 
									alt="user" 
								/>
                     </v-list-tile-avatar>
                     <template v-else>
                        <v-avatar class="warning mr-3">
                           <span small class="white--text"> {{email.sender_name.charAt(0)}}</span>
                        </v-avatar>
                     </template>
                     <v-list-tile-content>
                        <h5 class="mb-0">{{email.sender_name}}</h5>
                        <span class="fs-12 grey--text">{{email.from}}</span>
                     </v-list-tile-content>
                  </div>
                  <div class="right">
                     <span class="fs-12">19 Mar 2017</span>
                  </div>
               </div>
               <h6 class="mb-1">{{email.subject}}</h6>
					<div class="mail-content">
               	<p class="fs-14">{{email.message}}</p>
						<div class="mail-action w-20 text-xs-right">
							<div>
								<v-btn 
									fab 
									dark 
									small 
									class="ma-0" 
									color="primary" 
									@click="onViewEmail(email)"
								>
									<v-icon>visibility</v-icon>
								</v-btn>
								<v-btn 
									fab 
									dark 
									small 
									class="ma-0" 
									color="error" 
									@click="onDeleteEmail(email)"
								>
									<v-icon>delete</v-icon>
								</v-btn>
								<v-btn 
									fab 
									dark 
									small 
									class="ma-0" 
									color="success"
									@click="showReplyTextBox(email)"
								>
									<v-icon>reply</v-icon>
								</v-btn>
							</div>
						</div>
					</div>
					<template v-if="email.replyTextBox">
						<div class="d-custom-flex">
							<v-text-field 
								v-model="messageReply" 
								placeholder="Reply Message"
							></v-text-field>
							<v-btn @click="replyEmail(email)" color="primary">Reply</v-btn>
						</div>
					</template>
            </li>
         </ul>
      </vue-perfect-scrollbar>
      <delete-confirmation-dialog
        ref="deleteConfirmationDialog"
        heading="Are You Sure You Want To Delete?"
        message="Are you sure you want to delete this email permanently?"
        @onConfirm="deleteEmail"
		>
		</delete-confirmation-dialog>
      <v-dialog v-if="selectEmail !== null" v-model="viewEmailDialog" max-width="600">
         <v-list>
            <v-list-tile class="py-2">
               <v-list-tile-avatar v-if="selectEmail.sender_avatar !== ''">
                  <img 
							class="img-responsive" 
							:src="selectEmail.sender_avatar" 
							alt="user" 
						/>
               </v-list-tile-avatar>
               <v-list-tile-avatar v-else>
                  <v-avatar class="teal">
                 	 	<span class="white--text headline"> {{selectEmail.sender_name.charAt(0)}}</span>
                  </v-avatar>
               </v-list-tile-avatar>
               <v-list-tile-content>
                  <v-list-tile-sub-title>
							<p class="fs-14 fw-bold mb-0 gray--text">
								{{selectEmail.sender_name}}
							</p>
							<span>{{selectEmail.from}}</span>
                  </v-list-tile-sub-title>
               </v-list-tile-content>
               <v-list-tile-action>
                  <span class="fs-14">19 Mar 2017</span>
               </v-list-tile-action>
            </v-list-tile>
            <div class="pa-3">
              <h3 class="subject">{{selectEmail.subject}}</h3>
              <p class="fs-14 mb-0">
                {{selectEmail.message}}
              </p>
            </div>
         </v-list>
      </v-dialog>
      <app-section-loader :status="loader"></app-section-loader>
      <v-snackbar :top="y === 'top'" :timeout="timeout" v-model="snackbar">
         {{ snackbarMessage }}
      </v-snackbar>
   </div>
</template>

<script>
import api from "Api";

export default {
  data() {
    return {
      loader: false,
      viewEmailDialog: false,
      selectDeletedEmail: null,
      selectEmail: null,
      settings: {
        maxScrollbarLength: 100
      },
      emails: null,
      replyTextBox: false,
      messageReply: "",
      snackbar: false,
      snackbarMessage: "",
      timeout: 2000,
      y: "top"
    };
  },
  // call get email method
  mounted() {
    this.getEmails();
  },
  methods: {
    // get data from API
    getEmails() {
      this.loader = true;
      api
        .get("newEmails.js")
        .then(response => {
          this.loader = false;
          this.emails = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    // view email
    onViewEmail(getEmail) {
      this.viewEmailDialog = true;
      this.selectEmail = getEmail;
    },
    // confirmation dialog to delete
    onDeleteEmail(email) {
      this.$refs.deleteConfirmationDialog.openDialog();
      this.selectDeletedEmail = email;
    },
    // delete email if cofirmation is true
    deleteEmail() {
      this.$refs.deleteConfirmationDialog.close();
      this.loader = true;
      let newEmail = this.emails;
      let index = newEmail.indexOf(this.selectDeletedEmail);
      setTimeout(() => {
        this.loader = false;
        this.selectDeletedEmail = null;
        this.emails.splice(index, 1);
        this.snackbar = true;
        this.snackbarMessage = "Email Deleted Successfully!";
      }, 1500);
    },
    // show reply text box
    showReplyTextBox(email) {
      let indexOfEmail = this.emails.indexOf(email);
      this.replyTextBox = true;
      this.emails[indexOfEmail].replyTextBox = this.replyTextBox;
    },
    // reply email
    replyEmail(email) {
      let indexOfEmail = this.emails.indexOf(email);
      this.loader = true;
      this.replyTextBox = false;
      this.emails[indexOfEmail].replyTextBox = this.replyTextBox;
      setTimeout(() => {
        this.messageReply = "";
        this.loader = false;
        this.snackbar = true;
        this.snackbarMessage = "Reply Sent Successfully!";
      }, 1500);
    }
  }
};
</script>


