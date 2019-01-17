<template>
   <app-card
      :heading="$t('message.activity')"
      :closeable="true"
      :reloadable="true"
      :fullScreen="true"
      colClasses="activity-widget-wrap pa-0"
   >
      <div class="activity-widget" v-if="activities.length > 0">
         <vue-perfect-scrollbar style="height:433px" class="activity-scroll">
            <ul class="list-unstyled px-3">
               <li v-for="activity in activities" :key="activity.id">
                  <v-badge :class="activity.badgeClass" class="primary floating rounded"></v-badge>
                  <span class="activity-time">{{activity.date}}</span>
                  <p>{{activity.name}}</p>
               </li>
            </ul>
         </vue-perfect-scrollbar>
      </div>
   </app-card>
</template>

<script>
import api from "Api";
export default {
  mounted() {
    this.getActivities();
  },
  methods:{
    getActivities(){
      const self = this;
      api
        .get("vuely/activities.js")
        .then(response => {
          self.loader = false;
          this.activities = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  },
   data() {
      return {
         activities: []
      }
   }
}
</script>
