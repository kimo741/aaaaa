<template>
  <section class="section-form">
    <div class="container">
      <div class="row justify-center">

        <div class="flex  justify-center items-center col-0 col-md-4 text-white ">
          <div class="text-subtitle1">
            admission@eslsca.edu.eg   |   19298
          </div>
          <div class="text-subtitle1">
            Pyramids Heights, Building B06, Km 22 of Cairo – Alexandria Desert Road, Giza, Egypt
          </div>
          <div class="text-subtitle1">
            01146084849
          </div>
        </div>

        <div class=" flex justify-center items-center col-0 col-md-4 logo ">
          <div style="width: 50% !important;">
            <LogoImg src="logo.png"  v-show="1"/>
          </div>
        </div>

        <div class=" flex justify-center items-center col-0 col-md-4 ">
          <div class="justify-center row">
            <ul class="flex q-gutter-x-lg">
              <li>{{$t('links.home')}}</li>
              <li>{{$t('about.aboutus')}}</li>
              <li>{{$t('services.services')}}</li>
              <li>{{$t('links.contact')}}</li>
            </ul>
            <ul class="flex q-gutter-x-lg">
              <IconLabel
                v-for="(i, index) in icons"
                :key="index"
                :icon="i.name"
                target="_blank"
                :link="i.link"
                color="info"
                :icon-size="2"
                class="q-mt-lg"
              />
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
import { useQuasar } from "quasar";
import { defineComponent, ref } from "vue";
import LogoImg from "components/Layout/LogoImg";
import IconLabel from "components/Layout/Icon-label";

export default defineComponent({
  name: "PageFooter",
  components: {
    LogoImg,
    IconLabel
  },
  data () {
    return {
      icons: [
        {
          name: 'lab la-snapchat-ghost',
          link: 'https://www.snapchat.com/en-GB/la.dune3'
        },
        {
          name: 'lab la-instagram',
          link: 'https://www.instagram.com/la_dune3/'
        },
        {
          name: 'fa-brands fa-tiktok',
          link: 'https://www.tiktok.com/@la.dune3'
        },
        {
          name: 'lab la-facebook-f',
          link: 'https://www.facebook.com/la.dune.3'
        },
        {
          name: 'lab la-linkedin-in',
          link: 'https://www.linkedin.com/la.dune.3'
        },
      ]
    }
  }
});
</script>
<style lang="scss" scoped>
.section-form {
  background-color: #0C7EA5;
  text-align: center !important;
  padding: 50px 0;
  .logo {
    border-left: 1px solid #b6d8e4;
    border-right: 1px solid #b6d8e4;
  }
}
ul {
  list-style: none;
  li {
    font-size: 1.3rem;
    color: #fff;
    font-weight: 100 !important;
    margin: 15px 0;
  }
}
</style>
