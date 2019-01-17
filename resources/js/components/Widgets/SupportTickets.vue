<!-- Support Tickets Widget -->
<template>
	<div class="support-ticket-wrap">
		<app-section-loader :status="loader"></app-section-loader>
		<vue-perfect-scrollbar style="height:411px" :settings="settings">    
			<v-list>
				<template v-for="tickets in supportTickets">
					<div class="listing" :key="tickets.userName">
						<v-list-tile>
							<v-list-tile-avatar>
								<img class="img-responsive" :src="tickets.avatar" alt="user image">
							</v-list-tile-avatar>
							<v-list-tile-content>
								<v-list-tile-sub-title>
									<div class="d-custom-flex align-items-center mb-2">
										<h5 class="fs-14 mb-0 mr-2">{{tickets.userName}}</h5>
										<v-badge v-if="tickets.status === 1" class="primary">Open</v-badge>              
										<v-badge v-else class="warning">Closed</v-badge>
									</div>
								</v-list-tile-sub-title>
								<p :key="tickets.id" class="fs-14 mb-0 grey--text">            
									{{tickets.body}}
								</p>
								<div class="d-custom-flex">
									<a href="javascript:void(0)" class="mr-3 ripple">
										<i class="zmdi zmdi-eye primary--text"></i>
									</a>
									<a href="javascript:void(0)" class="mr-3">
										<i class="zmdi zmdi-edit success--text"></i>
									</a>
									<a href="javascript:void(0)" class="mr-3">
										<i class="zmdi zmdi-delete error--text"></i>
									</a>
								</div>
							</v-list-tile-content>
							<v-list-tile-action class="w-20">
								<span class="fs-12 grey--text">{{tickets.date}}</span>
							</v-list-tile-action>
						</v-list-tile>
						
					</div>
				</template>
			</v-list>
		</vue-perfect-scrollbar>
	</div>
</template>

<script>
import api from "Api";

export default {
  data() {
    return {
      loader: true,
      supportTickets: null,
      settings: {
        maxScrollbarLength: 100
      }
    };
  },
  mounted() {
    this.getTickets();
  },
  methods: {
    getTickets() {
      api
        .get("vuely/supportTickets.js")
        .then(response => {
          this.loader = false;
          this.supportTickets = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>
