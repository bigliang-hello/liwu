(window.webpackJsonp=window.webpackJsonp||[]).push([[3],{43:function(e,t){},84:function(e,t,l){"use strict";l.r(t);var r=l(14),a=l.n(r),o={data:function(){return{form:{name:"",region:"",date1:"",date2:"",delivery:!1,type:[],resource:"",desc:""}}},methods:{onSubmit:function(){console.log("submit!")}},mounted:function(){new a.a({element:document.querySelector("#editor"),placeholder:"请使用 Markdown 格式书写 ;-)，代码片段黏贴时请注意使用高亮语法。",spellChecker:!1,autoDownloadFontAwesome:!1,autosave:{enabled:!0,uniqueId:"vuejs-essential"},renderingConfig:{codeSyntaxHighlighting:!0}})}},s=l(0),n=Object(s.a)(o,function(){var e=this,t=e.$createElement,l=e._self._c||t;return l("div",[l("el-col",{staticClass:"mb-4"},[l("el-breadcrumb",{attrs:{"separator-class":"el-icon-arrow-right"}},[l("el-breadcrumb-item",{attrs:{to:{path:"/"}}},[e._v("首页")]),e._v(" "),l("el-breadcrumb-item",[e._v("活动管理")]),e._v(" "),l("el-breadcrumb-item",[e._v("活动列表")]),e._v(" "),l("el-breadcrumb-item",[e._v("活动详情")])],1)],1),e._v(" "),l("div",{staticClass:"card"},[e._m(0),e._v(" "),l("div",{staticClass:"card-body"},[l("el-form",{ref:"form",attrs:{model:e.form,"label-width":"80px"}},[l("el-form-item",{attrs:{label:"分类"}},[l("el-select",{attrs:{placeholder:"请选择活动区域"},model:{value:e.form.region,callback:function(t){e.$set(e.form,"region",t)},expression:"form.region"}},[l("el-option",{attrs:{label:"分类一",value:"shanghai"}}),e._v(" "),l("el-option",{attrs:{label:"分类二",value:"beijing"}})],1)],1),e._v(" "),l("el-form-item",{attrs:{label:"标题"}},[l("el-input",{model:{value:e.form.name,callback:function(t){e.$set(e.form,"name",t)},expression:"form.name"}})],1),e._v(" "),l("el-form-item",{attrs:{label:"即时配送"}},[l("el-switch",{model:{value:e.form.delivery,callback:function(t){e.$set(e.form,"delivery",t)},expression:"form.delivery"}})],1),e._v(" "),l("el-form-item",{attrs:{label:"活动形式"}},[l("textarea",{attrs:{id:"editor"}})]),e._v(" "),l("el-form-item",{attrs:{label:"活动性质"}},[l("el-checkbox-group",{model:{value:e.form.type,callback:function(t){e.$set(e.form,"type",t)},expression:"form.type"}},[l("el-checkbox",{attrs:{label:"美食/餐厅线上活动",name:"type"}}),e._v(" "),l("el-checkbox",{attrs:{label:"地推活动",name:"type"}}),e._v(" "),l("el-checkbox",{attrs:{label:"线下主题活动",name:"type"}}),e._v(" "),l("el-checkbox",{attrs:{label:"单纯品牌曝光",name:"type"}})],1)],1),e._v(" "),l("el-form-item",{attrs:{label:"特殊资源"}},[l("el-radio-group",{model:{value:e.form.resource,callback:function(t){e.$set(e.form,"resource",t)},expression:"form.resource"}},[l("el-radio",{attrs:{label:"线上品牌商赞助"}}),e._v(" "),l("el-radio",{attrs:{label:"线下场地免费"}})],1)],1),e._v(" "),l("el-form-item",{attrs:{label:"活动形式"}},[l("el-input",{attrs:{type:"textarea"},model:{value:e.form.desc,callback:function(t){e.$set(e.form,"desc",t)},expression:"form.desc"}})],1),e._v(" "),l("el-form-item",[l("el-button",{attrs:{type:"primary"},on:{click:e.onSubmit}},[e._v("立即创建")]),e._v(" "),l("el-button",[e._v("取消")])],1)],1)],1)])],1)},[function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"card-title"},[t("h3",[this._v("新建")])])}],!1,null,null,null);t.default=n.exports}}]);