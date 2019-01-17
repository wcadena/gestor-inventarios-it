<template>
  <div :class="[colClasses, { 'flex': colClasses}]">
    <fullscreen ref="fullscreen">
      <div class="app-card" :class="[customClasses, { 'd-none': close }]">
        <app-card-heading
          :heading="heading"
          :closeable="closeable"
          :reloadable="reloadable"
          :fullScreen="fullScreen"
			 :withTabs="withTabs"
			 :tabs="tabs"
			 @onChangeTabCallback="onChangeTab"
          @onCollapse="onCollapse"
          @onReload="onReload"
          @onClose="onClose"
        >
        </app-card-heading>
          <app-card-content :extraClass="[contentCustomClass]" :fullBlock="fullBlock">
            <slot></slot>
          </app-card-content>
        <app-card-footer v-if="footer">
          <slot name="footer"></slot>
        </app-card-footer>
        <app-section-loader :status="reload"></app-section-loader>
      </div>
    </fullscreen>
  </div>
</template>

<script>
import AppCardHeading from "./AppCardHeading";
import AppCardFooter from "./AppCardFooter";
import AppCardContent from "./AppCardContent";
import AppSectionLoader from "../AppSectionLoader/AppSectionLoader";

export default {
  props: [
    "heading",
    "colClasses",
    "customClasses",
    "fullBlock",
    "contentCustomClass",
    "closeable",
    "reloadable",
    "fullScreen",
    "footer",
    "withTabs",
    "tabs",
    "onChangeTabCallback"
  ],
  data() {
    return {
      reload: false,
      close: false
    };
  },
  components: {
    AppCardHeading,
    AppCardFooter,
    AppCardContent,
    AppSectionLoader
  },
  methods: {
    onCollapse() {
      this.$refs["fullscreen"].toggle();
    },
    onReload() {
      this.reload = true;
      let self = this;
      setTimeout(() => {
        self.reload = false;
      }, 1500);
    },
    onClose() {
      this.close = true;
    },
    onChangeTab(value) {
      this.$emit("onChangeTabCallback", value);
    }
  }
};
</script>