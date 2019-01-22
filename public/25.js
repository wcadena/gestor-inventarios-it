webpackJsonp([25],{

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

/***/ 166:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2147)
/* template */
var __vue_template__ = __webpack_require__(2148)
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
Component.options.__file = "resources/js/views/tables/SelectableRows.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-174dc06a", Component.options)
  } else {
    hotAPI.reload("data-v-174dc06a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2147:
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



/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      loader: true,
      search: "",
      selected: [],
      headers: [{
        text: "Dessert (100g serving)",
        align: "left",
        sortable: false,
        value: "name"
      }, { text: "Calories", value: "calories" }, { text: "Fat (g)", value: "fat" }, { text: "Carbs (g)", value: "carbs" }, { text: "Protein (g)", value: "protein" }, { text: "Sodium (mg)", value: "sodium" }, { text: "Calcium (%)", value: "calcium" }, { text: "Iron (%)", value: "iron" }],
      items: []
    };
  },
  mounted: function mounted() {
    this.getTablesData();
  },

  methods: {
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

/***/ 2148:
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
                    heading: _vm.$t("message.selectableRows"),
                    fullBlock: true,
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("v-data-table", {
                    attrs: {
                      headers: _vm.headers,
                      items: _vm.items,
                      search: _vm.search,
                      "item-key": "name",
                      "select-all": ""
                    },
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
                                    "\n\t\t\t\t\t\t\t" +
                                      _vm._s(props.header.text) +
                                      "\n\t\t\t\t\t\t"
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c("span", [
                                _vm._v(
                                  "\n\t\t\t\t\t\t\t" +
                                    _vm._s(props.header.text) +
                                    "\n\t\t\t\t\t\t"
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
                            _c(
                              "td",
                              [
                                _c("v-checkbox", {
                                  attrs: {
                                    color: "primary",
                                    "hide-details": ""
                                  },
                                  model: {
                                    value: props.selected,
                                    callback: function($$v) {
                                      _vm.$set(props, "selected", $$v)
                                    },
                                    expression: "props.selected"
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
    require("vue-hot-reload-api")      .rerender("data-v-174dc06a", module.exports)
  }
}

/***/ })

});