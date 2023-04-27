<template>
  <transition>
    <div>
      <div class="text-2xl font-bold h-screen w-screen flex flex-col justify-center items-center" :class="`text-${theme.color.primary}`">
        <img src="/lg-logo.svg" alt="USchool Logo"/>
        <div class="lds-ellipsis">
          <div :class="`bg-${theme.color.primary}`"></div>
          <div :class="`bg-${theme.color.primary}`"></div>
          <div :class="`bg-${theme.color.primary}`"></div>
          <div :class="`bg-${theme.color.primary}`"></div>
        </div>
      </div>
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
