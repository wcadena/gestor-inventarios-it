webpackJsonp([12],{

/***/ 116:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1927)
/* template */
var __vue_template__ = __webpack_require__(1939)
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
Component.options.__file = "resources/js/views/ecommerce/Shop.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-78244dc4", Component.options)
  } else {
    hotAPI.reload("data-v-78244dc4", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1927:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_Components_Shop_ProductItems__ = __webpack_require__(1928);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_Components_Shop_ProductItems___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_Components_Shop_ProductItems__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_Components_Shop_SidebarFilters__ = __webpack_require__(1934);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_Components_Shop_SidebarFilters___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_Components_Shop_SidebarFilters__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    ProductItems: __WEBPACK_IMPORTED_MODULE_0_Components_Shop_ProductItems___default.a,
    SidebarFilters: __WEBPACK_IMPORTED_MODULE_1_Components_Shop_SidebarFilters___default.a
  },
  computed: {
    ecommerceSidebarFilter: {
      get: function get() {
        return this.$store.getters.ecommerceSidebarFilter;
      },
      set: function set(val) {
        this.$store.dispatch("toggleEcommerceSidebarFilter", val);
      }
    }
  }
});

/***/ }),

/***/ 1928:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1929)
/* template */
var __vue_template__ = __webpack_require__(1933)
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
Component.options.__file = "resources/js/components/Shop/ProductItems.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-0047facf", Component.options)
  } else {
    hotAPI.reload("data-v-0047facf", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1929:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__ProductItem__ = __webpack_require__(1930);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__ProductItem___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__ProductItem__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    ProductItem: __WEBPACK_IMPORTED_MODULE_1__ProductItem___default.a
  },
  methods: {
    onPageChange: function onPageChange() {
      window.scrollTo(0, 0);
    },
    toggleEcommerceSidebar: function toggleEcommerceSidebar() {
      this.$store.dispatch("toggleEcommerceSidebarFilter", true);
    }
  }
});

/***/ }),

/***/ 1930:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1931)
/* template */
var __vue_template__ = __webpack_require__(1932)
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
Component.options.__file = "resources/js/components/Shop/ProductItem.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-42487e58", Component.options)
  } else {
    hotAPI.reload("data-v-42487e58", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1931:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_Helpers_helpers__ = __webpack_require__(42);
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
//
//




/* harmony default export */ __webpack_exports__["default"] = ({
  props: ["data"],
  data: function data() {
    return {
      loading: false
    };
  },

  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapGetters */])(["cart"])),
  methods: {
    getCurrentAppLayoutHandler: function getCurrentAppLayoutHandler() {
      return Object(__WEBPACK_IMPORTED_MODULE_1_Helpers_helpers__["a" /* getCurrentAppLayout */])(this.$router);
    },
    textTruncate: function textTruncate(text) {
      return Object(__WEBPACK_IMPORTED_MODULE_1_Helpers_helpers__["c" /* textTruncate */])(text, 100);
    },

    /*
       * Function to add product in cart
      */
    addProductToCart: function addProductToCart(item) {
      var _this = this;

      this.loading = true;
      setTimeout(function () {
        _this.loading = false;
        _this.$store.dispatch("addProductToCart", item);
      }, 2000);
      console.log(item);
    },

    /**
     * Find item exists or not in cart
     */
    ifItemExistInCart: function ifItemExistInCart(result) {
      var exists = false;
      var _iteratorNormalCompletion = true;
      var _didIteratorError = false;
      var _iteratorError = undefined;

      try {
        for (var _iterator = this.cart[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
          var item = _step.value;

          if (item.id == result.objectID) {
            exists = true;
          }
        }
      } catch (err) {
        _didIteratorError = true;
        _iteratorError = err;
      } finally {
        try {
          if (!_iteratorNormalCompletion && _iterator.return) {
            _iterator.return();
          }
        } finally {
          if (_didIteratorError) {
            throw _iteratorError;
          }
        }
      }

      return exists;
    }
  }
});

/***/ }),

