<template>
<section> 
    <el-row>
      <el-col :span="24" class="toolbar" style="padding:10px 24px;">
        <router-link :to="{ name: 'dashboard.category.create' }" class="el-button el-button--primary float-right">新增</router-link>
      </el-col>
    </el-row>   
    <el-row style="padding:24px; background-color:#fff;" class="mt-2">
        <el-table border :data="categories" style="width: 100%">
            <el-table-column prop="id" label="ID">
            </el-table-column>
            <el-table-column prop="name" label="名称">
            </el-table-column>
            <el-table-column prop="description" label="描述">
            </el-table-column>
            <el-table-column label="封面">
                <template slot-scope="scope">
                    <img style="width:200px; height:150px;" :src=scope.row.image />
                </template>
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
          categories:[],
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
        getCategories()
        {
          this.$http.get('categories', {
                params: {
                  page: this.currentPage,
                  keyword: this.keyword,
                }
              })
              .then((response) => {
                
                this.categories = response.data.data;
                this.pagination = response.data.meta.pagination;
              })
        },
        handleCurrentChange(val)
        {
          this.currentPage = val;
          this.getCategories();
        },
        handleEdit(index, row) {
          this.$router.push({
            name: 'dashboard.category.edit',
            params: {
              id: row.id
            }
          })
        },
        handleDelete(index, row) {
          this.$http.delete('categories/'+ row.id)
              .then((response) => {
                this.$message({
                        message: '删除成功',
                        type: 'success'
                    });
                this.getCategories();
              })
        }


      },
      created(){
        this.getCategories();
      }
    }
  </script>

  <style>


  </style>
