webpackJsonp([54],{

/***/ 119:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1944)
/* template */
var __vue_template__ = __webpack_require__(1945)
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
Component.options.__file = "resources/js/views/ecommerce/CreditCard.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-47c59677", Component.options)
  } else {
    hotAPI.reload("data-v-47c59677", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1944:
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



/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      loader: false,
      valid: true,
      newCardDetails: {
        cvv: "",
        month: "",
        year: "",
        last4Digit: "",
        cardHolderName: ""
      },
      maskCardNumber: "credit-card",
      maskYear: "####",
      maskCvv: "###",
      addNewCardDialog: false,
      selectDeletedCard: null,
      headers: [{ text: "Number", sortable: false }, { text: "Full Name", sortable: false }, { text: "Remove Card", sortable: false }]
    };
  },

  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapGetters */])(["creditCard"])),
  methods: {
    // open dialog to delete card
    deleteCard: function deleteCard(card) {
      this.$refs.deleteConfirmationDialog.openDialog();
      this.selectDeletedCard = card;
    },

    // delete card
    onDeleteCard: function onDeleteCard() {
      var _this = this;

      this.$refs.deleteConfirmationDialog.close();
      this.loader = true;
      setTimeout(function () {
        _this.loader = false;
        _this.$store.dispatch("onDeleteCard", _this.selectDeletedCard);
      }, 1500);
    },

    // to display month in select list
    getMonths: function getMonths() {
      var months = [];
      for (var i = 1; i <= 12; i++) {
        if (i < 10) {
          i = "0" + i;
        }
        months.push(i);
      }
      return months;
    },

    // to display 10 years from current year
    getYear: function getYear() {
      var years = [];
      var currentYear = new Date().getFullYear();
      for (var i = 0; i <= 9; i++) {
        var nextYear = currentYear + i;
        years.push(nextYear);
      }
      return years;
    },


    // to check fields are empty or not
    ifEmptyFields: function ifEmptyFields() {
      var _newCardDetails = this.newCardDetails,
          last4Digit = _newCardDetails.last4Digit,
          cardHolderName = _newCardDetails.cardHolderName,
          month = _newCardDetails.month,
          year = _newCardDetails.year,
          cvv = _newCardDetails.cvv;

      if (last4Digit !== "" && last4Digit.length == 16 && cardHolderName !== "" && month !== "" && year !== "" && cvv !== "") {
        return false;
      }
      return true;
    },

    // to add new card
    addNewCard: function addNewCard() {
      this.addNewCardDialog = false;
      this.$store.dispatch("addNewCard", this.newCardDetails);
      this.newCardDetails = {
        cvv: "",
        month: "",
        year: "",
        last4Digit: "",
        cardHolderName: ""
      };
    }
  }
});

/***/ }),

