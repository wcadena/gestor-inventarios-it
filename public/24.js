webpackJsonp([24],{

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

/***/ 165:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2143)
/* template */
var __vue_template__ = __webpack_require__(2144)
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
Component.options.__file = "resources/js/views/tables/Slots.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-0649fe2c", Component.options)
  } else {
    hotAPI.reload("data-v-0649fe2c", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2143:
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      items: [],
      pagination: {
        sortBy: "name"
      },
      selected: [],
      headers: [{
        text: "Dessert (100g serving)",
        align: "left",
        value: "name"
      }, { text: "Calories", value: "calories" }, { text: "Fat (g)", value: "fat" }, { text: "Carbs (g)", value: "carbs" }, { text: "Protein (g)", value: "protein" }, { text: "Sodium (mg)", value: "sodium" }, { text: "Calcium (%)", value: "calcium" }, { text: "Iron (%)", value: "iron" }]
    };
  },
  mounted: function mounted() {
    this.getTablesData();
  },

  methods: {
    toggleAll: function toggleAll() {
      if (this.selected.length) this.selected = [];else this.selected = this.items.slice();
    },
    changeSort: function changeSort(column) {
      if (this.pagination.sortBy === column) {
        this.pagination.descending = !this.pagination.descending;
      } else {
        this.pagination.sortBy = column;
        this.pagination.descending = false;
      }
    },
    getTablesData: function getTablesData() {
      var _this = this;

      __WEBPACK_IMPORTED_MODULE_0_Api__["a" /* default */].get("vuely/tablesData.js").then(function (response) {
        _this.loader = false;
        _this.items = response.data;
      }).catch(function (error) {
        console.log(error);
      });
    }
  }
});

/***/ }),

/***/ 2144:
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
        { attrs: { fluid: "", "grid-list-xl": "", "py-0": "" } },
        [
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.itemsAndHeaders"),
                    fullBlock: true,
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("v-data-table", {
                    attrs: {
                      headers: _vm.headers,
                      items: _vm.items,
                      "select-all": "",
                      pagination: _vm.pagination,
                      "item-key": "name"
                    },
                    on: {
                      "update:pagination": function($event) {
                        _vm.pagination = $event
                      }
                    },
                    scopedSlots: _vm._u([
                      {
                        key: "headers",
                        fn: function(props) {
                          return [
                            _c(
                              "tr",
                              [
                                _c(
                                  "th",
                                  [
                                    _c("v-checkbox", {
                                      attrs: {
                                        color: "primary",
                                        "hide-details": "",
                                        "input-value": props.all,
                                        indeterminate: props.indeterminate
                                      },
                                      nativeOn: {
                                        click: function($event) {
                                          return _vm.toggleAll($event)
                                        }
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _vm._l(props.headers, function(header) {
                                  return _c(
                                    "th",
                                    {
                                      key: header.text,
                                      class: [
                                        "column sortable",
                                        _vm.pagination.descending
                                          ? "desc"
                                          : "asc",
                                        header.value === _vm.pagination.sortBy
                                          ? "active"
                                          : ""
                                      ],
                                      on: {
                                        click: function($event) {
                                          _vm.changeSort(header.value)
                                        }
                                      }
                                    },
                                    [
                                      _c("v-icon", [_vm._v("arrow_upward")]),
                                      _vm._v(
                                        "\n\t\t\t\t\t\t\t\t" +
                                          _vm._s(header.text) +
                                          "\n\t\t\t\t\t\t\t"
                                      )
                                    ],
                                    1
                                  )
                                })
                              ],
                              2
                            )
                          ]
                        }
                      },
                      {
                        key: "items",
                        fn: function(props) {
                          return [
                            _c(
                              "tr",
                              {
                                attrs: { active: props.selected },
                                on: {
                                  click: function($event) {
                                    props.selected = !props.selected
                                  }
                                }
                              },
                              [
                                _c(
                                  "td",
                                  [
                                    _c("v-checkbox", {
                                      attrs: {
                                        color: "primary",
                                        "hide-details": "",
                                        "input-value": props.selected
                                      }
                                    })
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.name))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.calories))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.fat))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.carbs))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.protein))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.sodium))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.calcium))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.iron))])
                              ]
                            )
                          ]
                        }
                      }
                    ]),
                    model: {
                      value: _vm.selected,
                      callback: function($$v) {
                        _vm.selected = $$v
                      },
                      expression: "selected"
                    }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.headerCell"),
                    fullBlock: true,
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("v-data-table", {
                    attrs: { headers: _vm.headers, items: _vm.items },
                    scopedSlots: _vm._u([
                      {
                        key: "headerCell",
                        fn: function(props) {
                          return [
                            _c("v-tooltip", { attrs: { bottom: "" } }, [
                              _c(
                                "span",
                                {
                                  attrs: { slot: "activator" },
                                  slot: "activator"
                                },
                                [
                                  _vm._v(
                                    "\n\t\t\t\t\t\t\t\t" +
                                      _vm._s(props.header.text) +
                                      "\n\t\t\t\t\t\t\t"
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("span", [
                                _vm._v(
                                  "\n\t\t\t\t\t\t\t\t" +
                                    _vm._s(props.header.text) +
                                    "\n\t\t\t\t\t\t\t"
                                )
                              ])
                            ])
                          ]
                        }
                      },
                      {
                        key: "items",
                        fn: function(props) {
                          return [
                            _c("td", [_vm._v(_vm._s(props.item.name))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(props.item.calories))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(props.item.fat))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(props.item.carbs))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(props.item.protein))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(props.item.sodium))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(props.item.calcium))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(props.item.iron))])
                          ]
                        }
                      }
                    ])
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.expand"),
                    fullBlock: true,
                    customClasses: "mb-30",
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("v-data-table", {
                    attrs: {
                      headers: _vm.headers,
                      items: _vm.items,
                      "hide-actions": "",
                      "item-key": "name"
                    },
                    scopedSlots: _vm._u([
                      {
                        key: "items",
                        fn: function(props) {
                          return [
                            _c(
                              "tr",
                              {
                                on: {
                                  click: function($event) {
                                    props.expanded = !props.expanded
                                  }
                                }
                              },
                              [
                                _c("td", [_vm._v(_vm._s(props.item.name))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.calories))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.fat))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.carbs))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.protein))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.sodium))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.calcium))]),
                                _vm._v(" "),
                                _c("td", [_vm._v(_vm._s(props.item.iron))])
                              ]
                            )
                          ]
                        }
                      },
                      {
                        key: "expand",
                        fn: function(props) {
                          return [
                            _c(
                              "v-card",
                              { attrs: { flat: "" } },
                              [_c("v-card-text", [_vm._v("Peek-a-boo!")])],
                              1
                            )
                          ]
                        }
                      }
                    ])
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
    require("vue-hot-reload-api")      .rerender("data-v-0649fe2c", module.exports)
  }
}

/***/ })

});