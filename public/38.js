webpackJsonp([38],{

/***/ 126:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1994)
/* template */
var __vue_template__ = __webpack_require__(1995)
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
Component.options.__file = "resources/js/views/ui-elements/List.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-67d985dc", Component.options)
  } else {
    hotAPI.reload("data-v-67d985dc", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1994:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      list1: [{
        avatar: "/static/avatars/user-6.jpg",
        title: "Brunch this weekend?",
        subtitle: "<span class='grey--text text--darken-2'>Ali Connors</span> — I'll be in your neighborhood doing errands this weekend. Do you want to hang out?"
      }, {
        avatar: "/static/avatars/user-7.jpg",
        title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
        subtitle: "<span class='grey--text text--darken-2'>to Alex, Scott, Jennifer</span> — Wish I could come, but I'm out of town this weekend."
      }, {
        avatar: "/static/avatars/user-10.jpg",
        title: "Oui oui",
        subtitle: "<span class='grey--text text--darken-2'>Sandra Adams</span> — Do you have Paris recommendations? Have you ever been?"
      }],
      list2: [{
        icon: true,
        title: "Jason Oner",
        avatar: "/static/avatars/user-11.jpg"
      }, {
        icon: true,
        title: "Smith Oner",
        avatar: "/static/avatars/user-7.jpg"
      }, { title: "Travis Howard", avatar: "/static/avatars/user-12.jpg" }, { title: "Ali Connors", avatar: "/static/avatars/user-9.jpg" }, { title: "Cindy Baker", avatar: "/static/avatars/user-8.jpg" }]
    };
  }
});

/***/ }),

/***/ 1995:
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
            { attrs: { heading: _vm.$t("message.list") } },
            [
              _c(
                "v-layout",
                { attrs: { row: "", wrap: "" } },
                [
                  _c(
                    "v-flex",
                    { attrs: { xs12: "", md6: "" } },
                    [
                      _c(
                        "v-card",
                        { staticClass: "elevation-5" },
                        [
                          _c(
                            "v-toolbar",
                            { attrs: { color: "primary", dark: "" } },
                            [
                              _c("v-toolbar-side-icon"),
                              _vm._v(" "),
                              _c("v-card-title", [_vm._v("List 1")])
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "v-list",
                            { attrs: { "two-line": "" } },
                            [
                              _c("v-subheader", [_vm._v("Today")]),
                              _vm._v(" "),
                              _vm._l(_vm.list1, function(item) {
                                return [
                                  _c(
                                    "v-list-tile",
                                    {
                                      key: item.title,
                                      attrs: { avatar: "" },
                                      on: { click: function($event) {} }
                                    },
                                    [
                                      _c("v-list-tile-avatar", [
                                        _c("img", {
                                          attrs: { src: item.avatar }
                                        })
                                      ]),
                                      _vm._v(" "),
                                      _c(
                                        "v-list-tile-content",
                                        [
                                          _c("v-list-tile-title", {
                                            domProps: {
                                              innerHTML: _vm._s(item.title)
                                            }
                                          }),
                                          _vm._v(" "),
                                          _c("v-list-tile-sub-title", {
                                            domProps: {
                                              innerHTML: _vm._s(item.subtitle)
                                            }
                                          })
                                        ],
                                        1
                                      )
                                    ],
                                    1
                                  )
                                ]
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
                    "v-flex",
                    { attrs: { xs12: "", md6: "" } },
                    [
                      _c(
                        "v-card",
                        { staticClass: "elevation-5" },
                        [
                          _c(
                            "v-toolbar",
                            { attrs: { color: "warning", dark: "" } },
                            [
                              _c("v-toolbar-side-icon"),
                              _vm._v(" "),
                              _c("v-card-title", [_vm._v("List 2")]),
                              _vm._v(" "),
                              _c("v-spacer")
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c("v-divider"),
                          _vm._v(" "),
                          _c(
                            "v-list",
                            _vm._l(_vm.list2, function(item) {
                              return _c(
                                "v-list-tile",
                                {
                                  key: item.title,
                                  attrs: { avatar: "" },
                                  on: { click: function($event) {} }
                                },
                                [
                                  _c(
                                    "v-list-tile-action",
                                    [
                                      item.icon
                                        ? _c(
                                            "v-icon",
                                            { attrs: { color: "orange" } },
                                            [_vm._v("star")]
                                          )
                                        : _vm._e()
                                    ],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "v-list-tile-content",
                                    [
                                      _c("v-list-tile-title", {
                                        domProps: {
                                          textContent: _vm._s(item.title)
                                        }
                                      })
                                    ],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c("v-list-tile-avatar", [
                                    _c("img", { attrs: { src: item.avatar } })
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
    require("vue-hot-reload-api")      .rerender("data-v-67d985dc", module.exports)
  }
}

/***/ })

});