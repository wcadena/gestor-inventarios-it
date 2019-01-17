<!-- Calendar Widget -->
<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl py-0>
			<div class="app-card">
			<div class="app-card-content">
				<full-calendar :events="fcEvents" lang="en"></full-calendar>
			</div>
			</div>
		</v-container>
	</div>
</template>

<script>
import fullCalendar from "vue-fullcalendar";
import events from "./events";

export default {
  data() {
    return {
      fcEvents: events
    };
  },
  components: {
    fullCalendar
  }
};
</script>
