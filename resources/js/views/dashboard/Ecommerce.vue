<template>
	<div>
		<v-container fluid pt-0 grid-list-xl>
			<section-tooltip :title="$t('message.overview')" :tooltip="$t('message.dashboardOverview')"></section-tooltip>
			<!-- Dash Cards -->
			<v-layout row wrap border-rad-sm overflow-hidden>
				<stats-card-v2
					colClasses="xl4 lg4 md4 sm6 xs12"
					:heading="$t('message.totalEarnings')"
					:amount="2145"
				>
				<div class="pa-4">
					<line-chart-shadow
						:dataSet="totalEarnings"
						:lineTension="0.4"
						:dataLabels="labels"
						:width="370"
						:height="80"
						:borderWidth=3
						:enableGradient='false'
						:enableShadow='false'
						:borderColor="ChartConfig.color.primary">
					</line-chart-shadow>
				</div>
				</stats-card-v2>
				<stats-card-v2
					colClasses="xl4 lg4 md4 sm6 xs12"
					:heading="$t('message.newCustomers')"
					:amount="136"
				>
				<div class="pa-4">
					<line-chart-shadow
						:dataSet="newCustomers"
						:lineTension="0.4"
						:dataLabels="labels"
						:width="370"
						:height="80"
						:borderWidth=3
						:enableGradient='false'
						:enableShadow='false'
						:borderColor="ChartConfig.color.info"
						>
					</line-chart-shadow>
				</div>
				</stats-card-v2>
				<stats-card-v2
					colClasses="xl4 lg4 md4 sm12 xs12"
					:heading="$t('message.onlineRevenue')"
					:amount="2145"
				>
				<div class="pa-4">
					<line-chart-shadow
						:dataSet="onlineRevenue"
						:lineTension="0.4"
						:dataLabels="labels"
						:width="370"
						:height="80"
						:borderWidth=3
						:enableGradient='false'
						:enableShadow='false'
						:borderColor="ChartConfig.color.warning">
					</line-chart-shadow>
				</div>
				</stats-card-v2>
			</v-layout>
			<!-- Sales -->
			<v-layout row wrap>
				<app-card
					:heading="$t('message.sales')"
					colClasses="xl8 lg7 md7 sm6 xs12"
					customClasses="mb-0 sales-widget"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
				>
					<sales class="mb-4" :height="320"></sales>	
					<v-layout class="cart-wrap hidden-xs-only pl-4">
						<v-flex d-custom-flex>
							<span class="mr-2"><i class="zmdi zmdi-shopping-cart-plus primary--text"></i></span>
							<p class="mb-0">
								<span class="d-block fs-14 fw-bold">2382</span>
								<span class="d-block fs-12 grey--text">Sales</span>
							</p>
						</v-flex>
						<v-flex d-custom-flex>
							<span class="mr-2"><i class="zmdi zmdi-eye success--text"></i></span>
							<p class="mb-0">
								<span class="d-block fs-14 fw-bold">53,255</span>
								<span class="d-block fs-12 grey--text">Views</span>
							</p>
						</v-flex>
						<v-flex d-custom-flex>
							<span class="mr-2"><i class="zmdi zmdi-equalizer error--text"></i></span>
							<p class="mb-0">
								<span class="d-block fs-14 fw-bold">$1,25,000</span>
								<span class="d-block fs-12 grey--text">Earned</span>
							</p>
						</v-flex>
					</v-layout>				
				</app-card>
				<!-- Devices Share -->
				<app-card
					colClasses="xl4 lg5 md5 sm6 xs12"
					:heading="$t('message.devicesShare')"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
					customClasses="device-share-widget"
				>
					<device-share></device-share>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<!-- Recent Sale -->
				<app-card
					:heading="$t('message.recentSale')"
					colClasses="xl4 lg4 md4 sm6 xs12"
					customClasses="mb-0"
					:fullBlock="true"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
					:footer="true"
				>
					<recent-sale></recent-sale>
					<v-btn slot="footer" color="primary" small>{{$t('message.viewAll')}}</v-btn>
				</app-card>
				<!-- Support Request -->
				<app-card
					:heading="$t('message.supportRequest')"
					colClasses="xl4 lg4 md4 sm6 xs12"
					customClasses="mb-0"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
					:footer="true"
					:fullBlock="true"
				>
					<support-request></support-request>
					<v-btn slot="footer" color="primary" small>{{$t('message.viewAll')}}</v-btn>
				</app-card>
				<!-- To Do list -->
				<app-card 
					colClasses="lg4 md4  sm12 xs12" 
					:heading="$t('message.todoList')" 
					:fullScreen="true" 
					:reloadable="true" 
					:closeable="true" 
					:fullBlock="true">
					<to-do-list></to-do-list>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<!-- Customer Overview -->
				<app-card
					:heading="$t('message.customerOverview')"
					colClasses="xl6 lg6 md6 sm12 xs12"
					customClasses="mb-0 customer-overview-widget"
					contentCustomClass="mb-0"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
					:fullBlock="true"
				>
					<v-layout row wrap class="cart-wrap ma-0">
						<v-flex hidden-xs-only sm4>
							<div class="pa-2">
								<h3 class="mb-0">35000</h3>
								<p class="mb-0 fs-12 grey--text">New Customers</p>
							</div>
						</v-flex>
						<v-flex hidden-xs-only sm4>
							<div class="pa-2">
								<h3 class="mb-0">25000</h3>
								<p class="mb-0 fs-12 grey--text">Returning Customers</p>
							</div>
						</v-flex>
					</v-layout>
					<line-chart-with-area 
						:dataLabels= "['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul' ]"
						:dataSet= "[ 90, 140, 50, 120, 160, 90, 90 ]"
						:color="ChartConfig.color.info"
						:height="170"
						:enableXAxesLine="false"
					></line-chart-with-area>
				</app-card>
				<!-- Invoices -->
				<app-card
					:heading="$t('message.invoices')"
					colClasses="xl6 lg6 md6 sm12 xs12"
					customClasses="mb-0"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
					:fullBlock="true"
					:footer="true"
				>
					<invoice></invoice>
					<v-btn slot="footer" color="primary" small>{{$t('message.viewAll')}}</v-btn>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<!-- Shopping Cart -->
				<app-card
					colClasses="xl8 lg8 md7 sm12 xs12"
					:heading="$t('message.recentOrders')"
					customClasses="mb-0"
					:fullBlock="true"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
					:footer="true"
				>
					<recent-orders></recent-orders>
					<div slot="footer" class="justify-space-between footer-flex">
						<v-btn color="primary" small>{{$t('message.viewAll')}}</v-btn>
						<v-spacer></v-spacer>
						<span class="grey--text d-custom-flex align-items-center">
							<i class="zmdi zmdi-replay mr-2"></i>
							<span class="fs-12">{{$t('message.updated10MinAgo')}}</span>
						</span>
					</div>					
				</app-card>	
				<v-flex xl4 md5 lg4 sm12 xs12>					
					<!-- Weekly Sales -->
					<v-layout row wrap>
						<app-card
							colClasses="xl12 lg12 md12 sm6 xs12"
							:heading="$t('message.weeklySales')"
							:fullBlock="true"
							:fullScreen="true"
							:reloadable="true"
							:closeable="true"
							customClasses="weekly-sales-widegt"
						>
							<div class="pl-4">
								<h5 class="mb-0 fw-bold">2578</h5>
								<p class="fs-12 grey--text">+35% from last week</p>
							</div>
							<weekly-sales
								:enableXAxesLine="false"
							>
							</weekly-sales>
						</app-card>
						<!-- Reviews -->
						<v-flex xl12 lg12 md12 sm6 xs12>
							<reviews></reviews>
						</v-flex>
					</v-layout>
				</v-flex>
			</v-layout>
			<!-- Social Feeds -->
			<v-layout row wrap>
				<app-card
					colClasses="xl3 lg3 md3 sm6 xs12"
					customClasses="social-share-wrap"
				>	
					<social-feeds 
						socialIcon="zmdi zmdi-facebook"
						friends="89K"
						feeds="459"
						type="facebook"
					>
					</social-feeds>
				</app-card>					
				<app-card
					colClasses="xl3 lg3 md3 sm6 xs12"
					customClasses="social-share-wrap"
				>	
					<social-feeds 
						socialIcon="zmdi zmdi-twitter"
						friends="65K"
						feeds="350"
						type="twitter"
					>
					</social-feeds>
				</app-card>
				<app-card
					colClasses="xl3 lg3 md3 sm6 xs12"
					customClasses="social-share-wrap"
				>	
					<social-feeds 
						socialIcon="zmdi zmdi-linkedin"
						friends="35K"
						feeds="689"
						type="linkedin"
					>
					</social-feeds>
				</app-card>
				<app-card
					colClasses="xl3 lg3 md3 sm6 xs12"
					customClasses="social-share-wrap"
				>	
					<social-feeds 
						socialIcon="zmdi zmdi-google"
						friends="90K"
						feeds="1000"
						type="google"
					>
					</social-feeds>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<!-- Top Selling -->
				<v-flex xl4 lg4 md5 sm6 xs12>
					<top-selling></top-selling>
				</v-flex>
				<!-- Category Sales -->
				<app-card
					:heading="$t('message.categorySales')"
					colClasses="xl8 lg8 md7 sm6 xs12"
					customClasses="mb-0"
					contentCustomClass="pt-0"
					:fullScreen="true"
					:reloadable="true"
					:closeable="true"
				>
					<category-sale></category-sale>
					<div class="footer-flex">
						<v-spacer></v-spacer>
						<span class="grey--text d-custom-flex align-items-center">
							<i class="zmdi zmdi-replay mr-2"></i>
							<span class="fs-12">{{$t('message.updated10MinAgo')}}</span>
						</span>
					</div>		
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<!-- Blog Card -->
				<app-card
					colClasses="xl4 lg4 md4 xs12 sm6"
				>
					<blog-layout-one :data="blog"></blog-layout-one>
				</app-card>
				<v-flex xs12 sm6 md4 lg4>
					<blog-layout-four></blog-layout-four>
				</v-flex>	
				<!-- Add New Blog -->
				<app-card 
					colClasses="xs12 sm12 md4 lg4"
					:heading="$t('message.newPost')"
					:fullScreen="true" 
					:reloadable="true" 
					:closeable="true"
					customClasses="blog-widget"
				>
					<new-post></new-post>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
