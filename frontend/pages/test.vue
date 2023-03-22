<template>
  <div>
    <div>
      <el-button
        plain
        @click="open1">
        Success
      </el-button>
    </div>
    <div>
      <el-button
        @click="open2">
        error
      </el-button>
    </div>
  </div>

</template>

<script>
export default {
  methods: {
    open1() {
      this.$notify({
        title: 'Success',
        message: 'This is a success message',
        type: 'success'
      });
    },

    open2() {
      this.$notify({
        title: 'Warning',
        message: 'This is a warning message',
        type: 'warning'
      });
    },

    open3() {
      this.$notify.info({
        title: 'Info',
        message: 'This is an info message'
      });
    },

    open4() {
      this.$notify.error({
        title: 'Error',
        message: 'This is an error message'
      });
    }
  }
}
</script>
