<template>
   <div class="project-management">
		<app-section-loader :status="loader"></app-section-loader>
		<vue-perfect-scrollbar style="height:636px" :settings="settings">
			<div class="v-table__overflow">
				<table class="v-datatable v-table v-datatable--select-all theme--light">
					<thead>
						<tr>
							<th><span>Project Name</span></th>
							<th><span>Deadline</span></th>
							<th><span>Status</span></th>
							<th><span>Team</span></th>
						</tr>
					</thead>
					<tbody>
						<template v-for="(data, index) in projectData" >      
							<tr :key="index">
								<td>{{data.name}}</td>
								<td>{{moment(data.date)}}</td>
								<td>
									<v-progress-linear :value="data.progress.value" height="5" :color="data.progress.color"></v-progress-linear>
									<span class="fs-12 grey--text">{{data.status}}</span>
								</td>
								<td>
									<div class="justify-space-between d-custom-flex align-center">
										<div class="team-avatar w-100">
											<ul class="d-custom-flex align-items-center pa-0">
												<li v-for="team in data.team" :key="team.name">
													<div>
														<v-tooltip top>
														<img slot="activator" :src="team.avatar" class="img-responsive" alt="user images" width="26" height="26">
														<span>{{team.name}}</span>
														</v-tooltip>
													</div>    
												</li>
											</ul>
										</div>
										<v-btn  v-if="data.collapseStatus" @click="expand(data)" flat icon>
											<i class="zmdi zmdi-minus-circle font-lg grey--text"></i>
										</v-btn>
										<v-btn v-else @click="expand(data)" flat icon>
											<i class="zmdi zmdi-plus-circle font-lg grey--text"></i>
										</v-btn>
									</div>
								</td>
							</tr>
							<tr v-if="data.collapseStatus" :key="data.description">
								<td colspan="5">
									<div class="pa-2">
										<span class="fs-12 fw-semi-bold" >Description</span>
										<p class="mb-0">{{data.description}}</p>
									</div>
								</td>
							</tr>
						</template>
					</tbody>
				</table>
			</div>
		</vue-perfect-scrollbar>
	</div>
</template>

<script>
import api from "Api";
import moment from 'moment'
 
export default {
  data() {
    return {
      settings: {
					maxScrollbarLength: 100
				},
      loader: true,
      projectData: []
    };
  },
  mounted() {
    this.projectManagement();
  },
  methods: {
     moment (date) {
      return moment(date * 1000).format('DD MMM YYYY');
    },
    projectManagement() {
      const self = this;
      api
        .get("vuely/projectData.js")
        .then(response => {
          self.loader = false;
          self.projectData = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    expand(data) {
      let index = this.projectData.indexOf(data);
      this.projectData[index].collapseStatus = !this.projectData[index].collapseStatus;
    }
  }
};
</script>
