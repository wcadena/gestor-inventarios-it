webpackJsonp([10],{

/***/ 120:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1945)
/* template */
var __vue_template__ = __webpack_require__(1963)
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
Component.options.__file = "resources/js/views/inbox/Inbox.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-0f3e2224", Component.options)
  } else {
    hotAPI.reload("data-v-0f3e2224", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1945:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__EmailListing__ = __webpack_require__(1946);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__EmailListing___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__EmailListing__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Sidebar__ = __webpack_require__(1949);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Sidebar___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__Sidebar__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__EmailDetail__ = __webpack_require__(1957);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__EmailDetail___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__EmailDetail__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__SearchEmails__ = __webpack_require__(1960);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__SearchEmails___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3__SearchEmails__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_vuex__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5_Helpers_helpers__ = __webpack_require__(42);
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








/* harmony default export */ __webpack_exports__["default"] = ({
  mounted: function mounted() {
    var contentWrapper = document.querySelector('.v-content__wrap');
    if (contentWrapper) {
      contentWrapper.style.overflow = "hidden";
    }
    var selector = document.querySelector('.app-boxed-layout .app-content');
    if (selector) {
      selector.style.overflow = "hidden";
    }
  },
  destroyed: function destroyed() {
    var contentWrapper = document.querySelector('.v-content__wrap');
    if (contentWrapper !== null) {
      if (Object(__WEBPACK_IMPORTED_MODULE_5_Helpers_helpers__["a" /* getCurrentAppLayout */])(this.$router) === "boxed" || Object(__WEBPACK_IMPORTED_MODULE_5_Helpers_helpers__["a" /* getCurrentAppLayout */])(this.$router) === "boxed-v2") {
        if (contentWrapper) {
          contentWrapper.style.overflow = "";
        }
      } else {
        contentWrapper.style.overflow = "auto";
      }
    }
    var selector = document.querySelector('.app-boxed-layout .app-content');
    if (selector) {
      selector.style.overflow = "auto";
    }
  },

  components: {
    EmailListing: __WEBPACK_IMPORTED_MODULE_0__EmailListing___default.a,
    Sidebar: __WEBPACK_IMPORTED_MODULE_1__Sidebar___default.a,
    EmailDetail: __WEBPACK_IMPORTED_MODULE_2__EmailDetail___default.a,
    SearchEmails: __WEBPACK_IMPORTED_MODULE_3__SearchEmails___default.a
  },
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_4_vuex__["b" /* mapGetters */])(["selectedEmail"])),
  data: function data() {
    return {
      reload: false,
      previous: false,
      next: false,
      inboxSidebar: false
    };
  },

  methods: {
    toggleInboxSidebar: function toggleInboxSidebar() {
      this.inboxSidebar = !this.inboxSidebar;
    }
  }
});

/***/ }),

/***/ 1946:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1947)
/* template */
var __vue_template__ = __webpack_require__(1948)
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
Component.options.__file = "resources/js/views/inbox/EmailListing.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7de8f710", Component.options)
  } else {
    hotAPI.reload("data-v-7de8f710", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1947:
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
//
//
//
//
//
//
//
//




/* harmony default export */ __webpack_exports__["default"] = ({
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapGetters */])(["emails", "loadingEmails"])),
  mounted: function mounted() {
    this.$store.dispatch("getEmails");
  },

  methods: {
    onSelectEmail: function onSelectEmail(email) {
      this.$store.dispatch("onSelectEmail", email);
    },
    markAsStarEmail: function markAsStarEmail(email) {
      this.$store.dispatch("markAsStarEmail", email);
    },
    onViewEmail: function onViewEmail(email) {
      this.$store.dispatch("onViewEmail", email);
    },
    getScrollHeight: function getScrollHeight() {
      var layout = Object(__WEBPACK_IMPORTED_MODULE_1_Helpers_helpers__["a" /* getCurrentAppLayout */])(this.$router);
      switch (layout) {
        case "default":
          return "height:calc(100vh - 220px)";
        case "mini":
          return "height:calc(100vh - 220px)";
        case "horizontal":
          return "height:calc(100vh - 268px)";
        case "boxed":
          return "height:calc(100vh - 390px)";
        case "boxed-v2":
          return "height:calc(100vh - 390px)";
        default:
          return "height:calc(100vh - 220px)";
      }
    }
  },
  data: function data() {
    return {
      notifications: false
    };
  }
});

