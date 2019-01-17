webpackJsonp([13],{

/***/ 121:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1964)
/* template */
var __vue_template__ = __webpack_require__(1975)
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
Component.options.__file = "resources/js/views/chat/Chat.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-15a40340", Component.options)
  } else {
    hotAPI.reload("data-v-15a40340", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1964:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__components_ChatArea__ = __webpack_require__(1965);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__components_ChatArea___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__components_ChatArea__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__components_ChatSidebar__ = __webpack_require__(1970);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__components_ChatSidebar___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__components_ChatSidebar__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__components_ChatModuleLoader__ = __webpack_require__(1973);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__components_ChatModuleLoader___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3__components_ChatModuleLoader__);
var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  beforeMount: function beforeMount() {
    this.$store.dispatch("getUsers");
  },
  mounted: function mounted() {
    document.querySelector("html").style.overflow = "hidden";
    var defaultLayout = document.querySelector(".app-default-layout .v-content__wrap");
    var miniLayout = document.querySelector(".app-mini-layout .v-content__wrap");
    var boxLayout = document.querySelector(".app-boxed-layout .app-content");
    if (defaultLayout) {
      defaultLayout.style.overflow = "hidden";
    } else if (miniLayout) {
      miniLayout.style.overflow = "hidden";
    } else if (boxLayout) {
      boxLayout.style.overflow = "hidden";
    } else {
      document.querySelector(".app-horizontal-layout .v-content__wrap").style.overflow = "hidden";
    }
  },
  destroyed: function destroyed() {
    document.querySelector("html").style.overflow = "hidden";
    var defaultLayout = document.querySelector(".app-default-layout .v-content__wrap");
    var miniLayout = document.querySelector(".app-mini-layout .v-content__wrap");
    var boxLayout = document.querySelector(".app-boxed-layout .app-content");
    var horizontallayout = document.querySelector(".app-horizontal-layout .v-content__wrap");
    if (defaultLayout) {
      defaultLayout.style.overflow = "auto";
    }
    if (miniLayout) {
      miniLayout.style.overflow = "auto";
    }
    if (boxLayout) {
      boxLayout.style.overflow = "auto";
    }
    if (horizontallayout) {
      horizontallayout.style.overflow = "auto";
    }
  },

  components: {
    ChatArea: __WEBPACK_IMPORTED_MODULE_1__components_ChatArea___default.a,
    ChatSidebar: __WEBPACK_IMPORTED_MODULE_2__components_ChatSidebar___default.a,
    ChatModuleLoader: __WEBPACK_IMPORTED_MODULE_3__components_ChatModuleLoader___default.a
  },
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapGetters */])(["loadingChatModule", "selectedUser"]), {
    chatSidebar: {
      get: function get() {
        return this.$store.getters.chatSidebar;
      },
      set: function set(val) {
        this.$store.dispatch("toggleChatSidebar", val);
      }
    }
  })
});

/***/ }),

