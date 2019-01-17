<template>
	<div>
		<page-title-bar></page-title-bar>
    <app-section-loader :status="loader"></app-section-loader>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap v-if="usersList !== null">
				<app-card colClasses="xs12 sm6 md4" v-for="(users, index) in usersList" :key="index">
					<div class="user-image text-xs-center mb-3">
						<img :src="users.profileImage" class="img-responsive rounded-circle" alt="user images" width="95" height="95" />
					</div>
					<div class="user-list-content">
						<div class="text-xs-center">
							<h3 class="fw-bold">{{users.name}}</h3>
							<p>{{ users.technology }}</p>
							<div class="social-list clearfix mb-4">
								<ul class="list-inline d-inline-block">
								<li v-for="(links, index) in users.socialLinks" :key="index"><a :href="links.url" class="text-pink"><i :class="links.icon"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="layout justify-space-between border-tb-1 pa-2 mb-3">
							<div class="align-item-start">
								<span>{{$t("message.connections")}}</span>
							</div>
							<div class="align-item-end">
								<ul class="list-inline">
								<li class="pa-0" v-for="(user, index) in users.connections" :key="index">
									<img :src="getImgSrc(user)" alt="user images" class="rounded-circle" width="24" height="24">
								</li>
								</ul>
							</div>
						</div>
						<a class="v-btn btn-success white--text ma-0" href="javascript:void(0);" @click="users.status = !users.status" v-if="users.status">{{$t("message.follow")}}</a>
						<a class="v-btn btn-danger white--text ma-0" href="javascript:void(0);" @click="users.status = !users.status" v-else>{{$t("message.unfollow")}}</a>
					</div>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
import api from "Api";

export default {
  data() {
    return {
      loader: true,
      usersList: null,
      connectUsersList: null
    };
  },
  mounted() {
    this.getUsers();
    this.getConnections();
  },
  methods: {
    getImgSrc(connectedUsers) {
      if (this.connectUsersList) {
        for (var i = 0; i < this.connectUsersList.length; i++) {
          var user = this.connectUsersList[i];
          if (connectedUsers === user.id) {
            return user.img;
          }
        }
      }
    },
    getUsers() {
      api
        .get("vuely/users.js")
        .then(response => {
          this.loader = false;
          this.usersList = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    getConnections() {
      api
        .get("vuely/connections.js")
        .then(response => {
          this.connectUsersList = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>
