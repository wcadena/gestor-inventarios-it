webpackJsonp([58],{

/***/ 136:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(2014)
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
Component.options.__file = "resources/js/views/ui-elements/Toolbar.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-f45f85a6", Component.options)
  } else {
    hotAPI.reload("data-v-f45f85a6", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2014:
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
                    heading: _vm.$t("message.theDefaultColorToolbar"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("p", { staticClass: "mb-0" }, [
                      _vm._v("The "),
                      _c("code", [_vm._v("v-toolbar")]),
                      _vm._v(
                        " component is pivotal to any gui, as it generally is the primary source of site navigation.\n\t\t\t\t\t\tThe toolbar component works great in conjunction with a navigation drawer for hiding links and presenting an activator to open the sidebar on mobile."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-toolbar",
                    [
                      _c("v-toolbar-title", [_vm._v("Title")]),
                      _vm._v(" "),
                      _c("v-spacer"),
                      _vm._v(" "),
                      _c("v-toolbar-side-icon", {
                        staticClass: "hidden-md-and-up"
                      }),
                      _vm._v(" "),
                      _c(
                        "v-toolbar-items",
                        { staticClass: "hidden-sm-and-down" },
                        [
                          _c("v-btn", { attrs: { flat: "" } }, [
                            _vm._v("Link One")
                          ]),
                          _vm._v(" "),
                          _c("v-btn", { attrs: { flat: "" } }, [
                            _vm._v("Link Two")
                          ]),
                          _vm._v(" "),
                          _c("v-btn", { attrs: { flat: "" } }, [
                            _vm._v("Link Three")
                          ])
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
                    heading: _vm.$t("message.appBar"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-toolbar",
                    { attrs: { dark: "", color: "primary" } },
                    [
                      _c("v-toolbar-side-icon"),
                      _vm._v(" "),
                      _c("v-toolbar-title", { staticClass: "white--text" }, [
                        _vm._v("Title")
                      ]),
                      _vm._v(" "),
                      _c("v-spacer"),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "" } },
                        [_c("v-icon", [_vm._v("search")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "" } },
                        [_c("v-icon", [_vm._v("apps")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "" } },
                        [_c("v-icon", [_vm._v("refresh")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "" } },
                        [_c("v-icon", [_vm._v("more_vert")])],
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
                    heading: _vm.$t("message.appBarWithExtension"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-toolbar",
                    { attrs: { dark: "", color: "warning", extended: "" } },
                    [
                      _c("v-toolbar-side-icon"),
                      _vm._v(" "),
                      _c(
                        "v-toolbar-title",
                        {
                          staticClass: "white--text",
                          attrs: { slot: "extension" },
                          slot: "extension"
                        },
                        [_vm._v("Title")]
                      ),
                      _vm._v(" "),
                      _c("v-spacer"),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "" } },
                        [_c("v-icon", [_vm._v("search")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "" } },
                        [_c("v-icon", [_vm._v("apps")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "" } },
                        [_c("v-icon", [_vm._v("refresh")])],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        { attrs: { icon: "" } },
                        [_c("v-icon", [_vm._v("more_vert")])],
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
    require("vue-hot-reload-api")      .rerender("data-v-f45f85a6", module.exports)
  }
}

/***/ })

});