/***/ 1965:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1966)
/* template */
var __vue_template__ = __webpack_require__(1969)
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
Component.options.__file = "resources/js/views/chat/components/ChatArea.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-77926046", Component.options)
  } else {
    hotAPI.reload("data-v-77926046", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1966:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__SingleChatLoader__ = __webpack_require__(1967);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__SingleChatLoader___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__SingleChatLoader__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_Helpers_helpers__ = __webpack_require__(42);
var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
	computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapGetters */])(["selectedUser", "loadingChat"])),
	data: function data() {
		return {
			settings: {
				maxScrollbarLength: 260
			},
			newMessage: ""
		};
	},

	components: {
		SingleChatLoader: __WEBPACK_IMPORTED_MODULE_1__SingleChatLoader___default.a
	},
	mounted: function mounted() {
		this.scrollToEnd();
	},
	updated: function updated() {
		if (this.newMessage == '') {
			this.scrollToEnd();
		}
	},

	methods: {
		sendMessage: function sendMessage() {
			if (this.newMessage !== "") {
				this.$store.dispatch("sendMessage", this.newMessage);
				this.newMessage = "";
				this.scrollToEnd();
			}
		},
		toggleChatSidebar: function toggleChatSidebar() {
			this.$store.dispatch("toggleChatSidebar", true);
		},
		getScrollHeight: function getScrollHeight() {
			var layout = Object(__WEBPACK_IMPORTED_MODULE_2_Helpers_helpers__["a" /* getCurrentAppLayout */])(this.$router);
			switch (layout) {
				case "default":
					return "height: calc(100vh - 200px)";
				case "horizontal":
					return "height: calc(100vh - 250px)";
				case "boxed":
					return "height: calc(100vh - 380px)";
				case "boxed-v2":
					return "height: calc(100vh - 380px)";
				default:
					return "height: calc(100vh - 200px)";
			}
		},
		scrollToEnd: function scrollToEnd() {
			var container = document.querySelector(".chat-area-scroll");
			if (container !== null) {
				var scrollHeight = container.scrollHeight;
				container.scrollTop = scrollHeight;
			}
		}
	}
});

/***/ }),

/***/ 1967:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(1968)
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
Component.options.__file = "resources/js/views/chat/components/SingleChatLoader.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7f1eef98", Component.options)
  } else {
    hotAPI.reload("data-v-7f1eef98", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1968:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("v-progress-circular", {
    attrs: { indeterminate: "", color: "primary" }
  })
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-7f1eef98", module.exports)
  }
}

/***/ }),

