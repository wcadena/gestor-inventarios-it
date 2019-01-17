<template>
   <div class="server-status-widget">
		<ul class="list-unstyled">
			<li v-for="server in serverStatus" :key="server.id">
				<div class="d-custom-flex justify-space-between">
					<h6 class="mb-0">{{server.name}}</h6>
					<span class="grey--text fs-12">{{server.value}}%</span>
				</div>
				<v-progress-linear height="6" :value="server.value"></v-progress-linear>
			</li>
		</ul>
	</div>
</template>

<script>
export default {
  data() {
    return {
      serverStatus: [
        {
          id: 1,
          name: "CPU Usage (25/35 Cpus)",
          value: 40
        },
        {
          id: 2,
          name: "Domain (2/5 Used)",
          value: 66
        },
        {
          id: 3,
          name: "Database (90/100)",
          value: 90
        },
        {
          id: 4,
          name: "Email Account (25/50 Used)",
          value: 50
        },
        {
          id: 5,
          name: "Disk Usage(120/250GB)",
          value: 55
        }
      ]
    };
  }
};
</script>
