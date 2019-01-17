webpackJsonp([35],{

/***/ 135:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2012)
/* template */
var __vue_template__ = __webpack_require__(2013)
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
Component.options.__file = "resources/js/views/ui-elements/Radio.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-b5ce37a6", Component.options)
  } else {
    hotAPI.reload("data-v-b5ce37a6", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2012:
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
      radioButton: "radio-1",
      column: null,
      row: null,
      ex7: ["red", "red darken-3", "indigo", "indigo darken-3", "orange", "orange darken-3"],
      ex8: ["primary", "secondary", "success", "info", "warning", "error"],
      ex11: ["red", "indigo", "orange", "primary", "secondary", "success", "info", "warning", "error", "red darken-3", "indigo darken-3", "orange darken-3"]
    };
  }
});

/***/ }),

/***/ 2013:
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
                    heading: _vm.$t("message.radiosDefault"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("p", { staticClass: "ma-0" }, [
                    _vm._v(_vm._s(_vm.radioButton || "null"))
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-radio-group",
                    {
                      model: {
                        value: _vm.radioButton,
                        callback: function($$v) {
                          _vm.radioButton = $$v
                        },
                        expression: "radioButton"
                      }
                    },
                    [
                      _c("v-radio", {
                        attrs: {
                          color: "primary",
                          label: "Radio 1",
                          value: "Radio-1"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-radio", {
                        attrs: {
                          color: "primary",
                          label: "Radio 2",
                          value: "Radio-2"
                        }
                      })
                    ],
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
                    heading: _vm.$t("message.radiosDirectionRow"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c(
                    "v-radio-group",
                    {
                      staticClass: "pt-0",
                      attrs: { row: "" },
                      model: {
                        value: _vm.row,
                        callback: function($$v) {
                          _vm.row = $$v
                        },
                        expression: "row"
                      }
                    },
                    [
                      _c("v-radio", {
                        attrs: {
                          color: "primary",
                          label: "Option 1",
                          value: "radio-1"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-radio", {
                        attrs: {
                          color: "primary",
                          label: "Option 2",
                          value: "radio-2"
                        }
                      })
                    ],
                    1
                  )
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.radiosDirectionColumn"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c(
                    "v-radio-group",
                    {
                      staticClass: "pt-0",
                      attrs: { column: "" },
                      model: {
                        value: _vm.column,
                        callback: function($$v) {
                          _vm.column = $$v
                        },
                        expression: "column"
                      }
                    },
                    [
                      _c("v-radio", {
                        attrs: {
                          color: "primary",
                          label: "Option 1",
                          value: "radio-1"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-radio", {
                        attrs: {
                          color: "primary",
                          label: "Option 2",
                          value: "radio-2"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-radio", {
                        attrs: {
                          color: "primary",
                          label: "Option 3",
                          value: "radio-3"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-radio", {
                        attrs: {
                          color: "primary",
                          label: "Option 4",
                          value: "radio-4"
                        }
                      })
                    ],
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
                    heading: _vm.$t("message.radiosColors"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    [
                      _c(
                        "v-flex",
                        {
                          staticClass: "col-height-auto",
                          attrs: { xs12: "", sm6: "", md6: "" }
                        },
                        [
                          _c(
                            "v-radio-group",
                            {
                              staticClass: "pt-0",
                              attrs: { column: "" },
                              model: {
                                value: _vm.ex7,
                                callback: function($$v) {
                                  _vm.ex7 = $$v
                                },
                                expression: "ex7"
                              }
                            },
                            [
                              _c("v-radio", {
                                attrs: {
                                  label: "red",
                                  color: "red",
                                  value: "red"
                                }
                              }),
                              _vm._v(" "),
                              _c("v-radio", {
                                attrs: {
                                  label: "red darken-3",
                                  color: "red darken-3",
                                  value: "red darken-3"
                                }
                              }),
                              _vm._v(" "),
                              _c("v-radio", {
                                attrs: {
                                  label: "indigo",
                                  color: "indigo",
                                  value: "indigo"
                                }
                              }),
                              _vm._v(" "),
                              _c("v-radio", {
                                attrs: {
                                  label: "indigo darken-3",
                                  color: "indigo darken-3",
                                  value: "indigo darken-3"
                                }
                              }),
                              _vm._v(" "),
                              _c("v-radio", {
                                attrs: {
                                  label: "orange",
                                  color: "orange",
                                  value: "orange"
                                }
                              }),
                              _vm._v(" "),
                              _c("v-radio", {
                                attrs: {
                                  label: "orange darken-3",
                                  color: "orange darken-3",
                                  value: "orange darken-3"
                                }
                              })
                            ],
                            1
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        {
                          staticClass: "col-height-auto",
                          attrs: { xs12: "", sm6: "", md6: "" }
                        },
                        [
                          _c(
                            "v-radio-group",
                            {
                              staticClass: "pt-0",
                              attrs: { column: "" },
                              model: {
                                value: _vm.ex8,
                                callback: function($$v) {
                                  _vm.ex8 = $$v
                                },
                                expression: "ex8"
                              }
                            },
                            [
                              _c("v-radio", {
                                attrs: {
                                  label: "primary",
                                  color: "primary",
                                  value: "primary"
                                }
                              }),
                              _vm._v(" "),
                              _c("v-radio", {
                                attrs: {
                                  label: "secondary",
                                  color: "secondary",
                                  value: "secondary"
                                }
                              }),
                              _vm._v(" "),
                              _c("v-radio", {
                                attrs: {
                                  label: "success",
                                  color: "success",
                                  value: "success"
                                }
                              }),
                              _vm._v(" "),
                              _c("v-radio", {
                                attrs: {
                                  label: "info",
                                  color: "info",
                                  value: "info"
                                }
                              }),
                              _vm._v(" "),
                              _c("v-radio", {
                                attrs: {
                                  label: "warning",
                                  color: "warning",
                                  value: "warning"
                                }
                              }),
                              _vm._v(" "),
                              _c("v-radio", {
                                attrs: {
                                  label: "error",
                                  color: "error",
                                  value: "error"
                                }
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
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.switchesColors"),
                    colClasses: "lg12 col-height-auto"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    [
                      _c(
                        "v-flex",
                        {
                          staticClass: "col-height-auto",
                          attrs: { xs12: "", sm6: "", md4: "" }
                        },
                        [
                          _c("v-switch", {
                            attrs: {
                              label: "red",
                              color: "red",
                              value: "red",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-switch", {
                            attrs: {
                              label: "red darken-3",
                              color: "red darken-3",
                              value: "red darken-3",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        {
                          staticClass: "col-height-auto",
                          attrs: { xs12: "", sm6: "", md4: "" }
                        },
                        [
                          _c("v-switch", {
                            attrs: {
                              label: "indigo",
                              color: "indigo",
                              value: "indigo",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-switch", {
                            attrs: {
                              label: "indigo darken-3",
                              color: "indigo darken-3",
                              value: "indigo darken-3",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        {
                          staticClass: "col-height-auto",
                          attrs: { xs12: "", sm6: "", md4: "" }
                        },
                        [
                          _c("v-switch", {
                            attrs: {
                              label: "orange",
                              color: "orange",
                              value: "orange",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-switch", {
                            attrs: {
                              label: "orange darken-3",
                              color: "orange darken-3",
                              value: "orange darken-3",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          })
                        ],
                        1
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    [
                      _c(
                        "v-flex",
                        {
                          staticClass: "col-height-auto",
                          attrs: { xs12: "", sm6: "", md4: "" }
                        },
                        [
                          _c("v-switch", {
                            attrs: {
                              label: "primary",
                              color: "primary",
                              value: "primary",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-switch", {
                            attrs: {
                              label: "secondary",
                              color: "secondary",
                              value: "secondary",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        {
                          staticClass: "col-height-auto",
                          attrs: { xs12: "", sm6: "", md4: "" }
                        },
                        [
                          _c("v-switch", {
                            attrs: {
                              label: "success",
                              color: "success",
                              value: "success",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-switch", {
                            attrs: {
                              label: "info",
                              color: "info",
                              value: "info",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        {
                          staticClass: "col-height-auto",
                          attrs: { xs12: "", sm6: "", md4: "" }
                        },
                        [
                          _c("v-switch", {
                            attrs: {
                              label: "warning",
                              color: "warning",
                              value: "warning",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-switch", {
                            attrs: {
                              label: "error",
                              color: "error",
                              value: "error",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex11,
                              callback: function($$v) {
                                _vm.ex11 = $$v
                              },
                              expression: "ex11"
                            }
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
    require("vue-hot-reload-api")      .rerender("data-v-b5ce37a6", module.exports)
  }
}

/***/ })

});