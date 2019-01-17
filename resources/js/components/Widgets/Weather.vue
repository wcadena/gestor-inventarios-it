<!-- Weather Widget -->
<template>
	<div class="weather-widget"  v-if="weatherDetails != null">
		<div class="d-custom-flex weather-head white--text">
			<span class="overlay-content"></span>
			<div class="w-70 weather-info">
				<div class="mb-4 mr-3">
					<h3 class="city-name">{{city}}</h3>
					<span class="d-block">{{moment(date)}}</span>
				</div>
				<div class="weather-temp">
					<h2 class="fw-bold d-inline-block">{{temp}}<sup>°C</sup></h2>
					<span class="text-capitalize d-inline-block">{{weatherDescription}}</span>
				</div>
			</div>
			<div class="align-item-end pt-4 weather-icon">
				<span class="font-4x fw-bold"><i :class="weatherIcon"></i></span>
			</div>
		</div>
		<v-list>
			<v-list-tile v-for="(weather,index) in weatherDetails.list" :key="index" >
				<h6 class="mb-0 w-20">{{city}}</h6>
				<span class="w-40">{{moment(weather.dt *1000)}}</span>
				<span class="w-20">{{weather.temp.day}}<sup>°C</sup></span>
				<span class="w-20">{{weather.weather[0].main}}</span>
			</v-list-tile>
		</v-list>
	</div>
</template>

<script>
import moment from 'moment'
import AppConfig from 'Constants/AppConfig'


export default {
	data: function () {
		return {
			props: ['userCity'],
			city: this.userCity ? this.userCity : "Mohali",
			weatherDetails: null,
			temp: '',
			weatherDescription: '',
			date: '',
			weatherIcon: ''
		}
	},
	mounted () {
		var appid = AppConfig.weatherApiId; // Your api id
		var apikey = AppConfig.weatherApiKey; // Your apikey
		this.$http.get('http://api.openweathermap.org/data/2.5/forecast/daily?q=' + this.city + '&cnt=5&units=metric&mode=json&appid=' + appid + '&apikey=' + apikey)
			.then(response => {
			this.weatherDetails = response.data;
			this.city =  this.weatherDetails.city.name;
			this.temp = this.weatherDetails.list[0].temp.day;
			this.date = this.weatherDetails.list[0].temp.dt;
			this.weatherDescription = this.weatherDetails.list[0].weather[0].description;
			this.weatherIcon = this.getIcon(this.weatherDetails.list[0].weather[0].id);
			}, response => {
			console.log(response)
			})
	},
	methods: {    
		// function to get today weather icon
		getIcon (id) {
			if (id >= 200 && id < 300) {
				return 'wi wi-night-showers'
			} else if (id >= 300 && id < 500) {
				return 'wi day-sleet'
			} else if (id >= 500 && id < 600) {
				return 'wi wi-night-showers'
			} else if (id >= 600 && id < 700) {
				return 'wi wi-day-snow'
			} else if (id >= 700 && id < 800) {
				return 'wi wi-day-fog'
			} else if (id === 800) {
				return 'wi wi-day-sunny'
			} else if (id >= 801 && id < 803) {
				return 'wi wi-night-partly-cloudy'
			} else if (id >= 802 && id < 900) {
				return 'wi wi-day-cloudy'
			} else if (id === 905 || (id >= 951 && id <= 956)) {
				return 'wi wi-day-windy'
			} else if (id >= 900 && id < 1000) {
				return 'wi wi-night-showers'
			}
		},
		moment (date) {
			return moment(date).format('dddd MM YYYY');
		}
	}
}
</script>
