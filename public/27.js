webpackJsonp([27],{

/***/ 1417:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_axios__ = __webpack_require__(514);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_axios___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_axios__);


var instance = __WEBPACK_IMPORTED_MODULE_0_axios___default.a.create({
    baseURL: 'http://reactify.theironnetwork.org/data/'
});

instance.defaults.headers.common['Access-Control-Allow-Headers'] = 'X-CSRF-Token';

/* harmony default export */ __webpack_exports__["a"] = (instance);

/***/ }),

/***/ 151:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2104)
/* template */
var __vue_template__ = __webpack_require__(2105)
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
Component.options.__file = "resources/js/views/pages/Pricing-1.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-eb85b1e0", Component.options)
  } else {
    hotAPI.reload("data-v-eb85b1e0", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2104:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_Api__ = __webpack_require__(1417);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      switchPlan: true,
      faqs: null,
      comparePlans: {
        basic: ["Granular access and controls", "Desktop sync", "Mobile access", "Version history", "SSL and at-rest encryption", "Two-factor authentication", "Standard business support", "User management", "25,000 API calls per month"],
        pro: ["Includes all Starter features plus", "Advanced user and security reporting", "Custom branding", "Mobile security controls", "Integrations with EMM providers", "Data Loss Prevention (DLP)", "Standard business support", "50,000 API calls per month", "25,000 API calls per month"],
        advanced: ["Includes all Business features plus", "Unlimited external collaborators", "Full content visibility and management", "Unlimited integrations", "Workflow automations", "Document watermarking", "Device trust (advanced mobile requirements)", "Password policy enforcement", "Metadata and custom templates"]
      }
    };
  },
  mounted: function mounted() {
    this.getFaqs();
  },

  methods: {
    getFaqs: function getFaqs() {
      var _this = this;

      __WEBPACK_IMPORTED_MODULE_0_Api__["a" /* default */].get("faqs.js").then(function (response) {
        _this.loader = false;
        _this.faqs = response.data;
      }).catch(function (error) {
        console.log(error);
      });
    }
  }
});

/***/ }),

