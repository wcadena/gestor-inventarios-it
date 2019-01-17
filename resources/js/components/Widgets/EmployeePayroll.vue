<!-- Employee Payroll Widget -->
<template>
   <div>
      <app-section-loader :status="loader"></app-section-loader>
      <v-data-table
         :headers="headers"
         :items="employeePayroll"
         hide-actions
      >
			<template slot="items" slot-scope="props">
				<td class="d-custom-flex align-items-center">
					<img width="30" height="30" :src="props.item.employeeAvatar" class="img-responsive rounded-circle mr-3">
					<span class="fs-14">{{ props.item.employeeName }}</span>
				</td>
				<td>{{ props.item.designation }}</td>
				<td>$ {{ props.item.salary }}</td>
				<td>
					<v-badge class="success" v-if="props.item.status == 1">Done</v-badge>
					<v-badge class="warning" v-else>Pending</v-badge>
				</td>
				<td>
					<v-btn icon small class="ma-0" @click="updateEmployeeStatus(props.item)" v-if="props.item.status !== 1">
						<v-icon color="grey">check</v-icon>
					</v-btn>
					<v-btn icon small class="ma-0" @click="onDeleteEmployePayroll(props.item)">
						<v-icon color="grey">clear</v-icon>
					</v-btn>
				</td>
			</template>
      </v-data-table>
      <v-snackbar
         :top="y === 'top'"
         :timeout = "timeout"
         v-model="snackbar"
      >
         {{ snackbarMessage }}
      </v-snackbar>
		<delete-confirmation-dialog
			ref="deleteConfirmationDialog"
			heading="Are You Sure You Want To Delete?"
			message="Are You Sure You Want To Delete This Emplyoee Payroll Permanently?"
			@onConfirm="deleteEmployeePayroll"
		>
		</delete-confirmation-dialog>
   </div>
</template>

<script>
// app config
import api from "Api";

export default {
  data() {
    return {
      employeePayroll: [],
      snackbar: false,
      snackbarMessage: "",
      timeout: 2000,
      y: "top",
      loader: false,
      headers: [
        {
          text: "Name",
          align: "left",
          sortable: false
        },
        { text: "Designation", sortable: false },
        { text: "Salary", sortable: false },
        { text: "Status", sortable: false },
        { text: "Actions", sortable: false }
      ]
    };
  },
  mounted() {
    // call getEmployeePayrolls method
    this.getEmployeePayrolls();
  },
  methods: {
    // get data from API
    getEmployeePayrolls() {
      this.loader = true;
      let self = this;
      api
        .get("employeePayrols.js")
        .then(function(response) {
          self.loader = false;
          self.employeePayroll = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    // update employee status
    updateEmployeeStatus(emplyoee) {
      this.loader = true;
      setTimeout(() => {
        this.loader = false;
        emplyoee.status = 1;
        const index = this.employeePayroll.indexOf(emplyoee);
        this.employeePayroll[index] = emplyoee;
        this.snackbar = true;
        this.snackbarMessage = "Employee Payroll Updated Successfully";
      }, 1500);
    },
    // confirmation dialog to delete
    onDeleteEmployePayroll(employee) {
      this.$refs.deleteConfirmationDialog.openDialog();
      this.selectEmployeePayroll = employee;
    },
    // delete email if cofirmation is true
    deleteEmployeePayroll() {
      this.$refs.deleteConfirmationDialog.close();
      this.loader = true;
      let deletedEmplyoee = this.employeePayroll;
      let index = deletedEmplyoee.indexOf(this.selectEmployeePayroll);
      setTimeout(() => {
        this.loader = false;
        this.selectEmployeePayroll = null;
        this.employeePayroll.splice(index, 1);
        this.snackbar = true;
        this.snackbarMessage = "Employee Payroll Deleted Successfully";
      }, 1500);
    }
  }
};
</script>
