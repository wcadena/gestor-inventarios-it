<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<div class="pricing-wrapper">
				<v-layout row wrap>
					<v-flex xs12 sm6 md6 lg3>
						<div class="app-card text-xs-center">
							<div class="app-card-title primary d-custom-flex justify-space-between">
								<h3 class="mb-0 white--text mr-2">{{$t("message.basic")}}</h3>
								<p class="mb-0 fs-12 white--text">{{$t("message.forMostOfTheUsers")}}</p>
							</div>
							<div class="app-full-content">
								<h2 class="mb-4 font-3x">
									<span class="font-xl">$40</span>
									<sub>/Mo</sub>
								</h2>
								<ul class="list-unstyled list-group-flush">
									<li class="list-group-item">10GB of Bandwidth</li>
									<li class="list-group-item">200MB Max File Size</li>
									<li class="list-group-item">2GHZ CPU</li>
									<li class="list-group-item">256MB Memory</li>
									<li class="list-group-item">1 GB Storage</li>
								</ul>
							</div>
							<div class="app-footer">
								<v-btn block color="primary" large>{{$t("message.choosePlan")}}</v-btn>
							</div>
						</div>
					</v-flex>
					<v-flex xs12 sm6 md6 lg3>
						<div class="app-card text-xs-center">
							<div class="app-card-title success white--text d-custom-flex justify-space-between">
								<h3 class="mb-0 white--text mr-2">{{$t("message.standard")}}</h3>
								<p class="mb-0 fs-12 white--text">{{$t("message.forMostOfTheUsers")}}</p>
							</div>
							<div class="app-full-content">
								<h2 class="mb-4 font-3x">
									<span class="font-xl">$50</span>
									<sub>/Mo</sub>
								</h2>
								<ul class="list-unstyled list-group-flush">
									<li class="list-group-item">10GB of Bandwidth</li>
									<li class="list-group-item">200MB Max File Size</li>
									<li class="list-group-item">2GHZ CPU</li>
									<li class="list-group-item">256MB Memory</li>
									<li class="list-group-item">1 GB Storage</li>
								</ul>
							</div>
							<div class="app-footer">
								<v-btn block color="success" large>{{$t("message.choosePlan")}}</v-btn>
							</div>
						</div>
					</v-flex>
					<v-flex xs12 sm6 md6 lg3>
						<div class="app-card text-xs-center">
							<div class="app-card-title warning white--text d-custom-flex justify-space-between">
								<h3 class="mb-0 white--text mr-2">{{$t("message.mega")}}</h3>
								<p class="mb-0 fs-12 white--text">{{$t("message.forDeveloper")}}</p>
							</div>
							<div class="app-full-content">
								<h2 class="mb-4 font-3x">
									<span class="font-xl">$70</span>
									<sub>/Mo</sub>
								</h2>
								<ul class="list-unstyled list-group-flush">
									<li class="list-group-item">10GB of Bandwidth</li>
									<li class="list-group-item">200MB Max File Size</li>
									<li class="list-group-item">2GHZ CPU</li>
									<li class="list-group-item">256MB Memory</li>
									<li class="list-group-item">1 GB Storage</li>
								</ul>
							</div>
							<div class="app-footer">
								<v-btn block large color="warning">{{$t("message.choosePlan")}}</v-btn>
							</div>
						</div>
					</v-flex>
					<v-flex xs12 sm6 md6 lg3>
						<div class="app-card text-xs-center">
							<div class="app-card-title error white--text d-custom-flex justify-space-between">
								<h3 class="mb-0 white--text mr-2">{{$t("message.master")}}</h3>
								<p class="mb-0 fs-12 white--text">{{$t("message.forLargeEnterprises")}}</p>
							</div>
							<div class="app-full-content">
								<h2 class="mb-4 font-3x">
									<span class="font-xl">$100</span>
									<sub>/Mo</sub>
								</h2>
								<ul class="list-unstyled list-group-flush">
									<li class="list-group-item">10GB of Bandwidth</li>
									<li class="list-group-item">200MB Max File Size</li>
									<li class="list-group-item">2GHZ CPU</li>
									<li class="list-group-item">256MB Memory</li>
									<li class="list-group-item">1 GB Storage</li>
								</ul>
							</div>
							<div class="app-footer">
								<v-btn block color="error" large>{{$t("message.choosePlan")}}</v-btn>
							</div>
						</div>
					</v-flex>
				</v-layout>
			</div>
		</v-container>
	</div>
</template>