/***/ 2105:
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
        { attrs: { "grid-list-xl": "", fluid: "" } },
        [
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "v-flex",
                { attrs: { xl12: "", md12: "", lg12: "", sm12: "", xs12: "" } },
                [
                  _c("div", [
                    _c("div", { staticClass: "pricing-wrapper" }, [
                      _c(
                        "div",
                        { staticClass: "pricing-top mb-70" },
                        [
                          _c(
                            "v-layout",
                            { attrs: { row: "", wrap: "" } },
                            [
                              _c(
                                "v-flex",
                                {
                                  attrs: {
                                    xs12: "",
                                    md9: "",
                                    lg7: "",
                                    "mx-auto": "",
                                    "text-xs-center": "",
                                    "pa-0": ""
                                  }
                                },
                                [
                                  _c("h2", [
                                    _vm._v(
                                      _vm._s(
                                        _vm.$t(
                                          "message.chooseThePlanThatWorksForYou"
                                        )
                                      )
                                    )
                                  ]),
                                  _vm._v(" "),
                                  _c("div", { staticClass: "switcher" }, [
                                    _c("span", { staticClass: "mr-2" }, [
                                      _vm._v(_vm._s(_vm.$t("message.monthly")))
                                    ]),
                                    _vm._v(" "),
                                    _c(
                                      "span",
                                      { staticClass: "switch-wrap" },
                                      [
                                        _c("v-switch", {
                                          attrs: {
                                            "hide-details": "",
                                            color: "success"
                                          },
                                          model: {
                                            value: _vm.switchPlan,
                                            callback: function($$v) {
                                              _vm.switchPlan = $$v
                                            },
                                            expression: "switchPlan"
                                          }
                                        })
                                      ],
                                      1
                                    ),
                                    _vm._v(" "),
                                    _c("span", [
                                      _vm._v(
                                        _vm._s(
                                          _vm.$t("message.yearlyGet2MonthExtra")
                                        )
                                      )
                                    ])
                                  ])
                                ]
                              )
                            ],
                            1
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "pricing-list" },
                        [
                          _c(
                            "v-layout",
                            {
                              attrs: { row: "", wrap: "", "row-eq-height": "" }
                            },
                            [
                              _c(
                                "app-card",
                                {
                                  attrs: {
                                    colClasses: "xs12 sm4 md4 lg4 w-full",
                                    customClasses: "text-xs-center",
                                    fullBlock: true
                                  }
                                },
                                [
                                  _c(
                                    "div",
                                    { staticClass: "pricing-icon mb-30" },
                                    [
                                      _c("img", {
                                        staticClass: "img-responsive",
                                        attrs: {
                                          src: "/static/img/pricing-icon.png",
                                          alt: "pricing icon",
                                          width: "",
                                          height: ""
                                        }
                                      })
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "h2",
                                    {
                                      staticClass: "primary--text pricing-title"
                                    },
                                    [_vm._v(_vm._s(_vm.$t("message.basic")))]
                                  ),
                                  _vm._v(" "),
                                  _c("p", [
                                    _vm._v(
                                      "Secure file sharing and collaboration."
                                    )
                                  ]),
                                  _vm._v(" "),
                                  _c("div", { staticClass: "mb-3" }, [
                                    _c("h2", { staticClass: "amount-title" }, [
                                      _vm._v("Free")
                                    ]),
                                    _vm._v(" "),
                                    _c(
                                      "span",
                                      { staticClass: "text-muted small" },
                                      [_vm._v("For 1 user")]
                                    )
                                  ]),
                                  _vm._v(" "),
                                  _c(
                                    "ul",
                                    {
                                      staticClass: "price-detail list-unstyled"
                                    },
                                    [
                                      _c("li", [
                                        _vm._v("100 GB secure storage")
                                      ]),
                                      _vm._v(" "),
                                      _c("li", [_vm._v("2 GB file upload")]),
                                      _vm._v(" "),
                                      _c("li", [
                                        _vm._v("Minimum 3 users, max 10 users")
                                      ])
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "v-btn",
                                    {
                                      attrs: {
                                        color: "primary",
                                        large: "",
                                        block: ""
                                      }
                                    },
                                    [
                                      _vm._v(
                                        _vm._s(_vm.$t("message.startToBasic"))
                                      )
                                    ]
                                  )
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "app-card",
                                {
                                  attrs: {
                                    colClasses: "xs12 sm4 md4 lg4 w-full",
                                    customClasses: "text-xs-center",
                                    fullBlock: true
                                  }
                                },
                                [
                                  _c(
                                    "div",
                                    { staticClass: "pricing-icon mb-30" },
                                    [
                                      _c("img", {
                                        staticClass: "img-responsive",
                                        attrs: {
                                          src: "/static/img/pricing-icon.png",
                                          alt: "pricing icon",
                                          width: "",
                                          height: ""
                                        }
                                      })
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "h2",
                                    {
                                      staticClass: "warning--text pricing-title"
                                    },
                                    [_vm._v(_vm._s(_vm.$t("message.pro")))]
                                  ),
                                  _vm._v(" "),
                                  _c("p", [
                                    _vm._v("More power & personalization")
                                  ]),
                                  _vm._v(" "),
                                  _c("div", { staticClass: "mb-3" }, [
                                    _c("h2", { staticClass: "amount-title" }, [
                                      _vm._v(
                                        "$" +
                                          _vm._s(_vm.switchPlan ? 30 : 35) +
                                          "\n\t\t\t\t\t\t\t\t\t\t\t"
                                      ),
                                      _c("sub", [_vm._v("/mo")])
                                    ]),
                                    _vm._v(" "),
                                    _c(
                                      "span",
                                      { staticClass: "text-muted small" },
                                      [_vm._v("For 1 user")]
                                    )
                                  ]),
                                  _vm._v(" "),
                                  _c(
                                    "ul",
                                    {
                                      staticClass: "price-detail list-unstyled"
                                    },
                                    [
                                      _c("li", [_vm._v("Unlimited storage")]),
                                      _vm._v(" "),
                                      _c("li", [_vm._v("5 GB file upload")]),
                                      _vm._v(" "),
                                      _c("li", [
                                        _vm._v("Minimum 3 users, no maximum")
                                      ])
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "v-btn",
                                    {
                                      attrs: {
                                        color: "warning",
                                        large: "",
                                        block: ""
                                      }
                                    },
                                    [
                                      _vm._v(
                                        _vm._s(_vm.$t("message.upgradeToPro"))
                                      )
                                    ]
                                  )
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "app-card",
                                {
                                  attrs: {
                                    colClasses: "xs12 sm4 md4 lg4 w-full",
                                    customClasses: "text-xs-center",
                                    fullBlock: true
                                  }
                                },
                                [
                                  _c(
                                    "div",
                                    { staticClass: "pricing-icon mb-30" },
                                    [
                                      _c("img", {
                                        staticClass: "img-responsive",
                                        attrs: {
                                          src: "/static/img/pricing-icon.png",
                                          alt: "pricing icon",
                                          width: "",
                                          height: ""
                                        }
                                      })
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "h2",
                                    {
                                      staticClass: "success--text pricing-title"
                                    },
                                    [_vm._v(_vm._s(_vm.$t("message.advanced")))]
                                  ),
                                  _vm._v(" "),
                                  _c("p", [
                                    _vm._v("Advanced Feature For Brands")
                                  ]),
                                  _vm._v(" "),
                                  _c("div", { staticClass: "mb-3" }, [
                                    _c("h2", { staticClass: "amount-title" }, [
                                      _vm._v(
                                        "$" +
                                          _vm._s(_vm.switchPlan ? 59 : 70) +
                                          "\n\t\t\t\t\t\t\t\t\t\t\t"
                                      ),
                                      _c("sub", [_vm._v("/mo")])
                                    ]),
                                    _vm._v(" "),
                                    _c(
                                      "span",
                                      { staticClass: "text-muted small" },
                                      [_vm._v("For 1 more user")]
                                    )
                                  ]),
                                  _vm._v(" "),
                                  _c(
                                    "ul",
                                    {
                                      staticClass: "price-detail list-unstyled"
                                    },
                                    [
                                      _c("li", [_vm._v("Unlimited storage")]),
                                      _vm._v(" "),
                                      _c("li", [_vm._v("15 GB file upload")]),
                                      _vm._v(" "),
                                      _c("li", [
                                        _vm._v("Minimum 3 users, no maximum")
                                      ])
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "v-btn",
                                    {
                                      attrs: {
                                        color: "success",
                                        large: "",
                                        block: ""
                                      }
                                    },
                                    [
                                      _vm._v(
                                        _vm._s(
                                          _vm.$t("message.upgradeToAdvance")
                                        )
                                      )
                                    ]
                                  )
                                ],
                                1
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "text-xs-center py-5" }, [
                            _c("h2", { staticClass: "mb-0" }, [
                              _vm._v(_vm._s(_vm.$t("message.comparePlans")))
                            ])
                          ]),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "fixed-pricing" },
                            [
                              _c(
                                "v-layout",
                                {
                                  attrs: {
                                    row: "",
                                    wrap: "",
                                    "row-eq-height": ""
                                  }
                                },
                                [
                                  _c(
                                    "v-flex",
                                    {
                                      attrs: {
                                        xs12: "",
                                        sm4: "",
                                        md4: "",
                                        lg4: "",
                                        "pr-0": "",
                                        "w-full": ""
                                      }
                                    },
                                    [
                                      _c(
                                        "div",
                                        { staticClass: "pricing-box" },
                                        [
                                          _c(
                                            "div",
                                            { staticClass: "pricing-head" },
                                            [
                                              _c(
                                                "h2",
                                                {
                                                  staticClass:
                                                    "primary--text pricing-title mb-0"
                                                },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.$t(
                                                        "message.basicFree"
                                                      )
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "div",
                                            { staticClass: "plan-info" },
                                            [
                                              _c("span", [
                                                _vm._v("100 responses / mo")
                                              ])
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "div",
                                            { staticClass: "pricing-body" },
                                            [
                                              _c(
                                                "ul",
                                                {
                                                  staticClass:
                                                    "list-unstyled plan-info-listing"
                                                },
                                                _vm._l(
                                                  _vm.comparePlans.basic,
                                                  function(item, key) {
                                                    return _c(
                                                      "li",
                                                      { key: key },
                                                      [
                                                        _c("i", {
                                                          staticClass:
                                                            "ti-check-box"
                                                        }),
                                                        _vm._v(" "),
                                                        _c(
                                                          "a",
                                                          {
                                                            attrs: {
                                                              href:
                                                                "javascript:void(0);"
                                                            }
                                                          },
                                                          [_vm._v(_vm._s(item))]
                                                        )
                                                      ]
                                                    )
                                                  }
                                                ),
                                                0
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "v-btn",
                                                {
                                                  attrs: {
                                                    color: "primary",
                                                    large: "",
                                                    block: ""
                                                  }
                                                },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.$t(
                                                        "message.startToBasic"
                                                      )
                                                    )
                                                  )
                                                ]
                                              )
                                            ],
                                            1
                                          )
                                        ]
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "v-flex",
                                    {
                                      attrs: {
                                        xs12: "",
                                        sm4: "",
                                        md4: "",
                                        lg4: "",
                                        "px-0": "",
                                        "w-full": ""
                                      }
                                    },
                                    [
                                      _c(
                                        "div",
                                        { staticClass: "pricing-box" },
                                        [
                                          _c(
                                            "div",
                                            { staticClass: "pricing-head" },
                                            [
                                              _c(
                                                "h2",
                                                {
                                                  staticClass:
                                                    "warning--text pricing-title mb-0"
                                                },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.$t("message.pro")
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "div",
                                            { staticClass: "plan-info" },
                                            [
                                              _c("span", [
                                                _vm._v("Unlimited responses")
                                              ])
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "div",
                                            { staticClass: "pricing-body" },
                                            [
                                              _c(
                                                "ul",
                                                {
                                                  staticClass:
                                                    "list-unstyled plan-info-listing"
                                                },
                                                _vm._l(
                                                  _vm.comparePlans.pro,
                                                  function(item, key) {
                                                    return _c(
                                                      "li",
                                                      { key: key },
                                                      [
                                                        _c("i", {
                                                          staticClass:
                                                            "ti-check-box"
                                                        }),
                                                        _vm._v(" "),
                                                        _c(
                                                          "a",
                                                          {
                                                            attrs: {
                                                              href:
                                                                "javascript:void(0);"
                                                            }
                                                          },
                                                          [_vm._v(_vm._s(item))]
                                                        )
                                                      ]
                                                    )
                                                  }
                                                ),
                                                0
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "v-btn",
                                                {
                                                  attrs: {
                                                    color: "warning",
                                                    large: "",
                                                    block: ""
                                                  }
                                                },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.$t(
                                                        "message.upgradeToPro"
                                                      )
                                                    )
                                                  )
                                                ]
                                              )
                                            ],
                                            1
                                          )
                                        ]
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "v-flex",
                                    {
                                      attrs: {
                                        xs12: "",
                                        sm4: "",
                                        md4: "",
                                        lg4: "",
                                        "pl-0": "",
                                        "w-full": ""
                                      }
                                    },
                                    [
                                      _c(
                                        "div",
                                        { staticClass: "pricing-box" },
                                        [
                                          _c(
                                            "div",
                                            { staticClass: "pricing-head" },
                                            [
                                              _c(
                                                "h2",
                                                {
                                                  staticClass:
                                                    "success--text pricing-title mb-0"
                                                },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.$t("message.advanced")
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "div",
                                            { staticClass: "plan-info" },
                                            [
                                              _c("span", [
                                                _vm._v("Unlimited responses")
                                              ])
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "div",
                                            { staticClass: "pricing-body" },
                                            [
                                              _c(
                                                "ul",
                                                {
                                                  staticClass:
                                                    "list-unstyled plan-info-listing"
                                                },
                                                _vm._l(
                                                  _vm.comparePlans.advanced,
                                                  function(item, key) {
                                                    return _c(
                                                      "li",
                                                      { key: key },
                                                      [
                                                        _c("i", {
                                                          staticClass:
                                                            "ti-check-box"
                                                        }),
                                                        _vm._v(" "),
                                                        _c(
                                                          "a",
                                                          {
                                                            attrs: {
                                                              href:
                                                                "javascript:void(0);"
                                                            }
                                                          },
                                                          [_vm._v(_vm._s(item))]
                                                        )
                                                      ]
                                                    )
                                                  }
                                                ),
                                                0
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "v-btn",
                                                {
                                                  attrs: {
                                                    color: "success",
                                                    large: "",
                                                    block: ""
                                                  }
                                                },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.$t(
                                                        "message.upgradeToAdvance"
                                                      )
                                                    )
                                                  )
                                                ]
                                              )
                                            ],
                                            1
                                          )
                                        ]
                                      )
                                    ]
                                  )
                                ],
                                1
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "text-xs-center py-5" }, [
                            _c("h2", { staticClass: "mb-0" }, [
                              _vm._v(
                                _vm._s(
                                  _vm.$t("message.frequentlyAskedQuestions")
                                )
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _vm.faqs
                            ? _c("div", { staticClass: "faq-wrapper" }, [
                                _c(
                                  "div",
                                  { staticClass: "card-columns" },
                                  _vm._l(_vm.faqs, function(faq) {
                                    return _c("v-card", { key: faq.id }, [
                                      _c(
                                        "div",
                                        { staticClass: "card-body pa-3" },
                                        [
                                          _c(
                                            "div",
                                            { staticClass: "card-title" },
                                            [_vm._v(_vm._s(faq.title))]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "div",
                                            { staticClass: "card-text" },
                                            [
                                              _vm._v(
                                                "\n\t\t\t\t\t\t\t\t\t\t\t\t" +
                                                  _vm._s(faq.content) +
                                                  "\n\t\t\t\t\t\t\t\t\t\t\t"
                                              )
                                            ]
                                          )
                                        ]
                                      )
                                    ])
                                  }),
                                  1
                                )
                              ])
                            : _vm._e()
                        ],
                        1
                      )
                    ])
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
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-eb85b1e0", module.exports)
  }
}

/***/ })

});