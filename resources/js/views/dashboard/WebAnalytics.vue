<template>
	<div>
		<v-container fluid px-0 py-0>
			<visitors-area-chart></visitors-area-chart>
		</v-container>
		<v-container fluid grid-list-xl>
			<v-layout row wrap class="stats-card-v4">
				<v-flex xl4 lg4 md4 sm4 xs12 b-50>
					<stats-card-v4 
						:title="$t('message.totalPageViews')"
						value="35,455"
						body="+5% from yesterday"
						:status="1"
						:data="[20,15,12,6,18,17,20,2]"
						:labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug']"
						:color="ChartConfig.color.info"
					>
					</stats-card-v4>
				</v-flex>
				<v-flex xl4 lg4 md4 sm4 xs12 b-50>
					<stats-card-v4 
						:title="$t('message.totalEarnings')"
						value="$4,500"
						body="-2% from yesterday"
						:status="0"
						:data="[15,20,6,9,18,17,20,2]"
						:labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug']"
						:color="ChartConfig.color.warning"
					></stats-card-v4>
				</v-flex>
				<v-flex xl4 lg4 md4 sm4 xs12 b-50>
					<stats-card-v4 
						:title="$t('message.impressions')"
						value="45,000"
						body="+5% from yesterday"
						:status="1"
						:data="[1,15,12,6,18,17,20,22]"
						:labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug']"
						:color="ChartConfig.color.danger"
					></stats-card-v4>
				</v-flex>
			</v-layout>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.activityAroundWorld')"
					:fullScreen="true"
					:closeable="true"
					:reloadable="true"
					colClasses="xl8 lg8 md7 sm6 xs12"
					contentCustomClass="pt-0"
				>
					<activity-around-world></activity-around-world>
				</app-card>
				<app-card
					:heading="$t('message.deviceSeparations')"
					:fullScreen="true"
					:closeable="true"
					:reloadable="true"
					colClasses="xl4 lg4 md5 sm6 xs12"
					customClasses="device-seperation-wrap"
				>
					<device-separations></device-separations>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.browserStatics')"
					:fullBlock="true"
					:fullScreen="true"
					:closeable="true"
					:reloadable="true"
					colClasses="xl4 lg4 md4  sm12 xs12"
				>
					<browser-statics></browser-statics>
				</app-card>
				<app-card
					:heading="$t('message.trafficChannel')"
					:fullScreen="true"
					:closeable="true"
					:reloadable="true"
					:footer="true"
					colClasses="xl4 lg4 md4 sm6 xs12"
					contentCustomClass="pt-0"
				>
					<traffic-channel-v2></traffic-channel-v2>
					<span class="grey--text d-custom-flex align-items-center justify-content-end" slot="footer">
						<i class="zmdi zmdi-replay mr-2"></i>
						<span class="fs-12">{{$t('message.updated10MinAgo')}}</span>
					</span>
				</app-card>
				<app-card
					:heading="$t('message.serverLoad')"
					:fullScreen="true"
					:closeable="true"
					:reloadable="true"
					colClasses="xl4 lg4 md4 sm6 xs12"
					contentCustomClass="pt-0 h-100"
				>
					<server-load styles="width: 100%; height: 275px;"></server-load>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card 
					colClasses="xl6 lg6 md6 sm6 xs12"
					contentCustomClass="pb-0 px-0"
				>
					<bandwidth-usage-v2></bandwidth-usage-v2>
				</app-card>
				<app-card 
					contentCustomClass="pb-0 px-0"
					colClasses="xl6 lg6 md6 sm6 xs12"
				>
					<total-downloading></total-downloading>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.notifications')"
					:fullBlock="true"
					:closeable="true"
					:reloadable="true"
					:fullScreen="true"
					:footer="true"
					colClasses="xl4 lg4 md6 sm12 xs12"
				>
					<notifications></notifications>
					<div class="d-custom-flex justify-space-between" slot="footer">
						<v-btn small color="primary">View All</v-btn>
						<span class="grey--text d-custom-flex align-items-center">
							<i class="zmdi zmdi-replay mr-2"></i> 
							<span class="fs-12">Updated 10 min ago</span>
						</span>
					</div>
				</app-card>
				<app-card
					:heading="$t('message.supportTickets')"
					:fullBlock="true"
					:closeable="true"
					:reloadable="true"
					:fullScreen="true"
					:footer="true"
					colClasses="xl8 lg8 md6 sm12 xs12"
				>
					<support-tickets></support-tickets>
					<div class="d-custom-flex justify-space-between" slot="footer">
						<v-btn small color="primary">View All</v-btn>
						<span class="grey--text d-custom-flex align-items-center">
							<i class="zmdi zmdi-replay mr-2"></i> 
							<span class="fs-12">Updated 10 min ago</span>
						</span>
					</div>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<v-flex class="xl3 lg3 md6 sm6 xs6 stats-widget-v3">
					<stats-card-v3
						icon="bookmark"
						:title="$t('message.totalBookmarked')"
						value="25,700"
						color="primary"
					></stats-card-v3>
				</v-flex>
				<v-flex class="xl3 lg3 md6 sm6 xs6 stats-widget-v3">
					<stats-card-v3
						icon="cloud_download"
						:title="$t('message.itemsDownloads')"
						value="14,200"
						color="success"
					></stats-card-v3>
				</v-flex>
				<v-flex class="xl3 lg3 md6 sm6 xs6 stats-widget-v3">
					<stats-card-v3
						icon="cloud_upload"
						:title="$t('message.itemsUploaded')"
						value="5,400"
						color="error"
					></stats-card-v3>
				</v-flex>
				<v-flex class="xl3 lg3 md6 sm6 xs6 stats-widget-v3">
					<stats-card-v3
						icon="insert_chart"
						:title="$t('message.totalAnalytics')"
						value="1,288"
						color="info"
					></stats-card-v3>
				</v-flex>		
			</v-layout>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.hotKeywords')"
					:fullBlock="true"
					:closeable="true"
					:reloadable="true"
					:fullScreen="true"
					:footer="true"
					colClasses="xl6 lg6 md6 sm12 xs12"
				>
					<hot-keywords></hot-keywords>
					<div slot="footer">
						<span class="grey--text d-custom-flex align-items-center">
							<i class="zmdi zmdi-replay mr-2"></i> 
							<span class="fs-12">Updated 10 min ago</span>
						</span>
					</div>
				</app-card>
				<v-flex class="xl6 lg6 md6 xs12 sm12">
					<v-layout row wrap>
						<v-flex class="xl6 lg6 md6 sm6 xs12 d-block">
							<users-stat></users-stat>
						</v-flex>
						<v-flex class="xl6 lg6 md6 xs12 sm6 d-block">
							<platform-users-stat></platform-users-stat>
						</v-flex>
						<app-card
							:heading="$t('message.serverStatus')"
							colClasses="xl12 lg12 md12 xs12 d-xs-half-block w-full"
							:closeable="true"
							:reloadable="true"
							:fullScreen="true"
							:footer="true"
							contentCustomClass="py-0"
						>
							<server-status></server-status>
							<div slot="footer">
								<span class="grey--text d-custom-flex align-items-center">
									<i class="zmdi zmdi-replay mr-2"></i> 
									<span class="fs-12">Updated 10 min ago</span>
								</span>
							</div>
						</app-card>
					</v-layout>
				</v-flex>
			</v-layout>
			<v-layout row wrap>
				<v-flex class="xl6 lg6 md6 sm12 xs12">
					<customer-support-service></customer-support-service>
				</v-flex>
				<v-flex class="xl6 lg6 md6 sm12 xs12">
					<promo-widget></promo-widget>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
