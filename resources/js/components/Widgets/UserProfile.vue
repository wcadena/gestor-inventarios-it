<!-- User Profile Widget -->
<template>
  	<div class="user-profile-widget top-author-wrap">
		<div class="avatar-wrap mb-5 pos-relative">
			<span class="overlay-content"></span>
			<div class="user-info">
				<img src="/static/avatars/user-7.jpg" alt="reviwers" width="100" height="100" class="img-responsive rounded-circle mr-3">
				<div class="white--text pt-4">
					<h5 class="mb-0">Phoebe Henderson</h5>
					<span class="fs-14">CEO</span>
				</div>
			</div>
		</div>
		<div class="author-detail-wrap">
			<div class="pa-3 authors-info">
				<ul class="list-unstyled author-contact-info mb-2">
					<li>
						<span class="mr-3"><i class="zmdi zmdi-phone-msg"></i></span>
						<a href="tel:123456" class="fs-12 grey--text">+2347637684</a>
					</li>
					<li>
						<span class="mr-3"><i class="zmdi zmdi-email"></i></span>
						<a href="mailto:joan_parisian@gmail.com" class="fs-12 grey--text">abc@example.com</a>
					</li>
					<li>
						<span class="mr-3"><i class="zmdi zmdi-pin"></i></span>
						<span class="fs-12 grey--text">Mohali</span>
					</li>
				</ul>
				<ul class="d-custom-flex social-info list-unstyled">
					<li><a class="facebook" href="www.facebook.com"><i class="zmdi zmdi-facebook-box"></i></a></li>
					<li><a class="twitter" href="www.twitter.com"><i class="zmdi zmdi-twitter-box"></i></a></li>
					<li><a class="linkedin" href="www.linkedin.com"><i class="zmdi zmdi-linkedin-box"></i></a></li>
					<li><a class="instagram" href="www.instagram.com"><i class="zmdi zmdi-instagram"></i></a></li>
				</ul>
			</div>
			<div class="d-custom-flex align-center px-3 pb-3">
				<v-btn color="primary" class="ma-0 mr-3">View Profile</v-btn>
				<v-btn color="warning" class="ma-0">Send Message</v-btn>
			</div>
			<ul class="d-custom-flex list-unstyled footer-content text-center w-100 border-top-1 align-end">
				<li>
					<h5 class="mb-0">80</h5>
					<span class="fs-12 grey--text">Articles</span>
				</li>
				<li>
					<h5 class="mb-0">150</h5>
					<span class="fs-12 grey--text">Followers</span>
				</li>
				<li>
					<h5 class="mb-0">2k</h5>
					<span class="fs-12 grey--text">Likes</span>
				</li>
			</ul>
		</div>
  	</div>
</template>