<template>
   <div :class="type">
     	<span class="social-icon border d-custom-flex align-items-center rounded-circle">
			<v-icon medium>{{socialIcon}}</v-icon>
		</span>
		<span>
			<span class="d-block fw-bold">{{friends}}</span>
			<span class="d-block">Friends</span>
		</span> 
		<span>
			<span class="d-block fw-bold">{{feeds}}</span>
			<span class="d-block">Feeds</span> 
		</span>
   </div>
</template>
<script>
export default {
  props: ["socialIcon", "friends", "type", "feeds"]
};
</script>

