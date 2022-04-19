<template>
  <q-page class="q-pt-none">
    <HomeSlide />
    <StartNav :navStatus="true" class="z-max" />
    <home-carousel />
    <about-us />
    <VueSweber />
<!--    <about-us />-->

    <servicesOne />
    <package-card />
    <form-section />
    <!---->
    <Fotter />
  </q-page>
</template>
<script>
import HomeSlide from "src/components/slide/home-slide.vue";
import homeCarousel from "src/components/home-carousel.vue";
import PackageCard from "src/components/PackageCard.vue";
import { defineComponent } from "vue";
import StartNav from "components/Layout/Start-nav";
import AboutUs from "components/about-us";
import servicesOne from "src/components/services-One.vue";
import FormSection from "src/components/FormSection.vue";
import VueSweber from "components/Vue-sweber";
import Fotter from "components/Layout/Fotter";

export default defineComponent({
  name: "IndexPage",
  components: {
    VueSweber,
    HomeSlide,
    AboutUs,
    StartNav,
    PackageCard,
    homeCarousel,
    FormSection,
    servicesOne,
    Fotter
  },
});
</script>
