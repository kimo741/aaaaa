<template>
  <div class="row full-width main-logo">
    <div class="text-center full-width">LA DUNE</div>
    <div class="text-center full-width">
      <ul class="nav-ul full-width">
        <li><router-link :to="'/home'">Home</router-link></li>
        <li>
          <router-link :to="'/home'">Services</router-link>
        </li>
        <li>
          <router-link :to="'/home'">About Me</router-link>
        </li>
        <li>
          <router-link :to="'/home'">Contact</router-link>
        </li>
        <li>
          <router-link :to="'/home'">Blog</router-link>
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
import { defineComponent, ref } from "vue";

export default defineComponent({
  name: "HeaderNav",
});
</script>
<style lang="scss">
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
  li {
    padding: 1rem;
    a {
      color: black;
      position: relative;
      margin-left: 3rem;
      font-weight: 600;
      text-decoration: none;
      &::after {
        content: "";
        position: absolute;
        width: 0;
        height: 3px;
        top: 120%;
        left: -10%;
        background-color: #000;
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
</style>
