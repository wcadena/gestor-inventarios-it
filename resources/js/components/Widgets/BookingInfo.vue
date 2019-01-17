<!-- Booking Info Widget -->
<template>
   <ul class="p-0 list-group-flush list-unstyled">
      <li class="d-custom-flex align-center py-2 px-3">
         <span class="w-50 d-custom-flex align-items-center">
            <i class="zmdi zmdi-file-plus mr-3 primary--text font-lg"></i>
            <span class="fs-12 fw-semi-bold">Booking</span>
         </span>
         <div class="w-50 d-custom-flex justify-space-between align-center">
            <span class="fs-12">1450</span>
            <v-btn small icon>
               <v-icon>more_horiz</v-icon>
            </v-btn>
         </div>
      </li>
      <li class="d-custom-flex align-center py-2 px-3">
         <span class="w-50 d-custom-flex align-items-center">
            <i class="zmdi zmdi-assignment-check mr-3 success--text font-lg"></i>
            <span class="fs-12 fw-semi-bold">Confirmed</span>
         </span>
         <div class="w-50 d-custom-flex justify-space-between align-center">
            <span class="fs-12">1000</span>
            <v-btn small icon>
               <v-icon>more_horiz</v-icon>
            </v-btn>
         </div>
      </li>
      <li class="d-custom-flex align-center py-2 px-3">
         <span class="w-50 d-custom-flex align-items-center">
            <i class="zmdi zmdi-time mr-3 error--text font-lg"></i>
            <span class="fs-12 fw-semi-bold">Pending</span>
         </span>
         <div class="w-50 d-custom-flex justify-space-between align-center">
            <span class="fs-12">450</span>
            <v-btn small icon>
               <v-icon>more_horiz</v-icon>
            </v-btn>
         </div>
      </li>
   </ul>
</template>
