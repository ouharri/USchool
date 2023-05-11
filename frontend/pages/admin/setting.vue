<template>
</template>

<script>
export default {
  name: "setting",
  middleware: ['auth', 'role'],
  layout: 'admin/main',
  meta: [
    {role: 'SUPER_ADMIN'},
  ],
}
</script>

<script setup>
import {onMounted, reactive, ref} from "vue";
import Chart from '@/plugins/chart';
import {userStore} from "~/stores/user";
import AppModal from "~/components/shared/modal/app-modal.vue";
import DelModal from "~/components/shared/modal/del-modal.vue";

const user = userStore();

const theme = reactive(
  {
    mode: process.client ? window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches ? 'dark' : 'light' : 'dark',
    color: {
      primary: 'blue-600',
      accent: 'blue-400'
    }
  }
);


onMounted(() => {

})


</script>

<style scoped>

</style>
