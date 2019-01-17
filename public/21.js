webpackJsonp([21],{

/***/ 1413:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ChartConfig; });
/**
* Change all chart colors
*/
var ChartConfig = {
   color: {
      'primary': '#5D92F4',
      'warning': '#FFB70F',
      'danger': '#FF3739',
      'success': '#00D014',
      'info': '#00D0BD',
      'white': '#fff',
      'lightGrey': '#E8ECEE'
   },
   lineChartAxesColor: '#E9ECEF',
   legendFontColor: '#AAAEB3', // only works on react chart js 2
   chartGridColor: '#EAEAEA',
   axesColor: '#657786',
   shadowColor: 'rgba(0,0,0,0.3)'
};

/***/ }),

/***/ 147:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2096)
/* template */
var __vue_template__ = __webpack_require__(2097)
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
Component.options.__file = "resources/js/views/maps/JvectorMap.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-162ff258", Component.options)
  } else {
    hotAPI.reload("data-v-162ff258", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2096:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery__ = __webpack_require__(35);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_jquery__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_Constants_chart_config__ = __webpack_require__(1413);
//
//
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
  mounted: function mounted() {
    __WEBPACK_IMPORTED_MODULE_0_jquery___default()(function () {
      __WEBPACK_IMPORTED_MODULE_0_jquery___default()("#world-map").vectorMap({
        map: "world_mill_en",
        scaleColors: ["#C8EEFF", "#0071A4"],
        normalizeFunction: "polynomial",
        hoverOpacity: 0.7,
        hoverColor: false,
        markerStyle: {
          initial: {
            fill: __WEBPACK_IMPORTED_MODULE_1_Constants_chart_config__["a" /* ChartConfig */].color.warning,
            stroke: __WEBPACK_IMPORTED_MODULE_1_Constants_chart_config__["a" /* ChartConfig */].color.warning
          }
        },
        regionStyle: {
          initial: {
            fill: __WEBPACK_IMPORTED_MODULE_1_Constants_chart_config__["a" /* ChartConfig */].color.primary
          }
        },
        backgroundColor: __WEBPACK_IMPORTED_MODULE_1_Constants_chart_config__["a" /* ChartConfig */].color.white,
        markers: [{ latLng: [41.9, 12.45], name: "Vatican City" }, { latLng: [43.73, 7.41], name: "Monaco" }, { latLng: [-0.52, 166.93], name: "Nauru" }, { latLng: [-8.51, 179.21], name: "Tuvalu" }, { latLng: [43.93, 12.46], name: "San Marino" }, { latLng: [47.14, 9.52], name: "Liechtenstein" }, { latLng: [7.11, 171.06], name: "Marshall Islands" }, { latLng: [17.3, -62.73], name: "Saint Kitts and Nevis" }, { latLng: [3.2, 73.22], name: "Maldives" }, { latLng: [35.88, 14.5], name: "Malta" }, { latLng: [12.05, -61.75], name: "Grenada" }, { latLng: [13.16, -61.23], name: "Saint Vincent and the Grenadines" }, { latLng: [13.16, -59.55], name: "Barbados" }, { latLng: [17.11, -61.85], name: "Antigua and Barbuda" }, { latLng: [-4.61, 55.45], name: "Seychelles" }, { latLng: [7.35, 134.46], name: "Palau" }, { latLng: [42.5, 1.51], name: "Andorra" }, { latLng: [14.01, -60.98], name: "Saint Lucia" }, { latLng: [6.91, 158.18], name: "Federated States of Micronesia" }, { latLng: [1.3, 103.8], name: "Singapore" }, { latLng: [1.46, 173.03], name: "Kiribati" }, { latLng: [-21.13, -175.2], name: "Tonga" }, { latLng: [15.3, -61.38], name: "Dominica" }, { latLng: [-20.2, 57.5], name: "Mauritius" }, { latLng: [26.02, 50.55], name: "Bahrain" }, { latLng: [0.33, 6.73], name: "São Tomé and Príncipe" }]
      });
    });
  }
});

/***/ }),

/***/ 2097:
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
        { attrs: { fluid: "", "grid-list-xl": "" } },
        [
          _c("app-card", { attrs: { fullBlock: true } }, [
            _c("div", {
              staticStyle: { width: "100%", height: "500px" },
              attrs: { id: "world-map" }
            })
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
    require("vue-hot-reload-api")      .rerender("data-v-162ff258", module.exports)
  }
}

/***/ })

});