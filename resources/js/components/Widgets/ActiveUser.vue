<!-- Active User Widget -->
<template>
	<div>
		<div class="app-card-title info white--text d-block py-4">
			<h4 class="mb-0 d-custom-flex justify-space-between">
				<span class="white--text">{{ $t('message.activeUsers') }}</span>
				<span class="white--text">250</span>
			</h4>
			<p class="fs-12 mb-0">{{$t('message.updated10MinAgo')}}</p>
		</div>
		<vue-perfect-scrollbar style="height:375px" :settings="settings">
			<ul class="list-group-flush list-unstyled">
				<li v-for="activeUser in data" :key="activeUser.id" class="d-flex px-3 align-center">
					<div class="d-custom-flex align-items-center w-50">
						<div class="flag-img mr-4">
							<img :src="`/static/flag-icons/${activeUser.flag}.png`" alt="flag-img" class="img-responsive" width="44" height="30" />
						</div>
						<h6 class="fw-bold mb-0">{{activeUser.countryName}}</h6>
					</div>
					<div class="w-50 d-custom-flex text-center">
						<span class="w-50 grey--text">{{activeUser.userCount}}</span>
						<div class="w-50">
							<span v-if="activeUser.status === 1">
								<i class="ti-arrow-up success--text mr-2"></i>
							</span>
							<span v-else>
								<i class="ti-arrow-down error--text mr-2"></i>
							</span>
							<span class="grey--text">{{activeUser.userPercent}}%</span>
						</div>
					</div>
				</li>
			</ul>
		</vue-perfect-scrollbar>
	</div>
</template>

<script>
	export default {
		props: ["data"],
		data() {
			return {
				menu: false,
				settings: {
					maxScrollbarLength: 100
				}
			};
		}
	};
</script>
