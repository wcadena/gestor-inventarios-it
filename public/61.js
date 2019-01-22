webpackJsonp([61],{

/***/ 152:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(2106)
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
Component.options.__file = "resources/js/views/pages/Pricing-2.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-eb6982de", Component.options)
  } else {
    hotAPI.reload("data-v-eb6982de", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2106:
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
            "div",
            { staticClass: "pricing-wrapper" },
            [
              _c(
                "v-layout",
                { attrs: { row: "", wrap: "" } },
                [
                  _c(
                    "v-flex",
                    { attrs: { xs12: "", sm6: "", md6: "", lg3: "" } },
                    [
                      _c("div", { staticClass: "app-card text-xs-center" }, [
                        _c(
                          "div",
                          {
                            staticClass:
                              "app-card-title primary d-custom-flex justify-space-between"
                          },
                          [
                            _c("h3", { staticClass: "mb-0 white--text mr-2" }, [
                              _vm._v(_vm._s(_vm.$t("message.basic")))
                            ]),
                            _vm._v(" "),
                            _c("p", { staticClass: "mb-0 fs-12 white--text" }, [
                              _vm._v(
                                _vm._s(_vm.$t("message.forMostOfTheUsers"))
                              )
                            ])
                          ]
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "app-full-content" }, [
                          _c("h2", { staticClass: "mb-4 font-3x" }, [
                            _c("span", { staticClass: "font-xl" }, [
                              _vm._v("$40")
                            ]),
                            _vm._v(" "),
                            _c("sub", [_vm._v("/Mo")])
                          ]),
                          _vm._v(" "),
                          _c(
                            "ul",
                            { staticClass: "list-unstyled list-group-flush" },
                            [
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("10GB of Bandwidth")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("200MB Max File Size")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("2GHZ CPU")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("256MB Memory")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("1 GB Storage")
                              ])
                            ]
                          )
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "app-footer" },
                          [
                            _c(
                              "v-btn",
                              {
                                attrs: {
                                  block: "",
                                  color: "primary",
                                  large: ""
                                }
                              },
                              [_vm._v(_vm._s(_vm.$t("message.choosePlan")))]
                            )
                          ],
                          1
                        )
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    { attrs: { xs12: "", sm6: "", md6: "", lg3: "" } },
                    [
                      _c("div", { staticClass: "app-card text-xs-center" }, [
                        _c(
                          "div",
                          {
                            staticClass:
                              "app-card-title success white--text d-custom-flex justify-space-between"
                          },
                          [
                            _c("h3", { staticClass: "mb-0 white--text mr-2" }, [
                              _vm._v(_vm._s(_vm.$t("message.standard")))
                            ]),
                            _vm._v(" "),
                            _c("p", { staticClass: "mb-0 fs-12 white--text" }, [
                              _vm._v(
                                _vm._s(_vm.$t("message.forMostOfTheUsers"))
                              )
                            ])
                          ]
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "app-full-content" }, [
                          _c("h2", { staticClass: "mb-4 font-3x" }, [
                            _c("span", { staticClass: "font-xl" }, [
                              _vm._v("$50")
                            ]),
                            _vm._v(" "),
                            _c("sub", [_vm._v("/Mo")])
                          ]),
                          _vm._v(" "),
                          _c(
                            "ul",
                            { staticClass: "list-unstyled list-group-flush" },
                            [
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("10GB of Bandwidth")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("200MB Max File Size")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("2GHZ CPU")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("256MB Memory")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("1 GB Storage")
                              ])
                            ]
                          )
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "app-footer" },
                          [
                            _c(
                              "v-btn",
                              {
                                attrs: {
                                  block: "",
                                  color: "success",
                                  large: ""
                                }
                              },
                              [_vm._v(_vm._s(_vm.$t("message.choosePlan")))]
                            )
                          ],
                          1
                        )
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    { attrs: { xs12: "", sm6: "", md6: "", lg3: "" } },
                    [
                      _c("div", { staticClass: "app-card text-xs-center" }, [
                        _c(
                          "div",
                          {
                            staticClass:
                              "app-card-title warning white--text d-custom-flex justify-space-between"
                          },
                          [
                            _c("h3", { staticClass: "mb-0 white--text mr-2" }, [
                              _vm._v(_vm._s(_vm.$t("message.mega")))
                            ]),
                            _vm._v(" "),
                            _c("p", { staticClass: "mb-0 fs-12 white--text" }, [
                              _vm._v(_vm._s(_vm.$t("message.forDeveloper")))
                            ])
                          ]
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "app-full-content" }, [
                          _c("h2", { staticClass: "mb-4 font-3x" }, [
                            _c("span", { staticClass: "font-xl" }, [
                              _vm._v("$70")
                            ]),
                            _vm._v(" "),
                            _c("sub", [_vm._v("/Mo")])
                          ]),
                          _vm._v(" "),
                          _c(
                            "ul",
                            { staticClass: "list-unstyled list-group-flush" },
                            [
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("10GB of Bandwidth")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("200MB Max File Size")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("2GHZ CPU")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("256MB Memory")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("1 GB Storage")
                              ])
                            ]
                          )
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "app-footer" },
                          [
                            _c(
                              "v-btn",
                              {
                                attrs: {
                                  block: "",
                                  large: "",
                                  color: "warning"
                                }
                              },
                              [_vm._v(_vm._s(_vm.$t("message.choosePlan")))]
                            )
                          ],
                          1
                        )
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    { attrs: { xs12: "", sm6: "", md6: "", lg3: "" } },
                    [
                      _c("div", { staticClass: "app-card text-xs-center" }, [
                        _c(
                          "div",
                          {
                            staticClass:
                              "app-card-title error white--text d-custom-flex justify-space-between"
                          },
                          [
                            _c("h3", { staticClass: "mb-0 white--text mr-2" }, [
                              _vm._v(_vm._s(_vm.$t("message.master")))
                            ]),
                            _vm._v(" "),
                            _c("p", { staticClass: "mb-0 fs-12 white--text" }, [
                              _vm._v(
                                _vm._s(_vm.$t("message.forLargeEnterprises"))
                              )
                            ])
                          ]
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "app-full-content" }, [
                          _c("h2", { staticClass: "mb-4 font-3x" }, [
                            _c("span", { staticClass: "font-xl" }, [
                              _vm._v("$100")
                            ]),
                            _vm._v(" "),
                            _c("sub", [_vm._v("/Mo")])
                          ]),
                          _vm._v(" "),
                          _c(
                            "ul",
                            { staticClass: "list-unstyled list-group-flush" },
                            [
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("10GB of Bandwidth")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("200MB Max File Size")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("2GHZ CPU")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("256MB Memory")
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "list-group-item" }, [
                                _vm._v("1 GB Storage")
                              ])
                            ]
                          )
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "app-footer" },
                          [
                            _c(
                              "v-btn",
                              {
                                attrs: { block: "", color: "error", large: "" }
                              },
                              [_vm._v(_vm._s(_vm.$t("message.choosePlan")))]
                            )
                          ],
                          1
                        )
                      ])
                    ]
                  )
                ],
                1
              )
            ],
            1
          )
        ]
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
    require("vue-hot-reload-api")      .rerender("data-v-eb6982de", module.exports)
  }
}

/***/ })

});