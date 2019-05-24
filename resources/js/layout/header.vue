<template>
  <div class="my-navbar">
    <div class="logo">liwu233.com</div>
    <div class="user-icon">
      <el-popover placement="bottom" title="标题" width="200" trigger="click">
        <el-table :data="gridData">
          <el-table-column width="150" property="date" label="日期"></el-table-column>
          <el-table-column width="100" property="name" label="姓名"></el-table-column>
          <el-table-column width="300" property="address" label="地址"></el-table-column>
        </el-table>

        <el-button slot="reference">
          <div>激活</div>
        </el-button>
      </el-popover>
    </div>
  </div>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      gridData: []
    };
  }
};
</script>

<style lang="scss" scoped>
.my-navbar {
  height: 60px;
  min-height: 60px;
  background-color: white;
  display: flex;
  align-items: center;
}
.logo {
  line-height: 60px;
  width: 300px;
}
.user-icon{
  flex: 1;
  text-align: right;
}
</style>
