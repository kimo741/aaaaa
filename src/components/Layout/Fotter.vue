<template>
  <section class="section-foter">
    <div class="container">
      <div class="flex">
        <div class="row hei">
          <div class="col-4">
            <div class="fotter-logo">
              <img src="logo.jpeg" alt="" class="logo-im" />
            </div>
          </div>
          <div class="col-4 powered-div">
            <div class="center powered"><p>Powered by &copy;</p></div>
          </div>
          <div class="col-4 nav-toggle-screen">
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
  box-sizing: border-box;
  margin: auto;
  text-align: center;
  background-color: $sucColor;
  color: $fontColor;
  padding: 0;
  box-shadow: -2px -2px 4px $maincolor;
}

.section-foter {
  .fotter-logo {
    height: 6rem;
    width: 6rem;
    margin: auto;
    padding-top: 1rem;
  }
}

.powered-div {
  text-align: center;
  margin: auto;
  font-size: 1rem;
}
.nav-ul {
  display: flex;
  justify-content: center;
  list-style: none;
  font-size: 1rem;
  text-align: center;
  padding: 0 !important;
  width: 100%;
  max-width: 100%;
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
  width: 100%;
  max-width: 100%;
  box-sizing: 100%;
}
.logo-im {
  width: 90%;
  height: 90%;
  margin: auto;
}
@media screen and (max-width: 800px) and (min-width: 200px) {
  // .section-foter {
  //   width: 100%;
  //   bottom: 100%;
  //   display: block;
  //   z-index: 65515;
  //   left: 0;
  // }
  .nav-ul {
    flex-direction: column;
    width: 100%;
    height: 100%;
  }
  .nav-toggle-screen {
    display: none;
  }
}
</style>
