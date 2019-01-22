webpackJsonp([45],{

/***/ 123:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1981)
/* template */
var __vue_template__ = __webpack_require__(1982)
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
Component.options.__file = "resources/js/views/ui-elements/Buttons.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-9c7c039a", Component.options)
  } else {
    hotAPI.reload("data-v-9c7c039a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1981:
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      dropdown_font: ["Arial", "Calibri", "Courier", "Verdana"],
      dropdown_icon: [{
        text: "list",
        callback: function callback() {
          return console.log("list");
        }
      }, {
        text: "favorite",
        callback: function callback() {
          return console.log("favorite");
        }
      }, {
        text: "delete",
        callback: function callback() {
          return console.log("delete");
        }
      }],
      dropdown_edit: [{
        text: "100%"
      }, {
        text: "75%"
      }, {
        text: "50%"
      }, {
        text: "25%"
      }, {
        text: "0%"
      }],
      text: "center",
      icon: "justify",
      toggle_none: null,
      toggle_one: 0,
      toggle_exclusive: 2,
      toggle_multiple: [0, 1, 2],
      loader: null,
      loading: false,
      loading2: false,
      loading3: false,
      loading4: false
    };
  },

  watch: {
    loader: function loader() {
      var _this = this;

      var l = this.loader;
      this[l] = !this[l];
      setTimeout(function () {
        return _this[l] = false;
      }, 3000);
      this.loader = null;
    }
  }
});

/***/ }),

