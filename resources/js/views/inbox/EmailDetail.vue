<template>
   <div class="email-detail-wrap" v-if="selectedEmail != null">
      <div class="mail-action-wrap d-custom-flex justify-space-between">
         <ul class="list-unstyled primary action-list-wrap">
            <li>
               <a href="javascript:void(0)">
                  <i class="material-icons">archive</i>
               </a>
            </li>
            <li>
               <a href="javascript:void(0)">
                  <i class="material-icons">error</i>
               </a>
            </li>
            <li>
               <a href="javascript:void(0)" @click="onDeleteEmail">
                  <i class="material-icons">delete</i>
               </a>
            </li>
         </ul>
         <ul class="navigate-page primary list-unstyled">
            <li>
               <a href="javascript:void(0)">
                  <i class="material-icons">arrow_back</i>
               </a>
            </li>
            <li>
               <a href="javascript:void(0)">
                  <i class="material-icons">arrow_forward</i>
               </a>
            </li>
         </ul>
      </div>
      <div class="detail-head d-custom-flex justify-space-between">
         <v-btn fab icon class="grey--text ma-0" small @click="backToEmails">
            <v-icon>keyboard_backspace</v-icon>
         </v-btn>
         <ul class="list-inline">
            <li>
               <v-btn fab icon class="grey--text ma-0" small>
                  <v-icon>reply</v-icon>
               </v-btn>
            </li>
            <li>
               <v-btn fab icon class="grey--text ma-0" small>
                  <v-icon>local_printshop</v-icon>
               </v-btn>
            </li>
         </ul>
      </div>
      <vue-perfect-scrollbar class="inbox-detail-scroll" :style="getScrollHeight()">
         <div class="mail-subject-wrap">
            <h5 class="mb-0">{{selectedEmail.subject}}</h5>
         </div>
         <div class="user-detail d-custom-flex justify-content-between">
            <div class="media w-80">
               <img 
						:src="selectedEmail.avatarSrc" 
						alt="user profile" 
						class="rounded mr-3" 
						width="50" 
						height="50"
					>
               <div class="media-body">
                  <h6 class="mb-0">{{selectedEmail.userName}}</h6>
                  <p class="mb-0 fs-14">From <span class="fs-12 grey--text">&lt;{{selectedEmail.userEmail}}&gt;</span></p>
                  <p class="mb-0 fs-14">To: <span class="fs-12 grey--text">Me</span></p>
               </div>
            </div>
            <span class="align-items-center fs-12 d-custom-flex grey--text w-20 justify-end">{{selectedEmail.time}} Hour Ago</span>
         </div>
         <div class="mail-detail">
            <div>
               <p class="fs-14">{{selectedEmail.body}}</p>
            </div>
            <p class="mb-0 fs-14 fw-semi-bold">Regards,</p>
            <p class="mb-0 fs-12">{{selectedEmail.userName}}</p>
         </div>
         <div class="mail-attachment-wrap" v-if="selectedEmail.attachments != null">
            <div class="d-custom-flex justify-space-between attachment-head align-items-center">
               <h6 class="mb-0">{{selectedEmail.attachments.length}} Attachments</h6>
               <ul class="list-inline">
                  <li>
                     <v-btn fab icon class="grey--text ma-0" small>
                        <v-icon>insert_drive_file</v-icon>
                     </v-btn>
                  </li>
                  <li>
                     <v-btn fab icon class="grey--text ma-0" small>
                        <v-icon>cloud_circle</v-icon>
                     </v-btn>
                  </li>
               </ul>
            </div>
            <ul class="d-custom-flex align-items-center attachment-list list-unstyled">
               <li v-for="attachment in selectedEmail.attachments" :key="attachment.id">
                  <div class="overlay-wrapper">
                     <img 
								:src="attachment.src" 
								class="img-responsive" 
								height="140" 
								width="180" 
								alt="attachment"
							>
                     <a href="javascript:void(0)" class="overlay-content">
                        <i class="material-icons">get_app</i>
                     </a>
                  </div>
                  <span class="fs-12 d-block">{{attachment.name}}</span>
               </li>
            </ul>
         </div>
         <div class="mail-reply d-custom-flex align-items-center">
            <v-text-field
               label="Reply"
               solo
               class="mr-4"
            ></v-text-field>
            <v-btn
               color="primary"
               class="ma-0 white--text"
               large
            >
               Send
               <v-icon right dark>send</v-icon>
            </v-btn>
         </div>
      </vue-perfect-scrollbar>
   </div>
</template>

<script>
import { mapGetters } from "vuex";
import { getCurrentAppLayout } from "Helpers/helpers";

export default {
  computed: {
    ...mapGetters(["selectedEmail"])
  },
  methods: {
    backToEmails() {
      this.$store.dispatch("backToEmails");
    },
    getScrollHeight() {
      let layout = getCurrentAppLayout(this.$router);
      switch (layout) {
        case "default":
          return "height:calc(100vh - 220px)";
        case "mini":
          return "height:calc(100vh - 220px)";
        case "horizontal":
          return "height:calc(100vh - 220px)";
        case "boxed":
          return "height:calc(100vh - 391px)";
        case "boxed-v2":
          return "height:calc(100vh - 391px)";
        default:
          return "height:calc(100vh - 220px)";
      }
    },
    onDeleteEmail() {
      this.$store.dispatch("onDeleteEmail");
    }
  }
};
</script>
