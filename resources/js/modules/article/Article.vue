<template>
<section>
    <div class="row">
      <el-col class="mb-4">
        <el-breadcrumb separator-class="el-icon-arrow-right">
            <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
            <el-breadcrumb-item>活动管理</el-breadcrumb-item>
            <el-breadcrumb-item>活动列表</el-breadcrumb-item>
            <el-breadcrumb-item>活动详情</el-breadcrumb-item>
        </el-breadcrumb>
    </el-col>
    <el-col :span="24" class="toolbar">
        <el-form :inline="true" :model="filters">
            <el-form-item>
                <el-input v-model="filters.name" placeholder="姓名"></el-input>
            </el-form-item>
            <el-form-item>
                <el-button type="primary" v-on:click="getUsers">查询</el-button>
            </el-form-item>
            <el-form-item>
                <router-link :to="{ name: 'dashboard.article.create' }" class="el-button el-button--primary">新增</router-link>
            </el-form-item>
        </el-form>
    </el-col>
    </div>
    
    <div style="padding:24px; background-color:#fff;">
        <el-table border :data="articles" style="width: 100%">
            <el-table-column prop="id" label="ID">
            </el-table-column>
            <el-table-column prop="title" label="标题">
            </el-table-column>
            <el-table-column prop="content" label="内容">
            </el-table-column>
            <el-table-column label="操作">
              <template slot-scope="scope">
                <el-button
                  size="mini"
                  @click="handleEdit(scope.$index, scope.row)">编辑</el-button>
                <el-button
                  size="mini"
                  type="danger"
                  @click="handleDelete(scope.$index, scope.row)">删除</el-button>
              </template>
            </el-table-column>
        </el-table>
        <div class="block" style="float: right;margin-top: 15px">
          <el-pagination
            @size-change="handleSizeChange"
            @current-change="handleCurrentChange"
            :current-page.sync="currentPage"
            :page-size="pagination.per_page"
            layout="total, prev, pager, next"
            :total="pagination.total">
          </el-pagination>
        </div>
    </div>
    
  
</section>
</template>

  <script>
    export default {
      data() {
        return {
          filters:{
            name:""
          },
          articles:[],
          pagination:{
            'total': 0,
            'per_page': 10,
          },
          currentPage: 1,
        }
      },
      methods:{
        getUsers(){

        },
        getArticles(page)
        {
          this.$http.get('articles', {
                params: {
                  page: page
                }
              })
              .then((response) => {
                console.log(response.data);
                this.articles = response.data.data;
                this.pagination = response.data.meta.pagination;
              })
        },
        handleSizeChange(val)
        {
          console.log(`每页 ${val} 条`);
        },
        handleCurrentChange(val)
        {
          this.getArticles(val);
        },
        handleEdit(index, row) {
        console.log(index, row);
        },
        handleDelete(index, row) {
          console.log(index, row);
        }


      },
      created(){
        this.getArticles(1);
      }
    }
  </script>

  <style>


  </style>
