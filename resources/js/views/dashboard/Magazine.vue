<template>
   <div>
      <v-container fluid class="stats-wrap">
         <v-layout row wrap class="magazine-stats-wrap">
            <v-flex xl3 lg3 md3 sm6 xs12>
               <stats-card-v5
                  :title="$t(newClients.title)"
						:value="newClients.value"
                  extraClass="primary--text"
						:data="newClients.data"
						:labels="newClients.labels"
						:color="newClients.chartColor"
               ></stats-card-v5>
            </v-flex>
            <v-flex xl3 lg3 md3 xs12 sm6>
               <stats-card-v5
                  :title="$t(recurringClients.title)"
						:value="recurringClients.value"
                  extraClass="info--text"
						:data="recurringClients.data"
						:labels="recurringClients.labels"
						:color="recurringClients.chartColor"
               ></stats-card-v5>
            </v-flex>
            <v-flex xl3 lg3 md3 xs12 sm6>
               <stats-card-v5
                  :title="$t(bounceRates.title)"
						:value="bounceRates.value"
                  extraClass="error--text"
						:data="bounceRates.data"
						:labels="bounceRates.labels"
						:color="bounceRates.chartColor"
               ></stats-card-v5>
            </v-flex>
            <v-flex xl3 lg3 md3 xs12 sm6>
               <stats-card-v5
                  :title="$t(pageViews.title)"
						:value="pageViews.value"
                  extraClass="warning--text"
						:data="pageViews.data"
						:labels="pageViews.labels"
						:color="pageViews.chartColor"
               ></stats-card-v5>
            </v-flex>
         </v-layout>
      </v-container>
      <v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<v-flex xl12 lg12 md12 sm12 xs12>
         		<visitors-stat></visitors-stat>
				</v-flex>
			</v-layout>
         <v-layout row wrap>
            <app-card
               :heading="$t('message.newsletterCampaign')"
               :closeable="true"
               :fullScreen="true"
               :reloadable="true"
               :fullBlock="false"
               colClasses="xl8 lg8 md7 sm12 xs12"
            >
					<news-letter-campaign
						:height="310"
						:label1="newsLetterCampaignData.label1"
						:label2="newsLetterCampaignData.label2"
						:labels="newsLetterCampaignData.labels"
						:data1="newsLetterCampaignData.data1"
						:data2="newsLetterCampaignData.data2"
					></news-letter-campaign>
            </app-card>
				<app-card
               :heading="$t('message.referrals')"
               :closeable="true"
               :fullScreen="true"
               :reloadable="true"
               :fullBlock="false"
					:footer="true"
               colClasses="xl4 lg4 md5 sm12 xs12"
					contentCustomClass="py-0"
            >
					<referrals></referrals>
					<div slot="footer">
						<span class="grey--text d-custom-flex align-items-center">
							<i class="zmdi zmdi-replay mr-2"></i>
							<span class="fs-12">Updated 10 min ago</span>
						</span>
					</div>
            </app-card>
         </v-layout>
			<v-layout row wrap>
            <app-card
               :heading="$t('message.recentUsers')"
               :closeable="true"
               :fullScreen="true"
               :reloadable="true"
               :fullBlock="true"
               colClasses="xl4 lg4 md4 sm6 xs12 col-height-auto"
            >
					<users-list></users-list>
            </app-card>
				<app-card
               :fullBlock="true"
               colClasses=" xl4 lg4 md4 sm6 xs12 col-height-auto"
					class="top-author-wrap"
            >
					<top-authors></top-authors>
            </app-card>
				<app-card 
					:fullBlock="true"
					colClasses="xl4 lg4 md4 sm12 xs12 col-height-auto active-user-wrap"
				>
					<active-users :data="activeUser"></active-users>
            </app-card>
         </v-layout>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.activityAroundWorld')"
					colClasses="xl6 lg6 md6 sm5 xs12"
					:reloadable="true"
					:fullScreen="true"
					:closeable="true"
				>
					<activity-around-world></activity-around-world>
				</app-card>
				<v-flex xl6 lg6 md6 sm7 xs12>
					<app-card
						:heading="$t('message.marketingCampaign')"
						:fullBlock="true"
						:withTabs="true"
						:tabs="['Last Month', 'All Time']"
						customClasses="marketing-campaign-wrap"
					>
						<marketing-campaign></marketing-campaign>
					</app-card>
				</v-flex>
			</v-layout>
			<v-layout row wrap>
				<v-flex xl4 lg4 md12 xs12>
					<v-layout row wrap>
						<app-card
							:heading="$t('message.adsIncome')"
							:closeable="true"
							:fullScreen="true"
							:reloadable="true"
							:fullBlock="false"
							colClasses="xl12 lg12 md6 sm6 xs12"
						>
							<news-letter-campaign
								:height="210"
								:labels="['1', '2', '3', '4', '5', '6','7']"
								:data1="newsLetterCampaignData2.data1"
								:data2="newsLetterCampaignData2.data2"
							></news-letter-campaign>
						</app-card>
						<app-card
							:heading="$t('message.websiteTraffic')"
							:closeable="true"
							:fullScreen="true"
							:reloadable="true"
							:fullBlock="true"
							colClasses="xl12 lg12 md6 sm6 xs12"
							customClasses="website-traffic-wrap"
						>
							<website-traffic></website-traffic>
						</app-card>
					</v-layout>
				</v-flex>
				<app-card
					:heading="$t('message.articles')"
					colClasses="xl8 lg8 md12 xs12"
					:withTabs="true"
					:fullBlock="true"
					:tabs="[$t('message.trending'), $t('message.recent')]"
					:footer="true"
				>
					<articles></articles>
					<div slot="footer">
						<v-btn color="error" small>{{$t('message.addNew')}}</v-btn>
					</div>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.recentComments')"
					:closeable="true"
					:fullScreen="true"
					:reloadable="true"
					:fullBlock="true"
					:footer="true"
					colClasses="xl6 lg6 md6 sm12 xs12"
				>
					<recent-comments></recent-comments>
					<div slot="footer"><v-btn small color="primary">{{$t('message.viewAll')}}</v-btn></div>
				</app-card>
				<app-card
					:fullBlock="true"
					colClasses="xl6 lg6 md6 xs12 sm12"
				>
					<notifications-v2></notifications-v2>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card
					colClasses="xl4 lg4 md4 xs12 sm6 col-height-auto"
					:fullBlock="true"
					customClasses="grayish-blue white--text quote-widget"
				>
					<quote-of-the-day></quote-of-the-day>
				</app-card>
				<app-card
					colClasses="xl4 lg4 md4 xs12 sm6 col-height-auto"
					customClasses="height-auto"
				>
					<blog-layout-one :data="blog"></blog-layout-one>
				</app-card>
				<app-card
					colClasses="xl4 lg4 md4 xs12 sm12 col-height-auto"
					:heading="$t('message.newPost')"
					:closeable="true"
					:fullScreen="true"
					:reloadable="true"
					customClasses="blog-widget height-auto"
				>
					<add-new-blog></add-new-blog>
				</app-card>
			</v-layout>
			<v-layout row wrap>
				<app-card
					colClasses="xl12 lg12 md12 xs12 d-xs-half-block w-full"
					:heading="$t('message.photos')"
					:withTabs="true"
					:tabs="[$t('message.trending'), $t('message.recent')]"
				>
					<photo-gallery></photo-gallery>
				</app-card>
			</v-layout>
      </v-container>
   </div>