/***/ }),

/***/ 1948:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "inbox-listing" },
    [
      _c(
        "vue-perfect-scrollbar",
        { staticClass: "inbox-content-scroll", style: _vm.getScrollHeight() },
        [
          _vm.loadingEmails
            ? _c(
                "v-flex",
                {
                  staticClass:
                    "d-custom-flex align-items-center justify-center h-100"
                },
                [
                  _c("v-progress-circular", {
                    attrs: { indeterminate: "", color: "primary" }
                  })
                ],
                1
              )
            : [
                _vm.emails && _vm.emails.length > 0
                  ? _c(
                      "v-list",
                      { staticClass: "list-aqua-ripple" },
                      _vm._l(_vm.emails, function(item, key) {
                        return _c(
                          "v-list-tile",
                          {
                            key: key,
                            attrs: { ripple: "" },
                            on: {
                              click: function($event) {
                                _vm.onViewEmail(item)
                              }
                            }
                          },
                          [
                            _c(
                              "v-list-tile-content",
                              [
                                _c("v-checkbox", {
                                  attrs: {
                                    color: "primary",
                                    "input-value": item.value
                                  },
                                  on: {
                                    click: function($event) {
                                      $event.stopPropagation()
                                      _vm.onSelectEmail(item)
                                    }
                                  }
                                }),
                                _vm._v(" "),
                                _c(
                                  "v-btn",
                                  {
                                    attrs: { icon: "" },
                                    on: {
                                      click: function($event) {
                                        $event.stopPropagation()
                                        _vm.markAsStarEmail(item)
                                      }
                                    }
                                  },
                                  [
                                    _c("i", {
                                      staticClass: "zmdi zmdi-star font-lg",
                                      class: {
                                        "warning--text": item.starred,
                                        "grey--text": !item.starred
                                      }
                                    })
                                  ]
                                ),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  { staticClass: "media" },
                                  [
                                    _c(
                                      "v-list-tile-avatar",
                                      { staticClass: "media-left" },
                                      [
                                        _c("img", {
                                          staticClass: "img-responsive",
                                          attrs: {
                                            src: item.avatarSrc,
                                            alt: "avatar",
                                            height: "40",
                                            width: "40"
                                          }
                                        })
                                      ]
                                    ),
                                    _vm._v(" "),
                                    _c(
                                      "div",
                                      {
                                        staticClass:
                                          "media-body d-custom-flex align-items-center"
                                      },
                                      [
                                        _c(
                                          "div",
                                          { staticClass: "d-inline-block" },
                                          [
                                            _c("h6", { staticClass: "mb-1" }, [
                                              _vm._v(_vm._s(item.userName))
                                            ]),
                                            _vm._v(" "),
                                            _c(
                                              "span",
                                              {
                                                staticClass:
                                                  "fs-12 d-inline-block"
                                              },
                                              [_vm._v(_vm._s(item.subject))]
                                            )
                                          ]
                                        ),
                                        _vm._v(" "),
                                        _c(
                                          "p",
                                          {
                                            staticClass:
                                              "fs-12 grey--text w-75 d-inline-block mb-0 mx-4"
                                          },
                                          [_vm._v(_vm._s(item.body))]
                                        )
                                      ]
                                    )
                                  ],
                                  1
                                )
                              ],
                              1
                            ),
                            _vm._v(" "),
                            _c("v-list-tile-action", [
                              _c("span", { staticClass: "fs-12 grey--text" }, [
                                _vm._v(_vm._s(item.time) + " hour ago ")
                              ])
                            ])
                          ],
                          1
                        )
                      }),
                      1
                    )
                  : _c("div", {}, [
                      _c("h3", [_vm._v("No Emails Found In Selected Folder")])
                    ])
              ]
        ],
        2
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
    require("vue-hot-reload-api")      .rerender("data-v-7de8f710", module.exports)
  }
}

/***/ }),

