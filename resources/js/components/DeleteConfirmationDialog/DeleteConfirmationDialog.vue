<template>
	<v-dialog v-model="open" max-width="500">
		<v-card>
			<v-card-title class="headline">{{ heading }}</v-card-title>
			<v-card-text>{{message}}</v-card-text>
			<v-card-actions>
				<v-spacer></v-spacer>
				<v-btn color="primary" @click="open = false">Cancel</v-btn>
				<v-btn color="error" @click="$emit('onConfirm')">Yes</v-btn>
			</v-card-actions>
		</v-card>
	</v-dialog>
</template>

<script>
export default {
  props: ["heading", "message", "onConfirm"],
  data() {
    return {
      open: false
    };
  },
  methods: {
    openDialog() {
      this.open = true;
    },
    close() {
      this.open = false;
    }
  }
};
</script>

