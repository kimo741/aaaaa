<template>
  <q-layout view="hHh lpR fFf">
    <q-header reveal class="bg-transparent text-black">
      <!-- <div>
        <q-btn dense flat round icon="menu" @click="toggleLeftDrawer" />
      </div> -->
      <q-toolbar>
        <header-nav />
      </q-toolbar>
    </q-header>
    <q-drawer v-model="leftDrawerOpen" side="left" overlay bordered>
      <q-list>
        <q-item-label header> Essential Links </q-item-label>

        <!-- <EssentialLink
          v-for="link in essentialLinks"
          :key="link.title"
          v-bind="link"
        /> -->
      </q-list>
    </q-drawer>

    <q-page-container>
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

// const linksList = [
//   {
//     title: "Docs",
//     caption: "quasar.dev",
//     icon: "school",
//     link: "https://quasar.dev",
//   },
//   {
//     title: "Github",
//     caption: "github.com/quasarframework",
//     icon: "code",
//     link: "https://github.com/quasarframework",
//   },
//   {
//     title: "Discord Chat Channel",
//     caption: "chat.quasar.dev",
//     icon: "chat",
//     link: "https://chat.quasar.dev",
//   },
//   {
//     title: "Forum",
//     caption: "forum.quasar.dev",
//     icon: "record_voice_over",
//     link: "https://forum.quasar.dev",
//   },
//   {
//     title: "Twitter",
//     caption: "@quasarframework",
//     icon: "rss_feed",
//     link: "https://twitter.quasar.dev",
//   },
//   {
//     title: "Facebook",
//     caption: "@QuasarFramework",
//     icon: "public",
//     link: "https://facebook.quasar.dev",
//   },
//   {
//     title: "Quasar Awesome",
//     caption: "Community Quasar projects",
//     icon: "favorite",
//     link: "https://awesome.quasar.dev",
//   },
// ];

export default defineComponent({
  name: "MainLayout",

  components: {
    HeaderNav,
    Fotter,
  },

  // setup() {
  //   const leftDrawerOpen = ref(false);

  //   return {
  //     leftDrawerOpen,
  //     toggleLeftDrawer() {
  //       leftDrawerOpen.value = !leftDrawerOpen.value;
  //     },
  //   };
  // },
  created() {
    console.log(this.$q.screen.name);
  },
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