/***/ 1945:
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
        { attrs: { fluid: "", "pt-0": "" } },
        [
          _c(
            "v-card",
            [
              _c(
                "v-card-actions",
                [
                  _c(
                    "v-btn",
                    {
                      attrs: { color: "primary" },
                      on: {
                        click: function($event) {
                          _vm.addNewCardDialog = true
                        }
                      }
                    },
                    [
                      _vm._v(
                        "\n          " +
                          _vm._s(_vm.$t("message.addNewCard")) +
                          "\n        "
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c("app-section-loader", { attrs: { status: _vm.loader } }),
              _vm._v(" "),
              _c(
                "v-card-text",
                [
                  _c("v-data-table", {
                    staticClass: "elevation-1",
                    attrs: {
                      headers: _vm.headers,
                      items: _vm.creditCard,
                      "hide-actions": ""
                    },
                    scopedSlots: _vm._u([
                      {
                        key: "items",
                        fn: function(props) {
                          return [
                            _c("td", [
                              _vm._v(_vm._s(props.item.last4Digit) + " ")
                            ]),
                            _vm._v(" "),
                            _c("td", [
                              _vm._v(_vm._s(props.item.cardHolderName))
                            ]),
                            _vm._v(" "),
                            _c(
                              "td",
                              [
                                _c(
                                  "v-btn",
                                  {
                                    staticClass: "mx-0",
                                    attrs: { icon: "" },
                                    on: {
                                      click: function($event) {
                                        _vm.deleteCard(props.item)
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
                  }),
                  _vm._v(" "),
                  _c("delete-confirmation-dialog", {
                    ref: "deleteConfirmationDialog",
                    attrs: {
                      heading: "Are You Sure You Want To Delete?",
                      message:
                        "Are you sure you want to delete this card permanently?"
                    },
                    on: { onConfirm: _vm.onDeleteCard }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "v-dialog",
            {
              attrs: { "max-width": "500" },
              model: {
                value: _vm.addNewCardDialog,
                callback: function($$v) {
                  _vm.addNewCardDialog = $$v
                },
                expression: "addNewCardDialog"
              }
            },
            [
              _c(
                "v-card",
                [
                  _c("v-card-title", [
                    _c("span", { staticClass: "headline" }, [
                      _vm._v(_vm._s(_vm.$t("message.addNewCard")))
                    ])
                  ]),
                  _vm._v(" "),
                  _c("v-card-text", [
                    _c(
                      "span",
                      { staticClass: "d-flex" },
                      [
                        _c("v-text-field", {
                          attrs: {
                            name: "cardNumber",
                            mask: _vm.maskCardNumber,
                            required: "",
                            placeholder: "#### - #### - #### - ####",
                            label: "Card Number"
                          },
                          model: {
                            value: _vm.newCardDetails.last4Digit,
                            callback: function($$v) {
                              _vm.$set(_vm.newCardDetails, "last4Digit", $$v)
                            },
                            expression: "newCardDetails.last4Digit"
                          }
                        })
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "span",
                      { staticClass: "d-flex" },
                      [
                        _c("v-text-field", {
                          attrs: {
                            name: "cardHolderName",
                            required: "",
                            label: "Name"
                          },
                          model: {
                            value: _vm.newCardDetails.cardHolderName,
                            callback: function($$v) {
                              _vm.$set(
                                _vm.newCardDetails,
                                "cardHolderName",
                                $$v
                              )
                            },
                            expression: "newCardDetails.cardHolderName"
                          }
                        })
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "d-flex" },
                      [
                        _c(
                          "v-flex",
                          {
                            attrs: { xs12: "", sm12: "", md4: "", "mr-4": "" }
                          },
                          [
                            _c("v-autocomplete", {
                              attrs: {
                                name: "months",
                                items: _vm.getMonths(),
                                label: "Expiry Month",
                                required: ""
                              },
                              model: {
                                value: _vm.newCardDetails.month,
                                callback: function($$v) {
                                  _vm.$set(_vm.newCardDetails, "month", $$v)
                                },
                                expression: "newCardDetails.month"
                              }
                            })
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "v-flex",
                          {
                            attrs: {
                              xs12: "",
                              sm12: "",
                              md4: "",
                              lg4: "",
                              "mr-4": ""
                            }
                          },
                          [
                            _c("v-autocomplete", {
                              attrs: {
                                name: "year",
                                items: _vm.getYear(),
                                label: "Expiry Year",
                                required: "",
                                autocomplete: ""
                              },
                              model: {
                                value: _vm.newCardDetails.year,
                                callback: function($$v) {
                                  _vm.$set(_vm.newCardDetails, "year", $$v)
                                },
                                expression: "newCardDetails.year"
                              }
                            })
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "v-flex",
                          { attrs: { xs12: "", sm12: "", md4: "", ";g4": "" } },
                          [
                            _c("v-text-field", {
                              attrs: {
                                name: "cvv",
                                mask: _vm.maskCvv,
                                required: "",
                                label: "CVV"
                              },
                              model: {
                                value: _vm.newCardDetails.cvv,
                                callback: function($$v) {
                                  _vm.$set(_vm.newCardDetails, "cvv", $$v)
                                },
                                expression: "newCardDetails.cvv"
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
                  _c(
                    "v-card-actions",
                    [
                      _c("v-spacer"),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          attrs: { color: "primary" },
                          on: {
                            click: function($event) {
                              _vm.addNewCardDialog = false
                            }
                          }
                        },
                        [_vm._v("Cancel")]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          attrs: {
                            color: "error",
                            disabled: _vm.ifEmptyFields()
                          },
                          on: { click: _vm.addNewCard }
                        },
                        [_vm._v("Submit")]
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
    require("vue-hot-reload-api")      .rerender("data-v-47c59677", module.exports)
  }
}

/***/ })

});