/***/ 1969:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "chat-wrapper" },
    [
      _vm.loadingChat
        ? _c(
            "div",
            { staticClass: "app-flex justify-center align-center h-vh-100" },
            [_c("single-chat-loader")],
            1
          )
        : [
            _vm.selectedUser
              ? [
                  _c("v-toolbar", { staticClass: "chat-head" }, [
                    _c(
                      "div",
                      {
                        staticClass:
                          "chat-head-left d-custom-flex align-items-center"
                      },
                      [
                        _c(
                          "v-btn",
                          {
                            staticClass: "mr-2 ham-menu-icon d-none gray--text",
                            attrs: { flat: "", icon: "", small: "" },
                            on: { click: _vm.toggleChatSidebar }
                          },
                          [
                            _c("v-icon", { attrs: { dark: "" } }, [
                              _vm._v("menu")
                            ])
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "media align-items-center" }, [
                          _c(
                            "div",
                            { staticClass: "media-left mr-3 pos-relative" },
                            [
                              _c("img", {
                                staticClass: "rounded-circle pos-relative",
                                attrs: {
                                  src: _vm.selectedUser.avatar,
                                  alt: "user-profile",
                                  width: "40",
                                  height: "40"
                                }
                              }),
                              _vm._v(" "),
                              _c("span", {
                                class: {
                                  "v-badge success rounded floating":
                                    _vm.selectedUser.status === 1
                                }
                              })
                            ]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "media-body" }, [
                            _c("h6", { staticClass: "mb-0" }, [
                              _vm._v(_vm._s(_vm.selectedUser.name))
                            ]),
                            _vm._v(" "),
                            _vm.selectedUser.status === 1
                              ? _c(
                                  "span",
                                  {
                                    staticClass:
                                      "grey--text fs-12 d-inline-block"
                                  },
                                  [_vm._v("online")]
                                )
                              : _c(
                                  "span",
                                  {
                                    staticClass:
                                      "grey--text fs-12 d-inline-block"
                                  },
                                  [
                                    _vm._v(
                                      "Last seen " +
                                        _vm._s(_vm.selectedUser.lastSeen)
                                    )
                                  ]
                                )
                          ])
                        ])
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "chat-head-right" },
                      [
                        _c(
                          "v-btn",
                          {
                            staticClass: "video-icon",
                            attrs: { icon: "", color: "primary" }
                          },
                          [_c("v-icon", [_vm._v("videocam")])],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "v-btn",
                          { attrs: { icon: "", color: "primary" } },
                          [_c("v-icon", [_vm._v("phone")])],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "v-menu",
                          {
                            attrs: {
                              "offset-y": "",
                              origin: "left left",
                              transition: "scale-transition",
                              left: ""
                            }
                          },
                          [
                            _c(
                              "v-btn",
                              {
                                attrs: { slot: "activator", icon: "" },
                                slot: "activator"
                              },
                              [_c("v-icon", [_vm._v("more_vert")])],
                              1
                            ),
                            _vm._v(" "),
                            _c(
                              "v-list",
                              [
                                _c(
                                  "v-list-tile",
                                  {
                                    on: {
                                      click: function($event) {
                                        _vm.console.log("clear chat")
                                      }
                                    }
                                  },
                                  [
                                    _c("v-list-tile-title", [
                                      _vm._v("Clear Chat")
                                    ])
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c(
                                  "v-list-tile",
                                  {
                                    on: {
                                      click: function($event) {
                                        _vm.console.log("mute notifications")
                                      }
                                    }
                                  },
                                  [
                                    _c("v-list-tile-title", [
                                      _vm._v("Mute Notifications")
                                    ])
                                  ],
                                  1
                                ),
                                _vm._v(" "),
                                _c(
                                  "v-list-tile",
                                  {
                                    on: {
                                      click: function($event) {
                                        _vm.console.log("block")
                                      }
                                    }
                                  },
                                  [_c("v-list-tile-title", [_vm._v("Block")])],
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
                  ]),
                  _vm._v(" "),
                  _c(
                    "vue-perfect-scrollbar",
                    {
                      staticClass: "chat-area-scroll",
                      style: _vm.getScrollHeight(),
                      attrs: { settings: _vm.settings }
                    },
                    [
                      _c(
                        "div",
                        { staticClass: "chat-body" },
                        [
                          _vm._l(_vm.selectedUser.chats, function(chat, index) {
                            return [
                              _c(
                                "div",
                                {
                                  key: index,
                                  staticClass: "chat-block mb-3",
                                  class: { "flex-row-reverse": chat.isAdmin }
                                },
                                [
                                  !chat.isAdmin
                                    ? [
                                        _c(
                                          "div",
                                          { staticClass: "avatar-wrap mr-3" },
                                          [
                                            _c("img", {
                                              staticClass: "rounded-circle",
                                              attrs: {
                                                src: _vm.selectedUser.avatar,
                                                alt: "user-profile",
                                                width: "40",
                                                height: "40"
                                              }
                                            })
                                          ]
                                        ),
                                        _vm._v(" "),
                                        _c(
                                          "div",
                                          { staticClass: "chat-bubble-wrap" },
                                          [
                                            _c(
                                              "div",
                                              {
                                                staticClass:
                                                  "chat-bubble even aqua-bg px-3 d-custom-flex align-items-center"
                                              },
                                              [
                                                _c(
                                                  "span",
                                                  {
                                                    staticClass:
                                                      "d-inline-block fs-14"
                                                  },
                                                  [_vm._v(_vm._s(chat.body))]
                                                )
                                              ]
                                            ),
                                            _vm._v(" "),
                                            _c(
                                              "span",
                                              {
                                                staticClass:
                                                  "fs-12 grey--text text-xs-left d-block mt-1 fw-light"
                                              },
                                              [_vm._v(_vm._s(chat.time))]
                                            )
                                          ]
                                        )
                                      ]
                                    : [
                                        _c(
                                          "div",
                                          { staticClass: "avatar-wrap ml-3" },
                                          [
                                            _c("img", {
                                              staticClass: "rounded-circle",
                                              attrs: {
                                                src:
                                                  "/static/avatars/user-5.jpg",
                                                alt: "user-profile",
                                                width: "40",
                                                height: "40"
                                              }
                                            })
                                          ]
                                        ),
                                        _vm._v(" "),
                                        _c(
                                          "div",
                                          { staticClass: "chat-bubble-wrap" },
                                          [
                                            _c(
                                              "div",
                                              {
                                                staticClass:
                                                  "chat-bubble odd primary px-3 d-custom-flex align-items-center"
                                              },
                                              [
                                                _c(
                                                  "span",
                                                  {
                                                    staticClass:
                                                      "d-inline-block fs-14 white--text"
                                                  },
                                                  [_vm._v(_vm._s(chat.body))]
                                                )
                                              ]
                                            ),
                                            _vm._v(" "),
                                            _c(
                                              "span",
                                              {
                                                staticClass:
                                                  "fs-12 grey--text text-xs-right d-block mt-1 fw-light"
                                              },
                                              [_vm._v(_vm._s(chat.time))]
                                            )
                                          ]
                                        )
                                      ]
                                ],
                                2
                              )
                            ]
                          })
                        ],
                        2
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c("div", { staticClass: "chat-footer px-3" }, [
                    _c(
                      "div",
                      { staticClass: "d-custom-flex" },
                      [
                        _c("v-text-field", {
                          attrs: {
                            "hide-details": "",
                            name: "input-1-3",
                            label: "Send Message...",
                            "single-line": "",
                            value: _vm.newMessage
                          },
                          on: {
                            keyup: function($event) {
                              if (
                                !("button" in $event) &&
                                _vm._k(
                                  $event.keyCode,
                                  "enter",
                                  13,
                                  $event.key,
                                  "Enter"
                                )
                              ) {
                                return null
                              }
                              return _vm.sendMessage($event)
                            }
                          },
                          model: {
                            value: _vm.newMessage,
                            callback: function($$v) {
                              _vm.newMessage = $$v
                            },
                            expression: "newMessage"
                          }
                        }),
                        _vm._v(" "),
                        _c(
                          "v-btn",
                          { attrs: { fab: "", small: "" } },
                          [
                            _c("v-icon", { attrs: { dark: "" } }, [
                              _vm._v("attachment")
                            ])
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "v-btn",
                          {
                            attrs: {
                              fab: "",
                              dark: "",
                              small: "",
                              color: "primary"
                            },
                            on: { click: _vm.sendMessage }
                          },
                          [
                            _c("v-icon", { attrs: { dark: "" } }, [
                              _vm._v("send")
                            ])
                          ],
                          1
                        )
                      ],
                      1
                    )
                  ])
                ]
              : _c("div", { staticClass: "chat-box-main" }, [
                  _c(
                    "div",
                    { staticClass: "centered" },
                    [
                      _vm._m(0),
                      _vm._v(" "),
                      _c(
                        "v-btn",
                        {
                          staticClass: "select-user d-none",
                          attrs: { flat: "", color: "primary" },
                          on: { click: _vm.toggleChatSidebar }
                        },
                        [_vm._v("\n\t\t\t\t\tSelect User\n\t\t\t\t")]
                      )
                    ],
                    1
                  )
                ])
          ]
    ],
    2
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("p", [
      _c("i", { staticClass: "zmdi zmdi-comments font-3x primary--text" })
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-77926046", module.exports)
  }
}

/***/ }),

/***/ 1970:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1971)
/* template */
var __vue_template__ = __webpack_require__(1972)
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
Component.options.__file = "resources/js/views/chat/components/ChatSidebar.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3a5e14b3", Component.options)
  } else {
    hotAPI.reload("data-v-3a5e14b3", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1971:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_Helpers_helpers__ = __webpack_require__(42);
var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapGetters */])(["users", "selectedUser"])),
  data: function data() {
    return {
      settings: {
        maxScrollbarLength: 160
      }
    };
  },

  methods: {
    openChat: function openChat(user) {
      this.$store.dispatch("openChat", user);
    },
    getScrollHeight: function getScrollHeight() {
      var layout = Object(__WEBPACK_IMPORTED_MODULE_1_Helpers_helpers__["a" /* getCurrentAppLayout */])(this.$router);
      switch (layout) {
        case "default":
          return "height: calc(100vh - 130px)";
        case "horizontal":
          return "height: calc(100vh - 180px)";
        case "boxed":
          return "height: calc(100vh - 305px)";
        case "boxed-v2":
          return "height: calc(100vh - 305px)";
        default:
          return "height: calc(100vh - 130px)";
      }
    }
  }
});

/***/ }),

/***/ 1972:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-card",
    { staticClass: "chat-content" },
    [
      _c(
        "v-toolbar",
        { attrs: { color: "primary", dark: "" } },
        [
          _c("v-toolbar-title", [_vm._v("Chat")]),
          _vm._v(" "),
          _c("v-spacer"),
          _vm._v(" "),
          _c(
            "v-btn",
            { attrs: { icon: "" } },
            [_c("v-icon", [_vm._v("search")])],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "v-list",
        [
          _c(
            "vue-perfect-scrollbar",
            {
              staticClass: "chat-sidebar-scroll",
              style: _vm.getScrollHeight(),
              attrs: { settings: _vm.settings }
            },
            [
              _vm._l(_vm.users, function(item, index) {
                return [
                  _c(
                    "v-list-tile",
                    {
                      key: index,
                      class: { "grayish-blue": item.selected },
                      attrs: { avatar: "" },
                      on: {
                        click: function($event) {
                          _vm.openChat(item)
                        }
                      }
                    },
                    [
                      _c("v-list-tile-avatar", [
                        _c("img", { attrs: { src: item.avatar } })
                      ]),
                      _vm._v(" "),
                      _c("v-list-tile-content", [
                        _c("h6", {
                          staticClass: "mb-1",
                          domProps: { innerHTML: _vm._s(item.name) }
                        }),
                        _vm._v(" "),
                        item.chats.length > 0
                          ? _c("span", {
                              staticClass: "fs-12 grey--text",
                              domProps: {
                                innerHTML: _vm._s(
                                  item.chats[item.chats.length - 1].body
                                )
                              }
                            })
                          : _vm._e()
                      ])
                    ],
                    1
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
    require("vue-hot-reload-api")      .rerender("data-v-3a5e14b3", module.exports)
  }
}

/***/ }),

/***/ 1973:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(1974)
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
Component.options.__file = "resources/js/views/chat/components/ChatModuleLoader.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-c57a7150", Component.options)
  } else {
    hotAPI.reload("data-v-c57a7150", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1974:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("v-progress-circular", {
    attrs: { indeterminate: "", color: "primary" }
  })
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-c57a7150", module.exports)
  }
}

/***/ }),

/***/ 1975:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-container",
    { attrs: { fluid: "", "py-0": "", "px-0": "" } },
    [
      !_vm.loadingChatModule
        ? [
            _c(
              "v-navigation-drawer",
              {
                attrs: { temporary: "", absolute: "", width: 250 },
                model: {
                  value: _vm.chatSidebar,
                  callback: function($$v) {
                    _vm.chatSidebar = $$v
                  },
                  expression: "chatSidebar"
                }
              },
              [_c("chat-sidebar")],
              1
            ),
            _vm._v(" "),
            _c(
              "v-layout",
              { staticClass: "chat-layout", attrs: { row: "", wrap: "" } },
              [
                _c(
                  "v-flex",
                  {
                    staticClass: "chat-sidebar",
                    attrs: { xl2: "", lg3: "", md3: "", sm0: "", xs0: "" }
                  },
                  [_c("chat-sidebar")],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-flex",
                  {
                    staticClass: "chat-main",
                    attrs: { xl10: "", lg9: "", md9: "", sm12: "", xs12: "" }
                  },
                  [_c("chat-area")],
                  1
                )
              ],
              1
            )
          ]
        : [
            _c(
              "div",
              { staticClass: "app-flex justify-center align-center h-vh-100" },
              [_c("chat-module-loader")],
              1
            )
          ]
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-15a40340", module.exports)
  }
}

/***/ })

});