webpackJsonp([67],{

/***/ 1402:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(1990)
}
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1992)
/* template */
var __vue_template__ = __webpack_require__(1993)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-a861ed94"
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
Component.options.__file = "resources/js/views/ui-elements/Images.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-a861ed94", Component.options)
  } else {
    hotAPI.reload("data-v-a861ed94", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1990:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(1991);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(4)("04e65617", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-a861ed94\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Images.vue", function() {
     var newContent = require("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-a861ed94\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Images.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 1991:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(3)(false);
// imports


// module
exports.push([module.i, "\n.v-navigation-drawer[data-v-a861ed94] {\n\t-webkit-transition: none;\n\ttransition: none;\n}\n.lightbox[data-v-a861ed94] {\n\t-webkit-box-shadow: 0 0 20px inset rgba(0, 0, 0, 0.2);\n\t        box-shadow: 0 0 20px inset rgba(0, 0, 0, 0.2);\n\tbackground-image: linear-gradient(to top, rgba(0, 0, 0, 0.4) 0%, transparent 72px);\n}\n.bottom-gradient[data-v-a861ed94] {\n\tbackground-image: linear-gradient(to top, rgba(0, 0, 0, 0.4) 0%, transparent 72px);\n}\n.repeating-gradient[data-v-a861ed94] {\n\tbackground-image: repeating-linear-gradient(-45deg,\n\t\trgba(255,0,0,.25),\n\t\trgba(255,0,0,.25) 5px,\n\t\trgba(0,0,255,.25) 5px,\n\t\trgba(0,0,255,.25) 10px\n\t);\n}\n", ""]);

// exports


/***/ }),

/***/ 1992:
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      show: false,
      width: 300,
      items: [{ icon: 'inbox', title: 'Inbox' }, { icon: 'star', title: 'Starred' }, { icon: 'send', title: 'Sent mail' }, { icon: 'drafts', title: 'Drafts' }, { divider: true }, { icon: 'mail', title: 'All mail' }, { icon: 'delete', title: 'Trash' }, { icon: 'error', title: 'Spam' }]
    };
  }
});

/***/ }),

