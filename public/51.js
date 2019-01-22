webpackJsonp([51],{

/***/ 168:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2151)
/* template */
var __vue_template__ = __webpack_require__(2152)
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
Component.options.__file = "resources/js/views/extensions/ImageCropper.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-58cf3684", Component.options)
  } else {
    hotAPI.reload("data-v-58cf3684", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2151:
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      croppaImg: null,
      imgUrl: ''
    };
  },

  methods: {
    generateImage: function generateImage() {
      var url = this.croppaImg.generateDataUrl();
      if (!url) {
        alert('no image');
        return;
      }
      this.imgUrl = url;
    },
    rotate: function rotate() {
      this.croppaImg.rotate();
    },
    flipX: function flipX() {
      this.croppaImg.flipX();
    },
    flipY: function flipY() {
      this.croppaImg.flipY();
    }
  }
});

/***/ }),

/***/ 2152:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "img-cropper-wrap" },
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
                { attrs: { colClasses: "xl12 lg12 md12 sm12 xs12" } },
                [
                  _c(
                    "v-layout",
                    { attrs: { row: "", wrap: "" } },
                    [
                      _c(
                        "app-card",
                        {
                          attrs: {
                            colClasses: "xl6 lg6 md6 sm6 xs12",
                            customClasses: "img-crop"
                          }
                        },
                        [
                          _c(
                            "croppa",
                            {
                              attrs: {
                                "canvas-color": "transparent",
                                placeholder: "Choose an image",
                                accept: "image/*",
                                "show-remove-button": true,
                                "remove-button-color": "red",
                                "initial-position": "center"
                              },
                              model: {
                                value: _vm.croppaImg,
                                callback: function($$v) {
                                  _vm.croppaImg = $$v
                                },
                                expression: "croppaImg"
                              }
                            },
                            [
                              _c("img", {
                                attrs: {
                                  slot: "placeholder",
                                  src: "public/static/img/bg-1.jpg"
                                },
                                slot: "placeholder"
                              })
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "div",
                            {
                              staticClass:
                                "d-custom-flex justify-space-between py-3 format-btn-wrap"
                            },
                            [
                              _c(
                                "v-btn",
                                {
                                  staticClass: "primary",
                                  on: {
                                    click: function($event) {
                                      _vm.rotate()
                                    }
                                  }
                                },
                                [_vm._v("Rotate")]
                              ),
                              _vm._v(" "),
                              _c(
                                "v-btn",
                                {
                                  staticClass: "primary",
                                  on: {
                                    click: function($event) {
                                      _vm.flipX()
                                    }
                                  }
                                },
                                [_vm._v("Flip-X")]
                              ),
                              _vm._v(" "),
                              _c(
                                "v-btn",
                                {
                                  staticClass: "primary",
                                  on: {
                                    click: function($event) {
                                      _vm.flipY()
                                    }
                                  }
                                },
                                [_vm._v("Flip-Y")]
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "v-btn",
                            {
                              staticClass: "v-btn success w-100 ma-0",
                              on: { click: _vm.generateImage }
                            },
                            [_vm._v("Generate")]
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _vm.imgUrl
                        ? _c(
                            "app-card",
                            {
                              attrs: {
                                colClasses: "xl6 lg6 md6 sm6 xs12",
                                customClasses: "img-crop",
                                contentCustomClass:
                                  "d-custom-flex justify-center align-center h-100"
                              }
                            },
                            [
                              _c("img", {
                                staticClass: "img-crop img-responsive",
                                attrs: { height: "300", src: _vm.imgUrl }
                              })
                            ]
                          )
                        : _vm._e()
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
    require("vue-hot-reload-api")      .rerender("data-v-58cf3684", module.exports)
  }
}

/***/ })

});