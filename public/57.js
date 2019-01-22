webpackJsonp([57],{

/***/ 155:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2122)
/* template */
var __vue_template__ = __webpack_require__(2123)
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
Component.options.__file = "resources/js/views/drag-drop/Vue2Dragula.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3c223134", Component.options)
  } else {
    hotAPI.reload("data-v-3c223134", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2122:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      colOne: ["Its is too amezing component try it !", "You can move these elements between these two containers", 'Moving them anywhere else isn"t quite possible', 'There"s also the possibility of moving elements around in the same container, changing their position'],
      colTwo: ["This is the use case. You only need to specify the containers you want to use", "More interactive use cases lie ahead", "Another message", "Move on upper"]
    };
  }
});

/***/ }),

/***/ 2123:
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
        { attrs: { fluid: "", "grid-list-xl": "", "py-0": "" } },
        [
          _c(
            "app-card",
            [
              _c(
                "v-layout",
                { attrs: { row: "", wrap: "" } },
                [
                  _c("v-flex", { attrs: { xs12: "", sm6: "" } }, [
                    _c("h3", { staticClass: "mb-3" }, [_vm._v("List 1")]),
                    _vm._v(" "),
                    _c(
                      "div",
                      {
                        directives: [
                          {
                            name: "dragula",
                            rawName: "v-dragula",
                            value: _vm.colOne,
                            expression: "colOne"
                          }
                        ],
                        staticClass: "vue2-dragula-container",
                        attrs: { drake: "first" }
                      },
                      _vm._l(_vm.colOne, function(text) {
                        return _c("div", { key: text }, [
                          _vm._v(_vm._s(text) + " [click me]")
                        ])
                      }),
                      0
                    )
                  ]),
                  _vm._v(" "),
                  _c("v-flex", { attrs: { xs12: "", sm6: "" } }, [
                    _c("h3", { staticClass: "mb-3" }, [_vm._v("List 2")]),
                    _vm._v(" "),
                    _c(
                      "div",
                      {
                        directives: [
                          {
                            name: "dragula",
                            rawName: "v-dragula",
                            value: _vm.colTwo,
                            expression: "colTwo"
                          }
                        ],
                        staticClass: "vue2-dragula-container",
                        attrs: { drake: "first" }
                      },
                      _vm._l(_vm.colTwo, function(text) {
                        return _c("div", { key: text }, [
                          _vm._v(_vm._s(text) + " [click me]")
                        ])
                      }),
                      0
                    )
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
    require("vue-hot-reload-api")      .rerender("data-v-3c223134", module.exports)
  }
}

/***/ })

});