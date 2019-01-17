webpackJsonp([28],{

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

/***/ 150:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2101)
/* template */
var __vue_template__ = __webpack_require__(2102)
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
Component.options.__file = "resources/js/views/pages/Gallery.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-1aa02c10", Component.options)
  } else {
    hotAPI.reload("data-v-1aa02c10", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2101:
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



/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      loader: true,
      gallery: null
    };
  },
  mounted: function mounted() {
    this.getGallery();
  },

  methods: {
    getGallery: function getGallery() {
      var _this = this;

      __WEBPACK_IMPORTED_MODULE_0_Api__["a" /* default */].get("galleryImages.js").then(function (response) {
        _this.loader = false;
        _this.gallery = response.data;
      }).catch(function (error) {
        console.log(error);
      });
    }
  }
});

/***/ }),

/***/ 2102:
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
        { attrs: { fluid: "", "grid-list-xl": "", "pt-0": "" } },
        [
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _vm._l(_vm.gallery, function(item) {
                return [
                  _c(
                    "v-flex",
                    {
                      key: item.id,
                      attrs: { xs12: "", sm6: "", md4: "", lg3: "" }
                    },
                    [
                      _c("figure", { staticClass: "img-wrapper" }, [
                        _c("img", {
                          staticClass: "img-responsive",
                          attrs: { src: item.imageUrl, alt: "gallery image" }
                        }),
                        _vm._v(" "),
                        _c("figcaption", [
                          _c("h4", [_vm._v(_vm._s(item.caption))]),
                          _vm._v(" "),
                          _c("h2", [_vm._v(_vm._s(item.title))])
                        ]),
                        _vm._v(" "),
                        _c("a", { attrs: { href: "javascript:void(0)" } })
                      ])
                    ]
                  )
                ]
              })
            ],
            2
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
    require("vue-hot-reload-api")      .rerender("data-v-1aa02c10", module.exports)
  }
}

/***/ })

});