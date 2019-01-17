webpackJsonp([34],{

/***/ 132:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2007)
/* template */
var __vue_template__ = __webpack_require__(2008)
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
Component.options.__file = "resources/js/views/ui-elements/Select.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-c3e24c8c", Component.options)
  } else {
    hotAPI.reload("data-v-c3e24c8c", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2007:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      e1: null,
      e2: null,
      e3: null,
      e4: null,
      e5: "Arkansas",
      items: [{ text: "State 1" }, { text: "State 2" }, { text: "State 3" }, { text: "State 4" }, { text: "State 5" }, { text: "State 6" }, { text: "State 7" }],
      states: ["Alabama", "Alaska", "American Samoa", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "District of Columbia", "Federated States of Micronesia", "Florida", "Georgia", "Guam", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Marshall Islands", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Northern Mariana Islands", "Ohio", "Oklahoma", "Oregon", "Palau", "Pennsylvania", "Puerto Rico", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virgin Island", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
    };
  }
});

/***/ }),

/***/ 2008:
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
                    colClasses: "xs12 md6",
                    heading: _vm.$t("message.select"),
                    contentCustomClass: "input-label"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", [
                      _vm._v(
                        "Select fields components are used for collecting user provided information from a list of options."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-card",
                    { attrs: { flat: "" } },
                    [
                      _c(
                        "v-card-text",
                        [
                          _c(
                            "v-layout",
                            { attrs: { row: "", wrap: "" } },
                            [
                              _c("v-flex", { attrs: { xs12: "", sm6: "" } }, [
                                _c(
                                  "span",
                                  { staticClass: "small pt-4 d-block" },
                                  [_vm._v("Standard")]
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm6: "" } },
                                [
                                  _c("v-select", {
                                    attrs: {
                                      "hide-details": "",
                                      items: _vm.items,
                                      label: "Select",
                                      "single-line": "",
                                      "menu-props": "bottom"
                                    },
                                    model: {
                                      value: _vm.e1,
                                      callback: function($$v) {
                                        _vm.e1 = $$v
                                      },
                                      expression: "e1"
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c("v-flex", { attrs: { xs12: "", sm6: "" } }, [
                                _c(
                                  "span",
                                  { staticClass: "small pt-4 d-block" },
                                  [_vm._v("Standard with focus")]
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm6: "" } },
                                [
                                  _c("v-select", {
                                    staticClass: "input-group--focused",
                                    attrs: {
                                      "hide-details": "",
                                      items: _vm.items,
                                      label: "Select",
                                      "item-value": "text"
                                    },
                                    model: {
                                      value: _vm.e2,
                                      callback: function($$v) {
                                        _vm.e2 = $$v
                                      },
                                      expression: "e2"
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c("v-flex", { attrs: { xs12: "", sm6: "" } }, [
                                _c(
                                  "span",
                                  { staticClass: "small pt-4 d-block" },
                                  [_vm._v("Error")]
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm6: "" } },
                                [
                                  _c("v-select", {
                                    attrs: {
                                      "hide-details": "",
                                      label: "Select",
                                      items: _vm.items,
                                      "error-messages": [
                                        "Please select an option"
                                      ],
                                      "item-value": "text"
                                    },
                                    model: {
                                      value: _vm.e3,
                                      callback: function($$v) {
                                        _vm.e3 = $$v
                                      },
                                      expression: "e3"
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c("v-flex", { attrs: { xs12: "", sm6: "" } }, [
                                _c(
                                  "span",
                                  { staticClass: "small pt-4 d-block" },
                                  [_vm._v("Disabled")]
                                )
                              ]),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm6: "" } },
                                [
                                  _c("v-select", {
                                    attrs: {
                                      "hide-details": "",
                                      label: "Select",
                                      items: _vm.items,
                                      disabled: ""
                                    },
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
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.icons"),
                    colClasses: "xs12 md6",
                    contentCustomClass: "input-label"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", [
                      _vm._v("Use a custom prepended or appended icon.")
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    [
                      _c("v-flex", { attrs: { xs12: "", sm6: "" } }, [
                        _c("span", { staticClass: "small pt-4 d-block" }, [
                          _vm._v("Prepended icon")
                        ])
                      ]),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs12: "", sm6: "" } },
                        [
                          _c("v-select", {
                            attrs: {
                              "hide-details": "",
                              items: _vm.states,
                              label: "Select",
                              "single-line": "",
                              "menu-props": "auto",
                              "prepend-icon": "map"
                            },
                            model: {
                              value: _vm.e1,
                              callback: function($$v) {
                                _vm.e1 = $$v
                              },
                              expression: "e1"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c("v-flex", { attrs: { xs12: "", sm6: "" } }, [
                        _c("span", { staticClass: "small pt-4 d-block" }, [
                          _vm._v("Appended icon")
                        ])
                      ]),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs12: "", sm6: "" } },
                        [
                          _c("v-select", {
                            attrs: {
                              "hide-details": "",
                              items: _vm.states,
                              label: "Select",
                              "single-line": "",
                              "menu-props": "auto",
                              "append-icon": "map"
                            },
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
    require("vue-hot-reload-api")      .rerender("data-v-c3e24c8c", module.exports)
  }
}

/***/ })

});