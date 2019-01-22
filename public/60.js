webpackJsonp([60],{

/***/ 125:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(1985)
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
Component.options.__file = "resources/js/views/ui-elements/Grid.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-2a99cc84", Component.options)
  } else {
    hotAPI.reload("data-v-2a99cc84", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1985:
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
            "app-card",
            {
              attrs: {
                heading: _vm.$t("message.grid"),
                contentCustomClass: "text-xs-center"
              }
            },
            [
              _c(
                "v-layout",
                { attrs: { row: "", wrap: "" } },
                [
                  _c(
                    "v-flex",
                    { attrs: { xs12: "" } },
                    [
                      _c(
                        "v-card",
                        {
                          staticClass: "theme--dark",
                          attrs: { color: "primary" }
                        },
                        [_c("v-card-text", [_vm._v("12")])],
                        1
                      )
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _vm._l(3, function(ref) {
                    var n = ref.n
                    var index = ref.index
                    return _c(
                      "v-flex",
                      { key: index, attrs: { xs4: "" } },
                      [
                        _c(
                          "v-card",
                          {
                            staticClass: "white--text",
                            attrs: { color: "primary" }
                          },
                          [_c("v-card-text", [_vm._v("6")])],
                          1
                        )
                      ],
                      1
                    )
                  }),
                  _vm._v(" "),
                  _vm._l(4, function(ref) {
                    var n = ref.n
                    var index = ref.index
                    return _c(
                      "v-flex",
                      { key: index, attrs: { xs3: "" } },
                      [
                        _c(
                          "v-card",
                          {
                            staticClass: "theme--dark",
                            attrs: { color: "primary" }
                          },
                          [_c("v-card-text", [_vm._v("3")])],
                          1
                        )
                      ],
                      1
                    )
                  }),
                  _vm._v(" "),
                  _vm._l(12, function(ref) {
                    var n = ref.n
                    var index = ref.index
                    return _c(
                      "v-flex",
                      { key: index, attrs: { xs3: "", md1: "" } },
                      [
                        _c(
                          "v-card",
                          {
                            staticClass: "theme--dark",
                            attrs: { color: "primary" }
                          },
                          [_c("v-card-text", [_vm._v("1")])],
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
    require("vue-hot-reload-api")      .rerender("data-v-2a99cc84", module.exports)
  }
}

/***/ })

});