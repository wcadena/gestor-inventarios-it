webpackJsonp([11],{

/***/ 153:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2107)
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
Component.options.__file = "resources/js/views/users/UserProfile.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-39b55748", Component.options)
  } else {
    hotAPI.reload("data-v-39b55748", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2107:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_Components_Widgets_UserDetail__ = __webpack_require__(2108);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_Components_Widgets_UserDetail___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_Components_Widgets_UserDetail__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_Components_Widgets_Skills__ = __webpack_require__(2111);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_Components_Widgets_Skills___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_Components_Widgets_Skills__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_Components_Widgets_Education__ = __webpack_require__(2113);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_Components_Widgets_Education___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_Components_Widgets_Education__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_Components_Widgets_ContactRequest__ = __webpack_require__(2115);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_Components_Widgets_ContactRequest___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3_Components_Widgets_ContactRequest__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_Components_Widgets_UserActivity__ = __webpack_require__(2117);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_Components_Widgets_UserActivity___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4_Components_Widgets_UserActivity__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  components: {
    UserDetail: __WEBPACK_IMPORTED_MODULE_0_Components_Widgets_UserDetail___default.a,
    Skills: __WEBPACK_IMPORTED_MODULE_1_Components_Widgets_Skills___default.a,
    Education: __WEBPACK_IMPORTED_MODULE_2_Components_Widgets_Education___default.a,
    ContactRequest: __WEBPACK_IMPORTED_MODULE_3_Components_Widgets_ContactRequest___default.a,
    UserActivity: __WEBPACK_IMPORTED_MODULE_4_Components_Widgets_UserActivity___default.a
  }
});

/***/ }),

/***/ 2108:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2109)
/* template */
var __vue_template__ = __webpack_require__(2110)
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
Component.options.__file = "resources/js/components/Widgets/UserDetail.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-1e988327", Component.options)
  } else {
    hotAPI.reload("data-v-1e988327", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2109:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_Constants_AppConfig__ = __webpack_require__(107);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_vuex__ = __webpack_require__(16);
var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  components: {},
  data: function data() {
    return {
      checkbox: false,
      valid: false,
      email: "admin@admin.com",
      message: '',
      emailRules: [function (v) {
        return !!v || "E-mail is required";
      }, function (v) {
        return (/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) || "E-mail must be valid"
        );
      }],
      password: "admin",
      passwordRules: [function (v) {
        return !!v || "Password is required";
      }],
      appLogo: __WEBPACK_IMPORTED_MODULE_0_Constants_AppConfig__["a" /* default */].appLogo2,
      brand: __WEBPACK_IMPORTED_MODULE_0_Constants_AppConfig__["a" /* default */].brand
    };
  },

  methods: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_1_vuex__["c" /* mapMutations */])({
    add: ['signInUser', 'logoutUser'] // map `this.add()` to `this.$store.commit('increment')`
  }))
});

/***/ }),

