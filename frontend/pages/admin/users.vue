<template>

</template>

<script>
export default {
  middleware: ['auth', 'role'],
  layout: 'admin/main',
  meta: [
    {role: 'SUPER_ADMIN'},
  ],
}
</script>

<style scoped>

</style>
