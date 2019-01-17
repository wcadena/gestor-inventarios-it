<template>
	<div class="app-card">
		<div class="app-card-title">
			<h3>{{$t('message.reviews')}}</h3>
			<div class="app-contextual-link">
				<v-btn icon @click="prev" class="ma-0 left-arrow"><i class="ti-arrow-left"></i></v-btn>
				<v-btn icon @click="next" class="ma-0 right-arrow"><i class="ti-arrow-right"></i></v-btn>
			</div>
		</div>
		<div class="app-card-content pt-0">
			<div class="review-widget-wrapper">
				<slick ref="reviewSlider" :options="slickOptions" v-if="reviews">
					<template v-for=" (review, index ) in reviews">
						<div :key="index" class="review-item">
							<div class="d-custom-flex align-items-center">
								<star-rating 
									:star-size=15
									:rating="review.rating"
									:show-rating="false"
									read-only
								>
								</star-rating>
								<span class="fs-12 grey--text ml-2">{{review.title}}</span>
							</div>
							<p class="fw-bold fs-12">{{review.subject}}</p>
							<p class="fs-12 grey--text">{{review.description}}</p>
							<a class="fs-12" href="javascript:void(0)">Reply</a>
						</div>
					</template>
				</slick>
			</div>
		</div>
	</div>
</template>
<script>
import Slick from "vue-slick";
import StarRating from "vue-star-rating";
import api from "Api";
export default {
  data() {
    return {
      reviews: null
    };
  },
  mounted() {
    this.getReviews();
  },
  methods: {
    getReviews() {
      var self = this;
      api
        .get("vuely/reviews.js")
        .then(function(response) {
          self.reviews = response.data;
        })
        .catch(function(error) {
          console.log("error" + error);
        });
    },
    next() {
      this.$refs.reviewSlider.next();
    },
    prev() {
      this.$refs.reviewSlider.prev();
    }
  },
  computed: {
    slickOptions() {
      return {
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        arrows: false,
        rtl: this.$store.getters.rtlLayout
      };
    }
  },
  components: {
    Slick,
    StarRating
  }
};
</script>
