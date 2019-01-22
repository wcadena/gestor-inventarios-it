webpackJsonp([50],{

/***/ 162:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2139)
/* template */
var __vue_template__ = __webpack_require__(2140)
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
Component.options.__file = "resources/js/views/forms/FormValidation.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5d41615c", Component.options)
  } else {
    hotAPI.reload("data-v-5d41615c", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2139:
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      form1: {
        valid: false,
        name: "",
        nameRules: [function (v) {
          return !!v || "Name is required";
        }, function (v) {
          return v.length <= 10 || "Name must be less than 10 characters";
        }],
        email: "",
        emailRules: [function (v) {
          return !!v || "E-mail is required";
        }, function (v) {
          return (/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) || "E-mail must be valid"
          );
        }]
      },
      form2: {
        valid: true,
        name: "",
        nameRules: [function (v) {
          return !!v || "Name is required";
        }, function (v) {
          return v && v.length <= 10 || "Name must be less than 10 characters";
        }],
        email: "",
        emailRules: [function (v) {
          return !!v || "E-mail is required";
        }, function (v) {
          return (/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) || "E-mail must be valid"
          );
        }],
        select: null,
        items: ["Item 1", "Item 2", "Item 3", "Item 4"],
        checkbox: false
      }
    };
  },


  methods: {
    submit: function submit() {
      if (this.$refs.form.validate()) {
        console.log("form submit");
      }
    },
    clear: function clear() {
      this.$refs.form.reset();
    }
  }
});

/***/ }),

/***/ 2140:
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
        { attrs: { fluid: "", "grid-list-xl": "", "py-0": "" } },
        [
          _c(
            "app-card",
            {
              attrs: {
                heading: _vm.$t("message.basicValidation"),
                customClasses: "mb-30"
              }
            },
            [
              _c(
                "v-form",
                {
                  model: {
                    value: _vm.form1.valid,
                    callback: function($$v) {
                      _vm.$set(_vm.form1, "valid", $$v)
                    },
                    expression: "form1.valid"
                  }
                },
                [
                  _c("v-text-field", {
                    attrs: {
                      label: "Name",
                      rules: _vm.form1.nameRules,
                      counter: 10,
                      required: ""
                    },
                    model: {
                      value: _vm.form1.name,
                      callback: function($$v) {
                        _vm.$set(_vm.form1, "name", $$v)
                      },
                      expression: "form1.name"
                    }
                  }),
                  _vm._v(" "),
                  _c("v-text-field", {
                    attrs: {
                      label: "E-mail",
                      rules: _vm.form1.emailRules,
                      required: ""
                    },
                    model: {
                      value: _vm.form1.email,
                      callback: function($$v) {
                        _vm.$set(_vm.form1, "email", $$v)
                      },
                      expression: "form1.email"
                    }
                  })
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "app-card",
            {
              attrs: {
                heading: _vm.$t("message.validationWithSubmitAndclear"),
                customClasses: "mb-30"
              }
            },
            [
              _c(
                "v-form",
                {
                  ref: "form",
                  attrs: { "lazy-validation": "" },
                  model: {
                    value: _vm.form2.valid,
                    callback: function($$v) {
                      _vm.$set(_vm.form2, "valid", $$v)
                    },
                    expression: "form2.valid"
                  }
                },
                [
                  _c("v-text-field", {
                    attrs: {
                      label: "Name",
                      rules: _vm.form2.nameRules,
                      counter: 10,
                      required: ""
                    },
                    model: {
                      value: _vm.form2.name,
                      callback: function($$v) {
                        _vm.$set(_vm.form2, "name", $$v)
                      },
                      expression: "form2.name"
                    }
                  }),
                  _vm._v(" "),
                  _c("v-text-field", {
                    attrs: {
                      label: "E-mail",
                      rules: _vm.form2.emailRules,
                      required: ""
                    },
                    model: {
                      value: _vm.form2.email,
                      callback: function($$v) {
                        _vm.$set(_vm.form2, "email", $$v)
                      },
                      expression: "form2.email"
                    }
                  }),
                  _vm._v(" "),
                  _c("v-select", {
                    attrs: {
                      label: "Item",
                      items: _vm.form2.items,
                      rules: [
                        function(v) {
                          return !!v || "Item is required"
                        }
                      ],
                      required: ""
                    },
                    model: {
                      value: _vm.form2.select,
                      callback: function($$v) {
                        _vm.$set(_vm.form2, "select", $$v)
                      },
                      expression: "form2.select"
                    }
                  }),
                  _vm._v(" "),
                  _c("v-checkbox", {
                    attrs: {
                      label: "Do you agree?",
                      rules: [
                        function(v) {
                          return !!v || "You must agree to continue!"
                        }
                      ],
                      required: ""
                    },
                    model: {
                      value: _vm.form2.checkbox,
                      callback: function($$v) {
                        _vm.$set(_vm.form2, "checkbox", $$v)
                      },
                      expression: "form2.checkbox"
                    }
                  }),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    {
                      attrs: { disabled: !_vm.form2.valid, color: "success" },
                      on: { click: _vm.submit }
                    },
                    [
                      _vm._v(
                        "\n\t\t\t\t\t" +
                          _vm._s(_vm.$t("message.submit")) +
                          "\n\t\t\t\t"
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    { attrs: { color: "primary" }, on: { click: _vm.clear } },
                    [_vm._v(_vm._s(_vm.$t("message.clear")))]
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
    require("vue-hot-reload-api")      .rerender("data-v-5d41615c", module.exports)
  }
}

/***/ })

});