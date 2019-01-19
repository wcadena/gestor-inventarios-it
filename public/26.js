webpackJsonp([26],{

/***/ 1416:
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

/***/ 167:
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
Component.options.__file = "resources/js/views/tables/SearchWithText.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-a60ce814", Component.options)
  } else {
    hotAPI.reload("data-v-a60ce814", Component.options)
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
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__api__ = __webpack_require__(1416);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      max25chars: function max25chars(v) {
        return v.length <= 25 || "Input too long!";
      },
      tmp: "",
      search: "",
      pagination: {},
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

      __WEBPACK_IMPORTED_MODULE_0__api__["a" /* default */].get("vuely/tablesData.js").then(function (response) {
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
                    heading: _vm.$t("message.searchRow"),
                    fullBlock: true,
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c(
                    "v-card-title",
                    [
                      _vm._v("Nutrition\n\t\t\t\t\t\t"),
                      _c("v-spacer"),
                      _vm._v(" "),
                      _c("v-text-field", {
                        attrs: {
                          "append-icon": "search",
                          label: "Search",
                          "single-line": "",
                          "hide-details": ""
                        },
                        model: {
                          value: _vm.search,
                          callback: function($$v) {
                            _vm.search = $$v
                          },
                          expression: "search"
                        }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c("v-data-table", {
                    attrs: {
                      headers: _vm.headers,
                      items: _vm.items,
                      search: _vm.search
                    },
                    scopedSlots: _vm._u([
                      {
                        key: "items",
                        fn: function(props) {
                          return [
                            _c(
                              "td",
                              [
                                _c(
                                  "v-edit-dialog",
                                  { attrs: { lazy: "" } },
                                  [
                                    _vm._v(
                                      "\n\t\t\t\t\t\t\t\t\t" +
                                        _vm._s(props.item.name) +
                                        "\n\t\t\t\t\t\t\t\t\t"
                                    ),
                                    _c("v-text-field", {
                                      attrs: {
                                        slot: "input",
                                        label: "Edit",
                                        "single-line": "",
                                        counter: "",
                                        rules: [_vm.max25chars]
                                      },
                                      slot: "input",
                                      model: {
                                        value: props.item.name,
                                        callback: function($$v) {
                                          _vm.$set(props.item, "name", $$v)
                                        },
                                        expression: "props.item.name"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ],
                              1
                            ),
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
                            _c(
                              "td",
                              [
                                _c(
                                  "v-edit-dialog",
                                  {
                                    attrs: { large: "", lazy: "" },
                                    on: {
                                      open: function($event) {
                                        _vm.tmp = props.item.iron
                                      },
                                      save: function($event) {
                                        props.item.iron =
                                          _vm.tmp || props.item.iron
                                      }
                                    }
                                  },
                                  [
                                    _c("div", [
                                      _vm._v(_vm._s(props.item.iron))
                                    ]),
                                    _vm._v(" "),
                                    _c(
                                      "div",
                                      {
                                        staticClass: "mt-3 title",
                                        attrs: { slot: "input" },
                                        slot: "input"
                                      },
                                      [_vm._v("Update Iron")]
                                    ),
                                    _vm._v(" "),
                                    _c("v-text-field", {
                                      attrs: {
                                        slot: "input",
                                        label: "Edit",
                                        "single-line": "",
                                        counter: "",
                                        autofocus: "",
                                        rules: [_vm.max25chars]
                                      },
                                      slot: "input",
                                      model: {
                                        value: _vm.tmp,
                                        callback: function($$v) {
                                          _vm.tmp = $$v
                                        },
                                        expression: "tmp"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ],
                              1
                            )
                          ]
                        }
                      },
                      {
                        key: "pageText",
                        fn: function(ref) {
                          var pageStart = ref.pageStart
                          var pageStop = ref.pageStop
                          return [
                            _vm._v(
                              "\n\t\t\t\t\t\t\tFrom " +
                                _vm._s(pageStart) +
                                " to " +
                                _vm._s(pageStop) +
                                "\n\t\t\t\t\t\t"
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
    require("vue-hot-reload-api")      .rerender("data-v-a60ce814", module.exports)
  }
}

/***/ })

});