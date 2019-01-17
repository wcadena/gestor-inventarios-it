webpackJsonp([31],{

/***/ 138:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2017)
/* template */
var __vue_template__ = __webpack_require__(2018)
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
Component.options.__file = "resources/js/views/ui-elements/Tabs.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3abece88", Component.options)
  } else {
    hotAPI.reload("data-v-3abece88", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2017:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      tabs: ["1", "2", "3"],
      tabs2: null,
      active: null,
      items: ["Item One", "Item Seventeen", "Item Five"],
      text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
    };
  },

  methods: {
    next: function next() {
      var active = parseInt(this.active);
      this.active = (active < 2 ? active + 1 : 0).toString();
    }
  }
});

/***/ }),

/***/ 2018:
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
                    heading: _vm.$t("message.centeredTabs"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", { staticClass: "mb-0" }, [
                      _vm._v("Tabs can be centered by using the "),
                      _c("code", [_vm._v("centered prop")]),
                      _vm._v(". Here we have also applied\n\t\t\t\t\tthe "),
                      _c("code", [_vm._v("fixed")]),
                      _vm._v(
                        " prop which gives all tab items a fixed size, regardless of content."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-toolbar",
                    { attrs: { color: "primary", dark: "", tabs2: "" } },
                    [
                      _c(
                        "v-tabs",
                        {
                          attrs: {
                            centered: "",
                            "slider-color": "pink darken-1",
                            color: "transparent"
                          },
                          model: {
                            value: _vm.tabs2,
                            callback: function($$v) {
                              _vm.tabs2 = $$v
                            },
                            expression: "tabs2"
                          }
                        },
                        _vm._l(_vm.items, function(i) {
                          return _c("v-tab", { key: i }, [
                            _vm._v(
                              "\n\t\t\t\t\t\t\t" + _vm._s(i) + "\n\t\t\t\t\t\t"
                            )
                          ])
                        }),
                        1
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-tabs-items",
                    {
                      model: {
                        value: _vm.tabs2,
                        callback: function($$v) {
                          _vm.tabs2 = $$v
                        },
                        expression: "tabs2"
                      }
                    },
                    _vm._l(_vm.items, function(i) {
                      return _c(
                        "v-tab-item",
                        { key: i },
                        [
                          _c(
                            "v-card",
                            [_c("v-card-text", [_vm._v(_vm._s(_vm.text))])],
                            1
                          )
                        ],
                        1
                      )
                    }),
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
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", { staticClass: "mb-0" }, [
                      _vm._v("By using the "),
                      _c("code", [_vm._v("icons")]),
                      _vm._v(" prop you can add icons to each tab item.")
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-tabs",
                    {
                      attrs: {
                        "icons-and-text": "",
                        centered: "",
                        dark: "",
                        color: "warning"
                      }
                    },
                    [
                      _c("v-tabs-slider", { attrs: { color: "red darken-1" } }),
                      _vm._v(" "),
                      _c(
                        "v-tab",
                        { attrs: { href: "#tab-1" } },
                        [
                          _vm._v("\n\t\t\t\t\t\tRecents\n\t\t\t\t\t\t"),
                          _c("v-icon", [_vm._v("phone")])
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-tab",
                        { attrs: { href: "#tab-2" } },
                        [
                          _vm._v("\n\t\t\t\t\t\tFavorites\n\t\t\t\t\t\t"),
                          _c("v-icon", [_vm._v("favorite")])
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-tab",
                        { attrs: { href: "#tab-3" } },
                        [
                          _vm._v("\n\t\t\t\t\t\tNearby\n\t\t\t\t\t\t"),
                          _c("v-icon", [_vm._v("account_box")])
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _vm._l(3, function(i) {
                        return _c(
                          "v-tab-item",
                          { key: i, attrs: { id: "tab-" + i } },
                          [
                            _c(
                              "v-card",
                              { attrs: { flat: "" } },
                              [_c("v-card-text", [_vm._v(_vm._s(_vm.text))])],
                              1
                            )
                          ],
                          1
                        )
                      })
                    ],
                    2
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
                    heading: _vm.$t("message.toolbarTabs"),
                    colClasses: "xs12 md6"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", { staticClass: "mb-0" }, [
                      _vm._v("The "),
                      _c("code", [_vm._v("v-tabs")]),
                      _vm._v(
                        " component is highly customizable to suit your needs.\n\t\t\t\t\tYou can get and set the currently active tab by using the v-model prop on the "
                      ),
                      _c("code", [_vm._v("v-tabs")]),
                      _vm._v(" component.")
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-tabs",
                    {
                      attrs: {
                        color: "success",
                        dark: "",
                        "slider-color": "red"
                      },
                      model: {
                        value: _vm.active,
                        callback: function($$v) {
                          _vm.active = $$v
                        },
                        expression: "active"
                      }
                    },
                    [
                      _vm._l(_vm.tabs, function(tab) {
                        return _c(
                          "v-tab",
                          { key: tab, attrs: { ripple: "" } },
                          [
                            _vm._v(
                              "\n\t\t\t\t\t\tItem " +
                                _vm._s(tab) +
                                "\n\t\t\t\t\t"
                            )
                          ]
                        )
                      }),
                      _vm._v(" "),
                      _vm._l(_vm.tabs, function(tab) {
                        return _c(
                          "v-tab-item",
                          { key: tab },
                          [
                            _c(
                              "v-card",
                              { attrs: { flat: "" } },
                              [_c("v-card-text", [_vm._v(_vm._s(_vm.text))])],
                              1
                            )
                          ],
                          1
                        )
                      })
                    ],
                    2
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "text-xs-center mt-3" },
                    [
                      _c(
                        "v-btn",
                        {
                          attrs: { color: "error" },
                          nativeOn: {
                            click: function($event) {
                              return _vm.next($event)
                            }
                          }
                        },
                        [_vm._v("next tab")]
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
    require("vue-hot-reload-api")      .rerender("data-v-3abece88", module.exports)
  }
}

/***/ })

});