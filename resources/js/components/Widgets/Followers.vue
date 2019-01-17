<!-- Followers Widget -->
<template>
   <div class="followers-wrap">
      <div class="app-flex justify-space-between mb-3">
         <h4>{{$t('message.followers')}}</h4>
         <p class="fs-12 mb-0 success--text">Trending : 29%
            <i class="ti-arrow-up ml-2"></i>
         </p>
      </div>
      <div>
         <ul class="list-unstyled fs-12">
            <li class="d-flex justify-space-between mb-3">
               <span class="fw-semi-bold">Last Week</span>
               <span>5400</span>
               <span class="text-xs-right success--text fs-12">
                  20% <i class="ti-arrow-up ml-2"></i> 
               </span>
            </li>
            <li class="d-flex justify-space-between">
               <span class="fw-semi-bold">This Week</span>
               <span>2400</span>
               <span class="text-xs-right error--text fs-12">
                  -5% <i class="ti-arrow-down ml-2"></i> 
              </span>
            </li>
         </ul>
      </div>
  </div>
</template>
