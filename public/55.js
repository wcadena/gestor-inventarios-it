webpackJsonp([55],{

/***/ 118:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1941)
/* template */
var __vue_template__ = __webpack_require__(1942)
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
Component.options.__file = "resources/js/views/ecommerce/Checkout.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6058e5d8", Component.options)
  } else {
    hotAPI.reload("data-v-6058e5d8", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1941:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(16);
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
//
//
//
//
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
      selectCountry: ["United Kingdom"],
      addressCheck: [],
      headers: [{ text: "Product", sortable: false, align: "center" }, { text: "", sortable: false }, { text: "Quantity", sortable: false, align: "center" }, { text: "Total", sortable: false, align: "center" }]
    };
  },

  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapGetters */])(["cart"]), {
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
  })
});

/***/ }),

/***/ 1942:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "checkout-wrap" },
    [
      _c("page-title-bar"),
      _vm._v(" "),
      _c(
        "v-container",
        { attrs: { fluid: "", "pt-0": "" } },
        [
          _c(
            "app-card",
            { attrs: { fullBlock: true } },
            [
              _c(
                "v-layout",
                { attrs: { row: "", wrap: "" } },
                [
                  _c(
                    "v-flex",
                    {
                      staticClass: "col-height-auto",
                      attrs: { xs12: "", sm12: "", xl8: "", lg6: "", md6: "" }
                    },
                    [
                      _c("h2", { staticClass: "px-3 py-4 mb-0" }, [
                        _vm._v(_vm._s(_vm.$t("message.billingDetails")))
                      ]),
                      _vm._v(" "),
                      _c(
                        "div",
                        [
                          _c(
                            "v-layout",
                            { attrs: { row: "", wrap: "" } },
                            [
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm6: "", md6: "" } },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      "prepend-icon": "perm_identity",
                                      label: "First name",
                                      required: ""
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm6: "", md6: "" } },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      "prepend-icon": "perm_identity",
                                      label: "Last name",
                                      required: ""
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
                            "v-layout",
                            { attrs: { row: "", wrap: "" } },
                            [
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm6: "", md6: "" } },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      "prepend-icon": "mail",
                                      label: "Email",
                                      required: ""
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm6: "", md6: "" } },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      "prepend-icon": "phone",
                                      label: "Mobile No",
                                      required: ""
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
                            "v-layout",
                            { attrs: { row: "", wrap: "" } },
                            [
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", md12: "", sm12: "" } },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      "prepend-icon": "home",
                                      label: "Address 1",
                                      required: ""
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", md12: "", sm12: "" } },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      "prepend-icon": "home",
                                      label: "Address 2"
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
                            "v-layout",
                            { attrs: { row: "", wrap: "" } },
                            [
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm4: "", md4: "" } },
                                [
                                  _c("v-autocomplete", {
                                    attrs: {
                                      items: [
                                        "Australia",
                                        "Argentina",
                                        "China",
                                        "India",
                                        "Japan",
                                        "Spain",
                                        "United States",
                                        "United Kingdom",
                                        "Germany"
                                      ],
                                      label: "Country",
                                      "prepend-icon": "public"
                                    },
                                    model: {
                                      value: _vm.selectCountry,
                                      callback: function($$v) {
                                        _vm.selectCountry = $$v
                                      },
                                      expression: "selectCountry"
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm4: "", md4: "" } },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      "prepend-icon": "location_city",
                                      label: "State"
                                    }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-flex",
                                { attrs: { xs12: "", sm4: "", md4: "" } },
                                [
                                  _c("v-text-field", {
                                    attrs: {
                                      "prepend-icon": "domain",
                                      label: "City"
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
                            "v-layout",
                            { attrs: { row: "", wrap: "" } },
                            [
                              _c(
                                "v-flex",
                                {
                                  staticClass: "col-height-auto",
                                  attrs: {
                                    xs12: "",
                                    sm12: "",
                                    md12: "",
                                    xl12: "",
                                    lg12: "",
                                    "mb-4": ""
                                  }
                                },
                                [
                                  _c("v-checkbox", {
                                    attrs: {
                                      label:
                                        "Shipping address is the same as billing address.",
                                      value: ""
                                    },
                                    model: {
                                      value: _vm.addressCheck,
                                      callback: function($$v) {
                                        _vm.addressCheck = $$v
                                      },
                                      expression: "addressCheck"
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c(
                                    "span",
                                    {
                                      staticClass: "error--text fs-12 d-block"
                                    },
                                    [
                                      _vm._v(
                                        "All fields marked with an asterisk (*) are required"
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
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-flex",
                    {
                      attrs: {
                        xs12: "",
                        sm12: "",
                        xl4: "",
                        lg6: "",
                        md6: "",
                        "border-left-1": ""
                      }
                    },
                    [
                      _c(
                        "div",
                        { staticClass: "py-4 px-3" },
                        [
                          _c("v-data-table", {
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
                                          "d-custom-flex align-items-center justify-center product-img"
                                      },
                                      [
                                        _c("img", {
                                          staticClass: "img-responsive",
                                          attrs: {
                                            src: props.item.productImg,
                                            height: "63",
                                            width: "63"
                                          }
                                        })
                                      ]
                                    ),
                                    _vm._v(" "),
                                    _c("td", [_vm._v(_vm._s(props.item.name))]),
                                    _vm._v(" "),
                                    _c("td", { staticClass: "text-center" }, [
                                      _vm._v(_vm._s(props.item.quantity))
                                    ]),
                                    _vm._v(" "),
                                    _c("td", { staticClass: "text-center" }, [
                                      _vm._v("$ " + _vm._s(props.item.total))
                                    ])
                                  ]
                                }
                              }
                            ])
                          }),
                          _vm._v(" "),
                          _c(
                            "div",
                            {
                              staticClass:
                                "d-custom-flex justify-space-between pa-4"
                            },
                            [
                              _c("h4", { staticClass: "mb-0" }, [
                                _vm._v(_vm._s(_vm.$t("message.total")))
                              ]),
                              _vm._v(" "),
                              _c("h4", { staticClass: "mb-0" }, [
                                _vm._v("$ " + _vm._s(_vm.getTotalPrice))
                              ])
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "span",
                            { staticClass: "text-xs-right d-block" },
                            [
                              _c("v-btn", { attrs: { color: "primary" } }, [
                                _vm._v(_vm._s(_vm.$t("message.placeOrder")))
                              ])
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
    require("vue-hot-reload-api")      .rerender("data-v-6058e5d8", module.exports)
  }
}

/***/ })

});