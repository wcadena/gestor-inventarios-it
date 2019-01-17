<!-- Stock Exchange Widget -->
<template>
  <div>
    <app-section-loader :status="loader"></app-section-loader>
    <v-list v-if="ratesData !== null" >
        <v-list-tile >
          <img src="../../assets/flag-icons/icons8-canada.png" height="50px">
          <v-list-tile-content>
              <v-list-tile-title >CAD (Canadian Dollar)</v-list-tile-title>
          </v-list-tile-content>
          <v-spacer></v-spacer>
          <span>
              <v-icon class="success">arrow_upward</v-icon>
              {{ratesData.rates.CAD.toFixed(2)}}
          </span>
        </v-list-tile>         
        <v-divider></v-divider>
        <v-list-tile >
          <img src="../../assets/flag-icons/icons8-germany.png" height="50px">
        <v-list-tile-content>
          <v-list-tile-title >EUR (Euro)</v-list-tile-title>
        </v-list-tile-content>
        <v-spacer></v-spacer>
        <span>
          <v-icon class="error">arrow_downward</v-icon>
          {{ratesData.rates.EUR.toFixed(2)}}
          </span>
    </v-list-tile>
    <v-divider></v-divider>
    <v-list-tile >
        <img src="../../assets/flag-icons/icons8-new_zealand.png" height="50px">
        <v-list-tile-content>
          <v-list-tile-title >NZD (New Zealand Dollar)</v-list-tile-title>
        </v-list-tile-content>
        <v-spacer></v-spacer>
        <span>
          <v-icon class="error">arrow_downward</v-icon>
          {{ratesData.rates.NZD.toFixed(2)}}
        </span>
    </v-list-tile>
    <v-divider></v-divider>
    <v-list-tile >
        <img src="../../assets/flag-icons/icons8-india.png" height="50px">
        <v-list-tile-content>
          <v-list-tile-title >INR (Indian Rupees</v-list-tile-title>
        </v-list-tile-content>
        <v-spacer></v-spacer>
        <span>
        <v-icon class="success">arrow_upward</v-icon>
          {{ratesData.rates.INR.toFixed(2)}}
        </span>
    </v-list-tile>
    <v-divider></v-divider>
    <v-list-tile >
        <img src="../../assets/flag-icons/icons8-singapore.png" height="50px">
        <v-list-tile-content>
          <v-list-tile-title > SGD (Singapore Dollar)</v-list-tile-title>
        </v-list-tile-content>
        <v-spacer></v-spacer>
        <span>
        <v-icon class="error">arrow_downward</v-icon>
        {{ratesData.rates.SGD.toFixed(2)}}
        </span>
        </v-list-tile>
        <v-divider></v-divider>
    </v-list>    
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      loader: true,
      ratesData: null
    };
  },
  // call get stock exchange method
  mounted() {
    this.getStockExchange();
  },
  methods: {
    getStockExchange() {
      var self = this;
      axios
        .get("http://api.fixer.io/latest?base=usd")
        .then(function(response) {
          self.loader = false;
          self.ratesData = response.data;
        })
        .catch(function(error) {
          console.log("error" + error);
        });
    }
  }
};
</script>