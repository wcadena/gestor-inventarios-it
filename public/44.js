webpackJsonp([44],{

/***/ 124:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1983)
/* template */
var __vue_template__ = __webpack_require__(1984)
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
Component.options.__file = "resources/js/views/ui-elements/Cards.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5d4478d6", Component.options)
  } else {
    hotAPI.reload("data-v-5d4478d6", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1983:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      show: false
    };
  }
});

/***/ }),

/***/ 1984:
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
                { attrs: { xs12: "", md6: "" } },
                [
                  _c(
                    "v-card",
                    { staticClass: "elevation-5" },
                    [
                      _c("img", {
                        staticClass: "img-responsive",
                        attrs: {
                          src: "/static/img/blog-1.jpg",
                          alt: "Card Image"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-card-title", [
                        _c("h3", { staticClass: "headline primary--text" }, [
                          _vm._v("Blog post layout #1 with image")
                        ]),
                        _vm._v(" "),
                        _c("p", { staticClass: "mb-0" }, [
                          _vm._v(
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultrices tortor non quam feugiat pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquam gravida justo, ut rhoncus tellus malesuada nec. Fusce dignissim velit eget consequat congue...."
                          )
                        ])
                      ]),
                      _vm._v(" "),
                      _c(
                        "v-card-actions",
                        [
                          _c("v-btn", { attrs: { color: "warning" } }, [
                            _vm._v("Share")
                          ]),
                          _vm._v(" "),
                          _c("v-btn", { attrs: { color: "primary" } }, [
                            _vm._v("Explore")
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
              _c("v-flex", { attrs: { xs12: "", md6: "" } }, [
                _c("div", { staticClass: "app-card" }, [
                  _c(
                    "div",
                    { staticClass: "app-card-content" },
                    [
                      _c("div", { staticClass: "blog-thumb mb-3" }, [
                        _c("img", {
                          attrs: {
                            src: "/static/img/post-1.png",
                            alt: "blog-1",
                            width: "100%"
                          }
                        })
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "blog-content mb-3" }, [
                        _c("h4", [
                          _vm._v(
                            "Where Can You Find Unique Myspace Layouts Nowadays"
                          )
                        ]),
                        _vm._v(" "),
                        _c("span", { staticClass: "small" }, [
                          _vm._v("11 Nov 2017 , By: Admin , 5 Comments ")
                        ])
                      ]),
                      _vm._v(" "),
                      _c(
                        "v-card-actions",
                        [
                          _c("v-btn", { attrs: { color: "success" } }, [
                            _vm._v("Share")
                          ]),
                          _vm._v(" "),
                          _c("v-btn", { attrs: { color: "error" } }, [
                            _vm._v("Explore")
                          ])
                        ],
                        1
                      )
                    ],
                    1
                  )
                ])
              ])
            ],
            1
          ),
          _vm._v(" "),
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
                        "v-img",
                        {
                          attrs: {
                            src: "/static/img/blog-2.jpg",
                            alt: "Card Image",
                            height: "410"
                          }
                        },
                        [
                          _c(
                            "v-container",
                            { attrs: { "fill-height": "", fluid: "" } },
                            [
                              _c(
                                "v-layout",
                                { attrs: { "fill-height": "" } },
                                [
                                  _c(
                                    "v-flex",
                                    {
                                      attrs: {
                                        xs12: "",
                                        "text-xs-center": "",
                                        flexbox: "",
                                        "white--text": ""
                                      }
                                    },
                                    [
                                      _c("span", { staticClass: "headline" }, [
                                        _vm._v("Top 10 Australian beaches")
                                      ])
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
                      ),
                      _vm._v(" "),
                      _c("v-card-title", { attrs: { "primary-title": "" } }, [
                        _c("h3", { staticClass: "headline primary--text" }, [
                          _vm._v("Blog post layout #1 with image")
                        ]),
                        _vm._v(" "),
                        _c("p", { staticClass: "mb-0" }, [
                          _vm._v(
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultrices tortor non quam feugiat pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquam gravida justo, ut rhoncus tellus malesuada nec. Fusce dignissim velit eget consequat congue...."
                          )
                        ])
                      ]),
                      _vm._v(" "),
                      _c(
                        "v-card-actions",
                        [
                          _c("v-btn", { attrs: { color: "primary" } }, [
                            _vm._v("Share")
                          ]),
                          _vm._v(" "),
                          _c("v-btn", { attrs: { color: "error" } }, [
                            _vm._v("Explore")
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
                "v-flex",
                { attrs: { xs12: "", md6: "" } },
                [
                  _c(
                    "v-card",
                    { staticClass: "elevation-5" },
                    [
                      _c("img", {
                        staticClass: "img-responsive",
                        attrs: {
                          src: "/static/img/blog-3.jpg",
                          alt: "Card Image"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-card-title", { attrs: { "primary-title": "" } }, [
                        _c("div", [
                          _c("div", { staticClass: "headline" }, [
                            _vm._v("Top western road trips")
                          ]),
                          _vm._v(" "),
                          _c("span", { staticClass: "grey--text" }, [
                            _vm._v("1,000 miles of wonder")
                          ])
                        ])
                      ]),
                      _vm._v(" "),
                      _c(
                        "v-card-actions",
                        [
                          _c("v-btn", { attrs: { color: "secondary" } }, [
                            _vm._v("Share")
                          ]),
                          _vm._v(" "),
                          _c("v-btn", { attrs: { color: "info" } }, [
                            _vm._v("Explore")
                          ]),
                          _vm._v(" "),
                          _c("v-spacer"),
                          _vm._v(" "),
                          _c(
                            "v-btn",
                            {
                              attrs: { icon: "" },
                              nativeOn: {
                                click: function($event) {
                                  _vm.show = !_vm.show
                                }
                              }
                            },
                            [
                              _c("v-icon", [
                                _vm._v(
                                  _vm._s(
                                    _vm.show
                                      ? "keyboard_arrow_down"
                                      : "keyboard_arrow_up"
                                  )
                                )
                              ])
                            ],
                            1
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-slide-y-transition",
                        [
                          _c(
                            "v-card-text",
                            {
                              directives: [
                                {
                                  name: "show",
                                  rawName: "v-show",
                                  value: _vm.show,
                                  expression: "show"
                                }
                              ]
                            },
                            [
                              _vm._v(
                                "\n\t\t\t\t\t\t\tI'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.\n\t\t\t\t\t\t"
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
    require("vue-hot-reload-api")      .rerender("data-v-5d4478d6", module.exports)
  }
}

/***/ })

});