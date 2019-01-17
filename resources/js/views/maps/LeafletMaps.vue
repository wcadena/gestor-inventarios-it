<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<app-card :fullBlock="true">
				<v-map style="height: 400px" :zoom="zoom" :center="center">
					<v-tilelayer :url="url" :attribution="attribution"></v-tilelayer>
          <v-marker :lat-lng="marker"></v-marker>
				</v-map>
			</app-card>
		</v-container>
	</div>
</template>

<script>
import Vue2Leaflet from "vue2-leaflet";
import L from "leaflet";
delete L.Icon.Default.prototype._getIconUrl;

L.Icon.Default.mergeOptions({
  iconRetinaUrl: require("leaflet/dist/images/marker-icon-2x.png"),
  iconUrl: require("leaflet/dist/images/marker-icon.png"),
  shadowUrl: require("leaflet/dist/images/marker-shadow.png")
});

export default {
  name: "leaflet-maps",
  components: {
    vMap: Vue2Leaflet.LMap,
    vTilelayer: Vue2Leaflet.LTileLayer,
    vMarker: Vue2Leaflet.LMarker
  },
  data() {
    return {
      zoom: 13,
      center: L.latLng(47.41322, -1.219482),
      url: "http://{s}.tile.osm.org/{z}/{x}/{y}.png",
      attribution:
        '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
      marker: L.latLng(47.41322, -1.219482)
    };
  }
};
</script>

<style scoped>
.leaflet-container {
  z-index: 1;
}
</style>

