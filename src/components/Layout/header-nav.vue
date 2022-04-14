<template>
  <div class="container-header full-width">
    <div class="row full-width main-logo">
      <div class="text-center full-width">
        <!-- LA DUNE -->
        <q-img src="logo.png" />
      </div>
      <div class="text-center full-width">
        <ul class="nav-ul full-width">
          <li><router-link :to="'/'">Home</router-link></li>
          <li>
            <router-link :to="'/Services'">Services</router-link>
          </li>
          <li>
            <router-link :to="'ContactUs'">Contact</router-link>
          </li>
        </ul>
      </div>
    </div>

    <!-- <div class="full-width Inline Flex row justify-evenly main-header">
      <div class="heder-context col">
        <div class="flex column">
          <h1 class="heder-context__h1">Hello, so good to see you!</h1>

          <b class="heder-context__b"
            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
            obcaecati nobis porro placeat voluptatibus necessitatibus debitis
            eligendi, architecto rerum quos magni, a excepturi iusto error
            perspiciatis accusamus rem facere quisquam.</b
          >
          <div class="but">
            <q-btn
              color="black"
              label="contact me"
              size="1.1rem"
              class="edd-but"
            />
          </div>
        </div>
      </div>
      <div class="col image-header">
        <img src="../../../public/wa.jpeg" class="image-head" />
      </div>
    </div> -->
  </div>
</template>
<script>
import { defineComponent, ref } from "vue";

export default defineComponent({
  name: "HeaderNav",
});
</script>
<style lang="scss" scoped>
.container-header {
  // height: 100vh;
  position: relative;
}
.main-logo {
  font-size: 3rem;
  font-weight: 800;
}
.nav-ul {
  display: flex;
  justify-content: center;
  align-content: center;
  list-style: none;
  font-size: 1rem;
  text-align: center;
  padding: 0 !important;
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