/***/ 1949:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1950)
/* template */
var __vue_template__ = __webpack_require__(1956)
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
Component.options.__file = "resources/js/views/inbox/Sidebar.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-540388c4", Component.options)
  } else {
    hotAPI.reload("data-v-540388c4", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1950:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__EmailBox__ = __webpack_require__(1951);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__EmailBox___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__EmailBox__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__UserBlock__ = __webpack_require__(1954);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__UserBlock___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__UserBlock__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_Helpers_helpers__ = __webpack_require__(42);
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






/* harmony default export */ __webpack_exports__["default"] = ({
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapGetters */])(["mailboxes"])),
  methods: {
    filterEmails: function filterEmails(filter) {
      this.$store.dispatch("filterEmails", filter);
    },
    getScrollHeight: function getScrollHeight() {
      var layout = Object(__WEBPACK_IMPORTED_MODULE_3_Helpers_helpers__["a" /* getCurrentAppLayout */])(this.$router);
      switch (layout) {
        case "default":
          return "height:calc(100vh - 220px)";
        case "mini":
          return "height:calc(100vh - 220px)";
        case "horizontal":
          return "height:calc(100vh - 265px)";
        case "boxed":
          return "height:calc(100vh - 390px)";
        case "boxed-v2":
          return "height:calc(100vh - 390px)";
        default:
          return "height:calc(100vh - 220px)";
      }
    }
  },
  data: function data() {
    return {
      dialog: false,
      folder_items: [{
        action: "zmdi zmdi-folder",
        title: "message.work",
        class: "primary--text"
      }, {
        action: "zmdi zmdi-folder-person",
        title: "message.personal",
        class: "error--text"
      }],
      settings_items: [{
        action: "zmdi zmdi-folder",
        title: "message.manageFolders"
      }, {
        action: "zmdi zmdi-account-box-mail",
        title: "message.contacts"
      }, {
        action: "zmdi zmdi-settings",
        title: "message.settings"
      }]
    };
  },

  components: {
    EmailBox: __WEBPACK_IMPORTED_MODULE_1__EmailBox___default.a,
    UserBlock: __WEBPACK_IMPORTED_MODULE_2__UserBlock___default.a
  }
});

/***/ }),

/***/ 1951:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1952)
/* template */
var __vue_template__ = __webpack_require__(1953)
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
Component.options.__file = "resources/js/views/inbox/EmailBox.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-2e3cd8d7", Component.options)
  } else {
    hotAPI.reload("data-v-2e3cd8d7", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1952:
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

/* harmony default export */ __webpack_exports__["default"] = ({
	data: function data() {
		return {
			content: '<h4><i>Insert text here....</h4></i>',
			editorOption: {
				// some quill options
			}
		};
	},
	methods: {
		onEditorBlur: function onEditorBlur(editor) {
			console.log('editor blur!', editor);
		},
		onEditorFocus: function onEditorFocus(editor) {
			console.log('editor focus!', editor);
		},
		onEditorReady: function onEditorReady(editor) {
			console.log('editor ready!', editor);
		},
		onEditorChange: function onEditorChange(_ref) {
			var editor = _ref.editor,
			    html = _ref.html,
			    text = _ref.text;

			console.log('editor change!', editor, html, text);
			this.content = html;
		}
	},
	computed: {
		editor: function editor() {
			return this.$refs.myQuillEditor.quill;
		}
	},
	mounted: function mounted() {
		// you can use current editor object to do something(quill methods)
		console.log('this is current quill instance object', this.editor);
	}
});

/***/ }),

/***/ 1953:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-container",
    { attrs: { fluid: "", "grid-list-xl": "", "py-0": "" } },
    [
      _c(
        "div",
        { staticClass: "app-card-content" },
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
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-2e3cd8d7", module.exports)
  }
}

/***/ }),

/***/ 1954:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = null
/* template */
var __vue_template__ = __webpack_require__(1955)
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
Component.options.__file = "resources/js/views/inbox/UserBlock.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-30fc95ea", Component.options)
  } else {
    hotAPI.reload("data-v-30fc95ea", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1955:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-img",
    {
      staticClass: "white--text",
      attrs: { height: "150px", src: "/static/img/blog-1.jpg" }
    },
    [
      _c("div", { staticClass: "media align-items-center pa-3 w-100" }, [
        _c("div", { staticClass: "media-left mr-4" }, [
          _c("img", {
            staticClass: "rounded-circle img-responsive",
            attrs: {
              src: "/static/avatars/user-9.jpg",
              width: "70",
              height: "70"
            }
          })
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "media-body" }, [
          _c("h5", { staticClass: "mb-0" }, [_vm._v("Gregory A.")]),
          _vm._v(" "),
          _c("span", { staticClass: "fs-12" }, [_vm._v("gregory@example.com")])
        ])
      ])
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-30fc95ea", module.exports)
  }
}

/***/ }),

