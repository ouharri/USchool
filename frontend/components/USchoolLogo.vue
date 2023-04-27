<template>
<div>
  <span class="hidden" :class="IsOpenSemiSide? '':'md:block'">US</span>
  <span :class="IsOpenSemiSide? 'block':'hidden'">
    <img src="/lg-logo.svg" alt="USchool Logo"/>
  </span>
  <span class="hidden" id="Logo">
    <img src="/lg-logo.svg" alt="USchool Logo"/>
  </span>
</div>
</template>

<script>
export default {
  name: "USchoolLogo",
  props: {
    IsOpenSemiSide: {
      type: Boolean,
      default: false,
    },
  },
}
</script>

<style scoped>

</style>
