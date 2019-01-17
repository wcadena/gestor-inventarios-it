webpackJsonp([47],{

/***/ 158:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2129)
/* template */
var __vue_template__ = __webpack_require__(2130)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/views/icons/Themify.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-d0d3dd48", Component.options)
  } else {
    hotAPI.reload("data-v-d0d3dd48", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2129:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      arrowsDirectionIcons: ["ti-arrow-up", "ti-arrow-right", "ti-arrow-left", "ti-arrow-down", "ti-arrows-vertical", "ti-arrows-horizontal", "ti-angle-up", "ti-angle-right", "ti-angle-left", "ti-angle-down", "ti-angle-double-up", "ti-angle-double-right", "ti-angle-double-left", "ti-angle-double-down", "ti-move", "ti-fullscreen", "ti-arrow-top-right", "ti-arrow-top-left", "ti-arrow-circle-up", "ti-arrow-circle-right", "ti-arrow-circle-left", "ti-arrow-circle-down", "ti-arrows-corner", "ti-split-v", "ti-split-v-alt", "ti-split-h", "ti-hand-point-up", "ti-hand-point-right", "ti-hand-point-left", "ti-hand-point-down", "ti-back-right", "ti-back-left", "ti-exchange-vertical"],
      webAppIcons: ["ti-wand", "ti-save", "ti-save-alt", "ti-direction", "ti-direction-alt", "ti-user", "ti-link", "ti-unlink", "ti-trash", "ti-target", "ti-tag", "ti-desktop", "ti-tablet", "ti-mobile", "ti-email", "ti-star", "ti-spray", "ti-signal", "ti-shopping-cart", "ti-shopping-cart-full", "ti-settings", "ti-search", "ti-zoom-in", "ti-zoom-out", "ti-cut", "ti-ruler", "ti-ruler-alt-2", "ti-ruler-pencil", "ti-ruler-alt", "ti-bookmark", "ti-bookmark-alt", "ti-reload", "ti-plus", "ti-minus", "ti-close", "ti-pin", "ti-pencil", "ti-pencil-alt", "ti-paint-roller", "ti-paint-bucket", "ti-na", "ti-medall", "ti-medall-alt", "ti-marker", "ti-marker-alt", "ti-lock", "ti-unlock", "ti-location-arrow", "ti-layout", "ti-layers", "ti-layers-alt", "ti-key", "ti-image", "ti-heart", "ti-heart-broken", "ti-hand-stop", "ti-hand-open", "ti-hand-drag", "ti-flag", "ti-flag-alt", "ti-flag-alt-2", "ti-eye", "ti-import", "ti-export", "ti-cup", "ti-crown", "ti-comments", "ti-comment", "ti-comment-alt", "ti-thought", "ti-clip", "ti-check", "ti-check-box", "ti-camera", "ti-announcement", "ti-brush", "ti-brush-alt", "ti-palette", "ti-briefcase", "ti-bolt", "ti-bolt-alt", "ti-blackboard", "ti-bag", "ti-world", "ti-wheelchair", "ti-car", "ti-truck", "ti-timer", "ti-ticket", "ti-thumb-up", "ti-thumb-down", "ti-stats-up", "ti-stats-down", "ti-shine", "ti-shift-right", "ti-shift-left", "ti-shift-right-alt", "ti-shift-left-alt", "ti-shield", "ti-notepad", "ti-server", "ti-pulse", "ti-printer", "ti-power-off", "ti-plug", "ti-pie-chart", "ti-panel", "ti-package", "ti-music", "ti-music-alt", "ti-mouse", "ti-mouse-alt", "ti-money", "ti-microphone", "ti-menu", "ti-menu-alt", "ti-map", "ti-map-alt", "ti-location-pin", "ti-light-bulb", "ti-info", "ti-infinite", "ti-id-badge", "ti-hummer", "ti-home", "ti-help", "ti-headphone", "ti-harddrives", "ti-harddrive", "ti-gift", "ti-game", "ti-filter", "ti-files", "ti-file", "ti-zip", "ti-folder", "ti-envelope", "ti-dashboard", "ti-cloud", "ti-cloud-up", "ti-cloud-down", "ti-clipboard", "ti-calendar", "ti-book", "ti-bell", "ti-basketball", "ti-bar-chart", "ti-bar-chart-alt", "ti-archive", "ti-anchor", "ti-alert", "ti-alarm-clock", "ti-agenda", "ti-write", "ti-wallet", "ti-video-clapper", "ti-video-camera", "ti-vector", "ti-support", "ti-stamp", "ti-slice", "ti-shortcode", "ti-receipt", "ti-pin2", "ti-pin-alt", "ti-pencil-alt2", "ti-eraser", "ti-more", "ti-more-alt", "ti-microphone-alt", "ti-magnet", "ti-line-double", "ti-line-dotted", "ti-line-dashed", "ti-ink-pen", "ti-info-alt", "ti-help-alt", "ti-headphone-alt", "ti-gallery", "ti-face-smile", "ti-face-sad", "ti-credit-card", "ti-comments-smiley", "ti-time", "ti-share", "ti-share-alt", "ti-rocket", "ti-new-window", "ti-rss", "ti-rss-alt", ""],
      controlIcons: ["ti-control-stop", "ti-control-shuffle", "ti-control-play", "ti-control-pause", "ti-control-forward", "ti-control-backward", "ti-volume", "ti-control-skip-forward", "ti-control-skip-backward", "ti-control-record", "ti-control-eject"],
      textEditorIcons: ["ti-paragraph", "ti-uppercase", "ti-underline", "ti-text", "ti-Italic", "ti-smallcap", "ti-list", "ti-list-ol", "ti-align-right", "ti-align-left", "ti-align-justify", "ti-align-center", "ti-quote-right", "ti-quote-left"],
      layoutIcons: ["ti-layout-width-full", "ti-layout-width-default", "ti-layout-width-default-alt", "ti-layout-tab", "ti-layout-tab-window", "ti-layout-tab-v", "ti-layout-tab-min", "ti-layout-slider", "ti-layout-slider-alt", "ti-layout-sidebar-right", "ti-layout-sidebar-none", "ti-layout-sidebar-left", "ti-layout-placeholder", "ti-layout-menu", "ti-layout-menu-v", "ti-layout-menu-separated", "ti-layout-menu-full", "ti-layout-media-right", "ti-layout-media-right-alt", "ti-layout-media-overlay", "ti-layout-media-overlay-alt", "ti-layout-media-overlay-alt-2", "ti-layout-media-left", "ti-layout-media-left-alt", "ti-layout-media-center", "ti-layout-media-center-alt", "ti-layout-list-thumb", "ti-layout-list-thumb-alt", "ti-layout-list-post", "ti-layout-list-large-image", "ti-layout-line-solid", "ti-layout-grid4", "ti-layout-grid3", "ti-layout-grid2", "ti-layout-grid2-thumb", "ti-layout-cta-right", "ti-layout-cta-left", "ti-layout-cta-center", "ti-layout-cta-btn-right", "ti-layout-cta-btn-left", "ti-layout-column4", "ti-layout-column3", "ti-layout-column2", "ti-layout-accordion-separated", "ti-layout-accordion-merged", "ti-layout-accordion-list", "ti-widgetized", "ti-widget", "ti-widget-alt", "ti-view-list", "ti-view-list-alt", "ti-view-grid", "ti-upload", "ti-download", "ti-loop", "ti-layout-sidebar-2", "ti-layout-grid4-alt", "ti-layout-grid3-alt", "ti-layout-grid2-alt", "ti-layout-column4-alt", "ti-layout-column3-alt", "ti-layout-column2-alt"],
      brandIcons: ["ti-flickr", "ti-flickr-alt", "ti-instagram", "ti-google", "ti-github", "ti-facebook", "ti-dropbox", "ti-dropbox-alt", "ti-dribbble", "ti-apple", "ti-android", "ti-yahoo", "ti-trello", "ti-stack-overflow", "ti-soundcloud", "ti-sharethis", "ti-sharethis-alt", "ti-reddit", "ti-microsoft", "ti-microsoft-alt", "ti-linux", "ti-jsfiddle", "ti-joomla", "ti-html5", "ti-css3", "ti-drupal", "ti-wordpress", "ti-tumblr", "ti-tumblr-alt", "ti-skype", "ti-youtube", "ti-vimeo", "ti-vimeo-alt", "ti-twitter", "ti-twitter-alt", "ti-linkedin", "ti-pinterest", "ti-pinterest-alt", "ti-themify-logo", "ti-themify-favicon", "ti-themify-favicon-alt"]
    };
  }
});

