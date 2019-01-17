webpackJsonp([32],{

/***/ 129:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2001)
/* template */
var __vue_template__ = __webpack_require__(2002)
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
Component.options.__file = "resources/js/views/ui-elements/Snackbar.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-70be207a", Component.options)
  } else {
    hotAPI.reload("data-v-70be207a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2001:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      snackbar: false,
      snackbar2: false,
      y: "top",
      x: null,
      mode: "",
      mode2: "",
      timeout: 6000,
      text: "Hello, I'm a snackbar",
      color: ""
    };
  }
});

/***/ }),

/***/ 2002:
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
            "app-card",
            { attrs: { heading: _vm.$t("message.snackbar") } },
            [
              _c("div", { staticClass: "mb-3" }, [
                _c("p", [
                  _vm._v(
                    "The standard snackbar is useful for calling attention to some function that has just happened."
                  )
                ])
              ]),
              _vm._v(" "),
              _c(
                "v-layout",
                { attrs: { row: "", wrap: "" } },
                [
                  _c("v-flex", { attrs: { xs12: "", md6: "" } }, [
                    _c("ul", { staticClass: "list-unstyled" }, [
                      _c(
                        "li",
                        [
                          _c("v-checkbox", {
                            attrs: {
                              color: "primary",
                              value: "left",
                              label: "Left"
                            },
                            model: {
                              value: _vm.x,
                              callback: function($$v) {
                                _vm.x = $$v
                              },
                              expression: "x"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "li",
                        [
                          _c("v-checkbox", {
                            attrs: {
                              color: "primary",
                              value: "right",
                              label: "Right"
                            },
                            model: {
                              value: _vm.x,
                              callback: function($$v) {
                                _vm.x = $$v
                              },
                              expression: "x"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "li",
                        [
                          _c("v-checkbox", {
                            attrs: {
                              color: "primary",
                              value: "top",
                              label: "Top"
                            },
                            model: {
                              value: _vm.y,
                              callback: function($$v) {
                                _vm.y = $$v
                              },
                              expression: "y"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "li",
                        [
                          _c("v-checkbox", {
                            attrs: {
                              color: "primary",
                              value: "bottom",
                              label: "Bottom"
                            },
                            model: {
                              value: _vm.y,
                              callback: function($$v) {
                                _vm.y = $$v
                              },
                              expression: "y"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "li",
                        [
                          _c("v-checkbox", {
                            attrs: {
                              color: "primary",
                              value: "multi-line",
                              label: "Multi-line (mobile)"
                            },
                            model: {
                              value: _vm.mode,
                              callback: function($$v) {
                                _vm.mode = $$v
                              },
                              expression: "mode"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "li",
                        [
                          _c("v-checkbox", {
                            attrs: {
                              color: "primary",
                              value: "vertical",
                              label: "Vertical (mobile)"
                            },
                            model: {
                              value: _vm.mode,
                              callback: function($$v) {
                                _vm.mode = $$v
                              },
                              expression: "mode"
                            }
                          })
                        ],
                        1
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    { attrs: { xs12: "", md6: "" } },
                    [
                      _c("v-text-field", {
                        attrs: { type: "text", label: "Text" },
                        model: {
                          value: _vm.text,
                          callback: function($$v) {
                            _vm.text = $$v
                          },
                          expression: "text"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-text-field", {
                        attrs: { type: "number", label: "Timeout" },
                        model: {
                          value: _vm.timeout,
                          callback: function($$v) {
                            _vm.timeout = _vm._n($$v)
                          },
                          expression: "timeout"
                        }
                      }),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          attrs: { block: "", color: "primary", large: "" },
                          nativeOn: {
                            click: function($event) {
                              _vm.snackbar = true
                            }
                          }
                        },
                        [_vm._v(_vm._s(_vm.$t("message.showSnackbar")))]
                      )
                    ],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "v-snackbar",
                {
                  attrs: {
                    timeout: _vm.timeout,
                    top: _vm.y === "top",
                    bottom: _vm.y === "bottom",
                    right: _vm.x === "right",
                    left: _vm.x === "left",
                    "multi-line": _vm.mode === "multi-line",
                    vertical: _vm.mode === "vertical"
                  },
                  model: {
                    value: _vm.snackbar,
                    callback: function($$v) {
                      _vm.snackbar = $$v
                    },
                    expression: "snackbar"
                  }
                },
                [
                  _c("p", { staticClass: "ma-0" }, [_vm._v(_vm._s(_vm.text))]),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    {
                      attrs: { color: "error" },
                      nativeOn: {
                        click: function($event) {
                          _vm.snackbar = false
                        }
                      }
                    },
                    [_vm._v(_vm._s(_vm.$t("message.close")))]
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
            { attrs: { heading: _vm.$t("message.contextualSnackbar") } },
            [
              _c("div", { staticClass: "mb-3" }, [
                _c("p", { staticClass: "mb-0" }, [
                  _vm._v(
                    "You can also apply a color to the snackbar to better fit your implementation."
                  )
                ])
              ]),
              _vm._v(" "),
              _c(
                "v-layout",
                { attrs: { row: "", wrap: "" } },
                [
                  _c(
                    "v-flex",
                    { attrs: { xs12: "", md6: "" } },
                    [
                      _c(
                        "v-radio-group",
                        {
                          attrs: { row: "" },
                          model: {
                            value: _vm.color,
                            callback: function($$v) {
                              _vm.color = $$v
                            },
                            expression: "color"
                          }
                        },
                        _vm._l(
                          ["success", "info", "error", "cyan darken-2"],
                          function(colorValue, i) {
                            return _c("v-radio", {
                              key: i,
                              attrs: {
                                light: "",
                                value: colorValue,
                                label: colorValue,
                                color: colorValue
                              }
                            })
                          }
                        ),
                        1
                      ),
                      _vm._v(" "),
                      _c("v-checkbox", {
                        attrs: {
                          color: "primary",
                          value: "multi-line",
                          label: "Multi-line (mobile)"
                        },
                        model: {
                          value: _vm.mode2,
                          callback: function($$v) {
                            _vm.mode2 = $$v
                          },
                          expression: "mode2"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-checkbox", {
                        attrs: {
                          color: "primary",
                          value: "vertical",
                          label: "Vertical (mobile)"
                        },
                        model: {
                          value: _vm.mode2,
                          callback: function($$v) {
                            _vm.mode2 = $$v
                          },
                          expression: "mode2"
                        }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    { attrs: { xs12: "", md6: "" } },
                    [
                      _c("v-text-field", {
                        attrs: { type: "text", label: "Text" },
                        model: {
                          value: _vm.text,
                          callback: function($$v) {
                            _vm.text = $$v
                          },
                          expression: "text"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-text-field", {
                        attrs: { type: "number", label: "Timeout" },
                        model: {
                          value: _vm.timeout,
                          callback: function($$v) {
                            _vm.timeout = _vm._n($$v)
                          },
                          expression: "timeout"
                        }
                      }),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            block: "",
                            large: "",
                            color: "warning",
                            dark: ""
                          },
                          nativeOn: {
                            click: function($event) {
                              _vm.snackbar2 = true
                            }
                          }
                        },
                        [_vm._v(_vm._s(_vm.$t("message.showSnackbar")))]
                      )
                    ],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "v-snackbar",
                {
                  attrs: {
                    timeout: _vm.timeout,
                    color: _vm.color,
                    "multi-line": _vm.mode2 === "multi-line",
                    vertical: _vm.mode2 === "vertical"
                  },
                  model: {
                    value: _vm.snackbar2,
                    callback: function($$v) {
                      _vm.snackbar2 = $$v
                    },
                    expression: "snackbar2"
                  }
                },
                [
                  _vm._v("\n\t\t\t\t" + _vm._s(_vm.text) + "\n\t\t\t\t"),
                  _c(
                    "v-btn",
                    {
                      attrs: { color: "error" },
                      nativeOn: {
                        click: function($event) {
                          _vm.snackbar2 = false
                        }
                      }
                    },
                    [_vm._v(_vm._s(_vm.$t("message.close")))]
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
    require("vue-hot-reload-api")      .rerender("data-v-70be207a", module.exports)
  }
}

/***/ })

});