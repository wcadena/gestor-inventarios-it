<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<v-flex xs12 md6>
					<v-card class="elevation-5">
						<img src="/static/img/blog-1.jpg" alt="Card Image" class="img-responsive" />
						<v-card-title>
							<h3 class="headline primary--text">Blog post layout #1 with image</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultrices tortor non quam feugiat pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquam gravida justo, ut rhoncus tellus malesuada nec. Fusce dignissim velit eget consequat congue....</p>
						</v-card-title>
						<v-card-actions>
							<v-btn color="warning">Share</v-btn>
							<v-btn color="primary">Explore</v-btn>
						</v-card-actions>
					</v-card>
				</v-flex>
				<v-flex xs12 md6>
					<div class="app-card">
						<div class="app-card-content">
							<div class="blog-thumb mb-3">
								<img src="/static/img/post-1.png" alt="blog-1" width="100%" />
							</div>
							<div class="blog-content mb-3">
								<h4>Where Can You Find Unique Myspace Layouts Nowadays</h4>
								<span class="small">11 Nov 2017 , By: Admin , 5 Comments </span>
							</div>
							<v-card-actions>
								<v-btn color="success">Share</v-btn>
								<v-btn color="error">Explore</v-btn>
							</v-card-actions>
						</div>
					</div>
				</v-flex>
			</v-layout>
			<v-layout row wrap>
				<v-flex xs12 md6>
					<v-card class="elevation-5">
						<v-img src="/static/img/blog-2.jpg" alt="Card Image" height="410">
							<v-container fill-height fluid>
								<v-layout fill-height>
									<v-flex xs12 text-xs-center flexbox white--text>
										<span class="headline">Top 10 Australian beaches</span>
									</v-flex>
								</v-layout>
							</v-container>
						</v-img>
						<v-card-title primary-title>
							<h3 class="headline primary--text">Blog post layout #1 with image</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultrices tortor non quam feugiat pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquam gravida justo, ut rhoncus tellus malesuada nec. Fusce dignissim velit eget consequat congue....</p>
						</v-card-title>
						<v-card-actions>
							<v-btn color="primary">Share</v-btn>
							<v-btn color="error">Explore</v-btn>
						</v-card-actions>
					</v-card>
				</v-flex>
				<v-flex xs12 md6>
					<v-card class="elevation-5">
						<img src="/static/img/blog-3.jpg" alt="Card Image" class="img-responsive" />
						<v-card-title primary-title>
							<div>
								<div class="headline">Top western road trips</div>
								<span class="grey--text">1,000 miles of wonder</span>
							</div>
						</v-card-title>
						<v-card-actions>
							<v-btn color="secondary">Share</v-btn>
							<v-btn color="info">Explore</v-btn>
							<v-spacer></v-spacer>
							<v-btn icon @click.native="show = !show">
								<v-icon>{{ show ? 'keyboard_arrow_down' : 'keyboard_arrow_up' }}</v-icon>
							</v-btn>
						</v-card-actions>
						<v-slide-y-transition>
							<v-card-text v-show="show">
								I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
							</v-card-text>
						</v-slide-y-transition>
					</v-card>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
export default {
  data: () => ({
    show: false
  })
};
</script>
