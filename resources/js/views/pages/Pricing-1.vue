<template>
	<div>
		<page-title-bar></page-title-bar>
		<app-section-loader :status="loader"></app-section-loader>
		<v-container grid-list-xl fluid>
			<v-layout row wrap>
				<v-flex xl12 md12 lg12 sm12 xs12>
					<div>
						<div class="pricing-wrapper">
							<div class="pricing-top mb-70">
								<v-layout row wrap>
									<v-flex xs12 md9 lg7 mx-auto text-xs-center pa-0>
										<h2>{{ $t('message.chooseThePlanThatWorksForYou') }}</h2>
										<div class="switcher">
											<span class="mr-2">{{ $t('message.monthly') }}</span>
											<span class="switch-wrap">
												<v-switch v-model="switchPlan" hide-details color="success"></v-switch>
											</span>
											<span>{{ $t('message.yearlyGet2MonthExtra') }}</span>
										</div>
									</v-flex>
								</v-layout>
							</div>
							<div class="pricing-list">
								<v-layout row wrap row-eq-height>
									<app-card 
										colClasses="xs12 sm4 md4 lg4 w-full" 
										customClasses="text-xs-center"
										:fullBlock="true"
									>
										<div class="pricing-icon mb-30">
											<img src="/static/img/pricing-icon.png" alt="pricing icon" class="img-responsive" width="" height="" />
										</div>
										<h2 class="primary--text pricing-title">{{ $t('message.basic') }}</h2>
										<p>Secure file sharing and collaboration.</p>
										<div class="mb-3">
											<h2 class="amount-title">Free</h2>
											<span class="text-muted small">For 1 user</span>
										</div>
										<ul class="price-detail list-unstyled">
											<li>100 GB secure storage</li>
											<li>2 GB file upload</li>
											<li>Minimum 3 users, max 10 users</li>
										</ul>
										<v-btn color="primary" large block>{{ $t('message.startToBasic') }}</v-btn>
									</app-card>
									<app-card 
										colClasses="xs12 sm4 md4 lg4 w-full" 
										customClasses="text-xs-center"
										:fullBlock="true"
									>
										<div class="pricing-icon mb-30">
											<img src="/static/img/pricing-icon.png" alt="pricing icon" class="img-responsive" width="" height="" />
										</div>
										<h2 class="warning--text pricing-title">{{ $t('message.pro') }}</h2>
										<p>More power & personalization</p>
										<div class="mb-3">
											<h2 class="amount-title">${{ switchPlan ? 30 : 35 }}
												<sub>/mo</sub>
											</h2>
											<span class="text-muted small">For 1 user</span>
										</div>
										<ul class="price-detail list-unstyled">
											<li>Unlimited storage</li>
											<li>5 GB file upload</li>
											<li>Minimum 3 users, no maximum</li>
										</ul>
										<v-btn color="warning" large block>{{ $t('message.upgradeToPro') }}</v-btn>
									</app-card>
									<app-card 
										colClasses="xs12 sm4 md4 lg4 w-full"
										customClasses="text-xs-center"
										:fullBlock="true"
									>
										<div class="pricing-icon mb-30">
											<img src="/static/img/pricing-icon.png" alt="pricing icon" class="img-responsive" width="" height="" />
										</div>
										<h2 class="success--text pricing-title">{{ $t('message.advanced') }}</h2>
										<p>Advanced Feature For Brands</p>
										<div class="mb-3">
											<h2 class="amount-title">${{ switchPlan ? 59 : 70 }}
												<sub>/mo</sub>
											</h2>
											<span class="text-muted small">For 1 more user</span>
										</div>
										<ul class="price-detail list-unstyled">
											<li>Unlimited storage</li>
											<li>15 GB file upload</li>
											<li>Minimum 3 users, no maximum</li>
										</ul>
										<v-btn color="success" large block>{{ $t('message.upgradeToAdvance') }}</v-btn>
									</app-card>
								</v-layout>
								<div class="text-xs-center py-5">
									<h2 class="mb-0">{{ $t('message.comparePlans') }}</h2>
								</div>
								<div class="fixed-pricing">
									<v-layout row wrap row-eq-height>
										<v-flex xs12 sm4 md4 lg4 pr-0 w-full>
											<div class="pricing-box">
												<div class="pricing-head">
													<h2 class="primary--text pricing-title mb-0">{{ $t('message.basicFree') }}</h2>
												</div>
												<div class="plan-info">
													<span>100 responses / mo</span>
												</div>
												<div class="pricing-body">
													<ul class="list-unstyled plan-info-listing">
														<li v-for="(item, key) in comparePlans.basic" :key="key">
															<i class="ti-check-box"></i>
															<a href="javascript:void(0);">{{ item }}</a>
														</li>
													</ul>
													<v-btn color="primary" large block>{{ $t('message.startToBasic') }}</v-btn>
												</div>
											</div>
										</v-flex>
										<v-flex xs12 sm4 md4 lg4 px-0 w-full>
										<div class="pricing-box">
											<div class="pricing-head">
												<h2 class="warning--text pricing-title mb-0">{{ $t('message.pro') }}</h2>
											</div>
											<div class="plan-info">
												<span>Unlimited responses</span>
											</div>
											<div class="pricing-body">
												<ul class="list-unstyled plan-info-listing">
													<li v-for="(item, key) in comparePlans.pro" :key="key">
														<i class="ti-check-box"></i>
														<a href="javascript:void(0);">{{ item }}</a>
													</li>
												</ul>
												<v-btn color="warning" large block>{{ $t('message.upgradeToPro') }}</v-btn>
											</div>
										</div>
										</v-flex>
										<v-flex xs12 sm4 md4 lg4 pl-0 w-full>
										<div class="pricing-box">
											<div class="pricing-head">
												<h2 class="success--text pricing-title mb-0">{{ $t('message.advanced') }}</h2>
											</div>
											<div class="plan-info">
												<span>Unlimited responses</span>
											</div>
											<div class="pricing-body">
												<ul class="list-unstyled plan-info-listing">
													<li v-for="(item, key) in comparePlans.advanced" :key="key">
														<i class="ti-check-box"></i>
														<a href="javascript:void(0);">{{ item }}</a>
													</li>
												</ul>
												<v-btn color="success" large block>{{ $t('message.upgradeToAdvance') }}</v-btn>
											</div>
										</div>
										</v-flex>
									</v-layout>
								</div>
								<div class="text-xs-center py-5">
									<h2 class="mb-0">{{ $t('message.frequentlyAskedQuestions') }}</h2>
								</div>
								<div class="faq-wrapper" v-if="faqs">
									<div class="card-columns">
										<v-card v-for="faq in faqs" :key="faq.id">
											<div class="card-body pa-3">
												<div class="card-title">{{ faq.title }}</div>
												<div class="card-text">
													{{ faq.content }}
												</div>
											</div>
										</v-card>
									</div>
								</div>
							</div>
						</div>
					</div>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
import api from "Api";

export default {
  data() {
    return {
      loader: true,
      switchPlan: true,
      faqs: null,
      comparePlans: {
        basic: [
          "Granular access and controls",
          "Desktop sync",
          "Mobile access",
          "Version history",
          "SSL and at-rest encryption",
          "Two-factor authentication",
          "Standard business support",
          "User management",
          "25,000 API calls per month"
        ],
        pro: [
          "Includes all Starter features plus",
          "Advanced user and security reporting",
          "Custom branding",
          "Mobile security controls",
          "Integrations with EMM providers",
          "Data Loss Prevention (DLP)",
          "Standard business support",
          "50,000 API calls per month",
          "25,000 API calls per month"
        ],
        advanced: [
          "Includes all Business features plus",
          "Unlimited external collaborators",
          "Full content visibility and management",
          "Unlimited integrations",
          "Workflow automations",
          "Document watermarking",
          "Device trust (advanced mobile requirements)",
          "Password policy enforcement",
          "Metadata and custom templates"
        ]
      }
    };
  },
  mounted() {
    this.getFaqs();
  },
  methods: {
    getFaqs() {
      api
        .get("faqs.js")
        .then(response => {
          this.loader = false;
          this.faqs = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>
