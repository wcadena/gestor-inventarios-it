<template>
  <div :class="[{'app-full-content': fullBlock, 'app-card-content': !fullBlock}, extraClass]">
      <slot></slot>
  </div>
</template>

<script>
export default {
  props: ["extraClass", "fullBlock"]
};
</script>