/***/ 1956:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "inbox-head" },
    [
      _c("user-block"),
      _vm._v(" "),
      _c(
        "vue-perfect-scrollbar",
        { staticClass: "inbox-sidebar-scroll", style: _vm.getScrollHeight() },
        [
          _c(
            "div",
            { staticClass: "inbox-inner pa-4" },
            [
              _c(
                "v-dialog",
                {
                  staticClass: "mb-4 d-block",
                  attrs: { "max-width": "1000px" },
                  model: {
                    value: _vm.dialog,
                    callback: function($$v) {
                      _vm.dialog = $$v
                    },
                    expression: "dialog"
                  }
                },
                [
                  _c(
                    "v-btn",
                    {
                      staticClass: "btn-icon ma-0",
                      attrs: {
                        slot: "activator",
                        color: "error",
                        dark: "",
                        block: ""
                      },
                      slot: "activator"
                    },
                    [
                      _c("i", { staticClass: "zmdi zmdi-edit" }),
                      _vm._v(" "),
                      _c("span", { staticClass: "mt-1" }, [
                        _vm._v(_vm._s(_vm.$t("message.composeEmail")))
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-card",
                    [
                      _c("v-card-title", [
                        _c("h3", { staticClass: "mb-0" }, [
                          _vm._v(_vm._s(_vm.$t("message.newEmail")))
                        ])
                      ]),
                      _vm._v(" "),
                      _c("v-card-text", [
                        _c(
                          "div",
                          { staticClass: "mail-top px-4" },
                          [
                            _c("v-text-field", { attrs: { label: "To" } }),
                            _vm._v(" "),
                            _c("v-text-field", {
                              attrs: {
                                label: "From",
                                value: "Vuely@examples.com",
                                disabled: ""
                              }
                            }),
                            _vm._v(" "),
                            _c("v-text-field", { attrs: { label: "Title" } })
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "mail-body" },
                          [_c("email-box")],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "text-xs-right px-4 pb-3" },
                        [
                          _c(
                            "v-btn",
                            {
                              attrs: { color: "primary" },
                              nativeOn: {
                                click: function($event) {
                                  _vm.dialog = false
                                }
                              }
                            },
                            [_vm._v("\n\t\t\t\t\t\t\t\tClose\n\t\t\t\t\t\t\t")]
                          ),
                          _vm._v(" "),
                          _c(
                            "v-btn",
                            {
                              attrs: { color: "error" },
                              nativeOn: {
                                click: function($event) {
                                  _vm.dialog = false
                                }
                              }
                            },
                            [_vm._v("Save")]
                          )
                        ],
                        1
                      )
                    ],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "mailbox-items-warp" },
                [
                  _c(
                    "span",
                    { staticClass: "fs-12 fw-semi-bold px-3 mb-1 d-block" },
                    [_vm._v(_vm._s(_vm.$t("message.mailboxes")))]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-list",
                    [
                      _vm._l(_vm.mailboxes, function(filter) {
                        return [
                          _c(
                            "v-list-tile",
                            {
                              key: filter.id,
                              on: {
                                click: function($event) {
                                  _vm.filterEmails(filter)
                                }
                              }
                            },
                            [
                              _c(
                                "v-list-tile-action",
                                [_c("v-icon", [_vm._v(_vm._s(filter.action))])],
                                1
                              ),
                              _vm._v(" "),
                              _c("v-list-tile-content", [
                                _c("span", [_vm._v(_vm._s(filter.name))])
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
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "mailbox-items-warp" },
                [
                  _c(
                    "span",
                    { staticClass: "fs-12 fw-semi-bold  px-3 mb-1 d-block" },
                    [_vm._v(_vm._s(_vm.$t("message.folders")))]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-list",
                    _vm._l(_vm.folder_items, function(item, key) {
                      return _c(
                        "v-list-tile",
                        { key: key, on: { click: function($event) {} } },
                        [
                          _c(
                            "v-list-tile-action",
                            [_c("v-icon", { class: item.action })],
                            1
                          ),
                          _vm._v(" "),
                          _c("v-list-tile-content", [
                            _c("span", [_vm._v(_vm._s(_vm.$t(item.title)))])
                          ]),
                          _vm._v(" "),
                          _c("v-spacer"),
                          _vm._v(" "),
                          _c("v-icon", { class: item.class }, [
                            _vm._v("fiber_manual_record")
                          ])
                        ],
                        1
                      )
                    }),
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "mailbox-items-warp" },
                [
                  _c(
                    "span",
                    { staticClass: "fs-12 fw-semi-bold px-3 mb-1 d-block" },
                    [_vm._v(_vm._s(_vm.$t("message.settings")))]
                  ),
                  _vm._v(" "),
                  _c(
                    "v-list",
                    _vm._l(_vm.settings_items, function(item, key) {
                      return _c(
                        "v-list-tile",
                        { key: key, on: { click: function($event) {} } },
                        [
                          _c(
                            "v-list-tile-action",
                            [_c("v-icon", { class: item.action })],
                            1
                          ),
                          _vm._v(" "),
                          _c("v-list-tile-content", [
                            _c("span", [_vm._v(_vm._s(_vm.$t(item.title)))])
                          ])
                        ],
                        1
                      )
                    }),
                    1
                  )
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
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-540388c4", module.exports)
  }
}

/***/ }),

/***/ 1957:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1958)
/* template */
var __vue_template__ = __webpack_require__(1959)
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
Component.options.__file = "resources/js/views/inbox/EmailDetail.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-a75f0016", Component.options)
  } else {
    hotAPI.reload("data-v-a75f0016", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1958:
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  computed: _extends({}, Object(__WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapGetters */])(["selectedEmail"])),
  methods: {
    backToEmails: function backToEmails() {
      this.$store.dispatch("backToEmails");
    },
    getScrollHeight: function getScrollHeight() {
      var layout = Object(__WEBPACK_IMPORTED_MODULE_1_Helpers_helpers__["a" /* getCurrentAppLayout */])(this.$router);
      switch (layout) {
        case "default":
          return "height:calc(100vh - 220px)";
        case "mini":
          return "height:calc(100vh - 220px)";
        case "horizontal":
          return "height:calc(100vh - 220px)";
        case "boxed":
          return "height:calc(100vh - 391px)";
        case "boxed-v2":
          return "height:calc(100vh - 391px)";
        default:
          return "height:calc(100vh - 220px)";
      }
    },
    onDeleteEmail: function onDeleteEmail() {
      this.$store.dispatch("onDeleteEmail");
    }
  }
});

/***/ }),

/***/ 1959:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.selectedEmail != null
    ? _c(
        "div",
        { staticClass: "email-detail-wrap" },
        [
          _c(
            "div",
            {
              staticClass:
                "mail-action-wrap d-custom-flex justify-space-between"
            },
            [
              _c(
                "ul",
                { staticClass: "list-unstyled primary action-list-wrap" },
                [
                  _vm._m(0),
                  _vm._v(" "),
                  _vm._m(1),
                  _vm._v(" "),
                  _c("li", [
                    _c(
                      "a",
                      {
                        attrs: { href: "javascript:void(0)" },
                        on: { click: _vm.onDeleteEmail }
                      },
                      [
                        _c("i", { staticClass: "material-icons" }, [
                          _vm._v("delete")
                        ])
                      ]
                    )
                  ])
                ]
              ),
              _vm._v(" "),
              _vm._m(2)
            ]
          ),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "detail-head d-custom-flex justify-space-between" },
            [
              _c(
                "v-btn",
                {
                  staticClass: "grey--text ma-0",
                  attrs: { fab: "", icon: "", small: "" },
                  on: { click: _vm.backToEmails }
                },
                [_c("v-icon", [_vm._v("keyboard_backspace")])],
                1
              ),
              _vm._v(" "),
              _c("ul", { staticClass: "list-inline" }, [
                _c(
                  "li",
                  [
                    _c(
                      "v-btn",
                      {
                        staticClass: "grey--text ma-0",
                        attrs: { fab: "", icon: "", small: "" }
                      },
                      [_c("v-icon", [_vm._v("reply")])],
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "li",
                  [
                    _c(
                      "v-btn",
                      {
                        staticClass: "grey--text ma-0",
                        attrs: { fab: "", icon: "", small: "" }
                      },
                      [_c("v-icon", [_vm._v("local_printshop")])],
                      1
                    )
                  ],
                  1
                )
              ])
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "vue-perfect-scrollbar",
            {
              staticClass: "inbox-detail-scroll",
              style: _vm.getScrollHeight()
            },
            [
              _c("div", { staticClass: "mail-subject-wrap" }, [
                _c("h5", { staticClass: "mb-0" }, [
                  _vm._v(_vm._s(_vm.selectedEmail.subject))
                ])
              ]),
              _vm._v(" "),
              _c(
                "div",
                {
                  staticClass:
                    "user-detail d-custom-flex justify-content-between"
                },
                [
                  _c("div", { staticClass: "media w-80" }, [
                    _c("img", {
                      staticClass: "rounded mr-3",
                      attrs: {
                        src: _vm.selectedEmail.avatarSrc,
                        alt: "user profile",
                        width: "50",
                        height: "50"
                      }
                    }),
                    _vm._v(" "),
                    _c("div", { staticClass: "media-body" }, [
                      _c("h6", { staticClass: "mb-0" }, [
                        _vm._v(_vm._s(_vm.selectedEmail.userName))
                      ]),
                      _vm._v(" "),
                      _c("p", { staticClass: "mb-0 fs-14" }, [
                        _vm._v("From "),
                        _c("span", { staticClass: "fs-12 grey--text" }, [
                          _vm._v(
                            "<" + _vm._s(_vm.selectedEmail.userEmail) + ">"
                          )
                        ])
                      ]),
                      _vm._v(" "),
                      _c("p", { staticClass: "mb-0 fs-14" }, [
                        _vm._v("To: "),
                        _c("span", { staticClass: "fs-12 grey--text" }, [
                          _vm._v("Me")
                        ])
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "align-items-center fs-12 d-custom-flex grey--text w-20 justify-end"
                    },
                    [_vm._v(_vm._s(_vm.selectedEmail.time) + " Hour Ago")]
                  )
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "mail-detail" }, [
                _c("div", [
                  _c("p", { staticClass: "fs-14" }, [
                    _vm._v(_vm._s(_vm.selectedEmail.body))
                  ])
                ]),
                _vm._v(" "),
                _c("p", { staticClass: "mb-0 fs-14 fw-semi-bold" }, [
                  _vm._v("Regards,")
                ]),
                _vm._v(" "),
                _c("p", { staticClass: "mb-0 fs-12" }, [
                  _vm._v(_vm._s(_vm.selectedEmail.userName))
                ])
              ]),
              _vm._v(" "),
              _vm.selectedEmail.attachments != null
                ? _c("div", { staticClass: "mail-attachment-wrap" }, [
                    _c(
                      "div",
                      {
                        staticClass:
                          "d-custom-flex justify-space-between attachment-head align-items-center"
                      },
                      [
                        _c("h6", { staticClass: "mb-0" }, [
                          _vm._v(
                            _vm._s(_vm.selectedEmail.attachments.length) +
                              " Attachments"
                          )
                        ]),
                        _vm._v(" "),
                        _c("ul", { staticClass: "list-inline" }, [
                          _c(
                            "li",
                            [
                              _c(
                                "v-btn",
                                {
                                  staticClass: "grey--text ma-0",
                                  attrs: { fab: "", icon: "", small: "" }
                                },
                                [_c("v-icon", [_vm._v("insert_drive_file")])],
                                1
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "li",
                            [
                              _c(
                                "v-btn",
                                {
                                  staticClass: "grey--text ma-0",
                                  attrs: { fab: "", icon: "", small: "" }
                                },
                                [_c("v-icon", [_vm._v("cloud_circle")])],
                                1
                              )
                            ],
                            1
                          )
                        ])
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "ul",
                      {
                        staticClass:
                          "d-custom-flex align-items-center attachment-list list-unstyled"
                      },
                      _vm._l(_vm.selectedEmail.attachments, function(
                        attachment
                      ) {
                        return _c("li", { key: attachment.id }, [
                          _c("div", { staticClass: "overlay-wrapper" }, [
                            _c("img", {
                              staticClass: "img-responsive",
                              attrs: {
                                src: attachment.src,
                                height: "140",
                                width: "180",
                                alt: "attachment"
                              }
                            }),
                            _vm._v(" "),
                            _c(
                              "a",
                              {
                                staticClass: "overlay-content",
                                attrs: { href: "javascript:void(0)" }
                              },
                              [
                                _c("i", { staticClass: "material-icons" }, [
                                  _vm._v("get_app")
                                ])
                              ]
                            )
                          ]),
                          _vm._v(" "),
                          _c("span", { staticClass: "fs-12 d-block" }, [
                            _vm._v(_vm._s(attachment.name))
                          ])
                        ])
                      }),
                      0
                    )
                  ])
                : _vm._e(),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "mail-reply d-custom-flex align-items-center" },
                [
                  _c("v-text-field", {
                    staticClass: "mr-4",
                    attrs: { label: "Reply", solo: "" }
                  }),
                  _vm._v(" "),
                  _c(
                    "v-btn",
                    {
                      staticClass: "ma-0 white--text",
                      attrs: { color: "primary", large: "" }
                    },
                    [
                      _vm._v("\n               Send\n               "),
                      _c("v-icon", { attrs: { right: "", dark: "" } }, [
                        _vm._v("send")
                      ])
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
    : _vm._e()
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("li", [
      _c("a", { attrs: { href: "javascript:void(0)" } }, [
        _c("i", { staticClass: "material-icons" }, [_vm._v("archive")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("li", [
      _c("a", { attrs: { href: "javascript:void(0)" } }, [
        _c("i", { staticClass: "material-icons" }, [_vm._v("error")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("ul", { staticClass: "navigate-page primary list-unstyled" }, [
      _c("li", [
        _c("a", { attrs: { href: "javascript:void(0)" } }, [
          _c("i", { staticClass: "material-icons" }, [_vm._v("arrow_back")])
        ])
      ]),
      _vm._v(" "),
      _c("li", [
        _c("a", { attrs: { href: "javascript:void(0)" } }, [
          _c("i", { staticClass: "material-icons" }, [_vm._v("arrow_forward")])
        ])
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-a75f0016", module.exports)
  }
}

/***/ }),

/***/ 1960:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(1961)
/* template */
var __vue_template__ = __webpack_require__(1962)
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
Component.options.__file = "resources/js/views/inbox/SearchEmails.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-41fb5f32", Component.options)
  } else {
    hotAPI.reload("data-v-41fb5f32", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 1961:
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

/* harmony default export */ __webpack_exports__["default"] = ({
  methods: {
    onSearchEmail: function onSearchEmail(text) {
      this.$store.dispatch("onSearchEmail", text);
    }
  }
});

/***/ }),

/***/ 1962:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "search-mail" },
    [
      _c("v-text-field", {
        attrs: {
          label: "Search Email",
          placeholder: "Search Email",
          solo: "",
          "append-icon": "search"
        },
        on: { input: _vm.onSearchEmail }
      })
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
    require("vue-hot-reload-api")      .rerender("data-v-41fb5f32", module.exports)
  }
}

/***/ }),

/***/ 1963:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-container",
    { attrs: { fluid: "", "grid-list-xl": "", "pa-0": "" } },
    [
      _c(
        "div",
        { staticClass: "app-card inbox" },
        [
          _c(
            "v-navigation-drawer",
            {
              attrs: { temporary: "", absolute: "", width: 225 },
              model: {
                value: _vm.inboxSidebar,
                callback: function($$v) {
                  _vm.inboxSidebar = $$v
                },
                expression: "inboxSidebar"
              }
            },
            [_c("sidebar")],
            1
          ),
          _vm._v(" "),
          _c(
            "v-layout",
            { attrs: { row: "", wrap: "" } },
            [
              _c(
                "v-flex",
                {
                  staticClass: "inbox-sidebar",
                  attrs: { xs12: "", sm4: "", md3: "", lg3: "", xl2: "" }
                },
                [_c("sidebar")],
                1
              ),
              _vm._v(" "),
              _c(
                "v-flex",
                {
                  staticClass: "inbox-content",
                  attrs: { xs12: "", sm12: "", md9: "", lg9: "", xl10: "" }
                },
                [
                  _c(
                    "div",
                    { staticClass: "inbox-content-wrap" },
                    [
                      _vm.selectedEmail === null
                        ? [
                            _c(
                              "div",
                              [
                                _c(
                                  "div",
                                  {
                                    staticClass:
                                      "inbox-page-list d-custom-flex justify-space-between align-items-center"
                                  },
                                  [
                                    _c(
                                      "div",
                                      {
                                        staticClass:
                                          "d-custom-flex align-items-center"
                                      },
                                      [
                                        _c(
                                          "div",
                                          { staticClass: "ham-menu-sm d-none" },
                                          [
                                            _c(
                                              "v-btn",
                                              {
                                                staticClass: "mr-3 my-0",
                                                attrs: { flat: "", icon: "" },
                                                on: {
                                                  click: _vm.toggleInboxSidebar
                                                }
                                              },
                                              [
                                                _c(
                                                  "v-icon",
                                                  { staticClass: "grey--text" },
                                                  [_vm._v("menu")]
                                                )
                                              ],
                                              1
                                            )
                                          ],
                                          1
                                        ),
                                        _vm._v(" "),
                                        _c(
                                          "span",
                                          { staticClass: "mail-count" },
                                          [_vm._v("1-10 from 23")]
                                        )
                                      ]
                                    ),
                                    _vm._v(" "),
                                    _c("ul", { staticClass: "list-inline" }, [
                                      _c(
                                        "li",
                                        [
                                          _c(
                                            "v-tooltip",
                                            {
                                              attrs: { top: "" },
                                              model: {
                                                value: _vm.reload,
                                                callback: function($$v) {
                                                  _vm.reload = $$v
                                                },
                                                expression: "reload"
                                              }
                                            },
                                            [
                                              _c(
                                                "a",
                                                {
                                                  attrs: {
                                                    slot: "activator",
                                                    href: "javascript:void(0);"
                                                  },
                                                  slot: "activator"
                                                },
                                                [
                                                  _c("i", {
                                                    staticClass: "ti-reload"
                                                  })
                                                ]
                                              ),
                                              _vm._v(" "),
                                              _c("span", [_vm._v("Reload")])
                                            ]
                                          )
                                        ],
                                        1
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "li",
                                        [
                                          _c(
                                            "v-tooltip",
                                            {
                                              attrs: { top: "" },
                                              model: {
                                                value: _vm.previous,
                                                callback: function($$v) {
                                                  _vm.previous = $$v
                                                },
                                                expression: "previous"
                                              }
                                            },
                                            [
                                              _c(
                                                "a",
                                                {
                                                  attrs: {
                                                    slot: "activator",
                                                    href: "javascript:void(0);"
                                                  },
                                                  slot: "activator"
                                                },
                                                [
                                                  _c("i", {
                                                    staticClass: "ti-arrow-left"
                                                  })
                                                ]
                                              ),
                                              _vm._v(" "),
                                              _c("span", [_vm._v("Previous")])
                                            ]
                                          )
                                        ],
                                        1
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "li",
                                        [
                                          _c(
                                            "v-tooltip",
                                            {
                                              attrs: { top: "" },
                                              model: {
                                                value: _vm.next,
                                                callback: function($$v) {
                                                  _vm.next = $$v
                                                },
                                                expression: "next"
                                              }
                                            },
                                            [
                                              _c(
                                                "a",
                                                {
                                                  attrs: {
                                                    slot: "activator",
                                                    href: "javascript:void(0);"
                                                  },
                                                  slot: "activator"
                                                },
                                                [
                                                  _c("i", {
                                                    staticClass:
                                                      "ti-arrow-right"
                                                  })
                                                ]
                                              ),
                                              _vm._v(" "),
                                              _c("span", [_vm._v("Next")])
                                            ]
                                          )
                                        ],
                                        1
                                      )
                                    ])
                                  ]
                                ),
                                _vm._v(" "),
                                _c("search-emails"),
                                _vm._v(" "),
                                _c("email-listing")
                              ],
                              1
                            )
                          ]
                        : _vm._e(),
                      _vm._v(" "),
                      [_c("email-detail")]
                    ],
                    2
                  )
                ]
              )
            ],
            1
          )
        ],
        1
      )
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-0f3e2224", module.exports)
  }
}

/***/ })

});