<template>
  <section
    id="homePage"
    ref="homePage"
    style="height: 97vh   overflow: hidden;padding: 30px 0; "
  >
    <div class="container-fluid">
      <div class="row">
        <!-- <div class="row col-lg">
          <div class="col-12 .d-xg-none .d-lg-none .d-md-none"></div> -->
        <!-- this is just in smal screen -->
        <!-- </div> -->
        <div class="del-marg col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="row">
            <div
              @click="scrollToElement('services')"
              class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col__main-eader col__main-eader--1"
            >
              <div class="overflow-hidden">
                <img class="hover-iamge" src="1-3-min.png" />
              </div>
              <div
                class="q-x-auto z-max captions"
                style="
                  position: absolute;
                  top: 40%;
                  left: 79%;
                  display: inline-block;
                  width: 0px;
                  font-size: 3rem;
                  color: #fff;
                  font-weight: 800;
                "
              >
                تخطيط
              </div>
            </div>
            <div
              @click="scrollToElement('services')"
              class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col__main-eader col__main-eader--2"
            >
              <div class="overflow-hidden">
                <img class="hover-iamge" src="1-3-min.png" />
              </div>
              <div
                class="q-x-auto z-max captions"
                style="
                  position: absolute;
                  top: 50%;
                  left: 79%;
                  display: inline-block;
                  width: 0px;
                  font-size: 3rem;
                  color: #fff;
                  font-weight: 800;
                "
              >
                تسويق
              </div>
            </div>
            <div
              @click="scrollToElement('services')"
              class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col__main-eader col__main-eader--3"
            >
              <div class="overflow-hidden">
                <img class="hover-iamge" src="1-3-min.png" />
              </div>
              <div
                class="q-x-auto z-max captions"
                style="
                  position: absolute;
                  top: 60%;
                  left: 79%;
                  display: inline-block;
                  width: 0px;
                  font-size: 3rem;
                  color: #fff;
                  font-weight: 800;
                "
              >
                تصميم
              </div>
            </div>
            <div
              @click="scrollToElement('services')"
              class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col__main-eader col__main-eader--4"
            >
              <div class="overflow-hidden">
                <img class="hover-iamge" src="1-3-min.png" />
              </div>
              <div
                class="q-x-auto z-max captions"
                style="
                  position: absolute;
                  top: 70%;
                  left: 73%;
                  display: inline-block;
                  width: 0px;
                  font-size: 3rem;
                  color: #fff;
                  font-weight: 800;
                "
              >
                تصوير
              </div>
            </div>
            <!--            <div-->
            <!--              class="col-xl-3 col-md-3 col-sm-6 col-xs-6 col-lg-3 col__main-eader col__main-eader&#45;&#45;2"-->
            <!--            >-->
            <!--              <img class="col__main-eader&#45;&#45;image" src="1-2-min.png" />-->
            <!--            </div>-->
            <!--            <div-->
            <!--              class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col__main-eader col__main-eader&#45;&#45;3"-->
            <!--            >-->
            <!--              <img class="col__main-eader&#45;&#45;image" src="1-2-min.png" />-->
            <!--            </div>-->
            <!--            <div-->
            <!--              class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 col__main-eader col__main-eader&#45;&#45;4"-->
            <!--            >-->
            <!--              <img class="col__main-eader&#45;&#45;image" src="1-2-min.png" />-->
            <!--            </div>-->
          </div>
        </div>
        <div
          class="col-xl-4 col-lg-4 col-md-4 col-sm-0 col-xs-0 diplayh left-header overflow-hidden"
        >
          <div style="transform: translate(-30%, 100%)">
            <img src="logo.png" />
          </div>
          <q-space />
          <div class="name-logo">La Dune</div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import { defineComponent } from "vue";

export default defineComponent({
  name: "ErrorNotFound",
  components: {},
  methods: {
    scrollToElement(el) {
      document.getElementById(el).scrollIntoView({ behavior: "smooth" });
    },
  },
});
</script>
<style lang="scss" scoped>
.captions {
  font-size: 3rem !important;
}
@media screen and (max-width: 1200px) and (min-width: 1000px) {
  .captions {
    font-size: 4rem !important;
    left: 23%;
  }
}
#homePage {
}
.hover-iamge {
  animation: righttBackground 15s ease-in-out infinite;
}

