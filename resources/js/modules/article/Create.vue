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
    <div class="card">
        <div class="card-title">
            <h3>新建</h3>
        </div>
        <div class="card-body">
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
                <el-form-item label="即时配送">
                    <el-switch v-model="form.delivery"></el-switch>
                </el-form-item>
                <el-form-item label="活动形式">
                    <textarea id="editor"></textarea>
                </el-form-item>
                <el-form-item label="活动性质">
                    <el-checkbox-group v-model="form.type">
                        <el-checkbox label="美食/餐厅线上活动" name="type"></el-checkbox>
                        <el-checkbox label="地推活动" name="type"></el-checkbox>
                        <el-checkbox label="线下主题活动" name="type"></el-checkbox>
                        <el-checkbox label="单纯品牌曝光" name="type"></el-checkbox>
                    </el-checkbox-group>
                </el-form-item>
                <el-form-item label="特殊资源">
                    <el-radio-group v-model="form.resource">
                        <el-radio label="线上品牌商赞助"></el-radio>
                        <el-radio label="线下场地免费"></el-radio>
                    </el-radio-group>
                </el-form-item>
                <el-form-item label="活动形式">
                    <el-input type="textarea" v-model="form.desc"></el-input>
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="onSubmit">立即创建</el-button>
                    <el-button>取消</el-button>
                </el-form-item>
            </el-form>
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
    }
}
</script>
