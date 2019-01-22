webpackJsonp([71],{

/***/ 1406:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(2165)
/* template */
var __vue_template__ = __webpack_require__(2166)
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
Component.options.__file = "resources/js/views/session/LockScreen.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-72920c22", Component.options)
  } else {
    hotAPI.reload("data-v-72920c22", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2165:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      password: "",
      valid: false,
      passwordRules: [function (v) {
        return !!v || "Password is required";
      }]
    };
  },
  methods: {
    onSubmit: function onSubmit(evt) {
      evt.preventDefault();
      var user = JSON.parse(localStorage.getItem('user'));
      console.log(user);
      console.log('A Autenticar!!!');
      var querystring = __webpack_require__(515);
      var formpost = querystring.stringify({
        email: user.email,
        password: this.password
      });
      console.log(formpost);
      console.log('Submit');
      var self = this;
      axios.post('/api/login', formpost, {}).then(function (response) {
        console.log('Submit post');
        user.token = response.data.data.token;
        self.$store.dispatch("signInUser", user);
        //axios.post('/login', formpost, {			}).then(function(response) {					console.log('Authentication!!!!');				}).catch(function(error) {					console.log('Error on Authentication');					self.message = error.response.data.data;				});
        self.$router.push("/default/dashboard/ecommerce");
      }).catch(function (error) {
        console.log('Error on Authentication');
        self.message = error.response.data.data;
      });
    }
  }
});

/***/ }),

/***/ 2166:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "lock-screen-wrapper" },
    [
      _c(
        "v-container",
        { attrs: { "pt-70": "", "px-0": "" } },
        [
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "v-flex",
                { attrs: { xs12: "", sm8: "", md4: "", "mx-auto": "" } },
                [
                  _c(
                    "div",
                    { staticClass: "mb-70" },
                    [
                      _c(
                        "router-link",
                        {
                          staticClass: "d-block text-xs-center",
                          attrs: { to: "/" }
                        },
                        [
                          _c("img", {
                            staticClass: "img-responsive mb-3",
                            attrs: {
                              src: "/static/img/session.png",
                              width: "78",
                              height: "78"
                            }
                          })
                        ]
                      ),
                      _vm._v(" "),
                      _c("p")
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "lock-screen-block text-xs-center" },
                    [
                      _c("div", { staticClass: "s-user mb-4" }, [
                        _c("img", {
                          staticClass: "rounded-circle img-responsive",
                          attrs: {
                            src: "/static/avatars/user-9.jpg",
                            width: "143",
                            height: "143"
                          }
                        })
                      ]),
                      _vm._v(" "),
                      _c("h2", { staticClass: "white--text" }, [
                        _vm._v("Jerry Cummings")
                      ]),
                      _vm._v(" "),
                      _c(
                        "v-form",
                        {
                          staticClass: "mb-4",
                          on: {
                            submit: function($event) {
                              $event.preventDefault()
                              return _vm.onSubmit($event)
                            }
                          },
                          model: {
                            value: _vm.valid,
                            callback: function($$v) {
                              _vm.valid = $$v
                            },
                            expression: "valid"
                          }
                        },
                        [
                          _c("v-text-field", {
                            attrs: {
                              label: "Password",
                              rules: _vm.passwordRules,
                              type: "password",
                              color: "white",
                              required: ""
                            },
                            model: {
                              value: _vm.password,
                              callback: function($$v) {
                                _vm.password = $$v
                              },
                              expression: "password"
                            }
                          })
                        ],
                        1
                      )
                    ],
                    1
                  )
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
    require("vue-hot-reload-api")      .rerender("data-v-72920c22", module.exports)
  }
}

/***/ })

});