// charts component
import LineChartShadow from "Components/Charts/LineChartShadow";
import Sales from "Components/Charts/SalesChartV2";
import LineChartWithArea from "Components/Charts/LineChartWithArea";

// widgets
import RecentSale from "Components/Widgets/RecentSales";
import SupportRequest from "Components/Widgets/SupportRequestV2";
import ToDoList from "Components/Widgets/ToDoList";
import Invoice from "Components/Widgets/Invoice";
import RecentOrders from "Components/Widgets/RecentOrders";
import WeeklySales from "Components/Widgets/WeeklySales.vue";
import Reviews from "Components/Widgets/Reviews";
import SocialFeeds from "Components/Widgets/SocialFeeds";
import TopSelling from "Components/Widgets/TopSelling";
import NewPost from "Components/Widgets/AddNewBlog";
import BlogLayoutOne from "Components/Widgets/BlogLayoutOne";
import BlogLayoutFour from "Components/Widgets/BlogLayoutFour";
import CategorySale from "Components/Widgets/CategorySales";
import DeviceShare from "Components/Widgets/DeviceShare";

import { ChartConfig } from "Constants/chart-config";

export default {
  components: {
    LineChartShadow,
    RecentSale,
    SupportRequest,
    Sales,
    ToDoList,
    Invoice,
    RecentOrders,
    CategorySale,
    LineChartWithArea,
    WeeklySales,
    Reviews,
    SocialFeeds,
    TopSelling,
    NewPost,
    BlogLayoutOne,
    BlogLayoutFour,
    DeviceShare
  },
  data() {
    return {
      blog: {
        id: 3,
        thumbnail: "/static/img/blog-3.jpg",
        title: "lorem ipsum is simply dummy text",
        body:
          "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
        date: "1-jun-2018"
      },
      ChartConfig,
      labels: ["A", "B", "C", "D", "E", "F", "J", "K", "L", "M", "N", "P"],
      totalEarnings: [30, 50, 25, 55, 44, 60, 30, 20, 40, 20, 40, 44],
      onlineRevenue: [30, 50, 25, 55, 44, 60, 30, 20, 40, 20, 40, 44],
      newCustomers: [30, 50, 25, 55, 44, 60, 30, 20, 40, 20, 40, 44]
    };
  }
};
</script>