/***/ }),

/***/ 2130:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c("page-title-bar"),
      _vm._v(" "),
      _c(
        "v-container",
        { attrs: { fluid: "", "grid-list-xl": "", "pt-0": "" } },
        [
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.arrowsAndDirectionsIcons"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "", "icon-box": "" } },
                    _vm._l(_vm.arrowsDirectionIcons, function(icon, key) {
                      return _c(
                        "v-flex",
                        {
                          key: key,
                          attrs: { xs12: "", sm6: "", md4: "", lg3: "" }
                        },
                        [
                          _c("span", [_c("i", { class: icon })]),
                          _vm._v(" "),
                          _c("span", { staticClass: "icon-title" }, [
                            _vm._v(_vm._s(icon))
                          ])
                        ]
                      )
                    }),
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.webAppIcons"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "", "icon-box": "" } },
                    _vm._l(_vm.webAppIcons, function(icon, key) {
                      return _c(
                        "v-flex",
                        {
                          key: key,
                          attrs: { xs12: "", sm6: "", md4: "", lg3: "" }
                        },
                        [
                          _c("span", [_c("i", { class: icon })]),
                          _vm._v(" "),
                          _c("span", { staticClass: "icon-title" }, [
                            _vm._v(_vm._s(icon))
                          ])
                        ]
                      )
                    }),
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.CONTROLICONS"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "", "icon-box": "" } },
                    _vm._l(_vm.controlIcons, function(icon, key) {
                      return _c(
                        "v-flex",
                        {
                          key: key,
                          attrs: { xs12: "", sm6: "", md4: "", lg3: "" }
                        },
                        [
                          _c("span", [_c("i", { class: icon })]),
                          _vm._v(" "),
                          _c("span", { staticClass: "icon-title" }, [
                            _vm._v(_vm._s(icon))
                          ])
                        ]
                      )
                    }),
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.TEXTEDITOR"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "", "icon-box": "" } },
                    _vm._l(_vm.textEditorIcons, function(icon, key) {
                      return _c(
                        "v-flex",
                        {
                          key: key,
                          attrs: { xs12: "", sm6: "", md4: "", lg3: "" }
                        },
                        [
                          _c("span", [_c("i", { class: icon })]),
                          _vm._v(" "),
                          _c("span", { staticClass: "icon-title" }, [
                            _vm._v(_vm._s(icon))
                          ])
                        ]
                      )
                    }),
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.LAYOUTICONS"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "", "icon-box": "" } },
                    _vm._l(_vm.layoutIcons, function(icon, key) {
                      return _c(
                        "v-flex",
                        { key: key, attrs: { xs12: "", sm6: "", md4: "" } },
                        [
                          _c("span", [_c("i", { class: icon })]),
                          _vm._v(" "),
                          _c("span", { staticClass: "icon-title" }, [
                            _vm._v(_vm._s(icon))
                          ])
                        ]
                      )
                    }),
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.BRANDICONS"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "", "icon-box": "" } },
                    _vm._l(_vm.brandIcons, function(icon, key) {
                      return _c(
                        "v-flex",
                        { key: key, attrs: { xs12: "", sm6: "", md4: "" } },
                        [
                          _c("span", [_c("i", { class: icon })]),
                          _vm._v(" "),
                          _c("span", { staticClass: "icon-title" }, [
                            _vm._v(_vm._s(icon))
                          ])
                        ]
                      )
                    }),
                    1
                  )
                ],
                1
              )
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-d0d3dd48", module.exports)
  }
}

/***/ })

});