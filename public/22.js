webpackJsonp([22],{

/***/ 1416:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_axios__ = __webpack_require__(514);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_axios___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_axios__);


var instance = __WEBPACK_IMPORTED_MODULE_0_axios___default.a.create({
    baseURL: ''
});

instance.defaults.headers.common['Access-Control-Allow-Headers'] = 'X-CSRF-Token';

/* harmony default export */ __webpack_exports__["a"] = (instance);

/***/ }),

/***/ 154:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2118)
/* template */
var __vue_template__ = __webpack_require__(2119)
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
Component.options.__file = "resources/js/views/users/UsersList.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-76d159a0", Component.options)
  } else {
    hotAPI.reload("data-v-76d159a0", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2118:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_Api__ = __webpack_require__(1416);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      loader: true,
      usersList: null,
      connectUsersList: null
    };
  },
  mounted: function mounted() {
    this.getUsers();
    this.getConnections();
  },

  methods: {
    getImgSrc: function getImgSrc(connectedUsers) {
      if (this.connectUsersList) {
        for (var i = 0; i < this.connectUsersList.length; i++) {
          var user = this.connectUsersList[i];
          if (connectedUsers === user.id) {
            return user.img;
          }
        }
      }
    },
    getUsers: function getUsers() {
      var _this = this;

      __WEBPACK_IMPORTED_MODULE_0_Api__["a" /* default */].get("vuely/users.js").then(function (response) {
        _this.loader = false;
        _this.usersList = response.data;
      }).catch(function (error) {
        console.log(error);
      });
    },
    getConnections: function getConnections() {
      var _this2 = this;

      __WEBPACK_IMPORTED_MODULE_0_Api__["a" /* default */].get("vuely/connections.js").then(function (response) {
        _this2.connectUsersList = response.data;
      }).catch(function (error) {
        console.log(error);
      });
    }
  }
});

/***/ }),

/***/ 2119:
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
      _c("app-section-loader", { attrs: { status: _vm.loader } }),
      _vm._v(" "),
      _c(
        "v-container",
        { attrs: { fluid: "", "grid-list-xl": "", "pt-0": "" } },
        [
          _vm.usersList !== null
            ? _c(
                "v-layout",
                { attrs: { row: "", wrap: "" } },
                _vm._l(_vm.usersList, function(users, index) {
                  return _c(
                    "app-card",
                    { key: index, attrs: { colClasses: "xs12 sm6 md4" } },
                    [
                      _c(
                        "div",
                        { staticClass: "user-image text-xs-center mb-3" },
                        [
                          _c("img", {
                            staticClass: "img-responsive rounded-circle",
                            attrs: {
                              src: users.profileImage,
                              alt: "user images",
                              width: "95",
                              height: "95"
                            }
                          })
                        ]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "user-list-content" }, [
                        _c("div", { staticClass: "text-xs-center" }, [
                          _c("h3", { staticClass: "fw-bold" }, [
                            _vm._v(_vm._s(users.name))
                          ]),
                          _vm._v(" "),
                          _c("p", [_vm._v(_vm._s(users.technology))]),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "social-list clearfix mb-4" },
                            [
                              _c(
                                "ul",
                                { staticClass: "list-inline d-inline-block" },
                                _vm._l(users.socialLinks, function(
                                  links,
                                  index
                                ) {
                                  return _c("li", { key: index }, [
                                    _c(
                                      "a",
                                      {
                                        staticClass: "text-pink",
                                        attrs: { href: links.url }
                                      },
                                      [_c("i", { class: links.icon })]
                                    )
                                  ])
                                }),
                                0
                              )
                            ]
                          )
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          {
                            staticClass:
                              "layout justify-space-between border-tb-1 pa-2 mb-3"
                          },
                          [
                            _c("div", { staticClass: "align-item-start" }, [
                              _c("span", [
                                _vm._v(_vm._s(_vm.$t("message.connections")))
                              ])
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "align-item-end" }, [
                              _c(
                                "ul",
                                { staticClass: "list-inline" },
                                _vm._l(users.connections, function(
                                  user,
                                  index
                                ) {
                                  return _c(
                                    "li",
                                    { key: index, staticClass: "pa-0" },
                                    [
                                      _c("img", {
                                        staticClass: "rounded-circle",
                                        attrs: {
                                          src: _vm.getImgSrc(user),
                                          alt: "user images",
                                          width: "24",
                                          height: "24"
                                        }
                                      })
                                    ]
                                  )
                                }),
                                0
                              )
                            ])
                          ]
                        ),
                        _vm._v(" "),
                        users.status
                          ? _c(
                              "a",
                              {
                                staticClass:
                                  "v-btn btn-success white--text ma-0",
                                attrs: { href: "javascript:void(0);" },
                                on: {
                                  click: function($event) {
                                    users.status = !users.status
                                  }
                                }
                              },
                              [_vm._v(_vm._s(_vm.$t("message.follow")))]
                            )
                          : _c(
                              "a",
                              {
                                staticClass:
                                  "v-btn btn-danger white--text ma-0",
                                attrs: { href: "javascript:void(0);" },
                                on: {
                                  click: function($event) {
                                    users.status = !users.status
                                  }
                                }
                              },
                              [_vm._v(_vm._s(_vm.$t("message.unfollow")))]
                            )
                      ])
                    ]
                  )
                }),
                1
              )
            : _vm._e()
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
    require("vue-hot-reload-api")      .rerender("data-v-76d159a0", module.exports)
  }
}

/***/ })

});