/***/ 1932:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "app-card",
    {
      attrs: {
        colClasses: "xl4 lg4 md6 sm6 xs12",
        customClasses: "product-item",
        footer: true
      }
    },
    [
      _c("h5", { staticClass: "mb-2" }, [_vm._v(_vm._s(_vm.data.name))]),
      _vm._v(" "),
      _c("div", { staticClass: "overlay-wrap pos-relative mb-4" }, [
        _c("img", {
          staticClass: "img-responsive",
          attrs: { src: _vm.data.image, height: "220", width: "220" }
        }),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass:
              "overlay-content primary lighten-2 d-custom-flex justify-center align-items-center"
          },
          [
            _vm.ifItemExistInCart(_vm.data)
              ? _c(
                  "v-btn",
                  {
                    staticClass: "ma-0 warning",
                    attrs: {
                      to:
                        "/" +
                        (_vm.getCurrentAppLayoutHandler() + "/ecommerce/cart"),
                      small: ""
                    }
                  },
                  [_vm._v("\n\t\t\t\t\tView Cart\n\t\t\t\t")]
                )
              : _c(
                  "v-btn",
                  {
                    staticClass: "ma-0 light",
                    attrs: {
                      loading: _vm.loading,
                      disabled: _vm.loading,
                      small: ""
                    },
                    on: {
                      click: function($event) {
                        _vm.addProductToCart(_vm.data)
                      }
                    }
                  },
                  [_vm._v("\n\t\t\t\t\tAdd To Cart\n\t\t\t\t")]
                )
          ],
          1
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "product-info" }, [
        _c("span", { staticClass: "error--text fw-semi-bold d-block mb-2" }, [
          _vm._v("$" + _vm._s(_vm.data.price))
        ]),
        _vm._v(" "),
        _c("span", { staticClass: "fs-12 grey--text d-block mb-2" }, [
          _vm._v(_vm._s(_vm.data.category))
        ]),
        _vm._v(" "),
        _c("p", { staticClass: "fs-14 mb-0" }, [
          _vm._v(_vm._s(_vm.textTruncate(_vm.data.description)))
        ])
      ]),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass: "justify-space-between d-custom-flex align-items-center",
          attrs: { slot: "footer" },
          slot: "footer"
        },
        [
          _c(
            "a",
            {
              staticClass: "primary--text fs-14",
              attrs: { href: "javascript:void(0)" }
            },
            [_vm._v("Show details")]
          ),
          _vm._v(" "),
          _c(
            "v-btn",
            { staticClass: "ma-0", attrs: { icon: "" } },
            [
              _c("v-icon", { staticClass: "grey--text" }, [_vm._v("more_vert")])
            ],
            1
          )
        ],
        1
      )
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-42487e58", module.exports)
  }
}

/***/ }),

/***/ 1933:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "shop-content-wrap" },
    [
      _c(
        "div",
        {
          staticClass: "d-custom-flex justify-space-between align-items-center"
        },
        [
          _c("div", { staticClass: "shop-header d-custom-flex" }, [
            _c(
              "div",
              { staticClass: "ham-menu-sm d-none" },
              [
                _c(
                  "v-btn",
                  {
                    staticClass: "mr-3 my-0",
                    attrs: { flat: "", icon: "" },
                    on: { click: _vm.toggleEcommerceSidebar }
                  },
                  [
                    _c("v-icon", { staticClass: "grey--text" }, [
                      _vm._v("menu")
                    ])
                  ],
                  1
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "app-selectbox-sm" },
              [
                _c("ais-sort-by-selector", {
                  attrs: {
                    indices: [
                      { name: "ikea", label: "Default" },
                      { name: "ikea_price_asc", label: "Lowest price" },
                      { name: "ikea_price_desc", label: "Highest price" }
                    ]
                  }
                })
              ],
              1
            )
          ]),
          _vm._v(" "),
          _c("ais-stats")
        ],
        1
      ),
      _vm._v(" "),
      _c("ais-results", {
        staticClass: "layout row wrap mb-4",
        attrs: { "results-per-page": 12 },
        scopedSlots: _vm._u([
          {
            key: "default",
            fn: function(ref) {
              var result = ref.result
              return [_c("product-item", { attrs: { data: result } })]
            }
          }
        ])
      }),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "pagination-wrap" },
        [
          _c("ais-pagination", {
            staticClass: "mb-4",
            attrs: {
              classNames: {
                "ais-pagination": "pagination",
                "ais-pagination__item": "pagination__item",
                "ais-pagination__item--active":
                  "pagination__item--active primary",
                "ais-pagination__item--previous": "pagination__navigation",
                "ais-pagination__item--next": "pagination__navigation",
                "ais-pagination__item--disabled": "disabled"
              }
            },
            on: { "page-change": _vm.onPageChange }
          })
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
    require("vue-hot-reload-api")      .rerender("data-v-0047facf", module.exports)
  }
}

/***/ }),

