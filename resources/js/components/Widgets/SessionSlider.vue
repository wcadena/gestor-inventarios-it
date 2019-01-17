<!-- Session Slider -->
<template>
  <div>
    <app-section-loader :status="loader"></app-section-loader>
    <slick :options="slickOptions" v-if="testimonials">
      <template v-for="testimonial in testimonials">
        <div class="session-slider" :key="testimonial.id">
          <div class="slider-content">
            <img :src="testimonial.avatar" class="rounded-circle img-responsive" width="170" height="170" />
            <div class="slider-meta mb-3">
              <span class="d-block client-name fw-bold">
                <i>{{testimonial.name}}</i>
              </span>
              <span class="d-block client-digg">{{testimonial.designation}}</span>
            </div>
            <p class="px-4">{{testimonial.body}}</p>
          </div>
        </div>
      </template>
    </slick>
  </div>
</template>
<script>
import Slick from "vue-slick";
import api from "Api";

export default {
  components: {
    Slick
  },
  mounted() {
    this.getTestimonials();
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
        arrows: false,
        rtl: this.$store.getters.rtlLayout
      };
    }
  },
  data() {
    return {
      loader: true,
      testimonials: null
    };
  },
  methods: {
    getTestimonials() {
      api
        .get("testimonials.js")
        .then(response => {
          this.loader = false;
          this.testimonials = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>
