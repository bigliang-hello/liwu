(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[2],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/modules/article/Create.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/modules/article/Create.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var simplemde__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! simplemde */ "./node_modules/simplemde/src/js/simplemde.js");
/* harmony import */ var simplemde__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(simplemde__WEBPACK_IMPORTED_MODULE_0__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      form: {
        name: '',
        region: '',
        date1: '',
        date2: '',
        delivery: false,
        type: [],
        resource: '',
        desc: ''
      }
    };
  },
  methods: {
    onSubmit: function onSubmit() {
      console.log('submit!');
    }
  },
  mounted: function mounted() {
    var simplemde = new simplemde__WEBPACK_IMPORTED_MODULE_0___default.a({
      element: document.querySelector('#editor'),
      placeholder: '请使用 Markdown 格式书写 ;-)，代码片段黏贴时请注意使用高亮语法。',
      spellChecker: false,
      autoDownloadFontAwesome: false,
      autosave: {
        enabled: true,
        uniqueId: 'vuejs-essential'
      },
      renderingConfig: {
        codeSyntaxHighlighting: true
      }
    });
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/modules/article/Create.vue?vue&type=template&id=906f154a&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/modules/article/Create.vue?vue&type=template&id=906f154a& ***!
  \**************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "el-col",
        { staticClass: "mb-4" },
        [
          _c(
            "el-breadcrumb",
            { attrs: { "separator-class": "el-icon-arrow-right" } },
            [
              _c("el-breadcrumb-item", { attrs: { to: { path: "/" } } }, [
                _vm._v("首页")
              ]),
              _vm._v(" "),
              _c("el-breadcrumb-item", [_vm._v("活动管理")]),
              _vm._v(" "),
              _c("el-breadcrumb-item", [_vm._v("活动列表")]),
              _vm._v(" "),
              _c("el-breadcrumb-item", [_vm._v("活动详情")])
            ],
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c("div", { staticClass: "card" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "card-body" },
          [
            _c(
              "el-form",
              {
                ref: "form",
                attrs: { model: _vm.form, "label-width": "80px" }
              },
              [
                _c(
                  "el-form-item",
                  { attrs: { label: "分类" } },
                  [
                    _c(
                      "el-select",
                      {
                        attrs: { placeholder: "请选择活动区域" },
                        model: {
                          value: _vm.form.region,
                          callback: function($$v) {
                            _vm.$set(_vm.form, "region", $$v)
                          },
                          expression: "form.region"
                        }
                      },
                      [
                        _c("el-option", {
                          attrs: { label: "分类一", value: "shanghai" }
                        }),
                        _vm._v(" "),
                        _c("el-option", {
                          attrs: { label: "分类二", value: "beijing" }
                        })
                      ],
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "el-form-item",
                  { attrs: { label: "标题" } },
                  [
                    _c("el-input", {
                      model: {
                        value: _vm.form.name,
                        callback: function($$v) {
                          _vm.$set(_vm.form, "name", $$v)
                        },
                        expression: "form.name"
                      }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "el-form-item",
                  { attrs: { label: "即时配送" } },
                  [
                    _c("el-switch", {
                      model: {
                        value: _vm.form.delivery,
                        callback: function($$v) {
                          _vm.$set(_vm.form, "delivery", $$v)
                        },
                        expression: "form.delivery"
                      }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c("el-form-item", { attrs: { label: "活动形式" } }, [
                  _c("textarea", { attrs: { id: "editor" } })
                ]),
                _vm._v(" "),
                _c(
                  "el-form-item",
                  { attrs: { label: "活动性质" } },
                  [
                    _c(
                      "el-checkbox-group",
                      {
                        model: {
                          value: _vm.form.type,
                          callback: function($$v) {
                            _vm.$set(_vm.form, "type", $$v)
                          },
                          expression: "form.type"
                        }
                      },
                      [
                        _c("el-checkbox", {
                          attrs: { label: "美食/餐厅线上活动", name: "type" }
                        }),
                        _vm._v(" "),
                        _c("el-checkbox", {
                          attrs: { label: "地推活动", name: "type" }
                        }),
                        _vm._v(" "),
                        _c("el-checkbox", {
                          attrs: { label: "线下主题活动", name: "type" }
                        }),
                        _vm._v(" "),
                        _c("el-checkbox", {
                          attrs: { label: "单纯品牌曝光", name: "type" }
                        })
                      ],
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "el-form-item",
                  { attrs: { label: "特殊资源" } },
                  [
                    _c(
                      "el-radio-group",
                      {
                        model: {
                          value: _vm.form.resource,
                          callback: function($$v) {
                            _vm.$set(_vm.form, "resource", $$v)
                          },
                          expression: "form.resource"
                        }
                      },
                      [
                        _c("el-radio", { attrs: { label: "线上品牌商赞助" } }),
                        _vm._v(" "),
                        _c("el-radio", { attrs: { label: "线下场地免费" } })
                      ],
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "el-form-item",
                  { attrs: { label: "活动形式" } },
                  [
                    _c("el-input", {
                      attrs: { type: "textarea" },
                      model: {
                        value: _vm.form.desc,
                        callback: function($$v) {
                          _vm.$set(_vm.form, "desc", $$v)
                        },
                        expression: "form.desc"
                      }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "el-form-item",
                  [
                    _c(
                      "el-button",
                      {
                        attrs: { type: "primary" },
                        on: { click: _vm.onSubmit }
                      },
                      [_vm._v("立即创建")]
                    ),
                    _vm._v(" "),
                    _c("el-button", [_vm._v("取消")])
                  ],
                  1
                )
              ],
              1
            )
          ],
          1
        )
      ])
    ],
    1
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-title" }, [
      _c("h3", [_vm._v("新建")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/modules/article/Create.vue":
/*!*************************************************!*\
  !*** ./resources/js/modules/article/Create.vue ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Create_vue_vue_type_template_id_906f154a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Create.vue?vue&type=template&id=906f154a& */ "./resources/js/modules/article/Create.vue?vue&type=template&id=906f154a&");
/* harmony import */ var _Create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Create.vue?vue&type=script&lang=js& */ "./resources/js/modules/article/Create.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Create_vue_vue_type_template_id_906f154a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Create_vue_vue_type_template_id_906f154a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/modules/article/Create.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/modules/article/Create.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/modules/article/Create.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Create.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/modules/article/Create.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Create_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/modules/article/Create.vue?vue&type=template&id=906f154a&":
/*!********************************************************************************!*\
  !*** ./resources/js/modules/article/Create.vue?vue&type=template&id=906f154a& ***!
  \********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Create_vue_vue_type_template_id_906f154a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Create.vue?vue&type=template&id=906f154a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/modules/article/Create.vue?vue&type=template&id=906f154a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Create_vue_vue_type_template_id_906f154a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Create_vue_vue_type_template_id_906f154a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ 1:
/*!********************!*\
  !*** fs (ignored) ***!
  \********************/
/*! no static exports found */
/***/ (function(module, exports) {

/* (ignored) */

/***/ })

}]);