/***/ 1934:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1935)
/* template */
var __vue_template__ = __webpack_require__(1938)
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
Component.options.__file = "resources/js/components/Shop/SidebarFilters.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-95fb6986", Component.options)
  } else {
    hotAPI.reload("data-v-95fb6986", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1935:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__SearchBox__ = __webpack_require__(1936);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__SearchBox___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__SearchBox__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
		SearchBox: __WEBPACK_IMPORTED_MODULE_0__SearchBox___default.a
	}
});

/***/ }),

/***/ 1936:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(1937)
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
Component.options.__file = "resources/js/components/Shop/SearchBox.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5187b935", Component.options)
  } else {
    hotAPI.reload("data-v-5187b935", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1937:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "ais-search-box",
        [
          _c("ais-input", {
            staticClass: "border input-group pa-2 fs-14",
            attrs: { placeholder: "Search product" }
          })
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
    require("vue-hot-reload-api")      .rerender("data-v-5187b935", module.exports)
  }
}

/***/ }),

/***/ 1938:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "sidebar-filter-wrap" },
    [
      _c(
        "app-card",
        { attrs: { customClasses: "mb-4" } },
        [_c("search-box")],
        1
      ),
      _vm._v(" "),
      _c(
        "app-card",
        { attrs: { customClasses: "mb-4" } },
        [
          _c(
            "ais-refinement-list",
            { attrs: { "attribute-name": "category", limit: 5 } },
            [
              _c("h6", { attrs: { slot: "header" }, slot: "header" }, [
                _vm._v("CATEGORY")
              ])
            ]
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "app-card",
        { attrs: { customClasses: "mb-4" } },
        [
          _c("ais-range-input", { attrs: { "attribute-name": "price" } }, [
            _c("h6", { attrs: { slot: "header" }, slot: "header" }, [
              _vm._v("PRICE")
            ])
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "app-card",
        { attrs: { customClasses: "mb-4" } },
        [
          _c(
            "ais-refinement-list",
            { attrs: { "attribute-name": "materials", limit: 5 } },
            [
              _c("h6", { attrs: { slot: "header" }, slot: "header" }, [
                _vm._v("MATERIAL")
              ])
            ]
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "app-card",
        { attrs: { customClasses: "mb-4" } },
        [
          _c(
            "ais-refinement-list",
            { attrs: { "attribute-name": "colors", limit: 5 } },
            [
              _c("h6", { attrs: { slot: "header" }, slot: "header" }, [
                _vm._v("COLOR")
              ])
            ]
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "app-card",
        { attrs: { customClasses: "mb-4" } },
        [
          _c("ais-rating", { attrs: { "attribute-name": "rating" } }, [
            _c("h6", { attrs: { slot: "header" }, slot: "header" }, [
              _vm._v("RATING")
            ])
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "app-card",
        { attrs: { customClasses: "mb-4" } },
        [
          _c("ais-clear", [
            _c("h5", { staticClass: "mb-0" }, [_vm._v("Clear all filters")])
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
    require("vue-hot-reload-api")      .rerender("data-v-95fb6986", module.exports)
  }
}

/***/ }),

/***/ 1939:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "shop-wrapper" },
    [
      _c("page-title-bar"),
      _vm._v(" "),
      _c(
        "v-container",
        { attrs: { fluid: "", "px-4": "", "py-0": "", "grid-list-xl": "" } },
        [
          _c(
            "ais-index",
            {
              attrs: {
                "app-id": "latency",
                "api-key": "6be0576ff61c053d5f9a3225e2a90f76",
                "index-name": "ikea"
              }
            },
            [
              _c(
                "v-navigation-drawer",
                {
                  attrs: { temporary: "", absolute: "", width: 250 },
                  model: {
                    value: _vm.ecommerceSidebarFilter,
                    callback: function($$v) {
                      _vm.ecommerceSidebarFilter = $$v
                    },
                    expression: "ecommerceSidebarFilter"
                  }
                },
                [_c("sidebar-filters")],
                1
              ),
              _vm._v(" "),
              _c(
                "v-layout",
                { attrs: { row: "", wrap: "" } },
                [
                  _c(
                    "v-flex",
                    {
                      attrs: { xl9: "", lg9: "", md9: "", sm12: "", xs12: "" }
                    },
                    [_c("product-items")],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    {
                      staticClass: "shop-filter",
                      attrs: { xl3: "", lg3: "", md3: "", sm0: "", xs0: "" }
                    },
                    [_c("sidebar-filters")],
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
    require("vue-hot-reload-api")      .rerender("data-v-78244dc4", module.exports)
  }
}

/***/ })

});