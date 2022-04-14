<template>
  <q-layout view="hHh lpR fFf" class="">
    <q-header  class="bg-white text-black">

      <q-toolbar class="container justify-center scroll overflow-hidden">
        <q-btn v-if="$q.screen.lt.md" dense flat round icon="menu" @click="toggleLeftDrawer" />
        <transition-group
          appear
          enter-active-class="animated fadeIn"
          leave-active-class="animated fadeOut"
        >
          <!-- <transition name="slide" mode="out-in"> -->
        <StartNav v-show="navStatus" />
        <ScrolleNav v-show="!navStatus" class="asdasd" />
        </transition-group>

      </q-toolbar>
    </q-header>
    <q-drawer v-model="leftDrawerOpen" side="left" overlay bordered>
      <q-list>
        <q-item-label header> Essential Links </q-item-label>

      </q-list>
    </q-drawer>

    <q-page-container v-scroll="test">
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
import ScrolleNav from "components/Layout/Scrolle-nav";
export default defineComponent({
  name: "MainLayout",

  components: {
    ScrolleNav,
    StartNav,
    Fotter,
  },
  data () {
    return {
      navStatus: true
    }
  },
  methods: {
    test (val) {
      return this.navStatus = val < 150 ? true : false
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
