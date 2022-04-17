<template>
  <div class="full-width   q-pa-sm q-pr-none" style="height:  97vh">
    <div class="row overflow-hidden q-mb-sm">
      <div class="col-9 flex overflow-hidden" style="height:  97vh">
        <div class=" q-px-md q-pt-md column overflow-hidden" >
          <img src="1-2-min.png" style="position: absolute;top: -110px;z-index: 1"/>
          <img src="1-min.jpg" class=""/>

        </div>
        <div class=" q-px-md q-pt-md column overflow-hidden" >
          <img src="2-2-min.png" style="position: absolute;top: -110px;z-index: 1"/>
          <img src="2-min.jpg" class=""/>
        </div>
        <div class=" q-px-md q-pt-md column overflow-hidden" >
          <img src="1-2-min.png" style="position: absolute;top: -110px;z-index: 1"/>
          <img src="1-min.jpg" class=""/>

        </div>

        <div class=" q-px-md q-pt-md column overflow-hidden" >
          <img src="1-2-min.png" style="position: absolute;top: -110px;z-index: 1"/>
          <img src="1-min.jpg" class=""/>

        </div>
      </div>
      <div class="col-3 relative-position column overflow-hidden" style="height:  97vh">
        <div><img src="logo.png" /></div>
        <q-space/>
        <div class="absolute-bottom">
          <div>
            {{ $t('appName') }}
          </div>
          <img src="Group-200-min.png" />
        </div>
      </div>

    </div>
  </div>
</template>
<script>
import { defineComponent } from "vue";

export default defineComponent({
  name: "ErrorNotFound",
  components: {},
});
</script>
<style lang="scss">
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
.image-head {
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
@media screen and (max-width: 800px) and (min-width: 300px) {
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
