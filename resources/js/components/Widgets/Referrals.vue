<template>
   <div>
      <ul class="list-unstyled server-status-widget">
         <li v-for="referral in referrals" :key="referral.id">
            <div class="d-custom-flex justify-space-between">
					<h5 class="mb-0 grey--text">{{referral.count}}</h5>
					<span class="fs-12 grey--text">{{referral.from}}</span>
				</div>
            <v-progress-linear :value="referral.value" height="5" color="primary"></v-progress-linear>
         </li>
      </ul>
   </div>
</template>

<script>
export default {
  data() {
    return {
      referrals: [
        {
          id: 1,
          from: "Visits From Facebook",
          value: 70,
          count: 23488
        },
        {
          id: 2,
          from: "Visits From Twitter",
          value: 65,
          count: 11000
        },
        {
          id: 3,
          from: "Visits From Search",
          value: 65,
          count: 11000
        },
        {
          id: 4,
          from: "Direct Visits",
          value: 45,
          count: 32000
        },
        {
          id: 5,
          from: "From Google Search",
          value: 85,
          count: 65000
        }
      ]
    };
  }
};
</script>