.col__main-eader:hover {
  transition: all 0.56s ease-in-out;
  transform: translateY(-1%);
}
@keyframes righttBackground {
  0% {
    transform: translateX(800px);
  }
  25% {
    transform: translateX(600px);
  }
  35% {
    transform: translateX(300px);
  }
  50% {
    transform: translateX(0);
  }
  65% {
    transform: translateX(300px);
  }
  80% {
    transform: translateX(600px);
  }
  100% {
    transform: translateX(800px);
  }
}
.left-header {
  position: relative;
  background-image: url(/Group-200-min.png);
  background-position-y: bottom;
  background-size: 100%;
  background-repeat: no-repeat;
  max-width: 100%;

  .name-logo {
    right: 10%;
    transform: translate(-50%, 50%);
    color: #fff;
    font-weight: 500;
    position: absolute;
    top: 74%;
    font-size: 3rem;
  }
}
.col__main-eader {
  position: relative;
  height: calc(100vh - 50px) !important;
  width: 15vw;
  margin: 0 auto;
  cursor: pointer;

  &--1 {
    padding: 0 2.6%;
    background-color: #4d217a;
    height: 35vh !important;
    .hover-image {
      position: absolute;
      top: 0;
      left: 0;
      transform: translate(-73%);
      transition: all 0.3s eas-in-out;
    }
  }
  // &--1 div {
  //   width: 100%;
  //   height: 100%;
  //   background-image: url("/1-min.jpg");
  //   background-size: 200% 200%;
  //   animation: AnimateBG 20s ease infinite !important;
  // }
  // &--2 {
  //   padding: 0 2.6%;
  //   .hover-image {
  //     position: absolute;
  //     top: 0;
  //     left: 0;
  //     transform: translate(-73%);
  //     transition: all 0.3s eas-in-out;
  //   }
  // }
  &--2 {
    padding: 0 2.6%;
    height: 60vh !important;

    background-size: 200% 200%;
    animation: AnimateBG 20s ease infinite !important;
    background-color: #ed1b24;
  }
  &--3 {
    padding: 0 2.6%;
    background-color: #fdb813;
    height: 77vh !important;
  }
  &--4 {
    padding: 0 2.6%;
    height: 94vh !important;
    background-color: #0065b3;
  }
  &--image {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%, 0);
    width: 80%;
    height: 100%;
    margin: auto;
    cursor: pointer;
  }
}
@media screen and (max-width: 900px) and (min-width: 300px) {
  .col__main-eader {
    height: 50vh !important;
  }
  .diplayh {
    display: none;
  }
}
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
.image-header {
  width: 70% !important;
  height: 100%;
}

