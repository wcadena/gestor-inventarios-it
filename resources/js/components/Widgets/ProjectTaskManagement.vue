<template>
	<div>
		<vue-perfect-scrollbar style="height:622px" :settings="settings">
			<v-list>
				<template v-for="(tasks , taskkey, index) in projectTaskData">
					<v-list-tile :key="taskkey">
						<div class="project-head d-custom-flex justify-space-between align-center">
							<h5 class="mb-0">{{taskkey}}</h5>
							<v-btn flat icon @click="expand(tasks)">
								<i class="zmdi zmdi-plus-circle font-lg grey--text"></i>
							</v-btn>
						</div>
						<v-list class="project-list-item list-aqua-ripple">
							<v-list-tile v-for="(items, index) in tasks.length" :key="tasks[index].date" ripple @click="">
								<div class="w-50">
									<h6 class="mb-1">{{tasks[index].title}}</h6>
									<span class="fs-12 grey--text">{{moment(tasks[index].date)}}</span>
								</div>
								<div class="w-50 d-custom-flex justify-space-between align-center badge-wrap">
									<span class="v-badge" :class="tasks[index].color" >{{tasks[index].status}}</span>
									<div class="team-avatar">
										<ul class="d-custom-flex align-items-center pa-0">
											<li v-for="team in tasks[index].team" :key="team.name">
												<div>
													<v-tooltip top>
													<img slot="activator" :src="team.avatar" class="img-responsive" alt="user images" width="26" height="26">
													<span>{{team.name}}</span>
													</v-tooltip>
												</div>    
											</li>
										</ul>
									</div>
								</div>
							</v-list-tile>
						</v-list>
						<template v-if="selectedProject == tasks">
							<v-form v-model="valid" :key="index">
								<div class="add-project d-custom-flex justify-space-between align-center">
									<div class="w-50 input-wrap">
										<v-text-field
											v-model="newTask.title"
											label="Task Name"
											class="mb-4"
										></v-text-field>
										<v-text-field type="date"
											v-model="newTask.date"
											label="Due Date"
											class="mb-4"
										></v-text-field>
									</div>
									<div class="button-wrap">
										<v-btn
											@click="addTask(taskkey)"
											color="primary"
											small
											class="mt-0 mb-4 d-inline-block"
										>
											Add
										</v-btn>
										<v-btn
											@click="collapse()"
											color="error"
											small
											class="mb-0 mt-2 d-block"
										>
											Cancel
										</v-btn>
									</div>
								</div>
							</v-form>
						</template>
					</v-list-tile>
				</template>
			</v-list>
		</vue-perfect-scrollbar>
		<app-section-loader :status="loader"></app-section-loader>
		<v-snackbar :top="y === 'top'" :timeout="timeout" v-model="snackbar">
			{{ snackbarMessage }}
		</v-snackbar>
	</div>
</template>

<script>
import moment from 'moment'

export default {
  data () {
    return {
		active: false,
		settings: {
			maxScrollbarLength: 100
		},
		selectedProject: '',
		selectDeletedCustomer: null,
		newTask: {
			title: "",
			date: ""
		},
		loader: false,
		snackbar: false,
		snackbarMessage: "",
		timeout: 2000,
		y: "top",
		valid: false,
			projectTaskData: {
					'BookingKoala': [
						{
							id: 1,
							title: "Wireframing for dashboard sidebar and topbar",
							date: 1528368468,
							status: "Planning",
							color: "primary",
							team: [
									{
										id: 1,
										name: "Maggie",
										avatar: "/static/avatars/user-1.jpg"
									},
									{
										id: 2,
										name: "Lisa",
										avatar: "/static/avatars/user-2.jpg"
									},
									{
										id: 3,
										name: "Lucile",
										avatar: "/static/avatars/user-4.jpg"
									}
							]
						},
						{
							id: 2,
							title: "Wireframing for dashboard sidebar and topbar",
							date: 1529346600,
							status: "In Progress",
							color: "success",
							team: [
									{
										id: 1,
										name: "Maggie",
										avatar: "/static/avatars/user-1.jpg"
									},
									{
										id: 2,
										name: "Lisa",
										avatar: "/static/avatars/user-2.jpg"
									},
									{
										id: 3,
										name: "Lucile",
										avatar: "/static/avatars/user-4.jpg"
									}
							]
						}
					],
					'Reactify': [
						{
						id: 1,
						title: "Create video placeholder for website",
						date: 1529951400,
						status: "In Progress",
						color: "success",
						team: [
							{
									id: 1,
									name: "Maggie",
									avatar: "/static/avatars/user-1.jpg"
							},
							{
									id: 2,
									name: "Lisa",
									avatar: "/static/avatars/user-2.jpg"
							},
							{
									id: 3,
									name: "Lucile",
									avatar: "/static/avatars/user-4.jpg"
							}
						]
						},
						{
							id: 2,
							title: "Social media ads banner for launching",
							date: 1531161000,
							status: "On Hold",
							color: "success",
							team: [
									{
										id: 1,
										name: "Maggie",
										avatar: "http://reactify.theironnetwork.org/data/images/user-1.jpg",
									},
									{
										id: 2,
										name: "Lisa",
										avatar: "http://reactify.theironnetwork.org/data/images/user-2.jpg",
									},
									{
										id: 3,
										name: "Lucile",
										avatar: "http://reactify.theironnetwork.org/data/images/user-3.jpg",
									}
							]
						}
					],
					'Adminify': [
						{
						id: 1,
						title: "Create new design for frontend website",
						date: 1530729000,
						status: "Completed",
						color: "error",
						team: [
							{
									id: 1,
									name: "Maggie",
									avatar: "http://reactify.theironnetwork.org/data/images/user-1.jpg",
							},
							{
									id: 2,
									name: "Lisa",
									avatar: "http://reactify.theironnetwork.org/data/images/user-2.jpg",
							},
							{
									id: 3,
									name: "Lucile",
									avatar: "http://reactify.theironnetwork.org/data/images/user-3.jpg",
							}
						]
						},
						{
						id: 2,
						title: "Update new logo everywhere",
						date: 1532716200,
						status: "Completed",
						color: "error",
						team: [
							{
									id: 1,
									name: "Maggie",
									avatar: "http://reactify.theironnetwork.org/data/images/user-1.jpg",
							},
							{
									id: 2,
									name: "Lisa",
									avatar: "http://reactify.theironnetwork.org/data/images/user-2.jpg",
							},
							{
									id: 3,
									name: "Lucile",
									avatar: "http://reactify.theironnetwork.org/data/images/user-3.jpg",
							}
						]
						}
					]
			}
     }
  },
  methods: {
    addTask(tasks) {
	    if (this.newTask.title && this.newTask.date !== "") {
		    this.loader = true;
			setTimeout(() => {
			    this.loader = false;
                this.selectedProject = '';
                var unixTime = moment(this.newTask.date).unix();
                let newProjectTask = {
				    date: unixTime,
					title: this.newTask.title,
					status: "Planning",
					color: "primary",
					team:	[
						{
							name: "Lopohis",
							avatar: "/static/avatars/user-28.jpg",
						}
					]
				};
				this.projectTaskData[tasks].push(newProjectTask);
				this.newTask.date = "";
				this.newTask.title = "";
				this.snackbar = true;
				this.snackbarMessage = "Task Added Successfully";
			}, 1500);
	 	 }
	  },
      expand(selected){
         this.selectedProject = selected;
      },
      collapse(){
         this.selectedProject = '';
      },
      moment (date) {
        return moment(date * 1000).format('DD MMM YYYY');
      }
    }
}
</script>
