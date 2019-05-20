<template>
<section>
    <el-row>
      <el-col :span="24" class="toolbar" style="padding:10px 24px;">
          <el-form :inline="true" :model="filters">
              <el-form-item>
                  <el-input v-model="search" placeholder="姓名"></el-input>
              </el-form-item>
              <el-form-item>
                  <el-button type="primary" v-on:click="searchArticle()">查询</el-button>
              </el-form-item>
              <el-form-item>
                  <router-link :to="{ name: 'dashboard.article.create' }" class="el-button el-button--primary">新增</router-link>
              </el-form-item>
          </el-form>
      </el-col>
    </el-row>
    
    <el-row style="padding:24px; background-color:#fff;" class="mt-2">
        <el-table border :data="articles" style="width: 100%">
            <el-table-column prop="id" label="ID">
            </el-table-column>
            <el-table-column prop="title" label="标题">
            </el-table-column>
            <el-table-column prop="created_at" label="创建日期">
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
            @current-change="handleCurrentChange"
            :current-page.sync="currentPage"
            :page-size="pagination.per_page"
            layout="total, prev, pager, next"
            :total="pagination.total">
          </el-pagination>
        </div>
    </el-row>
    
  
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
          search:'',
          keyword:'',
        }
      },
      methods:{
        searchArticle(){
          this.keyword = this.search;
          this.getArticles();
        },
        getArticles()
        {
          this.$http.get('articles', {
                params: {
                  page: this.currentPage,
                  keyword: this.keyword,
                }
              })
              .then((response) => {
                
                this.articles = response.data.data;
                this.pagination = response.data.meta.pagination;
              })
        },
        handleCurrentChange(val)
        {
          this.currentPage = val;
          this.getArticles();
        },
        handleEdit(index, row) {
          this.$router.push({
            name: 'dashboard.article.edit',
            params: {
              id: row.id
            }
          })
        },
        handleDelete(index, row) {
          this.$http.delete('articles/'+ row.id)
              .then((response) => {
                this.$message({
                        message: '删除成功',
                        type: 'success'
                    });
                this.getArticles();
              })
        }


      },
      created(){
        this.getArticles();
      }
    }
  </script>

  <style>


  </style>
