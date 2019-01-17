webpackJsonp([56],{

/***/ 117:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1939)
/* template */
var __vue_template__ = __webpack_require__(1940)
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
Component.options.__file = "resources/js/views/ecommerce/Cart.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-e5c66e24", Component.options)
  } else {
    hotAPI.reload("data-v-e5c66e24", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1939:
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      selectDeletedProduct: null,
      loader: false,
      headers: [{
        text: "",
        align: "center",
        sortable: false,
        class: "w-10"
      }, {
        text: "Product",
        value: "product",
        sortable: false,
        class: "w-50"
      }, {
        text: "Quantity",
        value: "quantity",
        sortable: false,
        align: "center",
        class: "w-10"
      }, {
        text: "Price",
        value: "price",
        sortable: false,
        align: "center",
        class: "w-10"
      }, {
        text: "Total",
        value: "total",
        sortable: false,
        align: "center",
        class: "w-10"
      }, {
        text: "Remove",
        sortable: false,
        align: "center",
        class: "w-10"
      }]
    };
  },

  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapGetters */])(["cart"]), {
    /**
     *  to get total price of all the items
     */
    getTotalPrice: function getTotalPrice() {
      var totalPrice = 0;
      if (this.cart.length > 0) {
        var _iteratorNormalCompletion = true;
        var _didIteratorError = false;
        var _iteratorError = undefined;

        try {
          for (var _iterator = this.cart[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
            var item = _step.value;

            totalPrice += item.total;
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

        return totalPrice.toFixed(2);
      } else {
        return totalPrice;
      }
    }
  }),
  methods: {
    getCurrentAppLayoutHandler: function getCurrentAppLayoutHandler() {
      return Object(__WEBPACK_IMPORTED_MODULE_1_Helpers_helpers__["a" /* getCurrentAppLayout */])(this.$router);
    },

    /**
     * show total price of product according to quantity change
     */
    onChangeQuantity: function onChangeQuantity(e, cartItem) {
      this.$store.dispatch("changeQuantityHandler", {
        e: e,
        cartItem: cartItem
      });
    },

    /**
     * open dialog to delete product
     */
    deleteProductFromCart: function deleteProductFromCart(product) {
      this.$refs.deleteConfirmationDialog.openDialog();
      this.selectDeletedProduct = product;
    },

    /**
     * delete product
     */
    onDeleteProductFromCart: function onDeleteProductFromCart() {
      var _this = this;

      this.$refs.deleteConfirmationDialog.close();
      this.loader = true;
      setTimeout(function () {
        _this.loader = false;
        _this.$store.dispatch("onDeleteProductFromCart", _this.selectDeletedProduct);
      }, 1500);
    }
  }
});

/***/ }),

/***/ 1940:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "cart-wrapper" },
    [
      _c("page-title-bar"),
      _vm._v(" "),
      _c(
        "v-container",
        { attrs: { fluid: "", "pt-0": "" } },
        [
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "app-card",
                {
                  attrs: {
                    fullBlock: true,
                    colClasses: "xl12 lg12 md12 sm12 xs12 pa-0"
                  }
                },
                [
                  _c("app-section-loader", { attrs: { status: _vm.loader } }),
                  _vm._v(" "),
                  _c(
                    "v-data-table",
                    {
                      attrs: {
                        headers: _vm.headers,
                        items: _vm.cart,
                        "hide-actions": ""
                      },
                      scopedSlots: _vm._u([
                        {
                          key: "items",
                          fn: function(props) {
                            return [
                              _c(
                                "td",
                                {
                                  staticClass:
                                    "d-custom-flex align-items-center justify-center product-item px-1"
                                },
                                [
                                  _c("img", {
                                    staticClass: "img-responsive",
                                    attrs: {
                                      src: props.item.productImg,
                                      height: "100",
                                      width: "100"
                                    }
                                  })
                                ]
                              ),
                              _vm._v(" "),
                              _c("td", [
                                _c("h6", { staticClass: "mb-0" }, [
                                  _vm._v(_vm._s(props.item.name))
                                ])
                              ]),
                              _vm._v(" "),
                              _c(
                                "td",
                                { staticClass: "text-center count-wrap" },
                                [
                                  _c("input", {
                                    attrs: { type: "number", min: "1" },
                                    domProps: { value: props.item.quantity },
                                    on: {
                                      change: function($event) {
                                        _vm.onChangeQuantity($event, props.item)
                                      }
                                    }
                                  })
                                ]
                              ),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-center" }, [
                                _c(
                                  "span",
                                  { staticClass: "fw-light error--text" },
                                  [_vm._v("$ " + _vm._s(props.item.price))]
                                )
                              ]),
                              _vm._v(" "),
                              _c("td", { staticClass: "text-center" }, [
                                _vm._v("$" + _vm._s(props.item.total))
                              ]),
                              _vm._v(" "),
                              _c(
                                "td",
                                { staticClass: "text-center" },
                                [
                                  _c(
                                    "v-btn",
                                    {
                                      staticClass: "mx-0",
                                      attrs: { icon: "" },
                                      on: {
                                        click: function($event) {
                                          _vm.deleteProductFromCart(props.item)
                                        }
                                      }
                                    },
                                    [
                                      _c(
                                        "v-icon",
                                        { attrs: { color: "grey lighten-1" } },
                                        [_vm._v("close")]
                                      )
                                    ],
                                    1
                                  )
                                ],
                                1
                              )
                            ]
                          }
                        }
                      ])
                    },
                    [
                      _c("template", { slot: "no-data" }, [
                        _c("span", [
                          _vm._v(_vm._s(_vm.$t("message.noItemsFound")))
                        ])
                      ]),
                      _vm._v(" "),
                      _c("template", { slot: "footer" }, [
                        _c(
                          "td",
                          { attrs: { colspan: "2" } },
                          [
                            _c("v-text-field", {
                              attrs: {
                                solo: "",
                                placeholder: "Apply Promo Code"
                              }
                            })
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "td",
                          { staticClass: "text-center" },
                          [
                            _c(
                              "v-btn",
                              {
                                staticClass: "ma-0",
                                attrs: { color: "warning" }
                              },
                              [_vm._v("Apply")]
                            )
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c("td", { staticClass: "text-center" }, [
                          _c("span", { staticClass: "fw-semi-bold" }, [
                            _vm._v(_vm._s(_vm.$t("message.total")))
                          ])
                        ]),
                        _vm._v(" "),
                        _c("td", { staticClass: "text-center" }, [
                          _c("span", { staticClass: "fw-semi-bold" }, [
                            _vm._v("$" + _vm._s(_vm.getTotalPrice))
                          ])
                        ]),
                        _vm._v(" "),
                        _c(
                          "td",
                          [
                            _c(
                              "v-btn",
                              {
                                staticClass: "ma-0",
                                attrs: {
                                  color: "primary",
                                  to:
                                    "/" +
                                    (_vm.getCurrentAppLayoutHandler() +
                                      "/ecommerce/checkout")
                                }
                              },
                              [
                                _vm._v(
                                  "\n                  Checkout\n                "
                                )
                              ]
                            )
                          ],
                          1
                        )
                      ])
                    ],
                    2
                  ),
                  _vm._v(" "),
                  _c("delete-confirmation-dialog", {
                    ref: "deleteConfirmationDialog",
                    attrs: {
                      heading: "Are You Sure You Want To Delete?",
                      message:
                        "Are you sure you want to delete this product permanently?"
                    },
                    on: { onConfirm: _vm.onDeleteProductFromCart }
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
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-e5c66e24", module.exports)
  }
}

/***/ })

});