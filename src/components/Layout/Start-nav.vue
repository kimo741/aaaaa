<template>
  <div class="text-center q-py-lg container full-width">
    <div class="flex justify-between">
      <div class="q-gutter-sm">
        <IconLabel :icon-size="1.1" class="" icon="eva-phone-call-outline" label="01146084849" link="tel:"/>
        <IconLabel :icon-size="1.1" class="" icon="eva-email-outline" label="la.dune3@gmail.com" link="mailto:"/>
      </div>
      <div>
        <IconLabel icon="las la-sign-in-alt" :icon-size="2"/>
      </div>
    </div>
    <div class="row items-center">
      <logo-img :width="150" class="q-mb-md"/>
      <q-space/>
      <desctop-nav :font-size="1.4"/>
    </div>
  </div>
</template>

<script>
import DesctopNav from "components/Layout/desctop-nav";
import LogoImg from "components/Layout/LogoImg";
import IconLabel from "components/Layout/Icon-label";

export default {
  components: {
    IconLabel,
    DesctopNav,
    LogoImg,
  },
}
</script>
