<template>
  <div class="row items-center justify-center q-mx-a full-width q-py-sm">
    <logo-img :width="100" />
    <q-space/>
    <div>
      <desctop-nav :font-size="1.1" />
    </div>
    <q-space/>
    <div>
      <q-icon size="md" name="las la-sign-in-alt" />
    </div>
  </div>
</template>

<script>
  import DesctopNav from "components/Layout/desctop-nav";
  import LogoImg from "components/Layout/LogoImg";

  export default {
    components: {
      DesctopNav,
      LogoImg,
    },
  }
</script>
