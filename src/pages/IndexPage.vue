<template>
  <q-page class="">
    <HomeSlide />
    <!-- <brand-name /> -->
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
import Servecess from "../components/servecess.vue";
import AreYouReady from "../components/AreYouReady.vue";
import OurClint from "../components/OurClint.vue";
import PackageCard from "src/components/PackageCard.vue";
import { defineComponent } from "vue";

export default defineComponent({
  name: "IndexPage",
  components: {
    HomeSlide,
    // BrandName,
    HomePresentation,
    Servecess,
    AreYouReady,
    OurClint,
    PackageCard,
  },
});
</script>
