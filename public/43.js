webpackJsonp([43],{

/***/ 139:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2020)
/* template */
var __vue_template__ = __webpack_require__(2021)
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
Component.options.__file = "resources/js/views/ui-elements/Carousel.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-fcd87ac4", Component.options)
  } else {
    hotAPI.reload("data-v-fcd87ac4", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2020:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      items: [{
        src: "/static/img/carousel-slider-1.jpg"
      }, {
        src: "/static/img/carousel-slider-2.jpg"
      }, {
        src: "/static/img/carousel-slider-3.jpg"
      }]
    };
  }
});

/***/ }),

/***/ 2021:
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
                "v-flex",
                { staticClass: "col-height-auto", attrs: { xs12: "" } },
                [
                  _c(
                    "app-card",
                    {
                      attrs: {
                        customClasses: "mb-4",
                        heading: _vm.$t("message.default")
                      }
                    },
                    [
                      _c(
                        "v-carousel",
                        _vm._l(_vm.items, function(item, i) {
                          return _c("v-carousel-item", {
                            key: i,
                            attrs: { src: item.src }
                          })
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
                        customClasses: "mb-4",
                        heading: _vm.$t("message.customTransition")
                      }
                    },
                    [
                      _c(
                        "v-carousel",
                        _vm._l(_vm.items, function(item, i) {
                          return _c("v-carousel-item", {
                            key: i,
                            attrs: {
                              src: item.src,
                              transition: "fade",
                              reverseTransition: "fade"
                            }
                          })
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
                        customClasses: "mb-4",
                        heading: _vm.$t("message.customDelimiter")
                      }
                    },
                    [
                      _c(
                        "v-carousel",
                        { attrs: { "delimiter-icon": "stop" } },
                        _vm._l(_vm.items, function(item, i) {
                          return _c("v-carousel-item", {
                            key: i,
                            attrs: { src: item.src }
                          })
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
                        customClasses: "mb-4",
                        heading: _vm.$t("message.hideControls")
                      }
                    },
                    [
                      _c(
                        "v-carousel",
                        { attrs: { "hide-controls": "" } },
                        _vm._l(_vm.items, function(item, i) {
                          return _c("v-carousel-item", {
                            key: i,
                            attrs: { src: item.src }
                          })
                        }),
                        1
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "app-card",
                    { attrs: { heading: _vm.$t("message.hideDelimiters") } },
                    [
                      _c(
                        "v-carousel",
                        { attrs: { "hide-delimiters": "" } },
                        _vm._l(_vm.items, function(item, i) {
                          return _c("v-carousel-item", {
                            key: i,
                            attrs: { src: item.src }
                          })
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
    require("vue-hot-reload-api")      .rerender("data-v-fcd87ac4", module.exports)
  }
}

/***/ })

});