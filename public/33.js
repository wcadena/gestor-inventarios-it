webpackJsonp([33],{

/***/ 128:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2000)
/* template */
var __vue_template__ = __webpack_require__(2001)
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
Component.options.__file = "resources/js/views/ui-elements/Slider.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-42b1a31f", Component.options)
  } else {
    hotAPI.reload("data-v-42b1a31f", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2000:
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
      value1: 0,
      value2: 0,
      value3: 0,
      media: 0,
      alarm: 0,
      red: 64,
      green: 128,
      blue: 0,
      ex1: { label: "color", val: 25, color: "orange darken-3" },
      ex2: { label: "track-color", val: 75, color: "green lighten-1" },
      ex3: { label: "thumb-color", val: 50, color: "red" }
    };
  }
});

/***/ }),

/***/ 2001:
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
                    heading: _vm.$t("message.continuous"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("v-slider", {
                    attrs: { "hide-details": "", step: "0" },
                    model: {
                      value: _vm.value1,
                      callback: function($$v) {
                        _vm.value1 = $$v
                      },
                      expression: "value1"
                    }
                  }),
                  _vm._v(" "),
                  _c("v-slider", {
                    attrs: { "hide-details": "", step: "0", disabled: "" },
                    model: {
                      value: _vm.value2,
                      callback: function($$v) {
                        _vm.value2 = $$v
                      },
                      expression: "value2"
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
                    heading: _vm.$t("message.discrete"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("v-slider", {
                    attrs: {
                      "hide-details": "",
                      "thumb-label": "",
                      step: "10",
                      ticks: ""
                    },
                    model: {
                      value: _vm.value3,
                      callback: function($$v) {
                        _vm.value3 = $$v
                      },
                      expression: "value3"
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
                    heading: _vm.$t("message.customColors"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("v-slider", {
                    attrs: { label: _vm.ex1.label, color: _vm.ex1.color },
                    model: {
                      value: _vm.ex1.val,
                      callback: function($$v) {
                        _vm.$set(_vm.ex1, "val", $$v)
                      },
                      expression: "ex1.val"
                    }
                  }),
                  _vm._v(" "),
                  _c("v-slider", {
                    attrs: {
                      label: _vm.ex2.label,
                      "track-color": _vm.ex2.color
                    },
                    model: {
                      value: _vm.ex2.val,
                      callback: function($$v) {
                        _vm.$set(_vm.ex2, "val", $$v)
                      },
                      expression: "ex2.val"
                    }
                  }),
                  _vm._v(" "),
                  _c("v-slider", {
                    attrs: {
                      label: _vm.ex3.label,
                      "thumb-color": _vm.ex3.color,
                      "thumb-label": ""
                    },
                    model: {
                      value: _vm.ex3.val,
                      callback: function($$v) {
                        _vm.$set(_vm.ex3, "val", $$v)
                      },
                      expression: "ex3.val"
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
                    heading: _vm.$t("message.editableNumericValue"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("v-responsive", {
                    style: {
                      background:
                        "rgb(" +
                        _vm.red +
                        ", " +
                        _vm.green +
                        ", " +
                        _vm.blue +
                        ")"
                    },
                    attrs: { height: "100px" }
                  }),
                  _vm._v(" "),
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    [
                      _c(
                        "v-flex",
                        { attrs: { xs9: "" } },
                        [
                          _c("v-slider", {
                            attrs: { "hide-details": "", label: "R", max: 255 },
                            model: {
                              value: _vm.red,
                              callback: function($$v) {
                                _vm.red = $$v
                              },
                              expression: "red"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs3: "" } },
                        [
                          _c("v-text-field", {
                            attrs: { "hide-details": "", type: "number" },
                            model: {
                              value: _vm.red,
                              callback: function($$v) {
                                _vm.red = $$v
                              },
                              expression: "red"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs9: "" } },
                        [
                          _c("v-slider", {
                            attrs: { "hide-details": "", label: "G", max: 255 },
                            model: {
                              value: _vm.green,
                              callback: function($$v) {
                                _vm.green = $$v
                              },
                              expression: "green"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs3: "" } },
                        [
                          _c("v-text-field", {
                            attrs: { "hide-details": "", type: "number" },
                            model: {
                              value: _vm.green,
                              callback: function($$v) {
                                _vm.green = $$v
                              },
                              expression: "green"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs9: "" } },
                        [
                          _c("v-slider", {
                            attrs: { "hide-details": "", label: "B", max: 255 },
                            model: {
                              value: _vm.blue,
                              callback: function($$v) {
                                _vm.blue = $$v
                              },
                              expression: "blue"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs3: "" } },
                        [
                          _c("v-text-field", {
                            attrs: { "hide-details": "", type: "number" },
                            model: {
                              value: _vm.blue,
                              callback: function($$v) {
                                _vm.blue = $$v
                              },
                              expression: "blue"
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
                    heading: _vm.$t("message.icons"),
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
                        { attrs: { xs4: "" } },
                        [_c("v-subheader", [_vm._v("Media volume")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs8: "" } },
                        [
                          _c("v-slider", {
                            attrs: {
                              "hide-details": "",
                              "prepend-icon": "volume_up"
                            },
                            model: {
                              value: _vm.media,
                              callback: function($$v) {
                                _vm.media = $$v
                              },
                              expression: "media"
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
                        { attrs: { xs4: "" } },
                        [_c("v-subheader", [_vm._v("Alarm volume")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs8: "" } },
                        [
                          _c("v-slider", {
                            attrs: {
                              "hide-details": "",
                              "append-icon": "alarm"
                            },
                            model: {
                              value: _vm.alarm,
                              callback: function($$v) {
                                _vm.alarm = $$v
                              },
                              expression: "alarm"
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
    require("vue-hot-reload-api")      .rerender("data-v-42b1a31f", module.exports)
  }
}

/***/ })

});