import VisitorsAreaChart from "Components/Widgets/VisitorsAreaChart";
import TrafficChannelV2 from "Components/Widgets/TrafficChannelV2";
import BrowserStatics from "Components/Widgets/BrowserStatics";
import ServerLoad from "Components/Widgets/ServerLoad";
import BandwidthUsageV2 from "Components/Widgets/BandwidthUsageV2";
import TotalDownloading from "Components/Widgets/TotalDownloading";
import Notifications from "Components/Widgets/Notifications";
import SupportTickets from "Components/Widgets/SupportTickets";
import HotKeywords from "Components/Widgets/HotKeywords";
import UsersStat from "Components/Widgets/UsersStat";
import PlatformUsersStat from "Components/Widgets/PlatformUsersStat";
import ServerStatus from "Components/Widgets/ServerStatus";
import CustomerSupportService from "Components/Widgets/24x7CustomerSupport";
import PromoWidget from "Components/Widgets/PromoWidget";
import ActivityAroundWorld from "Components/Widgets/ActivityAroundWorld";
import DeviceSeparations from "Components/Widgets/DeviceSeprations";

// components
import StatsCardV3 from "Components/StatsCardV3/StatsCardV3";
import StatsCardV4 from "Components/StatsCardV4/StatsCardV4";

// chart config
import { ChartConfig } from "Constants/chart-config";

export default {
  components: {
    VisitorsAreaChart,
    TrafficChannelV2,
    BrowserStatics,
    ServerLoad,
    BandwidthUsageV2,
    TotalDownloading,
    Notifications,
    SupportTickets,
    HotKeywords,
    UsersStat,
    PlatformUsersStat,
    ServerStatus,
    CustomerSupportService,
    PromoWidget,
    StatsCardV3,
    ActivityAroundWorld,
    DeviceSeparations,
    StatsCardV4
  },
  data() {
    return {
      ChartConfig
    };
  }
};
</script>
