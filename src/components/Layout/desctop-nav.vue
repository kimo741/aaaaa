<template>
  <span
    v-for="(link, i) in links"
    :key="i"
    class="link"
    @click="scrollToElement ('about-section')"
    :style="'font-size:' + fontSize + 'rem;' + 'font-famile:' + fontFamile"
    >{{ $t(link.name) }}</span
  >
<!--    :to="link.url"-->
</template>

<script>
import { scroll } from 'quasar'

const { getScrollTarget, setVerticalScrollPosition } = scroll

export default {
  props: {
    fontSize: {
      type: Number,
      default: () => {
        "1.1";
      },
    },
    fontFamile: {
      type: String,
      default: () => {
        "NavFont";
      },
    },
  },
  data() {
    return {
      links: [
        {
          name: 'links.home',
          url: "/",
        },
        {
          name: 'services.services',
          url: "/Services",
        },
        {
          name: 'about.aboutus',
          url: "/About",
        },
        {
          name: 'links.contact',
          url: "/ContactUs",
        },
      ],
    };
  },
  methods: {
    scrollToElement (el) {
      // const target = getScrollTarget(el)
      return console.log(document.getElementById('about-section').scrollIntoView(true))
      const offset = el.offsetTop
      const duration = 1000
      setVerticalScrollPosition(target, offset, duration)
    }
  }
};
</script>

<style lang="scss" scoped>
.link {
  position: relative;
  color: $fontColor;
  //font-family: NavFont;
  position: relative;
  margin-left: 3rem;
  font-weight: bold;
  //letter-spacing: 3px;
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
.link:first-child {
  margin-left: 0;
}
</style>
