<template>
   <div class="activity-around-world">
      <v-layout row wrap>
         <v-flex xl6 lg6 md6 xs12>
            <ul class="list-unstyled country-progress">
               <li v-for="activitiy in activitiesInWorld" :key="activitiy.id" class="d-custom-flex align-items-center py-3 w-80">
						<img class="img-responsive mr-4" width="45" height="30" :src="`/static/flag-icons/${activitiy.iso}.png`">
						<div class="w-100">
							<div class="mb-2 d-custom-flex justify-space-between align-items-center">
								<h6 class="mb-0">{{activitiy.name}}</h6>
								<span class="fs-12 grey--text">{{activitiy.value}}%</span>
							</div>
							<v-progress-linear :value="activitiy.value" height="4" class="ma-0"></v-progress-linear>
						</div>
               </li>
            </ul>
         </v-flex>
         <v-flex xl6 lg6 md6 xs6 b-50 class="world-map">
            <div id="world-map-markers" style="width: 100%; height: 250px"></div>
         </v-flex>
      </v-layout>
   </div>
</template>

<script>
/* eslint-disable */
import $ from "jquery";
export default {
  data() {
    return {
      activitiesInWorld: [
        {
          id: 1,
          iso: "icons8-austria",
          value: "42",
          name: "Austria - 4100"
        },
        {
          id: 2,
          iso: "icons8-japan",
          value: "31",
          name: "Japan-2300"
        },
        {
          id: 3,
          iso: "icons8-usa",
          value: "93",
          name: "USA-2300"
        },
        {
          id: 4,
          iso: "icons8-china",
          value: "15",
          name: "China-800"
        },
        {
          id: 5,
          iso: "icons8-france",
          value: "38",
          name: "France-3521"
        }
      ]
    };
  },
  mounted() {
    var self = this;
    $(function() {
      $("#world-map-markers").vectorMap({
        map: "world_mill_en",
        scaleColors: ["#C8EEFF", "#0071A4"],
        normalizeFunction: "polynomial",
        zoomButtons: false,
        hoverOpacity: 0.7,
        hoverColor: false,
        markerStyle: {
          initial: {
            fill: self.$store.getters.darkMode ? "#727891" : "#F7981C",
            stroke: self.$store.getters.darkMode ? "#303030" : "#F7981C"
          }
        },
        regionStyle: {
          initial: {
            fill: self.$store.getters.darkMode ? "#303030" : "#E8ECEE"
          }
        },
        backgroundColor: self.$store.getters.darkMode ? "#2c3644" : "#FFF",
        markers: [
          { latLng: [41.9, 12.45], name: "Vatican City" },
          { latLng: [43.73, 7.41], name: "Monaco" },
          { latLng: [-0.52, 166.93], name: "Nauru" },
          { latLng: [-8.51, 179.21], name: "Tuvalu" },
          { latLng: [43.93, 12.46], name: "San Marino" },
          { latLng: [47.14, 9.52], name: "Liechtenstein" },
          { latLng: [7.11, 171.06], name: "Marshall Islands" },
          { latLng: [17.3, -62.73], name: "Saint Kitts and Nevis" },
          { latLng: [3.2, 73.22], name: "Maldives" },
          { latLng: [35.88, 14.5], name: "Malta" },
          { latLng: [12.05, -61.75], name: "Grenada" },
          { latLng: [13.16, -61.23], name: "Saint Vincent and the Grenadines" },
          { latLng: [13.16, -59.55], name: "Barbados" },
          { latLng: [17.11, -61.85], name: "Antigua and Barbuda" },
          { latLng: [-4.61, 55.45], name: "Seychelles" },
          { latLng: [7.35, 134.46], name: "Palau" },
          { latLng: [42.5, 1.51], name: "Andorra" },
          { latLng: [14.01, -60.98], name: "Saint Lucia" },
          { latLng: [6.91, 158.18], name: "Federated States of Micronesia" },
          { latLng: [1.3, 103.8], name: "Singapore" },
          { latLng: [1.46, 173.03], name: "Kiribati" },
          { latLng: [-21.13, -175.2], name: "Tonga" },
          { latLng: [15.3, -61.38], name: "Dominica" },
          { latLng: [-20.2, 57.5], name: "Mauritius" },
          { latLng: [26.02, 50.55], name: "Bahrain" },
          { latLng: [0.33, 6.73], name: "São Tomé and Príncipe" }
        ]
      });
    });
  }
};
</script>