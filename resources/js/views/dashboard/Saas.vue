<template>
	<div>
   	<v-container fluid grid-list-xl>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.overallTrafficStatus')"
					:reloadable="true"
					:fullScreen="true"
					:closeable="true"
					colClasses="xl6 lg6 md12 sm12 xs12"
				>
					<div class="d-sm-none pa-4 mb-4">
						<v-layout row>
						<v-flex xl4 lg4 md4 sm4 d-custom-flex justify-space-between align-end>							
							<div>
								<p class="mb-0 grey--text">Online Sources</p>
								<h3 class="mb-0">3500</h3>
                     </div>
                     <span><i class="ti-arrow-up font-lg success--text"></i></span>
						</v-flex>
						<v-flex xl4 lg4 md4 sm4 d-custom-flex justify-space-between align-end>							
							<div>
                        <p class="mb-0 grey--text">Today</p>
                        <h3 class="mb-0">17,020</h3>
                     </div>
                     <span><i class="ti-arrow-up font-lg success--text"></i></span>
						</v-flex>
						<v-flex xl4 lg4 md4 sm4 d-custom-flex justify-space-between align-end>
							<div>
                        <p class="mb-0 grey--text">Last Month</p>
                        <h3 class="mb-0">20.30%</h3>
                     </div>
                     <span><i class="ti-arrow-down error--text font-lg"></i></span>
						</v-flex>
					</v-layout>
					</div>
					<ad-campaign-perfomance 
						:height="340" 
						:data="adCampaignPerfomanceData"
					></ad-campaign-perfomance>	
				</app-card>
				<v-flex xl6 lg6 md12 sm12 xs12>
					<v-layout row wrap border-rad-sm>
						<stats-card-v2
							colClasses="xl6 lg6 md6 sm6 xs12"
							:heading="$t('message.totalSales')"
							:amount="1435"
						>
							<div class="pa-4">
								<line-chart-shadow
									:dataSet="totalEarnings.data"
									:lineTension="totalEarnings.lineTension"
									:dataLabels="totalEarnings.labels"
									:width="370"
									:height="100"
									:borderColor="totalEarnings.borderColor"
									:enableGradient='false'
								>
								</line-chart-shadow>	
							</div>
						</stats-card-v2>
						<stats-card-v2
							colClasses="xl6 lg6 md6 sm6 xs12"
							:heading="$t('message.netProfit')"
							:amount="2478"
						>
							<div class="pa-4">
								<line-chart-shadow
									:dataSet="netProfit.data"
									:lineTension="netProfit.lineTension"
									:dataLabels="netProfit.labels"
									:width="370"
									:height="100"
									:borderColor="netProfit.borderColor"
									:enableGradient='false'
								>
								</line-chart-shadow>
							</div>
						</stats-card-v2>
						<stats-card-v2
							colClasses="xl6 lg6 md6 sm6 xs12"
							:heading="$t('message.tax')"
							:amount="1200"
						>
							<div class="pa-4">
								<line-chart-shadow
									:dataSet="totalExpences.data"
									:lineTension="totalExpences.lineTension"
									:dataLabels="totalExpences.labels"
									:width="370"
									:height="100"
									:borderColor="totalExpences.borderColor"
									:enableGradient='false'
								>
								</line-chart-shadow>	
							</div>
						</stats-card-v2>
						<stats-card-v2
							colClasses="xl6 lg6 md6 sm6 xs12"
							:heading="$t('message.expenses')"
							:amount="3478"
						>
							<div class="pa-4">
								<line-chart-shadow
									:dataSet="onlineRevenue.data"
									:lineTension="onlineRevenue.lineTension"
									:dataLabels="onlineRevenue.labels"
									:width="370"
									:height="100"
									:borderColor="onlineRevenue.borderColor"
									:enableGradient='false'
								>
								</line-chart-shadow>	
							</div>
						</stats-card-v2>
					</v-layout>
				</v-flex>
			</v-layout>
         <v-layout row wrap>
				<app-card
					colClasses="xl4 lg4 md6 sm6 xs12"
					:heading="$t('message.supportRequest')"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
					:footer="true"
					:fullBlock="true"
					customClasses="support-widget-wrap"
				>
					<support-request></support-request>
					<div slot="footer" class="justify-space-between footer-flex align-items-center">
						<span class="grey--text d-custom-flex align-items-center">
							<i class="zmdi zmdi-replay mr-2"></i> 
							<span class="fs-12">Updated 10 min ago</span>
						</span>
						<v-btn class="ma-0" color="primary" small>{{$t('message.assignNow')}}</v-btn>
					</div>    
				</app-card>
				<app-card
					colClasses="xl4 lg4 md6 sm6 xs12"
					:fullBlock="true"
				>
					<user-profile></user-profile>
				</app-card>
				<app-card
					colClasses="xl4 lg4 md12 xs12 sm12"
					:fullBlock="true"
					customClasses="grayish-blue white--text"
				>
					<quote-of-the-day></quote-of-the-day>
				</app-card>
			</v-layout>
			<v-layout row wrap>				
				<app-card
					colClasses="xl4 lg4 md6 xs12 sm6 xs12"
					:fullBlock="true"
				>	
					<active-user 
						:data="activeUser"
					></active-user>
				</app-card>
				<app-card
					colClasses="xl4 lg4 md6 xs12 sm6"
					:fullBlock="true"
				>
					<weather></weather>		
				</app-card>
				<app-card
					:heading="$t('message.campaignPerformance')"
					colClasses="xl4 lg4 md12 sm12 xs12"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
					:fullBlock="true"
					customClasses="campaign-performance"
				>  
					<campaign-performance></campaign-performance>
				</app-card>
			</v-layout>			
			<v-layout row wrap>
            <app-card
               colClasses="xl6 lg6 md6 sm12 xs12"
               :heading="$t('message.projectManagement')"
               :fullScreen="true"
               :reloadable="true"
               :closeable="true"
					:fullBlock="true"
					:footer="true"
					>
               <project-management></project-management>
					<div slot="footer" class="justify-space-between footer-flex align-items-center">
						<span class="grey--text d-custom-flex align-items-center">
							<i class="zmdi zmdi-replay mr-2"></i> 
							<span class="fs-12">Updated 10 min ago</span>
						</span>
					</div>    
            </app-card>
				<app-card
					colClasses=" xl6 lg6 md6 sm12 xs12"
					:heading="$t('message.projectTaskManagement')"
					customClasses="project-task-management"
					:closeable="true"
					:fullScreen="true"
					:reloadable="true"
					:fullBlock="true"
					:footer="true"
				>
			   	<project-task-management></project-task-management>
				  	<div slot="footer" class="justify-space-between footer-flex align-items-center">
						<div class="w-40 d-custom-flex align-center justify-space-between">
							<p class="grey-text fs-12 w-50 mb-0 mr-2">Select Project</p>	
							<v-select
								:items="selectItems"
								label="Select Project"
								v-model="defaultSelectedItem"
								solo
							>
							</v-select>
						</div>
						<span class="grey--text d-custom-flex align-items-center">
							<i class="zmdi zmdi-replay mr-2"></i> 
							<span class="fs-12">Updated 10 min ago</span>
						</span>
				   </div>  
            </app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
