<template>
  <q-page class="">
    <ServicesHeader />
    <social-media />
    <GraphicDesighn />
    <offer />
  </q-page>
</template>

<script>
import { defineComponent } from "vue";
import ServicesHeader from "src/components/servicesHeader.vue";
import SocialMedia from "src/components/SocialMedia.vue";
import GraphicDesighn from "../components/GraphicDesighn.vue";
import Offer from "src/components/offer.vue";

export default defineComponent({
  name: "IndexPage",
  components: { ServicesHeader, SocialMedia, GraphicDesighn, Offer },
});
</script>
