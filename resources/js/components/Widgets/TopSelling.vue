<template>
	<app-card
		:heading="$t('message.topSelling')"
		:fullScreen="true"
		:reloadable="true"
		:closeable="true"
		:footer="true"
	>
		<div class="top-selling-widget">
			<slick :options="slickOptions">
				<div v-for="product in products" :key="product.id">
					<div class="thumbnail mb-2">
						<img :src="product.thumbnail" width="245" height="250" class="img-responsive mx-auto">
					</div>
					<h4 class="text-xs-center fw-bold mb-3">{{product.name}}</h4>
					<h5 class="primary--text text-xs-center">${{product.price.toFixed(2)}}</h5>
				</div>
			</slick>
		</div>
		<div class="d-flex" slot="footer">
			<div class="w-50 text-xs-center">
				<p class="mb-0 grey--text fs-12">Total Sales</p>
				<h4 class="fw-bold">12,550</h4>
			</div>
			<div class="w-50 text-xs-center border-left-1">
				<p class="mb-0 grey--text fs-12">Earning</p>
				<h4 class="fw-bold">25,000</h4>
			</div>
		</div>
	</app-card>
</template>

<script>
import Slick from "vue-slick";

export default {
  components: {
    Slick
  },
  data() {
    return {
      slickOptions: {
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        arrows: false,
        rtl: this.$store.getters.rtlLayout
      },
      products: [
        {
          id: 1,
          name: "Bluetooth Speakers",
          price: 255,
          thumbnail: "/static/img/product-1.png"
        },
        {
          id: 2,
          name: "Jbm Headphones",
          price: 340,
          thumbnail: "/static/img/product-2.png"
        },
        {
          id: 3,
          name: "AT Jack Radio",
          price: 340,
          thumbnail: "/static/img/product-3.png"
        }
      ]
    };
  }
};
</script>
