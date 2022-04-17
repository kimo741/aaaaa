<template>
  <q-page >
    <HomeSlide />
    <StartNav :navStatus="true" class="z-max" />
    <home-carousel />
     <brand-name />
    <HomePresentation />
    <Servecess />
    <package-card />
    <AreYouReady />
    <OurClint />
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

export default defineComponent({
  name: "IndexPage",
  components: {
    HomeSlide,
    StartNav,
    // BrandName,
    homeCarousel,
    HomePresentation,
    Servecess,
    AreYouReady,
    OurClint,
    PackageCard,
  },
});
</script>
