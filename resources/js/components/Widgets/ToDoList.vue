<!-- ToDo List Widget -->
<template>
	<div>
		<app-section-loader :status="loader"></app-section-loader>
		<vue-perfect-scrollbar style="height:404px" :settings="settings">
			<v-list class="card-list todo-list list-aqua-ripple" v-if="toDoLists !== null" two-line>
				<v-list-tile v-for="(item, index) in toDoLists" :key="index" href="javascript:;" ripple>
					<v-list-tile-action>
						<v-checkbox color="primary" :input-value="item.completed" @click.stop="marked(item)" ></v-checkbox>
					</v-list-tile-action>
					<v-list-tile-content @click="marked(item)">
						<v-list-tile-title :class="{'strike': item.completed}">
							<h5>{{item.title}}</h5>
						</v-list-tile-title>
						<v-list-tile-sub-title>
							<span class="fs-12">{{item.date}}</span>
						</v-list-tile-sub-title>
					</v-list-tile-content>
					<v-btn fab dark small color="error" @click="onDeleteToDoList(item)" class="trash-icon">
      				<v-icon class="zmdi zmdi-delete"></v-icon>
    				</v-btn>
				</v-list-tile>
			</v-list>
		</vue-perfect-scrollbar>
		<delete-confirmation-dialog ref="deleteConfirmationDialog" heading="Are You Sure You Want To Delete?" message="Are you sure you want to delete this list permanently?" @onConfirm="deleteToDo">
		</delete-confirmation-dialog>
		<app-section-loader :status="loader"></app-section-loader>
		<v-snackbar :top="y === 'top'" :timeout="timeout" v-model="snackbar">
			{{ snackbarMessage }}
		</v-snackbar>
		<v-dialog v-model="dialog" max-width="500px" class="pa-2">
			<v-btn color="primary" small slot="activator"><i class="material-icons">add</i>{{ $t('message.addNew') }}</v-btn>
			<v-card>
				<v-card-title>
					<span class="headline">{{ $t('message.addToDo') }}</span>
				</v-card-title>
				<v-card-text>
					<v-container grid-list-md>
						<v-layout wrap>
							<v-flex xs12>
								<v-menu ref="menu" lazy :close-on-content-click="false" v-model="menu" transition="scale-transition" offset-y full-width :nudge-right="40" min-width="290px" :return-value.sync="newToDo.date">
									<v-text-field slot="activator" :label="$t('message.scheduleDate')" v-model="newToDo.date" prepend-icon="event" readonly></v-text-field>
									<v-date-picker v-model="newToDo.date" no-title scrollable>
										<v-spacer></v-spacer>
										<v-btn color="primary" @click="menu = false">{{ $t('message.cancel') }}</v-btn>
										<v-btn color="warning" @click="$refs.menu.save(newToDo.date)">{{ $t('message.ok') }}</v-btn>
									</v-date-picker>
								</v-menu>
							</v-flex>
							<v-flex xs12>
								<v-text-field :label="$t('message.title')" v-model="newToDo.title"></v-text-field>
							</v-flex>
						</v-layout>
					</v-container>
				</v-card-text>
				<v-card-actions>
					<v-spacer></v-spacer>
					<v-btn color="primary" @click.native="dialog = false">{{ $t('message.close') }}</v-btn>
					<v-btn color="warning" v-on:click="addToDo">{{ $t('message.add') }}</v-btn>
				</v-card-actions>
			</v-card>
		</v-dialog>
	</div>
</template>

<script>
	import api from "Api";
	
	export default {
		mounted() {
			this.getTodos();
		},
		data() {
			return {
				menu: false,
				settings: {
					maxScrollbarLength: 100
				},
				toDoLists: null,
				dialog: false,
				selectDeletedCustomer: null,
				newToDo: {
					date: "",
					title: "",
					completed: false
				},
				loader: false,
				snackbar: false,
				snackbarMessage: "",
				timeout: 2000,
				y: "top"
			};
		},
		methods: {
			getTodos() {
				this.loader = true;
				api
					.get("vuely/todo.js")
					.then(response => {
						this.loader = false;
						this.toDoLists = response.data;
					})
					.catch(error => {
						console.log("error" + error);
					});
			},
			marked(item) {				
				this.loader = true;
				setTimeout(() => {
					this.loader = false;
					this.snackbar = true;
					let index = this.toDoLists.indexOf(item);
					this.toDoLists[index].completed = !item.completed;
					this.snackbarMessage = "ToDo Updated Successfully";
				}, 1500);
			},
			addToDo() {
				if (this.newToDo.title && this.newToDo.date !== "") {
					this.dialog = false;
					this.loader = true;
					setTimeout(() => {
						this.loader = false;
						let newToDoDetails = {
							date: this.newToDo.date,
							title: this.newToDo.title,
							completed: false
						};
						this.toDoLists.push(newToDoDetails);
						console.log(this.toDoLists)
						this.newToDo.date = "";
						this.newToDo.title = "";
						this.snackbar = true;
						this.snackbarMessage = "ToDo Added Successfully";
					}, 1500);
				}
			},
			onDeleteToDoList(toDoList) {
				this.$refs.deleteConfirmationDialog.openDialog();
				this.selectToDoList = toDoList;
			},
			deleteToDo() {
				this.$refs.deleteConfirmationDialog.close();
				this.loader = true;
				let deletedToDoList = this.toDoLists;
				let index = deletedToDoList.indexOf(this.selectToDoList);
				setTimeout(() => {
					this.loader = false;
					this.selectToDoList = null;
					this.toDoLists.splice(index, 1);
					this.snackbar = true;
					this.snackbarMessage = "ToDo List Deleted Successfully";
				}, 1500);
			}
		}
	};
</script>

<style>
	.strike {
		text-decoration: line-through;
	}
</style>