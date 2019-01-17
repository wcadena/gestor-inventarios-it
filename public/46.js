webpackJsonp([46],{

/***/ 145:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2085)
/* template */
var __vue_template__ = __webpack_require__(2086)
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
Component.options.__file = "resources/js/views/maps/GoogleMaps.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-56c0e659", Component.options)
  } else {
    hotAPI.reload("data-v-56c0e659", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2085:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  name: "google-maps",
  data: function data() {
    return {
      center: { lat: 30.7, lng: 76.7 },
      markers: {
        position: { lat: 30.7, lng: 76.7 }
      }
    };
  }
});

/***/ }),

/***/ 2086:
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
        { attrs: { fluid: "", "grid-list-xl": "", "pt-0": "" } },
        [
          _c(
            "app-card",
            { attrs: { fullBlock: true } },
            [
              _c(
                "gmap-map",
                {
                  staticStyle: { width: "'100%'", height: "400px" },
                  attrs: { center: _vm.center, zoom: 9 }
                },
                [
                  _c("gmap-marker", {
                    attrs: {
                      position: _vm.markers.position,
                      clickable: true,
                      draggable: false
                    },
                    on: {
                      click: function($event) {
                        _vm.center = _vm.markers.position
                      }
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
    require("vue-hot-reload-api")      .rerender("data-v-56c0e659", module.exports)
  }
}

/***/ })

});