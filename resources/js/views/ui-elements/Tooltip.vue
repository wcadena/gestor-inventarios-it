<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<v-layout row wrap>
				<app-card
					:heading="$t('message.tooltip')"
					colClasses="xs12 md6"
				>
					<v-tooltip top>
						<v-btn color="primary" slot="activator">{{ $t('message.top') }}</v-btn>
						<span>Top tooltip</span>
					</v-tooltip>
					<v-tooltip right>
						<v-btn color="warning" slot="activator">{{ $t('message.right') }}</v-btn>
						<span>Right tooltip</span>
					</v-tooltip>
					<v-tooltip bottom>
						<v-btn color="info" slot="activator">{{ $t('message.bottom') }}</v-btn>
						<span>Bottom tooltip</span>
					</v-tooltip>
					<v-tooltip left>
						<v-btn color="error" slot="activator">{{ $t('message.left') }}</v-btn>
						<span>Left tooltip</span>
					</v-tooltip>
				</app-card>
				<app-card
					:heading="$t('message.visibility')"
					colClasses="xs12 md6"
				>
					<v-layout wrap>
						<v-flex xs6>
							<v-btn color="primary" @click.native="show = !show">{{ $t('message.toggle') }}</v-btn>
						</v-flex>
						<v-flex xs6>
							<v-tooltip v-model="show" top>
								<v-btn icon slot="activator">
									<v-icon color="primary">shopping_cart</v-icon>
								</v-btn>
								<span>Programmatic tooltip</span>
							</v-tooltip>
						</v-flex>
					</v-layout>
				</app-card>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
export default {
  data() {
    return {
      show: false
    };
  }
};
</script>
