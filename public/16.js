webpackJsonp([16],{

/***/ 149:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2100)
/* template */
var __vue_template__ = __webpack_require__(2101)
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
Component.options.__file = "resources/js/views/pages/Blog.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3b1ed2ec", Component.options)
  } else {
    hotAPI.reload("data-v-3b1ed2ec", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1513:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1514)
/* template */
var __vue_template__ = __webpack_require__(1515)
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
Component.options.__file = "resources/js/components/Widgets/BlogLayoutOne.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-a8db4102", Component.options)
  } else {
    hotAPI.reload("data-v-a8db4102", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1514:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  props: ["data"]
});

/***/ }),

/***/ 1515:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "blog-widget" }, [
    _c("div", { staticClass: "blog-layout-v1" }, [
      _c("img", {
        staticClass: "img-responsive mb-3",
        attrs: { src: _vm.data.thumbnail }
      }),
      _vm._v(" "),
      _c("div", { staticClass: "app-card-title pa-0 mb-2" }, [
        _c("h5", [_vm._v(_vm._s(_vm.data.title))])
      ]),
      _vm._v(" "),
      _c("span", { staticClass: "grey--text fs-12 mb-2 d-block" }, [
        _vm._v("Last updated: " + _vm._s(_vm.data.date))
      ]),
      _vm._v(" "),
      _c("p", [_vm._v(_vm._s(_vm.data.body))])
    ]),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "d-custom-flex justify-space-between" },
      [
        _c(
          "div",
          [
            _c(
              "v-btn",
              { attrs: { icon: "" } },
              [_c("v-icon", { attrs: { color: "grey" } }, [_vm._v("share")])],
              1
            ),
            _vm._v(" "),
            _c(
              "v-btn",
              { attrs: { icon: "" } },
              [
                _c("v-icon", { attrs: { color: "grey" } }, [_vm._v("favorite")])
              ],
              1
            )
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "v-btn",
          { attrs: { icon: "" } },
          [_c("v-icon", { staticClass: "grey--text" }, [_vm._v("more_horiz")])],
          1
        )
      ],
      1
    )
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-a8db4102", module.exports)
  }
}

/***/ }),

/***/ 2100:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_Components_Widgets_BlogLayoutOne__ = __webpack_require__(1513);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_Components_Widgets_BlogLayoutOne___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_Components_Widgets_BlogLayoutOne__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    BlogLayoutOne: __WEBPACK_IMPORTED_MODULE_0_Components_Widgets_BlogLayoutOne___default.a
  },
  data: function data() {
    return {
      blogs: [{
        id: 1,
        thumbnail: "/static/img/blog-1.jpg",
        title: "lorem ipsum is simply dummy text",
        body: "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
        date: "1-jun-2018"
      }, {
        id: 2,
        thumbnail: "/static/img/blog-2.jpg",
        title: "lorem ipsum is simply dummy text",
        body: "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
        date: "1-jun-2018"
      }, {
        id: 3,
        thumbnail: "/static/img/blog-3.jpg",
        title: "lorem ipsum is simply dummy text",
        body: "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
        date: "1-jun-2018"
      }, {
        id: 4,
        thumbnail: "/static/img/blog-4.jpg",
        title: "lorem ipsum is simply dummy text",
        body: "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
        date: "1-jun-2018"
      }, {
        id: 5,
        thumbnail: "/static/img/blog-5.jpg",
        title: "lorem ipsum is simply dummy text",
        body: "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
        date: "1-jun-2018"
      }, {
        id: 6,
        thumbnail: "/static/img/blog-6.jpg",
        title: "lorem ipsum is simply dummy text",
        body: "Consectetur adipisicing elit. Ullam expedita, necessitatibus sit exercitationem aut quo quos inventore similique nulla minima distinctio illo iste dignissimos vero nostrum, magni pariatur delectus natus.",
        date: "1-jun-2018"
      }],
      populerBlogs: [{
        id: 1,
        title: "7 Things You Need To Know About Consulting Today",
        thumbnail: "/static/img/gallery1.jpg",
        likes: 220,
        comments: 50
      }, {
        id: 2,
        title: "7 Things You Need To Know About Consulting Today",
        thumbnail: "/static/img/gallery2.jpg",
        likes: 200,
        comments: 40
      }, {
        id: 3,
        title: "7 Things You Need To Know About Consulting Today",
        thumbnail: "/static/img/gallery3.jpg",
        likes: 180,
        comments: 20
      }, {
        id: 4,
        title: "7 Things You Need To Know About Consulting Today",
        thumbnail: "/static/img/gallery4.jpg",
        likes: 50,
        comments: 2
      }],
      categories: ["Trending", "Sports", "News", "Travel", "Social", "Adventure"],
      tags: ["Consulting", "Finance", "Ideas", "Market", "Online Service", "Planning", "Tips"]
    };
  }
});

