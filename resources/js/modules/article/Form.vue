<template>
<div>
    <el-card class="box-card">
        <div slot="header" class="clearfix">
            <span>创建文章</span>
            <!-- <el-button style="float: right; padding: 3px 0" type="text">操作按钮</el-button> -->
        </div>
        <el-form ref="article" :model="article" label-width="80px">
            <el-form-item label="标题">
                <el-input v-model="article.title"></el-input>
            </el-form-item>
            <el-form-item label="分类">
                <el-select v-model="selected" value-key="id" placeholder="分类">
                    <el-option v-for="cate in categories" :label="cate.name" :value="cate" :key="cate.name"></el-option>
                </el-select>
            </el-form-item>
            <el-form-item label="封面">
                <el-upload class="avatar-uploader" :multiple="false" action="/api/images" :headers="headers" :show-file-list="false" :on-success="handleAvatarSuccess" :before-upload="beforeAvatarUpload">
                    <img v-if="article.cover" :src="article.cover" class="avatar">
                    <i v-else class="el-icon-plus avatar-uploader-icon"></i>
                </el-upload>
            </el-form-item>
            <el-form-item label="内容">
                <textarea id="editor"></textarea>
            </el-form-item>

            <el-form-item>
                <el-button type="primary" @click="onSubmit">{{ this.$route.params.id?'修改':'立即创建' }}</el-button>
                <el-button>取消</el-button>
            </el-form-item>
        </el-form>
    </el-card>
</div>
</template>


<script>
import SimpleMDE from 'simplemde'

export default {
    data() {
        return {
            categories: [],
            simplemde: '',
            headers: {
                'X-CSRF-TOKEN': window.Laravel.csrfToken,
                'X-Requested-With': 'XMLHttpRequest'
            },
            selected:undefined
        }
    },
    props:{
        article: {
            type: Object,
            default () {
                return {
                    title: '',
                    cover: '',
                }
            }
        },
    },
    mounted() {
        this.simplemde = new SimpleMDE({
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
        })
    },

    created() {
        this.loadCategories();
    },

    watch: {
        article() {
            this.selected = this.article.category
            this.simplemde.value(this.article.content)
        },
        selected(value){
            console.log(value);
        }
    },

    methods: {
        loadCategories() {
            this.$http.get('categories')
                .then((response) => {
                    this.categories = response.data.data
                })
        },
        onSubmit() {
            this.article.content = this.simplemde.value();
            if(this.selected){
                this.article.category_id = this.selected.id
            }

            if (!this.article.title || !this.article.content || !this.article.cover || !this.article.category_id) {
                this.$message.error('请完善表单')
                return
            }
            let url = 'articles' + (this.article.id ? '/' + this.article.id : '')
            this.$http.post(url, this.article)
                .then((response) => {
                    this.$message({
                        message: '操作成功',
                        type: 'success'
                    });
                    this.$router.push({name:'dashboard.article'});
                })
        },
        handleAvatarSuccess(res, file) {            
            this.article.cover = res.path;
        },
        beforeAvatarUpload(file) {
            
            const isJPG = file.type === 'image/jpeg';
            const isPNG = file.type === 'image/png';
            const isLt2M = file.size / 1024 / 1024 < 2;

            if (!isJPG && !isPNG) {
                this.$message.error('上传头像图片只能是 JPG PNG 格式!');
            }
            if (!isLt2M) {
                this.$message.error('上传头像图片大小不能超过 2MB!');
            }
            return isJPG && isLt2M;
        }
    }
}
</script>

<style>
.avatar-uploader .el-upload {
    border: 1px solid #d9d9d9;
    border-radius: 6px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.avatar-uploader .el-upload:hover {
    border-color: #409EFF;
}

.avatar-uploader-icon {
    font-size: 28px;
    color: #8c939d;
    width: 178px;
    height: 178px;
    line-height: 178px;
    text-align: center;
}

.avatar {
    width: 178px;
    height: 178px;
    display: block;
}
</style>
