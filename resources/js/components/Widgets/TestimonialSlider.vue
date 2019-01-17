<template>
  <div>
    <app-section-loader :status="loader"></app-section-loader>
    <v-flex sm12 md10 mx-auto testimonial-slider>
      <slick :options="slickOptions" v-if="testimonials">
        <div class="media media-full" v-for="testimonial in testimonials" :key="testimonial.id">
          <div class="media left">
            <img :src="testimonial.avatar" class="img-responsive rounded-circle mr-5" width="137" height="137" />
          </div>
          <div class="media-body">
            <p>“{{testimonial.body}}“</p>
            <div class="user-meta">
              <span class="fw-bold d-block">{{testimonial.name}}</span>
              <span class="small">{{testimonial.designation}}</span>
            </div>
          </div>
        </div>
      </slick>
    </v-flex>
  </div>  
</template>

<script>
import Slick from "vue-slick";
import api from "Api";

export default {
  components: {
    Slick
  },
  data() {
    return {
      loader: true,
      slickOptions: {
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false
      },
      testimonials: null
    };
  },
  mounted() {
    this.getTestimonials();
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