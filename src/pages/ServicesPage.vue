<template>
  <q-page class="">
    <ServicesHeader />
    <social-media />
    <GraphicDesighn />
    <offer />
    <PackageCard />
  </q-page>
</template>

<script>
import ServicesHeader from "src/components/servicesHeader.vue";
import SocialMedia from "src/components/SocialMedia.vue";
import GraphicDesighn from "../components/GraphicDesighn.vue";
import Offer from "src/components/offer.vue";
import PackageCard from "components/PackageCard";
import { defineComponent } from "vue";
export default defineComponent({
  name: "IndexPage",
  components: {
    PackageCard,
    ServicesHeader,
    SocialMedia,
    GraphicDesighn,
    Offer,
  },
});
</script>
