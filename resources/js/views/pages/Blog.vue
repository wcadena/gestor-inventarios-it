<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<div class="blog-list">
				<v-layout row wrap>
					<v-flex xl9 lg8 md8 sm8 xs12>
						<v-layout row wrap>
                <app-card
                  colClasses="xl6 lg6 md6 sm12 xs12"
                  v-for="blog in blogs" :key="blog.id"
                >
                  <blog-layout-one :data="blog"></blog-layout-one>
                </app-card>
						</v-layout>
					</v-flex>
					<v-flex xl3 lg4 md4 sm4 xs12>
						<div class="blog-sidebar">
							<app-card
								heading="Categories"
								customClasses="mb-4 category-widget"
								contentCustomClass="pt-0"
							>
								<ul class="list-unstyled">
									<li v-for="(category, key) in categories" :key="key">
										<a href="javascript:void(0)">{{category}}</a>
									</li>
								</ul>
							</app-card>
							<app-card
								heading="Tags"
								customClasses="mb-4 tags-widget"
								contentCustomClass="pt-0"
							>
								<ul class="list-unstyled">
									<li v-for="(tag, key) in tags" :key="key">
										<a href="javascript:void(0)">{{tag}}</a>
									</li>
								</ul>
							</app-card>
							<app-card
								heading="Popular Blog"
								customClasses="mb-4"
							>
								<ul class="list-unstyled pa-0 ma-0">
									<li class="d-custom-flex mb-2" v-for="blog in populerBlogs" :key="blog.id">
										<div class="blog-thumb mr-4">
											<img 
												class="img-responsive"
												width="80"
												height="80"
												:src="blog.thumbnail" 
											/>
										</div>
										<div class="blog-content">
											<p class="mb-0">
												<a href="javascript:void(0)" class="fs-12 fw-semi-bold">{{blog.title}}</a>
											</p>
											<span class="grey--text  fs-12">Likes: {{blog.likes}}, Comments: {{blog.comments}}</span>
										</div>
									</li>
								</ul>
							</app-card>
						</div>
					</v-flex>
				</v-layout>
			</div>
		</v-container>
	</div>
</template>

<script>
import BlogLayoutOne from "Components/Widgets/BlogLayoutOne";

export default {
  components: {
    BlogLayoutOne
  },
  data() {
    return {
      blogs: [
        {
          id: 1,
          thumbnail: "/static/img/blog-1.jpg",
          title: "lorem ipsum is simply dummy text",
          body:
            "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
          date: "1-jun-2018"
        },
        {
          id: 2,
          thumbnail: "/static/img/blog-2.jpg",
          title: "lorem ipsum is simply dummy text",
          body:
            "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
          date: "1-jun-2018"
        },
        {
          id: 3,
          thumbnail: "/static/img/blog-3.jpg",
          title: "lorem ipsum is simply dummy text",
          body:
            "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
          date: "1-jun-2018"
        },
        {
          id: 4,
          thumbnail: "/static/img/blog-4.jpg",
          title: "lorem ipsum is simply dummy text",
          body:
            "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
          date: "1-jun-2018"
        },
        {
          id: 5,
          thumbnail: "/static/img/blog-5.jpg",
          title: "lorem ipsum is simply dummy text",
          body:
            "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
          date: "1-jun-2018"
        },
        {
          id: 6,
          thumbnail: "/static/img/blog-6.jpg",
          title: "lorem ipsum is simply dummy text",
          body:
            "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
          date: "1-jun-2018"
        },
      ],
      populerBlogs: [
        {
          id: 1,
          title: "7 Things You Need To Know About Consulting Today",
          thumbnail: "/static/img/gallery1.jpg",
          likes: 220,
          comments: 50
        },
        {
          id: 2,
          title: "7 Things You Need To Know About Consulting Today",
          thumbnail: "/static/img/gallery2.jpg",
          likes: 200,
          comments: 40
        },
        {
          id: 3,
          title: "7 Things You Need To Know About Consulting Today",
          thumbnail: "/static/img/gallery3.jpg",
          likes: 180,
          comments: 20
        },
        {
          id: 4,
          title: "7 Things You Need To Know About Consulting Today",
          thumbnail: "/static/img/gallery4.jpg",
          likes: 50,
          comments: 2
        }
      ],
      categories: [
        "Trending",
        "Sports",
        "News",
        "Travel",
        "Social",
        "Adventure"
      ],
      tags: [
        "Consulting",
        "Finance",
        "Ideas",
        "Market",
        "Online Service",
        "Planning",
        "Tips"
      ]
    };
  }
};
</script>
