webpackJsonp([36],{

/***/ 137:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2016)
/* template */
var __vue_template__ = __webpack_require__(2017)
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
Component.options.__file = "resources/js/views/ui-elements/Progress.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-45d4f4eb", Component.options)
  } else {
    hotAPI.reload("data-v-45d4f4eb", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2016:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      interval: {},
      value: 0,
      valueDeterminate: 50,
      buffer: 10,
      bufferValue: 20
    };
  },
  beforeDestroy: function beforeDestroy() {
    clearInterval(this.interval);
  },

  methods: {
    startBuffer: function startBuffer() {
      var _this = this;

      this.interval = setInterval(function () {
        _this.buffer += Math.random() * (15 - 5) + 5;
        _this.bufferValue += Math.random() * (15 - 5) + 5;
      }, 2000);
    }
  },
  mounted: function mounted() {
    var _this2 = this;

    this.interval = setInterval(function () {
      if (_this2.value === 100) {
        return _this2.value = 0;
      }
      _this2.value += 10;
    }, 1000);
    this.startBuffer();
  }
});

/***/ }),

/***/ 2017:
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
                    heading: _vm.$t("message.default"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", [
                      _vm._v(
                        "By default, progress circular uses the applications secondary color."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    { attrs: { row: "", "text-xs-center": "" } },
                    [
                      _c("v-progress-circular", {
                        attrs: { value: 20, color: "primary" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { value: 40, color: "error" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { value: 60, color: "success" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { value: 80, color: "warning" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { value: 100, color: "info" }
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
                    heading: _vm.$t("message.colored"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", [_vm._v("Alternate colors can be applied.")])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    {
                      attrs: {
                        row: "",
                        "justify-space-between": "",
                        "text-xs-center": ""
                      }
                    },
                    [
                      _c("v-progress-circular", {
                        attrs: { value: 100, color: "blue-grey" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { value: 80, color: "deep-orange lighten-2" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { value: 60, color: "brown" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { value: 40, color: "lime" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { value: 20, color: "indigo darken-2" }
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
                    heading: _vm.$t("message.indeterminate"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", [
                      _vm._v(
                        "An indeterminate progress circular animates forever."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    {
                      attrs: {
                        row: "",
                        "justify-content-space-between": "",
                        "text-xs-center": ""
                      }
                    },
                    [
                      _c("v-progress-circular", {
                        attrs: { indeterminate: "", color: "primary" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { indeterminate: "", color: "red" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { indeterminate: "", color: "purple" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { indeterminate: "", color: "green" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { indeterminate: "", color: "amber" }
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
                    heading: _vm.$t("message.sizeAndWidth"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", [
                      _vm._v(
                        "The progress circular component can have an altered width and size."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    {
                      attrs: {
                        row: "",
                        "justify-content-space-between": "",
                        "text-xs-center": ""
                      }
                    },
                    [
                      _c("v-progress-circular", {
                        attrs: { indeterminate: "", size: 50, color: "primary" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { indeterminate: "", width: 3, color: "red" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: {
                          indeterminate: "",
                          size: 70,
                          width: 7,
                          color: "purple"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { indeterminate: "", width: 3, color: "green" }
                      }),
                      _vm._v(" "),
                      _c("v-progress-circular", {
                        attrs: { indeterminate: "", size: 50, color: "amber" }
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
                    heading: _vm.$t("message.rotate"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", [_vm._v("The progress origin can be rotated.")])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    {
                      attrs: {
                        row: "",
                        "justify-content-space-between": "",
                        "text-xs-center": ""
                      }
                    },
                    [
                      _c(
                        "v-progress-circular",
                        {
                          attrs: {
                            size: 100,
                            width: 15,
                            rotate: 360,
                            value: _vm.value,
                            color: "teal"
                          }
                        },
                        [
                          _vm._v(
                            "\n\t\t\t\t\t\t" +
                              _vm._s(_vm.value) +
                              "\n\t\t\t\t\t"
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-progress-circular",
                        {
                          attrs: {
                            size: 100,
                            width: 15,
                            rotate: -90,
                            value: _vm.value,
                            color: "primary"
                          }
                        },
                        [
                          _vm._v(
                            "\n\t\t\t\t\t\t" +
                              _vm._s(_vm.value) +
                              "\n\t\t\t\t\t"
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-progress-circular",
                        {
                          attrs: {
                            size: 100,
                            width: 15,
                            rotate: 90,
                            value: _vm.value,
                            color: "red"
                          }
                        },
                        [
                          _vm._v(
                            "\n\t\t\t\t\t\t" +
                              _vm._s(_vm.value) +
                              "\n\t\t\t\t\t"
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-progress-circular",
                        {
                          attrs: {
                            size: 100,
                            width: 15,
                            rotate: 180,
                            value: _vm.value,
                            color: "pink"
                          }
                        },
                        [
                          _vm._v(
                            "\n\t\t\t\t\t\t" +
                              _vm._s(_vm.value) +
                              "\n\t\t\t\t\t"
                          )
                        ]
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
                    heading: _vm.$t("message.determinate"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", [
                      _vm._v(
                        "The progress linear component can have a determinate state modified by\n\t\t\t\t\t\t"
                      ),
                      _c("code", [_vm._v("v-model")]),
                      _vm._v(".")
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    {
                      attrs: {
                        row: "",
                        "justify-content-space-between": "",
                        "text-xs-center": ""
                      }
                    },
                    [
                      _c("v-progress-linear", {
                        attrs: { color: "pink" },
                        model: {
                          value: _vm.valueDeterminate,
                          callback: function($$v) {
                            _vm.valueDeterminate = $$v
                          },
                          expression: "valueDeterminate"
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
                    heading: _vm.$t("message.indeterminate"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", [
                      _vm._v(
                        "Just as with the progress circular component, progress linear has an indeterminate state."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-progress-linear", {
                    attrs: { indeterminate: true, color: "green" }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.buffer"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", [
                      _vm._v(
                        "A buffer state represents two values simultaneously. The primary value is controlled by the model, whereas the buffer is controlled by the\n\t\t\t\t\t\t"
                      ),
                      _c("code", [_vm._v("buffer-value")]),
                      _vm._v(" prop.")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-progress-linear", {
                    attrs: {
                      buffer: "",
                      "buffer-value": _vm.bufferValue,
                      color: "yellow"
                    },
                    model: {
                      value: _vm.buffer,
                      callback: function($$v) {
                        _vm.buffer = $$v
                      },
                      expression: "buffer"
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
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-45d4f4eb", module.exports)
  }
}

/***/ })

});