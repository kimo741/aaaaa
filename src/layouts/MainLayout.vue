<template>
  <q-layout view="hhh lpR fFf" :dir="$t('status') == 'ar' ? 'rtl' : 'ltr'">
    <q-drawer
      v-model="drawer"
      side="left"
      overlay
      behavior="disktop"
      elevated
      class=""
    >
      <q-scroll-area
        style="
          height: calc(100% - 150px);
          margin-top: 150px;
          border-right: 1px solid #ddd;
        "
      >
        <q-list padding>
          <q-item v-if="!true">
            <q-item-section top avatar>
              <q-avatar>
                <img src="https://cdn.quasar.dev/img/boy-avatar.png" />
              </q-avatar>
            </q-item-section>
            <q-item-section>
              <q-item-label overline>Ahmed</q-item-label>
              <q-item-label caption>abdelslama222@gma.com</q-item-label>
            </q-item-section>
            <q-item-section side top>
              <q-item-label caption>
                <q-btn
                  round
                  dense
                  icon="eva-arrow-forward-outline"
                  flat
                  class="z-max"
                  size="md"
                  @click="
                    $store.dispatch(
                      'updateDrawer',
                      !$store.state.setting.drawer
                    )
                  "
                />
              </q-item-label>
            </q-item-section>
          </q-item>
          <q-item v-else>
            <q-item-section>
              <q-item-label class="text-blue">Login</q-item-label>
              <q-item-label caption>test mass</q-item-label>
            </q-item-section>
            <q-item-section side top>
              <q-item-label caption>
                <q-btn
                  round
                  dense
                  icon="eva-arrow-forward-outline"
                  flat
                  class="z-max"
                  size="md"
                  @click="
                    $store.dispatch(
                      'updateDrawer',
                      !$store.state.setting.drawer
                    )
                  "
                />
              </q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable v-ripple class="line">
            <q-item-section @click="scrollToElement('homePage')">
              {{ $t("links.home") }}
            </q-item-section>
          </q-item>
          <q-separator dir="ltr" inset="item" />

          <q-item active v-ripple class="line">
            <q-item-section @click="scrollToElement('aboutSection')">
              {{ $t("about.aboutus") }}
            </q-item-section>
          </q-item>
          <q-separator spaced inset="item" />

          <q-item class="line" v-ripple>
            <q-item-section @click="scrollToElement('services')">
              {{ $t("services.services") }}
            </q-item-section>
          </q-item>
          <q-separator spaced inset="item" />

          <q-item v-ripple class="line" border>
            <q-item-section @click="scrollToElement('services')">
              {{ $t("links.packages") }}
            </q-item-section>
          </q-item>
        </q-list>
      </q-scroll-area>

      <q-img class="absolute-top" src="wa2.jpeg" style="height: 150px">
        <div class="absolute-bottom bg-transparent bg-slid">
          <!-- <div class="row"></div>
          <q-avatar size="50px" class="q-mb-sm">
            <img class="" src="https://cdn.quasar.dev/img/boy-avatar.png" />
          </q-avatar>

          <div class="text-weight-bold">{{ "admin.name" }}</div>
          <div>{{ "@" + " admin.id" }}</div> -->
        </div>
      </q-img>
    </q-drawer>

    <q-page-container style="padding-top: 0 !important">
      <transition
        appear
        enter-active-class="animated fadeIn"
        leave-active-class="animated fadeOut"
      >
        <router-view />
      </transition>
    </q-page-container>
  </q-layout>
</template>

<script>
import { defineComponent, ref } from "vue";

export default defineComponent({
  name: "MainLayout",
  data() {
    return {};
  },
  computed: {
    drawer: {
      get() {
        return this.$store.state.setting.drawer;
      },
      set(val) {
        console.log("asdasd", val, this.$store.state.setting.drawer);
        return this.$store.state.setting.drawer;
      },
    },
  },
  methods: {
    scrollToElement(el) {
      document.getElementById(el).scrollIntoView({ behavior: "smooth" });
    },
  },
});
</script>
<style lang="scss" scoped>
.z-max {
  z-index: 5000;
}
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
.bg-slid {
  padding-top: 50px;
}
// .line {
//   position: relative !important;
//   &::after {
//     position: absolute !important;
//     bottom: -20px !important;
//     width: 90% !important;
//     margin: auto !important;
//     left: 50% !important;
//     transform: translate(-50%, -50);
//     background-color: #000 !important;
//     height: 5px !important;
//   }
// }
.close-ic {
  text-align: end;
  display: block !important;
  width: 100%;
  height: 20px;
  padding: 45px 10px 0 0;
  z-index: 490;
}
</style>