import LineChartShadow from "Components/Charts/LineChartShadow";
import AdCampaignPerfomance from "Components/Charts/AdCampaignPerfomance";

// widgets
import CampaignPerformance from "Components/Widgets/CampaignPerformance.vue";
import UserProfile from "Components/Widgets/UserProfile";
import QuoteOfTheDay from "Components/Widgets/QuoteOfTheDay";
import SupportRequest from "Components/Widgets/SupportRequest";
import ActiveUser from "Components/Widgets/ActiveUser";
import Weather from "Components/Widgets/Weather";
import ProjectManagement from "Components/Widgets/ProjectManagement";
import ProjectTaskManagement from "Components/Widgets/ProjectTaskManagement";

// data
import {
  earnedToday,
  salesAndEarning,
  totalEarnings,
  netProfit,
  onlineRevenue,
  totalExpences,
  adCampaignPerfomanceData,
} from "./data";
import { activeUser } from "Views/widgets/data";

export default {
	components: {
		LineChartShadow,
		CampaignPerformance,
		UserProfile,
		QuoteOfTheDay,
		SupportRequest,
		AdCampaignPerfomance,
		ActiveUser,
		Weather,
		ProjectManagement,
		ProjectTaskManagement
	},
	data() {
		return {
			totalEarnings,
			netProfit,
			onlineRevenue,
			totalExpences,
			adCampaignPerfomanceData,
			activeUser,
			defaultSelectedItem: 'All',
			selectItems: [
				'All', 'Booking Koala', 'Reactify', 'Adminify'
			]
		};
	}
};
</script>