/***/ 1993:
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
        { attrs: { "grid-list-xl": "", "pt-0": "" } },
        [
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.simple"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    _vm._l(3, function(n) {
                      return _c(
                        "v-flex",
                        { key: n, attrs: { xs12: "", sm4: "", "d-flex": "" } },
                        [
                          _c(
                            "v-card",
                            {
                              staticClass: "d-flex",
                              attrs: { flat: "", tile: "" }
                            },
                            [
                              _c(
                                "v-img",
                                {
                                  staticClass: "grey lighten-2 img-responsive",
                                  attrs: {
                                    src: "/static/img/gallery" + n + ".jpg",
                                    "lazy-src":
                                      "/static/img/gallery" + n + ".jpg",
                                    "aspect-ratio": "1"
                                  }
                                },
                                [
                                  _c(
                                    "v-layout",
                                    {
                                      attrs: {
                                        slot: "placeholder",
                                        "fill-height": "",
                                        "align-center": "",
                                        "justify-center": "",
                                        "ma-0": ""
                                      },
                                      slot: "placeholder"
                                    },
                                    [
                                      _c("v-progress-circular", {
                                        attrs: {
                                          indeterminate: "",
                                          color: "grey lighten-5"
                                        }
                                      })
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
                    heading: _vm.$t("message.containAndCover"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("div", { staticClass: "mb-4" }, [
                    _c("p", [
                      _vm._v(
                        "If the provided aspect ratio doesn't match that of the actual image, the default behaviour is to fill as much space as possible, clipping the sides of the image. Enabling the "
                      ),
                      _c("code", [_vm._v("contain")]),
                      _vm._v(
                        " prop will prevent this, but will result in empty space at the sides."
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    [
                      _c("v-flex", { attrs: { xs12: "", sm6: "" } }, [
                        _c("div", { staticClass: "title mb-30" }, [
                          _vm._v("Default (cover)")
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c(
                              "v-card",
                              { staticClass: "mb-30" },
                              [
                                _c("v-card-title", { staticClass: "title" }, [
                                  _vm._v("Matching")
                                ]),
                                _vm._v(" "),
                                _c("v-img", {
                                  attrs: {
                                    src: "/static/img/blog-1.jpg",
                                    "aspect-ratio": "1.7"
                                  }
                                })
                              ],
                              1
                            )
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c(
                              "v-card",
                              { staticClass: "mb-30" },
                              [
                                _c("v-card-title", { staticClass: "title" }, [
                                  _vm._v("Too high")
                                ]),
                                _vm._v(" "),
                                _c("v-img", {
                                  attrs: {
                                    src: "/static/img/blog-1.jpg",
                                    "aspect-ratio": "2"
                                  }
                                })
                              ],
                              1
                            )
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c(
                              "v-card",
                              { staticClass: "mb-30" },
                              [
                                _c("v-card-title", { staticClass: "title" }, [
                                  _vm._v("Too low")
                                ]),
                                _vm._v(" "),
                                _c("v-img", {
                                  attrs: {
                                    src: "/static/img/blog-1.jpg",
                                    "aspect-ratio": "1.4"
                                  }
                                })
                              ],
                              1
                            )
                          ],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c("v-flex", { attrs: { xs12: "", sm6: "" } }, [
                        _c("div", { staticClass: "title mb-30" }, [
                          _vm._v("Contain")
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c(
                              "v-card",
                              { staticClass: "mb-30" },
                              [
                                _c("v-card-title", { staticClass: "title" }, [
                                  _vm._v("Matching")
                                ]),
                                _vm._v(" "),
                                _c("v-img", {
                                  attrs: {
                                    src: "/static/img/blog-1.jpg",
                                    "aspect-ratio": "1.7",
                                    contain: ""
                                  }
                                })
                              ],
                              1
                            )
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c(
                              "v-card",
                              { staticClass: "mb-30" },
                              [
                                _c("v-card-title", { staticClass: "title" }, [
                                  _vm._v("Too high")
                                ]),
                                _vm._v(" "),
                                _c("v-img", {
                                  attrs: {
                                    src: "/static/img/blog-1.jpg",
                                    "aspect-ratio": "2",
                                    contain: ""
                                  }
                                })
                              ],
                              1
                            )
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c(
                              "v-card",
                              { staticClass: "mb-30" },
                              [
                                _c("v-card-title", { staticClass: "title" }, [
                                  _vm._v("Too low")
                                ]),
                                _vm._v(" "),
                                _c("v-img", {
                                  attrs: {
                                    src: "/static/img/blog-1.jpg",
                                    "aspect-ratio": "1.4",
                                    contain: ""
                                  }
                                })
                              ],
                              1
                            )
                          ],
                          1
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
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.height"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("p", [
                    _c("code", [_vm._v("v-img")]),
                    _vm._v(" will automatically grow to the size of its "),
                    _c("code", [_vm._v("src")]),
                    _vm._v(
                      ", preserving the correct aspect ratio. You can limit this with the "
                    ),
                    _c("code", [_vm._v("height")]),
                    _vm._v(" and "),
                    _c("code", [_vm._v("max-height")]),
                    _vm._v(" props.")
                  ]),
                  _vm._v(" "),
                  _c(
                    "v-fade-transition",
                    { attrs: { mode: "out-in" } },
                    [
                      _vm.show
                        ? _c(
                            "v-layout",
                            { key: "0", attrs: { wrap: "" } },
                            [
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm6: "" } },
                                [
                                  _c(
                                    "v-card",
                                    [
                                      _c("v-img", {
                                        staticClass: "grey darken-4",
                                        attrs: {
                                          src: "/static/img/blog-2.jpg",
                                          height: "300"
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c(
                                        "v-card-title",
                                        { staticClass: "title" },
                                        [_vm._v("height")]
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
                                { attrs: { xs12: "", sm6: "" } },
                                [
                                  _c(
                                    "v-card",
                                    [
                                      _c("v-img", {
                                        staticClass: "grey darken-4",
                                        attrs: {
                                          src: "/static/img/blog-2.jpg",
                                          height: "300",
                                          contain: ""
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c(
                                        "v-card-title",
                                        { staticClass: "title" },
                                        [_vm._v("height with contain")]
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
                                { attrs: { xs12: "", sm6: "" } },
                                [
                                  _c(
                                    "v-card",
                                    [
                                      _c("v-img", {
                                        staticClass: "grey darken-4",
                                        attrs: {
                                          src: "/static/img/blog-2.jpg",
                                          "max-height": "300"
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c(
                                        "v-card-title",
                                        { staticClass: "title" },
                                        [_vm._v("max-height")]
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
                                { attrs: { xs12: "", sm6: "" } },
                                [
                                  _c(
                                    "v-card",
                                    [
                                      _c("v-img", {
                                        staticClass: "grey darken-4",
                                        attrs: {
                                          src: "/static/img/blog-2.jpg",
                                          "max-height": "300",
                                          contain: ""
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c(
                                        "v-card-title",
                                        { staticClass: "title" },
                                        [_vm._v("max-height with contain")]
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
                        : _c(
                            "v-layout",
                            { key: "1", attrs: { "justify-center": "" } },
                            [
                              _c(
                                "v-btn",
                                {
                                  attrs: { flat: "" },
                                  on: {
                                    click: function($event) {
                                      _vm.show = true
                                    }
                                  }
                                },
                                [_vm._v("Load images")]
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
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.fixedRatio"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("v-slider", {
                    attrs: { min: "200", max: "500", step: "1" },
                    model: {
                      value: _vm.width,
                      callback: function($$v) {
                        _vm.width = $$v
                      },
                      expression: "width"
                    }
                  }),
                  _vm._v(" "),
                  _c(
                    "v-navigation-drawer",
                    { attrs: { width: _vm.width, value: true, stateless: "" } },
                    [
                      _c(
                        "v-img",
                        {
                          attrs: {
                            "aspect-ratio": 16 / 9,
                            src: "/static/img/blog-6.jpg"
                          }
                        },
                        [
                          _c(
                            "v-layout",
                            {
                              staticClass: "lightbox white--text ma-0",
                              attrs: {
                                "pa-2": "",
                                column: "",
                                "fill-height": ""
                              }
                            },
                            [
                              _c("v-spacer"),
                              _vm._v(" "),
                              _c("v-flex", { attrs: { shrink: "" } }, [
                                _c("div", { staticClass: "subheading" }, [
                                  _vm._v("John Leider")
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "body-1" }, [
                                  _vm._v("heyfromjohn@gmail.com")
                                ])
                              ])
                            ],
                            1
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-list",
                        [
                          _vm._l(_vm.items, function(item, i) {
                            return [
                              item.divider
                                ? _c("v-divider", { key: i })
                                : _c(
                                    "v-list-tile",
                                    {
                                      key: item.title,
                                      on: { click: function($event) {} }
                                    },
                                    [
                                      _c(
                                        "v-list-tile-action",
                                        [
                                          _c("v-icon", [
                                            _vm._v(_vm._s(item.icon))
                                          ])
                                        ],
                                        1
                                      ),
                                      _vm._v(" "),
                                      _c("v-list-tile-title", [
                                        _vm._v(_vm._s(item.title))
                                      ])
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
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.gradients"),
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    [
                      _c(
                        "v-flex",
                        { attrs: { xs12: "", sm4: "" } },
                        [
                          _c("v-img", {
                            attrs: {
                              src:
                                "https://cdn.vuetifyjs.com/images/parallax/material2.jpg",
                              gradient:
                                "to top right, rgba(100,115,201,.33), rgba(25,32,72,.7)"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs12: "", sm4: "" } },
                        [
                          _c(
                            "v-img",
                            {
                              attrs: {
                                src:
                                  "https://cdn.vuetifyjs.com/images/parallax/material2.jpg"
                              }
                            },
                            [
                              _c("div", {
                                staticClass: "fill-height bottom-gradient"
                              })
                            ]
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        { attrs: { xs12: "", sm4: "" } },
                        [
                          _c(
                            "v-img",
                            {
                              attrs: {
                                src:
                                  "https://cdn.vuetifyjs.com/images/parallax/material2.jpg"
                              }
                            },
                            [
                              _c("div", {
                                staticClass: "fill-height repeating-gradient"
                              })
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
    require("vue-hot-reload-api")      .rerender("data-v-a861ed94", module.exports)
  }
}

/***/ })

});