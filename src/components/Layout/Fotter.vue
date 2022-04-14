<template>
  <section class="section-foter">
    <div class="container">
      <div class="flex">
        <div class="row full-width hei">
          <div class="col-4">
            <div class="fotter-logo">
              <img src="logo.jpeg" alt="" class="logo-im" />
            </div>
          </div>
          <div class="col-4 powered-div">
            <div class="center powered"><p>Powered by &copy;</p></div>
          </div>
          <div class="col-4">
            <ul class="nav-ul">
              <li><router-link :to="'/'">Home</router-link></li>
              <li>
                <router-link :to="'/Services'">Services</router-link>
              </li>
              <li>
                <router-link :to="'/ContactUs'">Contact</router-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import { defineComponent } from "vue";
export default defineComponent({ name: "FotterPage", components: {} });
</script>
<style lang="scss" scoped>
.section-foter {
  height: 7rem !important;
  margin: auto;
  text-align: center;
  background-color: #fff;
  color: $fontColor;
  padding: 0;
  box-shadow: -2px -2px 4px #fff5f5;
}
.section-foter {
  margin-top: 2rem;
  .fotter-logo {
    height: 6rem;
    width: 6rem;
    margin: auto;
    padding-top: 1rem;
  }
}
.row {
  // width: (100% / 3);
}
.powered-div {
  text-align: center;
  margin: auto;
  font-size: 1rem;
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
.hei {
  height: 100%;
}
.logo-im {
  width: 90%;
  height: 90%;
  margin: auto;
}
</style>
