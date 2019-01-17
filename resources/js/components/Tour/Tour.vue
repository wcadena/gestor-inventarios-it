<template>
   <v-tour name="vuelyTour" :steps="steps"></v-tour>
</template>

<script>
export default {
  data() {
    return {
      steps: [
        {
          target: ".v-step-0",
          content: "Toggle Sidebar Navigation."
        },
        {
          target: ".v-step-1",
          content: "Use this to quickly navigate to frequently used pages."
        },
        {
          target: ".v-step-2",
          content: "Upgrade to your preferred subscription plan."
        },
        {
          target: ".v-step-3",
          content: "Switch to your preferred language.",
          params: {
            placement: "left"
          }
        },
        {
          target: ".v-step-4",
          content: "Customise your dashboard with theme settings.",
          params: {
            placement: "left"
          }
        }
      ]
    };
  }
};
</script>