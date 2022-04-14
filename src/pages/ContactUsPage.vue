<template>
  <q-page class="">
    <contact-us />
  </q-page>
</template>

<script>
import ContactUs from "src/components/Layout/contactUs.vue";
import { defineComponent } from "vue";

export default defineComponent({
  name: "ContactUsPage",
  components: { ContactUs },
});
</script>

ContactUs
