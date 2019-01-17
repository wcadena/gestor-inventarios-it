webpackJsonp([41],{

/***/ 140:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2021)
/* template */
var __vue_template__ = __webpack_require__(2022)
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
Component.options.__file = "resources/js/views/ui-elements/Chips.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3e2fe04e", Component.options)
  } else {
    hotAPI.reload("data-v-3e2fe04e", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2021:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      chip1: true,
      chip2: true,
      chip3: true,
      chip4: true
    };
  }
});

/***/ }),

/***/ 2022:
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
                  _c("v-chip", { attrs: { close: "" } }, [
                    _vm._v("Example Chip")
                  ]),
                  _vm._v(" "),
                  _c("v-chip", [_vm._v("Example Chip")]),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { close: "" } },
                    [
                      _c("v-avatar", [
                        _c("img", {
                          attrs: {
                            src:
                              " https://randomuser.me/api/portraits/men/35.jpg ",
                            alt: "trevor "
                          }
                        })
                      ]),
                      _vm._v("\n\t\t\t\t\tTrevor Hansen\n\t\t\t\t")
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    [
                      _c("v-avatar", { staticClass: "teal " }, [_vm._v("A")]),
                      _vm._v("\n\t\t\t\t\tANZ Bank\n\t\t\t\t")
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
                    heading: _vm.$t("message.outline"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("v-chip", { attrs: { outline: "", color: "secondary" } }, [
                    _vm._v("Outline")
                  ]),
                  _vm._v(" "),
                  _c("v-chip", { attrs: { outline: "", color: "primary" } }, [
                    _vm._v("Colored")
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { outline: "", color: "red" } },
                    [
                      _c(
                        "v-icon",
                        {
                          staticClass: "error--text font-sm",
                          attrs: { left: "" }
                        },
                        [_vm._v("build")]
                      ),
                      _vm._v("Icon\n\t\t\t\t")
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
                    heading: _vm.$t("message.label"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("v-chip", { attrs: { label: "" } }, [_vm._v("Label")]),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    {
                      attrs: { label: "", color: "pink", "text-color": "white" }
                    },
                    [
                      _c("v-icon", { attrs: { left: "" } }, [_vm._v("label")]),
                      _vm._v("Tags\n\t\t\t\t")
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { label: "", outline: "", color: "red" } },
                    [_vm._v("Outline")]
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
                  _c(
                    "v-chip",
                    { attrs: { color: "primary", "text-color": "white" } },
                    [_vm._v("Primary")]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { color: "warning", "text-color": "white" } },
                    [_vm._v("Warning")]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { color: "error", "text-color": "white" } },
                    [_vm._v("Colored Chip")]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { color: "success", "text-color": "white" } },
                    [_vm._v("Colored Chip")]
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
                    heading: _vm.$t("message.colored"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c(
                    "v-chip",
                    { attrs: { color: "primary", "text-color": "white" } },
                    [_vm._v("Primary")]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { color: "warning", "text-color": "white" } },
                    [_vm._v("Warning")]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { color: "error", "text-color": "white" } },
                    [_vm._v("Colored Chip")]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { color: "success", "text-color": "white" } },
                    [_vm._v("Colored Chip")]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.icon"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c(
                    "v-chip",
                    { attrs: { color: "primary", "text-color": "white" } },
                    [
                      _c(
                        "v-avatar",
                        [_c("v-icon", [_vm._v("account_circle")])],
                        1
                      ),
                      _vm._v("\n\t\t\t\t\tRanee\n\t\t\t\t")
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { color: "warning", "text-color": "white" } },
                    [
                      _vm._v("Premium\n\t\t\t\t\t"),
                      _c("v-icon", { attrs: { right: "" } }, [_vm._v("star")])
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { color: "error", "text-color": "white" } },
                    [
                      _vm._v("\n\t\t\t\t\t1 Year\n\t\t\t\t\t"),
                      _c("v-icon", { attrs: { right: "" } }, [_vm._v("cake")])
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    { attrs: { color: "info", "text-color": "white" } },
                    [
                      _c("v-avatar", { staticClass: "green darken-4" }, [
                        _vm._v("1")
                      ]),
                      _vm._v("\n\t\t\t\t\tYears\n\t\t\t\t")
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-chip",
                    {
                      attrs: {
                        close: "",
                        color: "success",
                        "text-color": "white"
                      }
                    },
                    [
                      _c(
                        "v-avatar",
                        [_c("v-icon", [_vm._v("check_circle")])],
                        1
                      ),
                      _vm._v("\n\t\t\t\t\tConfirmed\n\t\t\t\t")
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
    require("vue-hot-reload-api")      .rerender("data-v-3e2fe04e", module.exports)
  }
}

/***/ })

});