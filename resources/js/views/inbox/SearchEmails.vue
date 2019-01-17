<template>
   <div class="search-mail">
      <v-text-field
         label="Search Email"
         placeholder="Search Email"
         solo
         @input="onSearchEmail"
         append-icon="search"
      ></v-text-field>
   </div>
</template>

<script>
export default {
  methods: {
    onSearchEmail(text) {
      this.$store.dispatch("onSearchEmail", text);
    }
  }
};
</script>

