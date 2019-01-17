<template>
   <div class="promo-widget">
		<app-card customClasses="border-info">
			<v-layout row wrap>
				<v-flex xl3 lg3 md2 sm3 xs4 b-50>
					<div class="d-custom-flex justify-center align-items-center">
						<img class="img-responsive" alt="transform" src="/static/img/Freetransform.png" />
					</div>
				</v-flex>
				<v-flex xl9 lg9 md10 sm9 xs8 b-50>
					<div>
						<h4>Pixel Perfect Design</h4>
						<p class="fs-12 grey--text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even the all-powerful Pointing has no control about the blind texts.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						<v-btn color="info" class="fs-12">{{$t('message.purchaseVuely')}}</v-btn>
					</div>
				</v-flex>
			</v-layout>
		</app-card>
	</div>
</template>
