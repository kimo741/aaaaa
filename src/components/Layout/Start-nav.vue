<template>
  <div class="text-center q-py-lg container full-width">
    <div class="flex justify-between">
      <div class="q-gutter-sm">
        <!-- contact link -->
        <IconLabel
          :icon-size="1.1"
          class=""
          icon="eva-phone-call-outline"
          label="01146084849"
          link="tel:"
        />
        <IconLabel
          :icon-size="1.1"
          class=""
          icon="eva-email-outline"
          label="la.dune3@gmail.com"
          link="mailto:"
        />
      </div>
      <!--social icons -->
      <div class="flex justify-between link-social">
        <a class="col chil" href=""
          ><i class="fa-brands fa-snapchat-square fa-2xl"></i
        ></a>
        <a class="col chil" href="">
          <i class="fa-brands fa-instagram-square fa-2xl"></i
        ></a>
        <a class="col chil" href="">
          <i class="fa-brands fa-tiktok fa-2xl"></i
        ></a>
        <a class="col chil" href="">
          <i class="fa-brands fa-facebook-square fa-2xl"></i
        ></a>
        <a class="col chil" href="">
          <i class="fa-brands fa-linkedin fa-2xl"></i
        ></a>
      </div>

      <div>
        <lang-swetcher class="lang" />
      </div>

      <!-- log in -->
      <div>
        <IconLabel icon="las la-sign-in-alt" :icon-size="2" />
      </div>
    </div>
    <div class="row items-center nav">
      <logo-img :width="150" class="q-mb-md" />
      <q-space />
      <desctop-nav :font-size="1.4" />
    </div>
  </div>
</template>

<script>
import DesctopNav from "components/Layout/desctop-nav";
import LogoImg from "components/Layout/LogoImg";
import IconLabel from "components/Layout/Icon-label";
import LangSwetcher from "../lang-swetcher.vue";
export default {
  components: {
    IconLabel,
    DesctopNav,
    LogoImg,
    LangSwetcher,
  },
};
</script>
<style lang="scss" scoped>
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
