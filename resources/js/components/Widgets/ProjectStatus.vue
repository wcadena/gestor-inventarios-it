<!-- Shopping Cart Widget -->
<template>
	<div class="project-status-wrap">
		<app-section-loader :status="loader"></app-section-loader>
		<vue-perfect-scrollbar style="height:396px" :settings="settings">
			<v-data-table :headers="headers" :items="items" v-model="selected" item-key="productName" select-all hide-actions>
				<template slot="headers" slot-scope="props">
					<tr>
						<th>
							<v-checkbox color="primary" hide-details @click.native="toggleAll" :input-value="props.all" :indeterminate="props.indeterminate"></v-checkbox>
						</th>
						<th v-for="header in props.headers" :key="header.text" class="text-xs-left">
							{{ header.text }}
						</th>
					</tr>
				</template>
				<template slot="items" slot-scope="props">
					<td>
						<v-checkbox color="primary" hide-details v-model="props.selected"></v-checkbox>
					</td>
					<td><span class="">{{ props.item.productName }}</span></td>
					<td>
						<v-badge :class="props.item.labelClasses">{{ props.item.priority }}</v-badge>
					</td>
					<td>
						<v-progress-linear :value="props.item.progressValue" class="my-1" height="3" color="primary"></v-progress-linear>
						<span class="fs-12 grey--text">{{props.item.status}}</span>
					</td>
					<td class="text-xs-center team-avatar">
						<ul class="list-inline">
							<li>
								<div><img src="/static/avatars/user-7.jpg" class="img-responsive" alt="user images" width="24" height="24"></div>
							</li>
							<li>
								<div><img src="/static/avatars/user-8.jpg" class="img-responsive" alt="user images" width="24" height="24"></div>
							</li>
							<li>
								<div><img src="/static/avatars/user-9.jpg" class="img-responsive" alt="user images" width="24" height="24"></div>
							</li>
						</ul>
					</td>
				</template>
			</v-data-table>
		</vue-perfect-scrollbar>
	</div>
</template>

<script>
	import api from "Api";
	
	export default {
		data() {
			return {
				loader: true,
				settings: {
					maxScrollbarLength: 100
				},
				selected: [],
				headers: [{
						text: "Project Name",
						align: "left",
						sortable: false,
						value: "productName"
					},
					{
						text: "Priority",
						align: "left",
						sortable: false,
						value: "priority"
					},
					{
						text: "Status",
						align: "left",
						sortable: false,
						value: "status"
					},
					{
						text: "Team",
						align: "center",
						sortable: false,
						value: "team",
					}
				],
				items: []
			};
		},
		mounted() {
			this.getProjects();
		},
		methods: {
			toggleAll() {
				if (this.selected.length) this.selected = [];
				else this.selected = this.items.slice();
			},
			getProjects() {
				api
				.get("vuely/projectStatus.js")
				.then(response => {
					this.loader = false;
					this.items = response.data;
				})
				.catch(error => {
					console.log(error);
				});
			}
		}
	};
</script>
