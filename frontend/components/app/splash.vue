<template>
  <transition>
    <div>
      <p class="text-2xl font-bold h-screen w-screen flex justify-center items-center">USchool</p>
    </div>
  </transition>
</template>

<script>
import {reactive} from "vue";

export default {
  name: "splash",
  data() {
    return {
      theme: reactive(
        {
          mode: process.client ? window.matchMedia &&
          window.matchMedia("(prefers-color-scheme: dark)").matches ? 'dark' : 'light' : 'dark',
          color: {
            primary: 'blue-600',
            accent: 'blue-400'
          }
        }
      ),
    }
  },
}
</script>

<style scoped>

</style>