/***/ 2110:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "profile-head app-card mb-30" }, [
      _c("div", { staticClass: "profile-top" }, [
        _c("img", {
          attrs: {
            src: "/static/img/profile-banner.jpg",
            alt: "profile banner",
            width: "1920",
            height: "165"
          }
        })
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "profile-bottom border-bottom-light-1" }, [
        _c("div", { staticClass: "user-image text-xs-center mb-3" }, [
          _c("img", {
            staticClass: "img-responsive rounded-circle",
            attrs: { src: "/static/avatars/user-7.jpg", alt: "user images" }
          })
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "user-list-content" }, [
          _c("div", { staticClass: "text-xs-center" }, [
            _c("h3", { staticClass: "fw-bold" }, [_vm._v("Gregory A.")]),
            _vm._v(" "),
            _c("p", [_vm._v("Web Designer & Developer")]),
            _vm._v(" "),
            _c("div", { staticClass: "social-list clearfix mb-4" }, [
              _c("ul", { staticClass: "list-inline d-inline-block" }, [
                _c("li", [
                  _c(
                    "a",
                    {
                      staticClass: "pink--text",
                      attrs: { href: "javascript:void(0);" }
                    },
                    [_c("i", { staticClass: "ti-facebook" })]
                  )
                ]),
                _vm._v(" "),
                _c("li", [
                  _c(
                    "a",
                    {
                      staticClass: "pink--text",
                      attrs: { href: "javascript:void(0);" }
                    },
                    [_c("i", { staticClass: "ti-twitter-alt" })]
                  )
                ]),
                _vm._v(" "),
                _c("li", [
                  _c(
                    "a",
                    {
                      staticClass: "pink--text",
                      attrs: { href: "javascript:void(0);" }
                    },
                    [_c("i", { staticClass: "ti-google" })]
                  )
                ]),
                _vm._v(" "),
                _c("li", [
                  _c(
                    "a",
                    {
                      staticClass: "pink--text",
                      attrs: { href: "javascript:void(0);" }
                    },
                    [_c("i", { staticClass: "ti-linkedin" })]
                  )
                ])
              ])
            ])
          ])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "user-activity text-xs-center" }, [
        _c("ul", { staticClass: "list-inline d-inline-block" }, [
          _c("li", [
            _c("span", { staticClass: "fw-bold" }, [_vm._v("588")]),
            _vm._v(" "),
            _c("span", [_vm._v("Articles")])
          ]),
          _vm._v(" "),
          _c("li", [
            _c("span", { staticClass: "fw-bold" }, [_vm._v("2400")]),
            _vm._v(" "),
            _c("span", [_vm._v("Followers")])
          ]),
          _vm._v(" "),
          _c("li", [
            _c("span", { staticClass: "fw-bold" }, [_vm._v("1200")]),
            _vm._v(" "),
            _c("span", [_vm._v("Following")])
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-1e988327", module.exports)
  }
}

/***/ }),

/***/ 2111:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(2112)
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
Component.options.__file = "resources/js/components/Widgets/Skills.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-9a91f426", Component.options)
  } else {
    hotAPI.reload("data-v-9a91f426", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2112:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("v-card-text", [
    _c("ul", { staticClass: "list-unstyled card-list" }, [
      _c(
        "li",
        [
          _c("p", { staticClass: "fw-bold" }, [_vm._v("HTML")]),
          _vm._v(" "),
          _c("v-progress-linear", {
            attrs: { value: "20", height: "5", color: "white" }
          })
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "li",
        [
          _c("p", { staticClass: "fw-bold" }, [_vm._v("Css3")]),
          _vm._v(" "),
          _c("v-progress-linear", {
            attrs: { value: "90", height: "5", color: "white" }
          })
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "li",
        [
          _c("p", { staticClass: "fw-bold" }, [_vm._v("Photoshop")]),
          _vm._v(" "),
          _c("v-progress-linear", {
            attrs: { value: "30", height: "5", color: "white" }
          })
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "li",
        [
          _c("p", { staticClass: "fw-bold" }, [_vm._v("Javascript")]),
          _vm._v(" "),
          _c("v-progress-linear", {
            attrs: { value: "75", height: "5", color: "white" }
          })
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-9a91f426", module.exports)
  }
}

/***/ }),

/***/ 2113:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(2114)
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
Component.options.__file = "resources/js/components/Widgets/Education.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-dd673566", Component.options)
  } else {
    hotAPI.reload("data-v-dd673566", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2114:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-list",
    { attrs: { "two-line": "" } },
    [
      _c(
        "v-list-tile",
        [
          _c(
            "v-list-tile-content",
            [
              _c("v-list-tile-sub-title", [
                _c("h5", { staticClass: "fw-bold gray--text" }, [
                  _vm._v("Product Designer")
                ]),
                _vm._v(" "),
                _c("span", [_vm._v("AirHelper - London, United Kingdom")])
              ])
            ],
            1
          ),
          _vm._v(" "),
          _c("v-list-tile-action", [
            _c("span", { staticClass: "small" }, [_vm._v("2016 - 2017")])
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "v-list-tile",
        [
          _c(
            "v-list-tile-content",
            [
              _c("v-list-tile-sub-title", [
                _c("h5", { staticClass: "fw-bold gray--text" }, [
                  _vm._v("App Designer")
                ]),
                _vm._v(" "),
                _c("span", [_vm._v("AirHelper - London, United Kingdom")])
              ])
            ],
            1
          ),
          _vm._v(" "),
          _c("v-list-tile-action", [
            _c("span", { staticClass: "small" }, [_vm._v("2017 - 2018")])
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "v-list-tile",
        [
          _c(
            "v-list-tile-content",
            [
              _c("v-list-tile-sub-title", [
                _c("h5", { staticClass: "fw-bold gray--text" }, [
                  _vm._v("Service Designer")
                ]),
                _vm._v(" "),
                _c("span", [_vm._v("AirHelper - London, United Kingdom")])
              ])
            ],
            1
          ),
          _vm._v(" "),
          _c("v-list-tile-action", [
            _c("span", { staticClass: "small" }, [_vm._v("2015 - 2016")])
          ])
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
    require("vue-hot-reload-api")      .rerender("data-v-dd673566", module.exports)
  }
}

/***/ }),

/***/ 2115:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(2116)
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
Component.options.__file = "resources/js/components/Widgets/ContactRequest.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3540767a", Component.options)
  } else {
    hotAPI.reload("data-v-3540767a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2116:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "media pos-relative" },
    [
      _c("img", {
        staticClass: "img-responsive rounded-circle mr-4",
        attrs: {
          src: "/static/avatars/user-12.jpg",
          alt: "user profile",
          width: "95",
          height: "95"
        }
      }),
      _vm._v(" "),
      _c("div", { staticClass: "media-body" }, [
        _c("span", { staticClass: "pink--text" }, [_vm._v("Request")]),
        _vm._v(" "),
        _c("h2", [_vm._v("Andre Hicks")]),
        _vm._v(" "),
        _c("span", [_vm._v("Sr. Develoepr @Oracle")]),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "btn-wrapper" },
          [
            _c("v-btn", { attrs: { color: "success" } }, [_vm._v("Accept")]),
            _vm._v(" "),
            _c("v-btn", { attrs: { color: "error" } }, [_vm._v("Reject")])
          ],
          1
        )
      ]),
      _vm._v(" "),
      _c(
        "v-avatar",
        { staticClass: "overlap", attrs: { color: "warning" } },
        [_c("v-icon", { attrs: { dark: "" } }, [_vm._v("ti-id-badge")])],
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
    require("vue-hot-reload-api")      .rerender("data-v-3540767a", module.exports)
  }
}

/***/ }),

/***/ 2117:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(2118)
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
Component.options.__file = "resources/js/components/Widgets/UserActivity.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5b039765", Component.options)
  } else {
    hotAPI.reload("data-v-5b039765", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2118:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c("div", { staticClass: "pa-3" }, [
        _c("p", { staticClass: "mb-0" }, [_vm._v("Today")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "media-listing" }, [
        _c("ul", { staticClass: "list-unstyled" }, [
          _c("li", { staticClass: "media border-bottom-light-1" }, [
            _c("img", {
              staticClass: "rounded-circle mr-4 img-responsive",
              attrs: {
                src: "/static/avatars/user-7.jpg",
                alt: "user profile",
                width: "60",
                height: "60"
              }
            }),
            _vm._v(" "),
            _c("div", { staticClass: "media-body" }, [
              _c("span", { staticClass: "fw-bold" }, [
                _vm._v("Louise Kate "),
                _c("span", { staticClass: "small" }, [_vm._v("@louisekate")])
              ]),
              _vm._v(" "),
              _c("p", { staticClass: "mb-0" }, [
                _vm._v(
                  "The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental."
                )
              ])
            ])
          ]),
          _vm._v(" "),
          _c("li", { staticClass: "media border-bottom-light-1" }, [
            _c("img", {
              staticClass: "rounded-circle mr-4 img-responsive",
              attrs: {
                src: "/static/avatars/user-8.jpg",
                alt: "user profile",
                width: "60",
                height: "60"
              }
            }),
            _vm._v(" "),
            _c("div", { staticClass: "media-body" }, [
              _c("span", { staticClass: "fw-bold" }, [
                _vm._v("Annie Lee "),
                _c("span", { staticClass: "small" }, [_vm._v("@Annielee")])
              ]),
              _vm._v(" "),
              _c("p", { staticClass: "mb-0" }, [_vm._v("Posted new photo")]),
              _vm._v(" "),
              _c("div", { staticClass: "img-post" }, [
                _c("img", {
                  staticClass: "img-responsive",
                  attrs: { src: "/static/img/profile-post.jpg" }
                })
              ])
            ])
          ]),
          _vm._v(" "),
          _c("li", { staticClass: "media border-bottom-light-1" }, [
            _c("img", {
              staticClass: "rounded-circle mr-4 img-responsive",
              attrs: {
                src: "/static/avatars/user-9.jpg",
                alt: "user profile",
                width: "60",
                height: "60"
              }
            }),
            _vm._v(" "),
            _c("div", { staticClass: "media-body" }, [
              _c("span", { staticClass: "fw-bold mb-3 d-block" }, [
                _vm._v("Mark Anthony "),
                _c("span", { staticClass: "small" }, [_vm._v("@louisekate")])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "card pa-3 primary white--text" }, [
                _c("h3", { staticClass: "mb-0" }, [
                  _vm._v(
                    "The new common language will be more simple and regular than the existing European languages."
                  )
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("li", { staticClass: "media border-bottom-light-1" }, [
            _c("img", {
              staticClass: "rounded-circle mr-4 img-responsive",
              attrs: {
                src: "/static/avatars/user-10.jpg",
                alt: "user profile",
                width: "60",
                height: "60"
              }
            }),
            _vm._v(" "),
            _c("div", { staticClass: "media-body" }, [
              _c("span", { staticClass: "fw-bold" }, [
                _vm._v("Annie Lee "),
                _c("span", { staticClass: "small" }, [_vm._v("@louisekate")])
              ]),
              _vm._v(" "),
              _c("p", [_vm._v("Posted 4 photos")]),
              _vm._v(" "),
              _c("ul", { staticClass: "list-inline row layout wrap" }, [
                _c("li", { staticClass: "flex xs6 sm3 md3 lg3" }, [
                  _c("img", {
                    staticClass: "img-responsive",
                    attrs: {
                      src: "/static/img/gallery1.jpg",
                      width: "200",
                      height: "200",
                      alt: "image post"
                    }
                  })
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "flex xs6 sm3 md3 lg3" }, [
                  _c("img", {
                    staticClass: "img-responsive",
                    attrs: {
                      src: "/static/img/gallery2.jpg",
                      width: "200",
                      height: "200",
                      alt: "image post"
                    }
                  })
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "flex xs6 sm3 md3 lg3" }, [
                  _c("img", {
                    staticClass: "img-responsive",
                    attrs: {
                      src: "/static/img/gallery3.jpg",
                      width: "200",
                      height: "200",
                      alt: "image post"
                    }
                  })
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "flex xs6 sm3 md3 lg3" }, [
                  _c("img", {
                    staticClass: "img-responsive",
                    attrs: {
                      src: "/static/img/gallery4.jpg",
                      width: "200",
                      height: "200",
                      alt: "image post"
                    }
                  })
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("li", { staticClass: "media border-bottom-light-1" }, [
            _c("img", {
              staticClass: "rounded-circle mr-4 img-responsive",
              attrs: {
                src: "/static/avatars/user-11.jpg",
                alt: "user profile",
                width: "60",
                height: "60"
              }
            }),
            _vm._v(" "),
            _c("div", { staticClass: "media-body" }, [
              _c("span", { staticClass: "fw-bold" }, [
                _vm._v("Mark Anthony "),
                _c("span", { staticClass: "small" }, [_vm._v("@louisekate")])
              ]),
              _vm._v(" "),
              _c("p", [_vm._v("Postd a new blog in website")]),
              _vm._v(" "),
              _c("div", { staticClass: "media media-full" }, [
                _c("img", {
                  staticClass: "img-responsive mr-4",
                  attrs: {
                    src: "/static/img/post-2.png",
                    alt: "post image",
                    width: "300",
                    height: "180"
                  }
                }),
                _vm._v(" "),
                _c("div", { staticClass: "media-body" }, [
                  _c("h5", { staticClass: "fw-bold" }, [
                    _vm._v("How to setup your estore in 10 min.")
                  ]),
                  _vm._v(" "),
                  _c("p", [
                    _vm._v(
                      "Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper "
                    )
                  ])
                ])
              ])
            ])
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-5b039765", module.exports)
  }
}

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
      _c(
        "v-container",
        { attrs: { fluid: "", "grid-list-xl": "", "pt-0": "" } },
        [
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "v-flex",
                {
                  staticClass: "col-height-auto",
                  attrs: { xs12: "", md12: "", lg12: "", sm12: "" }
                },
                [
                  _c(
                    "div",
                    [
                      _c("user-detail"),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "profile-body" },
                        [
                          _c(
                            "v-layout",
                            { attrs: { row: "", wrap: "" } },
                            [
                              _c(
                                "v-flex",
                                {
                                  staticClass: "col-height-auto",
                                  attrs: { xs12: "", md5: "", lg4: "" }
                                },
                                [
                                  _c(
                                    "app-card",
                                    { attrs: { customClasses: "mb-30" } },
                                    [_c("contact-request")],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "app-card",
                                    {
                                      attrs: {
                                        heading: "Education",
                                        customClasses: "mb-30",
                                        fullScreen: true,
                                        reloadable: true,
                                        closeable: true,
                                        fullBlock: true
                                      }
                                    },
                                    [_c("education")],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "app-card",
                                    {
                                      attrs: {
                                        heading: "skills",
                                        customClasses:
                                          "warning white--text heading-light mb-30",
                                        fullScreen: true,
                                        reloadable: true,
                                        closeable: true,
                                        fullBlock: true
                                      }
                                    },
                                    [_c("skills")],
                                    1
                                  )
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", md7: "", lg8: "" } },
                                [
                                  _c(
                                    "app-card",
                                    { attrs: { heading: "Activity" } },
                                    [_c("user-activity")],
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
                ]
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
    require("vue-hot-reload-api")      .rerender("data-v-39b55748", module.exports)
  }
}

/***/ })

});