/***/ }),

/***/ 2101:
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
            "div",
            { staticClass: "blog-list" },
            [
              _c(
                "v-layout",
                { attrs: { row: "", wrap: "" } },
                [
                  _c(
                    "v-flex",
                    { attrs: { xl9: "", lg8: "", md8: "", sm8: "", xs12: "" } },
                    [
                      _c(
                        "v-layout",
                        { attrs: { row: "", wrap: "" } },
                        _vm._l(_vm.blogs, function(blog) {
                          return _c(
                            "app-card",
                            {
                              key: blog.id,
                              attrs: { colClasses: "xl6 lg6 md6 sm12 xs12" }
                            },
                            [_c("blog-layout-one", { attrs: { data: blog } })],
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
                    "v-flex",
                    { attrs: { xl3: "", lg4: "", md4: "", sm4: "", xs12: "" } },
                    [
                      _c(
                        "div",
                        { staticClass: "blog-sidebar" },
                        [
                          _c(
                            "app-card",
                            {
                              attrs: {
                                heading: "Categories",
                                customClasses: "mb-4 category-widget",
                                contentCustomClass: "pt-0"
                              }
                            },
                            [
                              _c(
                                "ul",
                                { staticClass: "list-unstyled" },
                                _vm._l(_vm.categories, function(category, key) {
                                  return _c("li", { key: key }, [
                                    _c(
                                      "a",
                                      { attrs: { href: "javascript:void(0)" } },
                                      [_vm._v(_vm._s(category))]
                                    )
                                  ])
                                }),
                                0
                              )
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "app-card",
                            {
                              attrs: {
                                heading: "Tags",
                                customClasses: "mb-4 tags-widget",
                                contentCustomClass: "pt-0"
                              }
                            },
                            [
                              _c(
                                "ul",
                                { staticClass: "list-unstyled" },
                                _vm._l(_vm.tags, function(tag, key) {
                                  return _c("li", { key: key }, [
                                    _c(
                                      "a",
                                      { attrs: { href: "javascript:void(0)" } },
                                      [_vm._v(_vm._s(tag))]
                                    )
                                  ])
                                }),
                                0
                              )
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "app-card",
                            {
                              attrs: {
                                heading: "Popular Blog",
                                customClasses: "mb-4"
                              }
                            },
                            [
                              _c(
                                "ul",
                                { staticClass: "list-unstyled pa-0 ma-0" },
                                _vm._l(_vm.populerBlogs, function(blog) {
                                  return _c(
                                    "li",
                                    {
                                      key: blog.id,
                                      staticClass: "d-custom-flex mb-2"
                                    },
                                    [
                                      _c(
                                        "div",
                                        { staticClass: "blog-thumb mr-4" },
                                        [
                                          _c("img", {
                                            staticClass: "img-responsive",
                                            attrs: {
                                              width: "80",
                                              height: "80",
                                              src: blog.thumbnail
                                            }
                                          })
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "div",
                                        { staticClass: "blog-content" },
                                        [
                                          _c("p", { staticClass: "mb-0" }, [
                                            _c(
                                              "a",
                                              {
                                                staticClass:
                                                  "fs-12 fw-semi-bold",
                                                attrs: {
                                                  href: "javascript:void(0)"
                                                }
                                              },
                                              [_vm._v(_vm._s(blog.title))]
                                            )
                                          ]),
                                          _vm._v(" "),
                                          _c(
                                            "span",
                                            {
                                              staticClass: "grey--text  fs-12"
                                            },
                                            [
                                              _vm._v(
                                                "Likes: " +
                                                  _vm._s(blog.likes) +
                                                  ", Comments: " +
                                                  _vm._s(blog.comments)
                                              )
                                            ]
                                          )
                                        ]
                                      )
                                    ]
                                  )
                                }),
                                0
                              )
                            ]
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
        ]
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
    require("vue-hot-reload-api")      .rerender("data-v-3b1ed2ec", module.exports)
  }
}

/***/ })

});