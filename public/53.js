webpackJsonp([53],{

/***/ 160:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2135)
/* template */
var __vue_template__ = __webpack_require__(2136)
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
Component.options.__file = "resources/js/views/editor/QuillEditor.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-457fda4f", Component.options)
  } else {
    hotAPI.reload("data-v-457fda4f", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2135:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      content: "<h2>I am Example</h2>",
      editorOption: {
        // some quill options
      }
    };
  },
  methods: {
    onEditorBlur: function onEditorBlur(editor) {
      console.log("editor blur!", editor);
    },
    onEditorFocus: function onEditorFocus(editor) {
      console.log("editor focus!", editor);
    },
    onEditorReady: function onEditorReady(editor) {
      console.log("editor ready!", editor);
    },
    onEditorChange: function onEditorChange(_ref) {
      var editor = _ref.editor,
          html = _ref.html,
          text = _ref.text;

      console.log("editor change!", editor, html, text);
      this.content = html;
    }
  },
  computed: {
    editor: function editor() {
      return this.$refs.myQuillEditor.quill;
    }
  }
});

/***/ }),

/***/ 2136:
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
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "app-card",
                {
                  attrs: {
                    heading: _vm.$t("message.quillEditor"),
                    colClasses: "xl12 lg12 md12 sm12 xs12"
                  }
                },
                [
                  _c("quill-editor", {
                    ref: "myQuillEditor",
                    attrs: { options: _vm.editorOption },
                    on: {
                      blur: function($event) {
                        _vm.onEditorBlur($event)
                      },
                      focus: function($event) {
                        _vm.onEditorFocus($event)
                      },
                      ready: function($event) {
                        _vm.onEditorReady($event)
                      }
                    },
                    model: {
                      value: _vm.content,
                      callback: function($$v) {
                        _vm.content = $$v
                      },
                      expression: "content"
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
    require("vue-hot-reload-api")      .rerender("data-v-457fda4f", module.exports)
  }
}

/***/ })

});