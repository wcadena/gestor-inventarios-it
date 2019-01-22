webpackJsonp([68],{

/***/ 1401:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(1986)
}
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1988)
/* template */
var __vue_template__ = __webpack_require__(1989)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
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
Component.options.__file = "resources/js/views/ui-elements/Hover.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3a4410ee", Component.options)
  } else {
    hotAPI.reload("data-v-3a4410ee", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1986:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(1987);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(4)("2dfd36bd", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-3a4410ee\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Hover.vue", function() {
     var newContent = require("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-3a4410ee\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Hover.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 1987:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(3)(false);
// imports


// module
exports.push([module.i, "\n.v-card--reveal {\r\n  -webkit-box-align: center;\r\n      -ms-flex-align: center;\r\n          align-items: center;\r\n  bottom: 0;\r\n  -webkit-box-pack: center;\r\n      -ms-flex-pack: center;\r\n          justify-content: center;\r\n  opacity: .5;\r\n  position: absolute;\r\n  width: 100%;\n}\r\n", ""]);

// exports


/***/ }),

/***/ 1988:
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
      reviews: 413,
      value: 4.5
    };
  }
});

/***/ }),

/***/ 1989:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "hover-wrapper" },
    [
      _c("page-title-bar"),
      _vm._v(" "),
      _c(
        "v-container",
        { attrs: { "grid-list-xl": "", "pt-0": "" } },
        [
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.simple"),
                    customClasses: "mb-30",
                    colClasses: "xl6 lg6 md6 sm6 xs12",
                    contentCustomClass: "d-flex justify-space-between"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v("The "),
                      _c("code", [_vm._v("v-hover")]),
                      _vm._v(
                        " component provides a clean interface for handling hover states for any component."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-hover", {
                    scopedSlots: _vm._u([
                      {
                        key: "default",
                        fn: function(ref) {
                          var hover = ref.hover
                          return _c(
                            "v-card",
                            {
                              staticClass: "mx-auto img-responsive",
                              class: "elevation-" + (hover ? 12 : 2),
                              attrs: { width: "500" }
                            },
                            [
                              _c("v-img", {
                                attrs: {
                                  "aspect-ratio": 16 / 9,
                                  src: "/static/img/blog-3.jpg\t"
                                }
                              }),
                              _vm._v(" "),
                              _c(
                                "v-card-title",
                                [
                                  _c("div", [
                                    _c(
                                      "h3",
                                      { staticClass: "mb-0 fw-normal" },
                                      [_vm._v("Cafe Badilico")]
                                    ),
                                    _vm._v(" "),
                                    _c(
                                      "div",
                                      { staticClass: "d-flex align-end" },
                                      [
                                        _c("v-rating", {
                                          attrs: {
                                            value: _vm.value,
                                            color: "amber",
                                            dense: "",
                                            "half-increments": "",
                                            readonly: "",
                                            size: "14"
                                          }
                                        }),
                                        _vm._v(" "),
                                        _c(
                                          "div",
                                          {
                                            staticClass:
                                              "ml-2 grey--text text--darken-2 fs-12"
                                          },
                                          [
                                            _c("span", [
                                              _vm._v(_vm._s(_vm.value))
                                            ]),
                                            _vm._v(" "),
                                            _c("span", [
                                              _vm._v(
                                                "(" + _vm._s(_vm.reviews) + ")"
                                              )
                                            ])
                                          ]
                                        )
                                      ],
                                      1
                                    )
                                  ]),
                                  _vm._v(" "),
                                  _c("v-spacer"),
                                  _vm._v(" "),
                                  _c(
                                    "v-btn",
                                    {
                                      staticClass: "mr-0",
                                      attrs: { icon: "" }
                                    },
                                    [
                                      _c("i", {
                                        staticClass:
                                          "zmdi zmdi-chevron-right font-lg"
                                      })
                                    ]
                                  )
                                ],
                                1
                              )
                            ],
                            1
                          )
                        }
                      }
                    ])
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.transitions"),
                    customClasses: "mb-30",
                    colClasses: "xl6 lg6 md6 sm6 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v(
                        "Create highly customized components that respond to user interaction."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-hover", {
                    scopedSlots: _vm._u([
                      {
                        key: "default",
                        fn: function(ref) {
                          var hover = ref.hover
                          return _c(
                            "v-card",
                            {
                              staticClass: "mx-auto",
                              attrs: {
                                color: "white lighten-4",
                                "max-width": "450"
                              }
                            },
                            [
                              _c(
                                "v-img",
                                {
                                  attrs: {
                                    "aspect-ratio": 16 / 9,
                                    src:
                                      "https://cdn.vuetifyjs.com/images/cards/kitchen.png"
                                  }
                                },
                                [
                                  _c("v-expand-transition", [
                                    hover
                                      ? _c(
                                          "div",
                                          {
                                            staticClass:
                                              "d-flex transition-fast-in-fast-out primary darken-3 v-card--reveal font-2x white--text",
                                            staticStyle: { height: "100%" }
                                          },
                                          [
                                            _vm._v(
                                              "\n\t\t\t\t\t\t\t\t\t\tQW cooking utensils\n\t\t\t\t\t\t\t\t\t"
                                            )
                                          ]
                                        )
                                      : _vm._e()
                                  ])
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-card-text",
                                {
                                  staticClass: "pt-4",
                                  staticStyle: { position: "relative" }
                                },
                                [
                                  _c(
                                    "v-btn",
                                    {
                                      staticClass: "white--text",
                                      attrs: {
                                        absolute: "",
                                        color: "primary",
                                        fab: "",
                                        right: "",
                                        top: ""
                                      }
                                    },
                                    [
                                      _c("i", {
                                        staticClass:
                                          "zmdi zmdi-shopping-cart-plus font-lg"
                                      })
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "h3",
                                    {
                                      staticClass:
                                        "fw-normal primary--text mb-0"
                                    },
                                    [_vm._v("QW cooking utensils")]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "span",
                                    {
                                      staticClass:
                                        "font-sm grey--text mb-2 d-block"
                                    },
                                    [_vm._v("For the perfect meal")]
                                  ),
                                  _vm._v(" "),
                                  _c("p", { staticClass: "mb-2" }, [
                                    _vm._v(
                                      "\n\t\t\t\t\t\t\t\t\tOur Vintage kitchen utensils delight any chef."
                                    ),
                                    _c("br"),
                                    _vm._v(
                                      "\n\t\t\t\t\t\t\t\t\tMade of bamboo by hand\n\t\t\t\t\t\t\t\t"
                                    )
                                  ])
                                ],
                                1
                              )
                            ],
                            1
                          )
                        }
                      }
                    ])
                  })
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
    require("vue-hot-reload-api")      .rerender("data-v-3a4410ee", module.exports)
  }
}

/***/ })

});