.pading-cont {
  width: 50%;
}
.main-header {
  //background-color: $maincolor;
  height: 100vh;
}
.but {
  padding-top: 15%;
}
.edd-but {
  opacity: 0.8;
  font-size: 1rem !important;
  font-weight: 300 !important;
  padding: 1rem 2rem;
}
.image-head {
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
@media screen and (max-width: 900) and (min-width: 300px) {
  .container {
    width: 100%;
    max-width: 100%;
  }
  .main-header {
    height: 100%;
    width: 100%;
    h1 {
      font-size: 2rem;
    }
    text-align: center;
    .row {
      flex-direction: column;
    }
  }
  .but {
    margin-bottom: 3rem;
  }
  .image-header {
    width: 100% !important;
    height: 100% !important;
    padding: 0;
    margin: auto;
    .image-head {
      width: 100%;
      height: 100%;
    }
  }
}
@keyframes AnimateBG {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@media screen and (max-width: 1000px) and (min-width: 0px) {
  .del-marg {
  }
  #homePage {
    height: 100vh;
    padding: 0 !important;
  }
  .col__main-eader {
    padding: 0rem 0;
    margin: 1vh auto !important;
    height: 48vh !important;
    width: 47%;
  }
  .captions {
    font-size: 4rem !important;
    font-weight: bolder;
    text-shadow: 1px 1px 3px #000;
    letter-spacing: 2 px;
    position: absolute !important;
    left: 23% !important;
    top: 50% !important;
    transform: translate(-50%, -50%) !important;
  }
}
</style>

<!--<template>-->
<!--  <div class="container-header full-width main-header q-mt-md">-->
<!--    <div class="container">-->
<!--      <div class="full-width Inline row justify-evenly">-->
<!--        <div class="heder-context col">-->
<!--          <div class="flex column">-->
<!--            <h1 class="heder-context__h1">Hello, so good to see you!</h1>-->

<!--            <b class="heder-context__b"-->
<!--            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure-->
<!--              obcaecati nobis porro placeat voluptatibus necessitatibus debitis-->
<!--              eligendi, architecto rerum quos magni, a excepturi iusto error-->
<!--              perspiciatis accusamus rem facere quisquam.</b-->
<!--            >-->
<!--            <div class="but">-->
<!--              &lt;!&ndash; <q-btn-->
<!--                color="black"-->
<!--                label="contact me"-->
<!--                size="1.1rem"-->
<!--                class="edd-but"-->
<!--              /> &ndash;&gt;-->
<!--              <q-btn-->
<!--                color="black"-->
<!--                label="Get yours"-->
<!--                size="1.1rem"-->
<!--                class="edd-but"-->
<!--              />-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col image-header">-->
<!--          <q-img-->
<!--            src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=764,h=624,fit=scale-down/dovilelxpfw/img-mnllKKGWbPub6RLL.jpg"-->
<!--            class="image-head"-->
<!--          />-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</template>-->
<!--<script>-->
<!--import { defineComponent } from "vue";-->

<!--export default defineComponent({-->
<!--  name: "ErrorNotFound",-->
<!--  components: {},-->
<!--});-->
<!--</script>-->
<!--<style lang="scss">-->
<!--.container-header {-->
<!--  // height: 100vh;-->
<!--  position: relative;-->
<!--}-->
<!--.main-logo {-->
<!--  font-size: 3rem;-->
<!--  font-weight: 800;-->
<!--}-->
<!--.nav-ul {-->
<!--  display: flex;-->
<!--  justify-content: center;-->
<!--  align-content: center;-->
<!--  list-style: none;-->
<!--  font-size: 1rem;-->
<!--  li {-->
<!--    padding: 1rem;-->
<!--    a {-->
<!--      color: $fontColor;-->
<!--      font-family: NavFont;-->
<!--      position: relative;-->
<!--      margin-left: 3rem;-->
<!--      font-weight: bold;-->
<!--      font-size: 1.1rem;-->
<!--      letter-spacing: 3px;-->
<!--      text-decoration: none;-->

<!--      &::after {-->
<!--        content: "";-->
<!--        position: absolute;-->
<!--        width: 0;-->
<!--        height: 3px;-->
<!--        top: 120%;-->
<!--        left: -10%;-->
<!--        background-color: $fontColor;-->
<!--      }-->

<!--      &:hover {-->
<!--        &::after {-->
<!--          transition: all 0.4s ease-in-out;-->
<!--          width: 120%;-->
<!--        }-->
<!--      }-->
<!--    }-->
<!--  }-->
<!--}-->
<!--.heder-context {-->
<!--  padding-left: 10%;-->
<!--  padding-right: 10%;-->
<!--  height: 100%;-->
<!--  overflow: hidden;-->

<!--  &__h1 {-->
<!--    font-family: NavFont;-->
<!--    font-weight: 300;-->
<!--    font-size: 5rem;-->
<!--    color: $fontColor;-->
<!--  }-->
<!--  &__b {-->
<!--    font-family: NavFont;-->
<!--    font-weight: 200;-->
<!--    font-size: 1.1rem;-->
<!--  }-->
<!--}-->
<!--.image-header {-->
<!--  width: 70% !important;-->
<!--  height: 100%;-->
<!--}-->
<!--.image-head {-->
<!--}-->
<!--.pading-cont {-->
<!--  width: 50%;-->
<!--}-->
<!--.main-header {-->
<!--  //background-color: $maincolor;-->
<!--  height: calc(100vh - 165px);-->
<!--}-->
<!--.but {-->
<!--  padding-top: 15%;-->
<!--}-->
<!--.edd-but {-->
<!--  opacity: 0.8;-->
<!--  font-size: 1rem !important;-->
<!--  font-weight: 300 !important;-->
<!--  padding: 1rem 2rem;-->
<!--}-->
<!--.image-head {-->
<!--  width: 100%;-->
<!--  height: 100%;-->
<!--  background-position: center;-->
<!--  background-size: cover;-->
<!--  background-repeat: no-repeat;-->
<!--}-->
<!--@media screen and (max-width: 800px) and (min-width: 300px) {-->
<!--  .container {-->
<!--    width: 100%;-->
<!--    max-width: 100%;-->
<!--  }-->
<!--  .main-header {-->
<!--    height: 100%;-->
<!--    width: 100%;-->
<!--    h1 {-->
<!--      font-size: 2rem;-->
<!--    }-->
<!--    text-align: center;-->
<!--    .row {-->
<!--      flex-direction: column;-->
<!--    }-->
<!--  }-->
<!--  .but {-->
<!--    margin-bottom: 3rem;-->
<!--  }-->
<!--  .image-header {-->
<!--    width: 100% !important;-->
<!--    height: 100% !important;-->
<!--    padding: 0;-->
<!--    margin: auto;-->
<!--    .image-head {-->
<!--      width: 100%;-->
<!--      height: 100%;-->
<!--    }-->
<!--  }-->
<!--}-->
<!--</style>-->
