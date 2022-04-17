<template>
  <q-layout view="hHh lpR fFf" :dir="$t('status') == 'ar' ? 'rtl' : 'ltr' ">
<!--        <StartNav :navStatus="navStatus" />-->

    <q-drawer v-model="leftDrawerOpen" side="left" overlay bordered>
      <q-list>
        <q-item-label header> Essential Links </q-item-label>

      </q-list>
    </q-drawer>

    <q-page-container >
      <transition
        appear
        enter-active-class="animated fadeIn"
        leave-active-class="animated fadeOut"
      >
        <!-- <transition name="slide" mode="out-in"> -->
        <router-view />
      </transition>
    </q-page-container>
    <Fotter />
  </q-layout>
</template>

<script>
import { defineComponent, ref } from "vue";
import EssentialLink from "components/EssentialLink.vue";
import HeaderNav from "components/Layout/header-nav.vue";
import Fotter from "src/components/Layout/Fotter.vue";
import DesctopNav from "components/Layout/desctop-nav";
import LogoImg from "components/Layout/LogoImg";
import StartNav from "components/Layout/Start-nav";
// import ScrolleNav from "components/Layout/Scrolle-nav";
export default defineComponent({
  name: "MainLayout",

  components: {
    // ScrolleNav,

    Fotter,
  },
  data () {
    return {
      navStatus: true
    }
  },
  methods: {
    test (val) {
      this.navStatus = val < 150 ? true : false
    }
  }
});
</script>
<style>
.slide-enter-active,
.slide-leave-active {
  transition: opacity 1s, transform 1s;
}

.slide-enter,
.slide-leave-to {
  opacity: 0;
  transform: translateX(-30%);
}

/* .slither-enter-to,
.slither-leave {
  opacity: 0;
  transform: translateX(0);
} */
</style>
