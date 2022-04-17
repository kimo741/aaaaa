<template>
  <a
    :href="link + (label ? label : '')"
    :target="target"
    :class="textColor"
    class="icon-label"
  >
    <q-icon
      :size="iconSize + 'rem'"
      class="icon-label"
      :color="color"
      :name="icon"
    />
    {{ label }}
  </a>
</template>

<script>
export default {
  props: {
    icon: {
      type: String,
    },
    label: {
      type: String,
    },
    target: {
      type: String,
      default: "",
    },
    link: {
      type: String,
    },
    iconSize: {
      type: String,
    },
    color: {
      type: String,
    },
    textColor: {
      type: String,
    },
  },
};
</script>

<style lang="scss" scoped>
.icon-label {
  font-size: 0.7rem;
  text-decoration: none;
}
</style>
