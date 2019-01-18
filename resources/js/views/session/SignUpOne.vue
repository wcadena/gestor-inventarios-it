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
					<h2 class="mb-3">{{$t('message.signUp')}}</h2>
					<p class="fs-14">{{$t('message.havingAnAccount')}}
						<router-link to="/session/login">{{$t('message.login')}}</router-link>
					</p>
					<v-form v-model="valid" class="mb-4">
						<v-text-field 
							label="Username" 
							v-model="name" 
							:rules="nameRules" 
							:counter="20" 
							required
						></v-text-field>
						<v-text-field 
							label="E-mail ID" 
							v-model="email" 
							:rules="emailRules" 
							required
						></v-text-field>
						<v-text-field 
							label="Password" 
							v-model="password" 
							:rules="passwordRules" 
							type="password" 
							required
						></v-text-field>
						<v-text-field
								label="Re Password"
								v-model="c_password"
								:rules="c_passwordRules"
								type="password"
								required
						></v-text-field>
						<v-btn large @click="submit" block color="primary" class="mb-3">{{$t('message.signUp')}}</v-btn>
						<p>{{$t('message.bySigningUpYouAgreeTo')}} {{brand}}</p>
						<router-link to="">{{$t('message.termsOfService')}}</router-link>
					</v-form>

				</div>
			</div>
		</div>
	</div>
</template>

<script>
import SessionSliderWidget from "Components/Widgets/SessionSlider";
import AppConfig from "Constants/AppConfig";

export default {
  components: {
    SessionSliderWidget
  },
  data() {
    return {
      valid: false,
      name: "wagner",
      nameRules: [
        v => !!v || "Name is required",
        v => v.length <= 20 || "Name must be less than 20 characters"
      ],
      email: "wcadena@outllook.es",
      emailRules: [
        v => !!v || "E-mail is required",
        v =>
          /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) ||
          "E-mail must be valid"
      ],
      password: "123456",
	  c_password: "123456",
      passwordRules: [v => !!v || "Password is required"],
	  c_passwordRules: [v => !!v || "Password is required"],
      appLogo: AppConfig.appLogo2,
      brand: AppConfig.brand
    };
  },
  methods: {
    submit() {
      if (this.valid) {
        let userDetail = {
          name: this.name,
          email: this.email,
          password: this.password
        };
		  const querystring = require('querystring');
		  let formpost = querystring.stringify({
			  name :this.name,
			  email :this.email,
			  password : this.password,
			  c_password : this.c_password,
			  remember : this.checkbox,
		  });
		  var self = this;
		  axios.post('/api/register', formpost, {
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
    }
  }
};
</script>
