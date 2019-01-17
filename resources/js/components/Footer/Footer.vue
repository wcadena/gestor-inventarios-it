<template>
   <div class="app-footer d-custom-flex justify-space-between align-items-center">
      <ul class="list-inline footer-menu mb-0">
         <li>
            <v-btn flat to="/dashboard/ecommerce">Getting Started</v-btn>
         </li>
         <li>
            <v-btn flat to="/app/about-us">About Us</v-btn>
         </li>
         <li>
            <v-btn flat to="/app/pages/faq">Faq(s)</v-btn>
         </li>
         <li>
            <v-btn flat to="/terms-condition">Terms &amp; Conditions</v-btn>
         </li>
         <li>
            <v-btn flat to="/app/pages/feedback">Feedback</v-btn>
         </li>
      </ul>
      <h6 class="mb-0 fw-normal">{{copyrightText}}</h6>
   </div>
</template>

<script>
import AppConfig from "Constants/AppConfig";

export default {
  data() {
    return {
      copyrightText: AppConfig.copyrightText
    };
  }
};
</script>
