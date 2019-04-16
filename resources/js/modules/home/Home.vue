<template>
<section>
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
                <el-button type="primary" @click="handleAdd">新增</el-button>
            </el-form-item>
        </el-form>
    </el-col>
    <el-table :data="tableData" style="width: 100%">
        <el-table-column prop="date" label="日期">
        </el-table-column>
        <el-table-column prop="name" label="姓名">
        </el-table-column>
        <el-table-column prop="address" label="地址">
        </el-table-column>
    </el-table>
</section>
</template>

  <script>
    export default {
      data() {
        return {
          filters: {
					  name: ''
				  },
          tableData: [{
            date: '2016-05-02',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1518 弄'
          }, {
            date: '2016-05-04',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1517 弄'
          }, {
            date: '2016-05-01',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1519 弄'
          }, {
            date: '2016-05-03',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1516 弄'
          }]
        }
      },
      methods:{
        handleAdd(){

        },
        getUsers(){

        }
      }
    }
  </script>

  <style>


  </style>
