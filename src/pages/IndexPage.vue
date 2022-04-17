<template>
  <q-page class="q-pt-none" >
    <HomeSlide />
    <StartNav :navStatus="true" class="z-max" />
    <home-carousel />
    <about-us />
<!---->
  </q-page>
</template>
<script>
import HomeSlide from "src/components/slide/home-slide.vue";
// import BrandName from "src/components/brandName.vue";
import HomePresentation from "src/components/HomePresentation.vue";
import homeCarousel from "src/components/home-carousel.vue";
import Servecess from "../components/servecess.vue";
import AreYouReady from "../components/AreYouReady.vue";
import OurClint from "../components/OurClint.vue";
import PackageCard from "src/components/PackageCard.vue";
import { defineComponent } from "vue";
import StartNav from "components/Layout/Start-nav";
import AboutUs from "components/about-us";

export default defineComponent({
  name: "IndexPage",
  components: {
    HomeSlide,
    AboutUs,
    StartNav,
    homeCarousel,
    // BrandName,
    // HomePresentation,
    // Servecess,
    // AreYouReady,
    // OurClint,
    // PackageCard,
  },
});
</script>
