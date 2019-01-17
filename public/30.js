webpackJsonp([30],{

/***/ 142:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2025)
/* template */
var __vue_template__ = __webpack_require__(2026)
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
Component.options.__file = "resources/js/views/ui-elements/Timepicker.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-9e51f04e", Component.options)
  } else {
    hotAPI.reload("data-v-9e51f04e", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2025:
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
      e4: null,
      e5: null,
      time: null,
      time2: null,
      menu2: false,
      modal2: false
    };
  }
});

/***/ }),

/***/ 2026:
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
                    heading: _vm.$t("message.timePicker"),
                    contentCustomClass: "div-responsive",
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("v-time-picker", {
                    model: {
                      value: _vm.e4,
                      callback: function($$v) {
                        _vm.e4 = $$v
                      },
                      expression: "e4"
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
                    heading: _vm.$t("message.timePicker"),
                    contentCustomClass: "div-responsive",
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("v-time-picker", {
                    attrs: { landscape: "" },
                    model: {
                      value: _vm.e5,
                      callback: function($$v) {
                        _vm.e5 = $$v
                      },
                      expression: "e5"
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
                    heading: _vm.$t("message.timePickerInDialogAndMenu"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", { staticClass: "mb-0" }, [
                      _vm._v(
                        "Due to the flexibility of pickers, you can really dial in the experience exactly how you want it."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-menu",
                    {
                      ref: "menu",
                      attrs: {
                        lazy: "",
                        "close-on-content-click": false,
                        transition: "scale-transition",
                        "offset-y": "",
                        "full-width": "",
                        "nudge-right": 40,
                        "max-width": "290px",
                        "min-width": "290px",
                        "return-value": _vm.time
                      },
                      on: {
                        "update:returnValue": function($event) {
                          _vm.time = $event
                        }
                      },
                      model: {
                        value: _vm.menu2,
                        callback: function($$v) {
                          _vm.menu2 = $$v
                        },
                        expression: "menu2"
                      }
                    },
                    [
                      _c("v-text-field", {
                        attrs: {
                          slot: "activator",
                          label: "Picker in menu",
                          "prepend-icon": "access_time",
                          readonly: ""
                        },
                        slot: "activator",
                        model: {
                          value: _vm.time,
                          callback: function($$v) {
                            _vm.time = $$v
                          },
                          expression: "time"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-time-picker", {
                        on: {
                          change: function($event) {
                            _vm.$refs.menu.save(_vm.time)
                          }
                        },
                        model: {
                          value: _vm.time,
                          callback: function($$v) {
                            _vm.time = $$v
                          },
                          expression: "time"
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
                    heading: _vm.$t("message.timePicker"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c(
                    "v-dialog",
                    {
                      ref: "dialog",
                      attrs: {
                        persistent: "",
                        lazy: "",
                        "full-width": "",
                        width: "290px",
                        "return-value": _vm.time2
                      },
                      on: {
                        "update:returnValue": function($event) {
                          _vm.time2 = $event
                        }
                      },
                      model: {
                        value: _vm.modal2,
                        callback: function($$v) {
                          _vm.modal2 = $$v
                        },
                        expression: "modal2"
                      }
                    },
                    [
                      _c("v-text-field", {
                        attrs: {
                          slot: "activator",
                          label: "Picker in dialog",
                          "prepend-icon": "access_time",
                          readonly: ""
                        },
                        slot: "activator",
                        model: {
                          value: _vm.time2,
                          callback: function($$v) {
                            _vm.time2 = $$v
                          },
                          expression: "time2"
                        }
                      }),
                      _vm._v(" "),
                      _c(
                        "v-time-picker",
                        {
                          attrs: { actions: "" },
                          model: {
                            value: _vm.time2,
                            callback: function($$v) {
                              _vm.time2 = $$v
                            },
                            expression: "time2"
                          }
                        },
                        [
                          _c(
                            "v-btn",
                            {
                              attrs: { color: "error" },
                              on: {
                                click: function($event) {
                                  _vm.modal2 = false
                                }
                              }
                            },
                            [_vm._v("Cancel")]
                          ),
                          _vm._v(" "),
                          _c(
                            "v-btn",
                            {
                              attrs: { color: "primary" },
                              on: {
                                click: function($event) {
                                  _vm.$refs.dialog.save(_vm.time2)
                                }
                              }
                            },
                            [_vm._v("Save")]
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
    require("vue-hot-reload-api")      .rerender("data-v-9e51f04e", module.exports)
  }
}

/***/ })

});