<template>
  <a :href="link + label" class="text-black icon-label ">
    <q-icon :size="iconSize + 'rem'" class="icon-label" color="black" :name="icon" />
    {{ label }}
  </a>
</template>

<script>
  export default {
    props: {
      icon:{
        type: String
      },
      label:{
        type: String
      },
      link:{
        type: String,
      },
      iconSize:{
        type: String
      },

    }
  }
</script>

<style lang="scss">
.icon-label {
  font-size: 0.7rem;
  text-decoration: none;
}
</style>
