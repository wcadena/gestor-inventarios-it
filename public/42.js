webpackJsonp([42],{

/***/ 134:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2011)
/* template */
var __vue_template__ = __webpack_require__(2012)
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
Component.options.__file = "resources/js/views/ui-elements/Checkbox.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-8eeed8fe", Component.options)
  } else {
    hotAPI.reload("data-v-8eeed8fe", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2011:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      checkbox: false,
      intermediate: true,
      name1: ["John"],
      ex4: ["red", "indigo", "orange", "primary", "secondary", "success", "info", "warning", "error", "red darken-3", "indigo darken-3", "orange darken-3"],
      ex11: ["red", "indigo", "orange", "primary", "secondary", "success", "info", "warning", "error", "red darken-3", "indigo darken-3", "orange darken-3"]
    };
  }
});

/***/ }),

/***/ 2012:
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
                    heading: _vm.$t("message.checkboxesBoolean"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("v-checkbox", {
                    attrs: {
                      color: "primary",
                      label: "Checkbox : " + _vm.checkbox
                    },
                    model: {
                      value: _vm.checkbox,
                      callback: function($$v) {
                        _vm.checkbox = $$v
                      },
                      expression: "checkbox"
                    }
                  }),
                  _vm._v(" "),
                  _c("v-checkbox", {
                    attrs: {
                      color: "primary",
                      label: "Intermediate: " + _vm.intermediate.toString()
                    },
                    model: {
                      value: _vm.intermediate,
                      callback: function($$v) {
                        _vm.intermediate = $$v
                      },
                      expression: "intermediate"
                    }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.checkboxesArray"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("p", [_vm._v(_vm._s(_vm.name1))]),
                  _vm._v(" "),
                  _c("v-checkbox", {
                    attrs: { color: "primary", label: "John", value: "John" },
                    model: {
                      value: _vm.name1,
                      callback: function($$v) {
                        _vm.name1 = $$v
                      },
                      expression: "name1"
                    }
                  }),
                  _vm._v(" "),
                  _c("v-checkbox", {
                    attrs: { color: "primary", label: "Jacob", value: "Jacob" },
                    model: {
                      value: _vm.name1,
                      callback: function($$v) {
                        _vm.name1 = $$v
                      },
                      expression: "name1"
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
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.checkboxesStates"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    [
                      _c("v-flex", { attrs: { xs4: "" } }, [_vm._v("on")]),
                      _vm._v(" "),
                      _c("v-flex", { attrs: { xs4: "" } }, [_vm._v("off")]),
                      _vm._v(" "),
                      _c("v-flex", { attrs: { xs4: "" } }, [
                        _vm._v("indeterminate")
                      ])
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
                        { staticClass: "col-height-auto", attrs: { xs4: "" } },
                        [
                          _c("v-checkbox", {
                            attrs: {
                              color: "primary",
                              "input-value": "true",
                              value: ""
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { staticClass: "col-height-auto", attrs: { xs4: "" } },
                        [
                          _c("v-checkbox", {
                            attrs: { color: "primary", value: "" }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { staticClass: "col-height-auto", attrs: { xs4: "" } },
                        [
                          _c("v-checkbox", {
                            attrs: {
                              color: "primary",
                              value: "",
                              indeterminate: ""
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
                        { staticClass: "col-height-auto", attrs: { xs4: "" } },
                        [_vm._v("on disabled")]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { staticClass: "col-height-auto", attrs: { xs4: "" } },
                        [_vm._v("off disabled")]
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
                        { staticClass: "col-height-auto", attrs: { xs4: "" } },
                        [
                          _c("v-checkbox", {
                            attrs: {
                              color: "primary",
                              "input-value": "true",
                              value: "",
                              disabled: ""
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { staticClass: "col-height-auto", attrs: { xs4: "" } },
                        [
                          _c("v-checkbox", {
                            attrs: { color: "primary", value: "", disabled: "" }
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
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.checkboxesColors"),
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
                          attrs: { xs12: "", sm4: "", md4: "" }
                        },
                        [
                          _c("v-checkbox", {
                            attrs: {
                              label: "red",
                              color: "red",
                              value: "red",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-checkbox", {
                            attrs: {
                              label: "red darken-3",
                              color: "red darken-3",
                              value: "red darken-3",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
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
                          attrs: { xs12: "", sm4: "", md4: "" }
                        },
                        [
                          _c("v-checkbox", {
                            attrs: {
                              label: "indigo",
                              color: "indigo",
                              value: "indigo",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-checkbox", {
                            attrs: {
                              label: "indigo darken-3",
                              color: "indigo darken-3",
                              value: "indigo darken-3",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
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
                          attrs: { xs12: "", sm4: "", md4: "" }
                        },
                        [
                          _c("v-checkbox", {
                            attrs: {
                              label: "orange",
                              color: "orange",
                              value: "orange",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-checkbox", {
                            attrs: {
                              label: "orange darken-3",
                              color: "orange darken-3",
                              value: "orange darken-3",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
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
                          attrs: { xs12: "", sm4: "", md4: "" }
                        },
                        [
                          _c("v-checkbox", {
                            attrs: {
                              label: "primary",
                              color: "primary",
                              value: "primary",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-checkbox", {
                            attrs: {
                              label: "secondary",
                              color: "secondary",
                              value: "secondary",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
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
                          attrs: { xs12: "", sm4: "", md4: "" }
                        },
                        [
                          _c("v-checkbox", {
                            attrs: {
                              label: "success",
                              color: "success",
                              value: "success",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-checkbox", {
                            attrs: {
                              label: "info",
                              color: "info",
                              value: "info",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
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
                          attrs: { xs12: "", sm4: "", md4: "" }
                        },
                        [
                          _c("v-checkbox", {
                            attrs: {
                              label: "warning",
                              color: "warning",
                              value: "warning",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
                            }
                          }),
                          _vm._v(" "),
                          _c("v-checkbox", {
                            attrs: {
                              label: "error",
                              color: "error",
                              value: "error",
                              "hide-details": ""
                            },
                            model: {
                              value: _vm.ex4,
                              callback: function($$v) {
                                _vm.ex4 = $$v
                              },
                              expression: "ex4"
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
                    heading: _vm.$t("message.switches"),
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
                          attrs: { xs12: "", sm4: "", md4: "" }
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
                          attrs: { xs12: "", sm4: "", md4: "" }
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
                          attrs: { xs12: "", sm4: "", md4: "" }
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
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        {
                          staticClass: "col-height-auto",
                          attrs: { xs12: "", sm4: "", md4: "" }
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
                          attrs: { xs12: "", sm4: "", md4: "" }
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
                          attrs: { xs12: "", sm4: "", md4: "" }
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
    require("vue-hot-reload-api")      .rerender("data-v-8eeed8fe", module.exports)
  }
}

/***/ })

});