webpackJsonp([37],{

/***/ 127:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1996)
/* template */
var __vue_template__ = __webpack_require__(1997)
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
Component.options.__file = "resources/js/views/ui-elements/Menu.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-18b0bbc6", Component.options)
  } else {
    hotAPI.reload("data-v-18b0bbc6", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1996:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      list1: [{ title: "Refresh" }, { title: "Settings" }, { title: "Help" }, { title: "Sign Out" }]
    };
  }
});

/***/ }),

/***/ 1997:
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
        { attrs: { "grid-list-xl": "", fluid: "", "pt-0": "" } },
        [
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.activator"),
                    colClasses: "xs12 sm4 md4"
                  }
                },
                [
                  _c(
                    "v-menu",
                    { attrs: { "offset-y": "" } },
                    [
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            slot: "activator",
                            color: "primary",
                            dark: ""
                          },
                          slot: "activator"
                        },
                        [_vm._v("Dropdown")]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-list",
                        _vm._l(_vm.list1, function(item) {
                          return _c(
                            "v-list-tile",
                            {
                              key: item.title,
                              on: { click: function($event) {} }
                            },
                            [
                              _c("v-list-tile-title", [
                                _vm._v(_vm._s(item.title))
                              ])
                            ],
                            1
                          )
                        }),
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
                    heading: _vm.$t("message.hover"),
                    colClasses: "xs12 sm4 md4"
                  }
                },
                [
                  _c(
                    "v-menu",
                    { attrs: { "open-on-hover": "", top: "", "offset-y": "" } },
                    [
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            slot: "activator",
                            color: "error",
                            dark: ""
                          },
                          slot: "activator"
                        },
                        [_vm._v("Dropdown")]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-list",
                        _vm._l(_vm.list1, function(item) {
                          return _c(
                            "v-list-tile",
                            {
                              key: item.title,
                              on: { click: function($event) {} }
                            },
                            [
                              _c("v-list-tile-title", [
                                _vm._v(_vm._s(item.title))
                              ])
                            ],
                            1
                          )
                        }),
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
                    heading: _vm.$t("message.menus"),
                    colClasses: "xs12 sm4 md4"
                  }
                },
                [
                  _c(
                    "v-menu",
                    { attrs: { bottom: "", right: "" } },
                    [
                      _c(
                        "v-btn",
                        {
                          attrs: { slot: "activator", icon: "" },
                          slot: "activator"
                        },
                        [_c("v-icon", [_vm._v("more_vert")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-list",
                        _vm._l(_vm.list1, function(item) {
                          return _c(
                            "v-list-tile",
                            {
                              key: item.title,
                              on: { click: function($event) {} }
                            },
                            [
                              _c("v-list-tile-title", [
                                _vm._v(_vm._s(item.title))
                              ])
                            ],
                            1
                          )
                        }),
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
    require("vue-hot-reload-api")      .rerender("data-v-18b0bbc6", module.exports)
  }
}

/***/ })

});