/***/ 1982:
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
                    heading: _vm.$t("message.flatButton"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _c("code", [_vm._v("v-button")]),
                      _vm._v(
                        " is an HTML button or a tag enhanced with styling and animation to match the Material Design button spec."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { flat: "" } }, [_vm._v("Normal")]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { flat: "", color: "primary" } }, [
                    _vm._v("Primary")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { flat: "", color: "accent" } }, [
                    _vm._v("Accent")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { flat: "", color: "secondary" } }, [
                    _vm._v("Secondary")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { flat: "", color: "warning" } }, [
                    _vm._v("Warning")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { flat: "", color: "error" } }, [
                    _vm._v("Error")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { flat: "", color: "info" } }, [
                    _vm._v("Info")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { flat: "", color: "success" } }, [
                    _vm._v("Success")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { flat: "", disabled: "" } }, [
                    _vm._v("Disabled")
                  ])
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.raisedButton"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _c("code", [_vm._v("v-button")]),
                      _vm._v(
                        " is an HTML button or a tag enhanced with styling and for "
                      ),
                      _c("code", [_vm._v('color="primary"')]),
                      _vm._v(" Applies specified color to the control")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { raised: "" } }, [_vm._v("Normal")]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { raised: "", color: "primary" } }, [
                    _vm._v("Primary")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { raised: "", color: "accent" } }, [
                    _vm._v("Accent")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { raised: "", color: "secondary" } }, [
                    _vm._v("Secondary")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { raised: "", color: "warning" } }, [
                    _vm._v("Warning")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { raised: "", color: "error" } }, [
                    _vm._v("Error")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { raised: "", color: "info" } }, [
                    _vm._v("Info")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { raised: "", color: "success" } }, [
                    _vm._v("Success")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { raised: "", disabled: "" } }, [
                    _vm._v("Disabled")
                  ])
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.gradientButton"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v("Simply use a class on btn element "),
                      _c("code", [_vm._v(".gradient-primary")]),
                      _vm._v(" Applies specified color to the control")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { staticClass: "btn-gradient-primary" }, [
                    _vm._v("Primary")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { staticClass: "btn-gradient-warning" }, [
                    _vm._v("Warning")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { staticClass: "btn-gradient-pink" }, [
                    _vm._v("Pink")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { staticClass: "btn-gradient-success" }, [
                    _vm._v("Success")
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { staticClass: "btn-gradient-purple" }, [
                    _vm._v("Purple")
                  ])
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.buttonDropdownVariants"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v(
                        "Button dropdowns are regular selects with additional styling."
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
                        { attrs: { xs12: "", md4: "", xl4: "" } },
                        [
                          _c("p", [_vm._v("Overflow")]),
                          _vm._v(" "),
                          _c("v-overflow-btn", {
                            attrs: { items: _vm.dropdown_font, label: "Select" }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs12: "", md4: "", xl4: "" } },
                        [
                          _c("p", [_vm._v("Segmented")]),
                          _vm._v(" "),
                          _c("v-overflow-btn", {
                            attrs: {
                              items: _vm.dropdown_icon,
                              label: "Select",
                              segmented: ""
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs12: "", md4: "", xl4: "" } },
                        [
                          _c("p", [_vm._v("Editable")]),
                          _vm._v(" "),
                          _c("v-overflow-btn", {
                            attrs: {
                              items: _vm.dropdown_edit,
                              label: "Select",
                              editable: "",
                              "item-value": "text"
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
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.buttonToggle"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v(
                        "Toggle buttons are essentially styled radio or checkboxes, depending on the properties selected. This component is compatible with the v-toolbar component."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("p", { staticClass: "primary--text fw-bold" }, [
                    _vm._v("Exclusive")
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-btn-toggle",
                    {
                      model: {
                        value: _vm.toggle_exclusive,
                        callback: function($$v) {
                          _vm.toggle_exclusive = $$v
                        },
                        expression: "toggle_exclusive"
                      }
                    },
                    [
                      _c(
                        "v-btn",
                        { attrs: { flat: "" } },
                        [_c("v-icon", [_vm._v("format_align_left")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { flat: "" } },
                        [_c("v-icon", [_vm._v("format_align_center")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { flat: "" } },
                        [_c("v-icon", [_vm._v("format_align_right")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { flat: "" } },
                        [_c("v-icon", [_vm._v("format_align_justify")])],
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
                    heading: _vm.$t("message.icon"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v(
                        "Icons can be used for the primary content of a button."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "mb-3" },
                    [
                      _c("p", { staticClass: "primary--text fw-bold" }, [
                        _vm._v(_vm._s(_vm.$t("message.normal")))
                      ]),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "", color: "pink" } },
                        [_c("v-icon", [_vm._v("favorite")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "", color: "indigo" } },
                        [_c("v-icon", [_vm._v("star")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "", color: "green" } },
                        [_c("v-icon", [_vm._v("cached")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "", color: "deep-orange" } },
                        [_c("v-icon", [_vm._v("thumb_up")])],
                        1
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "mb-3" },
                    [
                      _c("p", { staticClass: "primary--text fw-bold" }, [
                        _vm._v(_vm._s(_vm.$t("message.disabled")))
                      ]),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "", disabled: "" } },
                        [_c("v-icon", [_vm._v("favorite")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "", disabled: "" } },
                        [_c("v-icon", [_vm._v("star")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "", disabled: "" } },
                        [_c("v-icon", [_vm._v("cached")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "", disabled: "" } },
                        [_c("v-icon", [_vm._v("thumb_up")])],
                        1
                      )
                    ],
                    1
                  )
                ]
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.floating"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v(
                        "Floating buttons are round and usually contain an icon."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    {
                      attrs: { fab: "", dark: "", small: "", color: "primary" }
                    },
                    [_c("v-icon", { attrs: { dark: "" } }, [_vm._v("remove")])],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    { attrs: { fab: "", dark: "", small: "", color: "pink" } },
                    [
                      _c("v-icon", { attrs: { dark: "" } }, [
                        _vm._v("favorite")
                      ])
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    { attrs: { fab: "", dark: "", color: "indigo" } },
                    [_c("v-icon", { attrs: { dark: "" } }, [_vm._v("add")])],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    { attrs: { fab: "", dark: "", color: "teal" } },
                    [_c("v-icon", { attrs: { dark: "" } }, [_vm._v("list")])],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    { attrs: { fab: "", dark: "", large: "", color: "cyan" } },
                    [_c("v-icon", { attrs: { dark: "" } }, [_vm._v("edit")])],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    {
                      attrs: { fab: "", dark: "", large: "", color: "purple" }
                    },
                    [
                      _c("v-icon", { attrs: { dark: "" } }, [_vm._v("android")])
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
                    heading: _vm.$t("message.loaders"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v(
                        "Using the loading prop, you can notify a user that there is processing taking place. The default behavior is to use a v-progress-circular component but this can be customized."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    {
                      staticClass: "gradient-primary",
                      attrs: { loading: _vm.loading, disabled: _vm.loading },
                      nativeOn: {
                        click: function($event) {
                          _vm.loader = "loading"
                        }
                      }
                    },
                    [_vm._v("\n\t\t\t\t\tAccept Terms\n\t\t\t\t")]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    {
                      staticClass: "gradient-success",
                      attrs: { loading: _vm.loading3, disabled: _vm.loading3 },
                      nativeOn: {
                        click: function($event) {
                          _vm.loader = "loading3"
                        }
                      }
                    },
                    [
                      _vm._v("\n\t\t\t\t\tUpload\n\t\t\t\t\t"),
                      _c("v-icon", { attrs: { right: "", dark: "" } }, [
                        _vm._v("cloud_upload")
                      ])
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    {
                      staticClass: "gradient-pink",
                      attrs: { loading: _vm.loading2, disabled: _vm.loading2 },
                      nativeOn: {
                        click: function($event) {
                          _vm.loader = "loading2"
                        }
                      }
                    },
                    [
                      _vm._v("\n\t\t\t\t\tCustom Loader\n\t\t\t\t\t"),
                      _c(
                        "span",
                        { attrs: { slot: "loader" }, slot: "loader" },
                        [_vm._v("Loading...")]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    {
                      staticClass: "gradient-warning",
                      attrs: { loading: _vm.loading4, disabled: _vm.loading4 },
                      nativeOn: {
                        click: function($event) {
                          _vm.loader = "loading4"
                        }
                      }
                    },
                    [
                      _vm._v("\n\t\t\t\t\tIcon Loader\n\t\t\t\t\t"),
                      _c(
                        "span",
                        {
                          staticClass: "custom-loader",
                          attrs: { slot: "loader" },
                          slot: "loader"
                        },
                        [
                          _c("v-icon", { attrs: { light: "" } }, [
                            _vm._v("cached")
                          ])
                        ],
                        1
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.sizing"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v(
                        "Buttons can be given different sizing options to fit a multitude of scenarios."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "mb-3" },
                    [
                      _c(
                        "v-btn",
                        { attrs: { small: "", color: "primary", dark: "" } },
                        [_vm._v("Small Button")]
                      ),
                      _vm._v(" "),
                      _c("v-btn", { attrs: { color: "warning", dark: "" } }, [
                        _vm._v("Normal Button")
                      ]),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { color: "error", dark: "", large: "" } },
                        [_vm._v("Large Button")]
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "mb-3" },
                    [
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            color: "primary",
                            fab: "",
                            small: "",
                            dark: ""
                          }
                        },
                        [_c("v-icon", [_vm._v("edit")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { color: "warning", fab: "", dark: "" } },
                        [_c("v-icon", [_vm._v("account_circle")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            color: "error",
                            fab: "",
                            large: "",
                            dark: ""
                          }
                        },
                        [_c("v-icon", [_vm._v("alarm")])],
                        1
                      )
                    ],
                    1
                  )
                ]
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.outline"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v(
                        "Outline buttons inherit their borders from the current color applied."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { outline: "", color: "indigo" } }, [
                    _vm._v("Outline Button")
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    { attrs: { outline: "", fab: "", color: "teal" } },
                    [_c("v-icon", [_vm._v("list")])],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    {
                      attrs: { outline: "", large: "", fab: "", color: "pink" }
                    },
                    [_c("v-icon", [_vm._v("edit")])],
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
                    heading: _vm.$t("message.round"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12 "
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v(
                        "Rounded buttons behave the same as regular buttons but have rounded edges."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { round: "", color: "success" } }, [
                    _vm._v("Rounded Button")
                  ])
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.block"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v("Block buttons extend the full available width.")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-btn", { attrs: { block: "", color: "warning" } }, [
                    _vm._v("Block Button")
                  ])
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
    require("vue-hot-reload-api")      .rerender("data-v-9c7c039a", module.exports)
  }
}

/***/ })

});