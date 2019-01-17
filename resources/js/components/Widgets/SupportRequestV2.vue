<template>
	<div>
		<app-section-loader :status="loader"></app-section-loader>
		<vue-perfect-scrollbar style="height:404px" :settings="settings">
			<v-list two-line class="card-list">
				<template v-for="(request, index) in supportRequests">
					<v-list-tile :key="index">
						<v-list-tile-content>
							<v-list-tile-sub-title>
								<h5 class="mb-1">{{request.title}}</h5>
								<v-list-tile-action-text class="fw-light">
									{{request.date}}
								</v-list-tile-action-text>
							</v-list-tile-sub-title>
							<p class="mb-0 fs-12 grey--text">{{request.content}}</p>
						</v-list-tile-content>
						<v-list-tile-action>
							<v-badge v-if="request.status" class="error">Pending</v-badge>
							<v-badge v-else class="info">Closed</v-badge>
						</v-list-tile-action>
					</v-list-tile>
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
      supportRequests: [],
      settings: {
        maxScrollbarLength: 160
      }
    };
  },
  mounted() {
    this.getSupportRequests();
  },
  methods: {
    getSupportRequests() {
      api
        .get("vuely/supportRequests.js")
        .then(response => {
          this.loader = false;
          this.supportRequests = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>