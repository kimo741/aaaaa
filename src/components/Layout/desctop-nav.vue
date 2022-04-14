<template>
    <router-link
      v-for="(link, i) in links"
      :key="i"
      :to="link.url"
      class="link"
      :style="'font-size:' + fontSize + 'rem;' + 'font-famile:' + fontFamile"
    >{{ link.name }}</router-link
    >
</template>

<script>
export default {
  props: {
    fontSize: {
      type: Number,
      default: () => {'1.1'}
    },
    fontFamile: {
      type: String,
      default: () => {'NavFont'}
    }
  },
  data() {
    return {
      links: [
        {
          name: "Home",
          url: "/"
        },
        {
          name: "Services",
          url: "/Services"
        },
        {
          name: "About",
          url: "/About"
        },
        {
          name: "ContactUs",
          url: "/ContactUs"
        },
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
.link {
  position: relative;
  color: $fontColor;
  font-family: NavFont;
  position: relative;
  margin-left: 3rem;
  font-weight: bold;
  letter-spacing: 3px;
  text-decoration: none;
  &::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 1px;
    background-color: #000;
    transition: 0.3s ease-in-out;
  }
  &:hover {
    &::before {
      width: 100%;
    }
  }
}
</style>
