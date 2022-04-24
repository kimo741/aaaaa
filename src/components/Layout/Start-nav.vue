<template>
  <q-header class="" style="position: sticky; background-color: #fdb813">
    <transition
      appear
      enter-active-class="animated fadeIn"
      leave-active-class="animated fadeOut"
    >
      <div
        dir="ltr"
        class="flex q-py-sm justify-between items-center text-center container"
        v-if="navStatus"
      >
        <div class="q-gutter-x-md">
          <IconLabel
            :icon-size="1.1"
            class=""
            icon="eva-phone-call-outline"
            label="01146084849"
            color="black"
            text-color="text-black"
            link="tel:"
          />
          <IconLabel
            :icon-size="1.1"
            color="black"
            icon="eva-email-outline"
            label="la.dune3@gmail.com"
            link="mailto:"
            text-color="text-black"
          />
        </div>
        <div class="q-gutter-x-md q-mr-lg">
          <IconLabel
            v-for="(i, index) in icons"
            :key="index"
            :icon="i.name"
            target="_blank"
            :link="i.link"
            color="black"
            :icon-size="1.5"
            class="q-mt-lg"
          />
        </div>

        <div class="q-gutter-x-md cursor-pointer text-black">
          <LangSwetcher />
        </div>
        <div>
          <LoginButton v-if="this.logeedIn" />

          <!-- <q-btn color="primary" label="LOGIN" v-else /> -->
          <q-btn
            icon-right="fa-solid fa-arrow-right-to-bracket"
            label="تسجيل الدخول"
            size="md"
            flat
            v-else
            color="white"
          />
        </div>
        <div>
          <q-toolbar>
            <q-btn
              flat
              round
              dense
              icon="menu"
              @click="drawerLeft = !drawerLeft"
            />
          </q-toolbar>
        </div>
      </div>
    </transition>
    <div class="full-width bg-white q-pb-xs q-pt-xs" style="">
      <div class="flex justify-between items-center container">
        <div><DesctopNav /></div>
        <div></div>
        <div dir="ltr" class="">
          <LogoImg src="logo.png" width="100" v-show="1" />
        </div>
      </div>
    </div>
  </q-header>
</template>

<script>
import DesctopNav from "components/Layout/desctop-nav";
import LogoImg from "components/Layout/LogoImg";
import IconLabel from "components/Layout/Icon-label";
import LangSwetcher from "../lang-swetcher.vue";
import LoginButton from "./LoginButton.vue";
import { ref, watch } from "vue";
import { useI18n } from "vue-i18n";
import NavSmall from "../NavSmall.vue";
import { useQuasar } from "quasar";

export default {
  setup() {
    // const { locale } = useI18n({ useScope: "global" });
    // return {
    //   locale,
    //   localeOptions: [
    //     { value: "en-US", label: "English" },
    //     { value: "ar", label: "العربيه" },
    //   ],
    // };
    const $q = useQuasar();

    return {
      drawerLeft: ref($q.screen.width > 700),
      drawerRight: ref($q.screen.width > 500),
    };
  },

  components: {
    IconLabel,
    DesctopNav,
    LogoImg,
    LangSwetcher,
  },
  props: ["navStatus"],
  data() {
    return {
      logeedIn: false,
      icons: [
        {
          name: "lab la-snapchat-ghost",
          link: "https://www.snapchat.com/en-GB/la.dune3",
        },
        {
          name: "lab la-instagram",
          link: "https://www.instagram.com/la_dune3/",
        },
        {
          name: "fa-brands fa-tiktok",
          link: "https://www.tiktok.com/@la.dune3",
        },
        {
          name: "lab la-facebook-f",
          link: "https://www.facebook.com/la.dune.3",
        },
        {
          name: "lab la-linkedin-in",
          link: "https://www.linkedin.com/la.dune.3",
        },
      ],
    };
  },
};
</script>
<style lang="scss" scoped>
.fit {
  display: block;
  position: fixed;
  padding: 0 !important;
}
.link-social {
  .chil {
    margin: auto 15px;
    color: black;
  }
}
@media screen and (max-width: 800px) and (min-width: 200px) {
  .nav {
    display: none !important;
    opacity: 0;
  }
  .lang {
    position: fixed;
    top: 50%;
    left: 0%;
    transform: translate(-30%, 50%) rotate(90deg);
    opacity: 0.9;
    z-index: 5555;
    width: 6rem !important;
    &:hover {
      transition: all 0.4s ease-in-out;
      width: 250px !important;
      transform: translate(-40%, 50%) rotate(90deg);
      opacity: 1;
    }
  }
}
</style>
