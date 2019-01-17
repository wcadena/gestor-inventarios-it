<template>
	<div class="notificationv2-widget-wrap">    
		<v-tabs grow>
			<v-tab>{{$t('message.recentNotifications')}}</v-tab>
			<v-tab>{{$t('message.messages')}}</v-tab>
			<v-tab-item>
				<v-card flat>
					<app-section-loader :status="loader"></app-section-loader>
					<vue-perfect-scrollbar style="height:405px" :settings="settings">
						<v-list three-line v-if="notifications!==null && notificationsTypes !==null">
							<template v-for="notification in notifications">
								<v-list-tile ripple avatar :key="notification.id" @click="">
									<v-list-tile-avatar>
										<img :src="notification.userAvatar">
									</v-list-tile-avatar>
									<v-list-tile-content>
										<span class="fs-12 mb-1 d-block">
											<span class="mr-1" :class="getNotificationType(notification.notificationId).color">
												<i class="mr-2" :class="getNotificationType(notification.notificationId).icon"></i> 
												<span>{{getNotificationType(notification.notificationId).name}}</span> 
											</span> 
											{{notification.time}}
										</span>
										<h6 class="mb-1">{{notification.userName}}</h6>
										<p class="fs-12 grey--text mb-0">{{notification.body}}</p>
									</v-list-tile-content>
								</v-list-tile>
							</template>
						</v-list>
					</vue-perfect-scrollbar>
				</v-card>
			</v-tab-item>
			<v-tab-item>
				<v-card flat>
					<app-section-loader :status="loader2"></app-section-loader>
					<vue-perfect-scrollbar style="height:400px" :settings="settings">
						<v-list v-if="messages !==null" class="message-widget">
							<template v-for="message in messages">
								<v-list-tile ripple avatar :key="message.id" @click="">
									<v-list-tile-avatar>
										<img :src="message.userAvatar">
									</v-list-tile-avatar>
									<v-list-tile-content>
										<h6 class="mb-0">{{message.userName}}</h6>
										<p class="fs-12 grey--text mb-0">{{message.body}}</p>
									</v-list-tile-content>
									<span class="fs-12 text-xs-right message-time">{{message.time}}</span>
								</v-list-tile>
							</template>
						</v-list>
					</vue-perfect-scrollbar>
				</v-card>
			</v-tab-item>
		</v-tabs>
	</div>
</template>

<script>
import api from "Api";

export default {
  data() {
    return {
      loader: true,
      loader2: true,
      notifications: null,
      notificationsTypes: null,
      messages: null,
      settings: {
        maxScrollbarLength: 210
      }
    };
  },
  mounted() {
    this.getNotifcations();
    this.getNotifcationTypes();
    this.getMessages();
  },
  methods: {
    getNotifcations() {
      api
        .get("vuely/notifications.js")
        .then(response => {
          this.loader = false;
          this.notifications = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    getNotifcationTypes() {
      api
        .get("vuely/notificationTypes.js")
        .then(response => {
          this.loader = false;
          this.notificationsTypes = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    getMessages() {
      api
        .get("vuely/messages.js")
        .then(response => {
          this.loader2 = false;
          this.messages = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    getNotificationType(notificationId) {
      for (const type of this.notificationsTypes) {
        if (type.id === notificationId) {
          return type;
        }
      }
    }
  }
};
</script>