</template>

<script>
import StatsCardV5 from "Components/StatsCardV5/StatsCardV5";
import VisitorsStat from "Components/Widgets/VisitorsStat";
import NewsLetterCampaign from "Components/Charts/NewsLetterCampaign";
import Referrals from "Components/Widgets/Referrals";
import UsersList from "Components/Widgets/UsersList";
import ActiveUsers from "Components/Widgets/ActiveUser";
import TopAuthors from "Components/Widgets/TopAuthors";
import PhotoGallery from "Components/Widgets/PhotoGallery";
import QuoteOfTheDay from "Components/Widgets/QuoteOfTheDay";
import AddNewBlog from "Components/Widgets/AddNewBlog";
import BlogLayoutOne from "Components/Widgets/BlogLayoutOne";
import ActivityAroundWorld from "Components/Widgets/ActivityAroundWorld";
import MarketingCampaign from "Components/Widgets/MarketingCampaign";
import Articles from "Components/Widgets/Articles";
import WebsiteTraffic from "Components/Widgets/WebsiteTraffic";
import RecentComments from "Components/Widgets/RecentComments";
import NotificationsV2 from "Components/Widgets/NotificationsV2";

// chart config
import { ChartConfig } from "Constants/chart-config";

// data
import {
  newsLetterCampaignData,
  newsLetterCampaignData2,
  newClients,
  recurringClients,
  bounceRates,
  pageViews
} from "./data";
import { activeUser } from "Views/widgets/data";

export default {
  components: {
    StatsCardV5,
    VisitorsStat,
    NewsLetterCampaign,
    Referrals,
    UsersList,
    ActiveUsers,
    TopAuthors,
    PhotoGallery,
    QuoteOfTheDay,
    AddNewBlog,
    BlogLayoutOne,
    ActivityAroundWorld,
    MarketingCampaign,
    Articles,
    WebsiteTraffic,
    RecentComments,
    NotificationsV2
  },
  data() {
    return {
			blog: {
			id: 3,
			thumbnail: "/static/img/blog-1.jpg",
			title: "lorem ipsum is simply dummy text",
			body:
				"Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
			date: "1-jun-2018"
      },
      ChartConfig,
		newsLetterCampaignData,
		newsLetterCampaignData2,
      activeUser,
      newClients,
      recurringClients,
      bounceRates,
      pageViews
    };
  }
};
</script>
