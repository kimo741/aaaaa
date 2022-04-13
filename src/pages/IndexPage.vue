<template>
  <q-page class="">
    <HomeSlide />
    <brand-name />
  </q-page>
</template>

<script>
import { defineComponent } from "vue";
import HomeSlide from "src/components/slide/home-slide.vue";
import BrandName from "src/components/brandName.vue";

export default defineComponent({
  name: "IndexPage",
  components: { HomeSlide, BrandName },
});
</script>
