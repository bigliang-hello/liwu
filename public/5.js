(window.webpackJsonp=window.webpackJsonp||[]).push([[5],{10:function(e,t,a){"use strict";var r={data:function(){return{headers:{"X-CSRF-TOKEN":window.Laravel.csrfToken,"X-Requested-With":"XMLHttpRequest"}}},props:{category:{type:Object,default:function(){return{name:"",image:""}}}},methods:{onSubmit:function(){var e=this;if(console.log(this.category.name),console.log(this.category.image),this.category.name&&this.category.image){var t="categories"+(this.category.id?"/"+this.category.id:"");this.$http.post(t,this.category).then(function(t){e.$message({message:"操作成功",type:"success"}),e.$router.push({name:"dashboard.category"})})}else this.$message.error("请完善表单")},handleAvatarSuccess:function(e,t){this.category.image=e.path},beforeAvatarUpload:function(e){var t="image/jpeg"===e.type,a="image/png"===e.type,r=e.size/1024/1024<2;return t||a||this.$message.error("上传头像图片只能是 JPG PNG 格式!"),r||this.$message.error("上传头像图片大小不能超过 2MB!"),t&&r}}},o=(a(21),a(0)),s=Object(o.a)(r,function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("el-card",{staticClass:"box-card"},[a("div",{staticClass:"clearfix",attrs:{slot:"header"},slot:"header"},[a("span",[e._v("创建分类")])]),e._v(" "),a("el-form",{ref:"category",attrs:{model:e.category,"label-width":"80px"}},[a("el-form-item",{attrs:{label:"名称"}},[a("el-input",{model:{value:e.category.name,callback:function(t){e.$set(e.category,"name",t)},expression:"category.name"}})],1),e._v(" "),a("el-form-item",{attrs:{label:"封面"}},[a("el-upload",{staticClass:"avatar-uploader",attrs:{multiple:!1,action:"/api/images",headers:e.headers,"show-file-list":!1,"on-success":e.handleAvatarSuccess,"before-upload":e.beforeAvatarUpload}},[e.category.image?a("img",{staticClass:"avatar",attrs:{src:e.category.image}}):a("i",{staticClass:"el-icon-plus avatar-uploader-icon"})])],1),e._v(" "),a("el-form-item",{attrs:{label:"内容"}},[a("el-input",{attrs:{type:"textarea"},model:{value:e.category.description,callback:function(t){e.$set(e.category,"description",t)},expression:"category.description"}})],1),e._v(" "),a("el-form-item",[a("el-button",{attrs:{type:"primary"},on:{click:e.onSubmit}},[e._v(e._s(this.$route.params.id?"修改":"立即创建"))]),e._v(" "),a("el-button",[e._v("取消")])],1)],1)],1)],1)},[],!1,null,null,null);t.a=s.exports},21:function(e,t,a){"use strict";var r=a(7);a.n(r).a},22:function(e,t,a){(e.exports=a(3)(!1)).push([e.i,"\n.avatar-uploader .el-upload {\n    border: 1px solid #d9d9d9;\n    border-radius: 6px;\n    cursor: pointer;\n    position: relative;\n    overflow: hidden;\n}\n.avatar-uploader .el-upload:hover {\n    border-color: #409EFF;\n}\n.avatar-uploader-icon {\n    font-size: 28px;\n    color: #8c939d;\n    width: 178px;\n    height: 178px;\n    line-height: 178px;\n    text-align: center;\n}\n.avatar {\n    width: 178px;\n    height: 178px;\n    display: block;\n}\n",""])},62:function(e,t,a){"use strict";a.r(t);var r={components:{CategoryForm:a(10).a}},o=a(0),s=Object(o.a)(r,function(){var e=this.$createElement;return(this._self._c||e)("category-form")},[],!1,null,null,null);t.default=s.exports},7:function(e,t,a){var r=a(22);"string"==typeof r&&(r=[[e.i,r,""]]);var o={hmr:!0,transform:void 0,insertInto:void 0};a(4)(r,o);r.locals&&(e.exports=r.locals)}}]);