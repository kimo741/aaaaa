<template>
  <q-img src="logo.jpeg" :class="className" :style="Style" :width="width + 'px' " />
</template>

<script>
  export default {
    props: {
      className: {
        type: String
      },
      style: {
        type: String,
        default: () => { 'width: 150px' }
      },
      width: {
        type: String,
      }
    }
  }
</script>
