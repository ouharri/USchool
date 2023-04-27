<template>
  <div class="lds-ellipsis">
    <div :class="`bg-${bg}`"></div>
    <div :class="`bg-${bg}`"></div>
    <div :class="`bg-${bg}`"></div>
    <div :class="`bg-${bg}`"></div>
  </div>
</template>

<script>
export default {
  name: "spinner",
  props: {
    bg: {
      type: String,
      default: 'blue-600',
    },
  },
}
</script>
