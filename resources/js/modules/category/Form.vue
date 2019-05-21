<template>
<div>
    <el-card class="box-card">
        <div slot="header" class="clearfix">
            <span>创建分类</span>
        </div>
        <el-form ref="category" :model="category" label-width="80px">
            <el-form-item label="名称">
                <el-input v-model="category.name"></el-input>
            </el-form-item>
            <el-form-item label="封面">
                <el-upload class="avatar-uploader" :multiple="false" action="/api/images" :headers="headers" :show-file-list="false" :on-success="handleAvatarSuccess" :before-upload="beforeAvatarUpload">
                    <img v-if="category.image" :src="category.image" class="avatar">
                    <i v-else class="el-icon-plus avatar-uploader-icon"></i>
                </el-upload>
            </el-form-item>
            <el-form-item label="内容">
                <el-input type="textarea" v-model="category.description"></el-input>
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

export default {
    data() {
        return {
            headers: {
                'X-CSRF-TOKEN': window.Laravel.csrfToken,
                'X-Requested-With': 'XMLHttpRequest'
            },
        }
    },
    props:{
        category: {
            type: Object,
            default () {
                return {
                    name: '',
                    image: '',
                }
            }
        },
    },

    methods: {

        onSubmit() {

            console.log(this.category.name);
            console.log(this.category.image);
            
            if (!this.category.name || !this.category.image) {
                this.$message.error('请完善表单')
                return
            }
            let url = 'categories' + (this.category.id ? '/' + this.category.id : '')
            this.$http.post(url, this.category)
                .then((response) => {
                    this.$message({
                        message: '操作成功',
                        type: 'success'
                    });
                    this.$router.push({name:'dashboard.category'});
                })
        },
        handleAvatarSuccess(res, file) {            
            this.category.image = res.path;
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