<template>
	<div class="session-wrapper">
		<div class="session-left">
			<session-slider-widget></session-slider-widget>
		</div>
		<div class="session-right text-xs-center">
			<div class="session-table-cell">
				<div class="session-content">
					<img 
						:src="appLogo"
						class="img-responsive mb-3" 
						width="78" 
						height="78" 
					/>
					<h2 class="mb-3">{{$t('message.loginToAdmin')}}</h2>
					<p class="fs-14">{{$t('message.enterUsernameAndPasswordToAccessControlPanelOf')}} {{brand}}.</p>
					<v-badge v-if="message != ''" class="error">{{message}}</v-badge>
					<v-form v-model="valid" class="mb-4">
						<v-text-field 
							label="E-mail ID" 
							v-model="email" 
							:rules="emailRules" 
							required
						></v-text-field>
						<v-text-field 
							label="Password" 
							v-model="password" 
							type="password" 
							:rules="passwordRules" 
							required
						></v-text-field>
						<v-checkbox 
							color="primary" 
							label="Remember me" 
							v-model="checkbox"
						></v-checkbox>
						<router-link class="mb-1" to="/session/forgot-password">{{$t('message.forgotPassword')}}?</router-link>
						<div>
							<v-btn large @click="submit" block color="primary">{{$t('message.loginNow')}}</v-btn>
							<v-btn large @click="onCreateAccount" block color="warning">{{$t('message.createAccount')}}</v-btn>
						</div>
						<p>{{$t('message.bySigningUpYouAgreeTo')}} {{brand}}</p>
						<router-link to="">{{$t('message.termsOfService')}}</router-link>
					</v-form>

				</div>
			</div>
		</div>
	</div>
</template>

<script>

import { mapGetters } from "vuex";
import SessionSliderWidget from "Components/Widgets/SessionSlider";
import AppConfig from "Constants/AppConfig";
import { mapMutations } from 'vuex'


import AuthService from "../../auth/AuthService";

const auth = new AuthService();
const { login, logout, authenticated, authNotifier } = auth;

export default {
  components: {
    SessionSliderWidget
  },
  data() {
    return {
      checkbox: false,
      valid: false,
      email: "admin@admin.com",
	  message:'',
      emailRules: [
        v => !!v || "E-mail is required",
        v =>
          /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) ||
          "E-mail must be valid"
      ],
      password: "admin",
      passwordRules: [v => !!v || "Password is required"],
      appLogo: AppConfig.appLogo2,
      brand: AppConfig.brand
    };
  },
  methods: {
    submit() {

		if (this.valid) {
			this.message ='';
			console.log('Intenta Loguear');
			const user = {
				email: this.email,
				password: this.password,
				token : ''
			};

			console.log('A Autenticar!!!');
			const querystring = require('querystring');
			let formpost = querystring.stringify({
					email :this.email,
					password : this.password,
					remember : this.checkbox,
				 });
			var self = this;
			axios.post('/api/login', formpost, {
			}).then(function(response) {
				user.token = response.data.data.token;
				self.$store.dispatch("signInUser", user );
				//axios.post('/login', formpost, {			}).then(function(response) {					console.log('Authentication!!!!');				}).catch(function(error) {					console.log('Error on Authentication');					self.message = error.response.data.data;				});
				self.$router.push("/default/dashboard/ecommerce");
			}).catch(function(error) {
				console.log('Error on Authentication');
				self.message = error.response.data.data;
			});
		}
    },
	  onCreateAccount() {
		  this.$router.push("/session/sign-up");
	  },
	  signinUser() {
		  this.$router.push("/dashboard/home");
	  },
	  ...mapMutations({
		  add: 'signInUser' // map `this.add()` to `this.$store.commit('increment')`
	  })
  }
};
</script>
