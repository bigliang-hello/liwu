<template>
<div>
    <el-col class="mb-4">
        <el-breadcrumb separator-class="el-icon-arrow-right">
            <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
            <el-breadcrumb-item>活动管理</el-breadcrumb-item>
            <el-breadcrumb-item>活动列表</el-breadcrumb-item>
            <el-breadcrumb-item>活动详情</el-breadcrumb-item>
        </el-breadcrumb>
    </el-col>
    <el-card class="box-card">
        <div slot="header" class="clearfix">
            <span>创建文章</span>
            <!-- <el-button style="float: right; padding: 3px 0" type="text">操作按钮</el-button> -->
        </div>
        <el-form ref="form" :model="form" label-width="80px">
            <el-form-item label="分类">
                <el-select v-model="form.region" placeholder="请选择活动区域">
                    <el-option label="分类一" value="shanghai"></el-option>
                    <el-option label="分类二" value="beijing"></el-option>
                </el-select>
            </el-form-item>
            <el-form-item label="标题">
                <el-input v-model="form.name"></el-input>
            </el-form-item>

            <el-form-item label="内容">
                <textarea id="editor"></textarea>
            </el-form-item>

            <el-form-item>
                <el-button type="primary" @click="onSubmit">立即创建</el-button>
                <el-button>取消</el-button>
            </el-form-item>
        </el-form>
    </el-card>
</div>

</div>
</div>
</template>


<script>
import SimpleMDE from 'simplemde'

export default {
    data() {
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
        }
    },
    methods: {
        onSubmit() {
            console.log('submit!');
        }
    },
    mounted() {
        const simplemde = new SimpleMDE({
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

    methods: {
        loadCategories() {

            this.$http.get('categories')
                .then((response) => {
                    console.log(response.data.data);
                    this.options = response.data.data
                })
        },
    }
}
</script>
