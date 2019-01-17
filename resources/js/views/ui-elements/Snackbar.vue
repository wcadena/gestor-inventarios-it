<template>
	<div>
		<page-title-bar></page-title-bar>
		<v-container fluid grid-list-xl pt-0>
			<app-card
				:heading="$t('message.snackbar')"
			>
				<div class="mb-3">
					<p>The standard snackbar is useful for calling attention to some function that has just happened.</p>
				</div>
				<v-layout row wrap>
					<v-flex xs12 md6>
						<ul class="list-unstyled">
							<li>
								<v-checkbox color="primary" v-model="x" value="left" label="Left"></v-checkbox>
							</li>
							<li>
								<v-checkbox color="primary" v-model="x" value="right" label="Right"></v-checkbox>
							</li>
							<li>
								<v-checkbox color="primary" v-model="y" value="top" label="Top"></v-checkbox>
							</li>
							<li>
								<v-checkbox color="primary" v-model="y" value="bottom" label="Bottom"></v-checkbox>
							</li>
							<li>
								<v-checkbox color="primary" v-model="mode" value="multi-line" label="Multi-line (mobile)"></v-checkbox>
							</li>
							<li>
								<v-checkbox color="primary" v-model="mode" value="vertical" label="Vertical (mobile)"></v-checkbox>
							</li>
						</ul>
					</v-flex>
					<v-flex xs12 md6>
						<v-text-field v-model="text" type="text" label="Text"></v-text-field>
						<v-text-field v-model.number="timeout" type="number" label="Timeout"></v-text-field>
						<v-btn block color="primary" large @click.native="snackbar = true">{{$t('message.showSnackbar')}}</v-btn>
					</v-flex>
				</v-layout>
				<v-snackbar
					:timeout="timeout"
					:top="y === 'top'"
					:bottom="y === 'bottom'"
					:right="x === 'right'"
					:left="x === 'left'"
					:multi-line="mode === 'multi-line'"
					:vertical="mode === 'vertical'"
					v-model="snackbar"
				>
					<p class="ma-0">{{ text }}</p>
					<v-btn color="error" @click.native="snackbar = false">{{ $t('message.close') }}</v-btn>
				</v-snackbar>
			</app-card>
			<app-card
				:heading="$t('message.contextualSnackbar')"
			>
				<div class="mb-3">
					<p class="mb-0">You can also apply a color to the snackbar to better fit your implementation.</p>
				</div>
				<v-layout row wrap>
					<v-flex xs12 md6>
						<v-radio-group v-model="color" row>
						<v-radio
							v-for="(colorValue, i) in ['success', 'info', 'error', 'cyan darken-2']"
							light
							:key="i"
							:value="colorValue"
							:label="colorValue"
							:color="colorValue"
						></v-radio>
						</v-radio-group>
						<v-checkbox color="primary" v-model="mode2" value="multi-line" label="Multi-line (mobile)"></v-checkbox>
						<v-checkbox color="primary" v-model="mode2" value="vertical" label="Vertical (mobile)"></v-checkbox>
					</v-flex>
					<v-flex xs12 md6>
						<v-text-field v-model="text" type="text" label="Text"></v-text-field>
						<v-text-field v-model.number="timeout" type="number" label="Timeout"></v-text-field>
						<v-btn block large color="warning" @click.native="snackbar2 = true" dark>{{$t('message.showSnackbar')}}</v-btn>
					</v-flex>
				</v-layout>
				<v-snackbar
					:timeout="timeout"
					:color="color"
					:multi-line="mode2 === 'multi-line'"
					:vertical="mode2 === 'vertical'"
					v-model="snackbar2"
				>
					{{ text }}
					<v-btn color="error" @click.native="snackbar2 = false">{{ $t('message.close') }}</v-btn>
				</v-snackbar>
			</app-card>
		</v-container>
	</div>
</template>

<script>
export default {
  data() {
    return {
      snackbar: false,
      snackbar2: false,
      y: "top",
      x: null,
      mode: "",
      mode2: "",
      timeout: 6000,
      text: "Hello, I'm a snackbar",
      color: ""
    };
  }
};
</script>
