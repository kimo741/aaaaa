<template>
  <section class="section-nav">
    <div class="container-header full-width">
      <div class="row full-width main-logo">
        <div class="text-center full-width">
          <!-- LA DUNE -->
          <logo-img :width="150" />
        </div>
        <div class="text-center full-width">
          <ul class="nav-ul full-width">
            <li>
              <a @click="toId"> Home</a>
            </li>
            <li>
              <a @click="toId">Services</a>
            </li>
            <li>
              <a @click="toId">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import { defineComponent, ref } from "vue";
import LogoImg from "components/Layout/LogoImg";
import { scroll } from "quasar";
const { getScrollTarget, setVerticalScrollPosition } = scroll;

export default defineComponent({
  name: "HeaderNav",
  components: { LogoImg },

  methods: {
    toId() {
      console.log(this.$refs.homePage);
    },
  },
});
</script>
<style lang="scss" scoped>
.container-header {
  background-color: $sucColor;
  position: relative;
}
.main-logo {
  font-size: 3rem;
  font-weight: 800;
  .logo {
    width: 150px;
  }
}
.nav-ul {
  display: flex;
  justify-content: center;
  align-content: center;
  list-style: none;
  font-size: 1rem;
  li {
    padding: 1rem;
    a {
      color: $fontColor;
      font-family: NavFont;
      position: relative;
      margin-left: 3rem;
      font-weight: bold;
      font-size: 1.1rem;
      letter-spacing: 3px;
      text-decoration: none;

      &::after {
        content: "";
        position: absolute;
        width: 0;
        height: 3px;
        top: 120%;
        left: -10%;
        background-color: $fontColor;
      }

      &:hover {
        &::after {
          transition: all 0.4s ease-in-out;
          width: 120%;
        }
      }
    }
  }
}
.heder-context {
  padding-left: 10%;
  padding-right: 10%;
  height: 100%;
  overflow: hidden;

  &__h1 {
    font-family: NavFont;
    font-weight: 300;
    font-size: 5rem;
    color: $fontColor;
  }
  &__b {
    font-family: NavFont;
    font-weight: 200;
    font-size: 1.1rem;
  }
}
</style>
