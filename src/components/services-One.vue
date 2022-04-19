<template>
  <section class="services">
    <div class="container center">
      <div class="column justify-center">
        <!------------------sevice one ------------------->
        <div class="col-12 text-center">
          <h2>{{ $t("services.services") }}</h2>
          <span>{{ $t("services.slogen") }}</span>
          <p>
            <b>{{ $t("services.panning.title") }}</b>
            <b>{{ $t("services.panning.marketing") }}</b>
            <b>{{ $t("services.panning.communication") }}</b>
            <b>{{ $t("services.panning.trade_mark") }}</b>
          </p>
        </div>
        <!------------------sevice tow ------------------->
        <div class="col-12 text-center">
          <h2>{{ $t("services.design.title") }}</h2>
          <p>
            <b>{{ $t("services.content_writing.title") }}</b>
            <b>{{ $t("services.content_writing.slogen") }}</b>
            <b>{{ $t("services.content_writing.profile") }}</b>
            <b>{{ $t("services.content_writing.website") }}</b>
            <b>{{ $t("services.content_writing.presentations") }}</b>
            <b>{{ $t("services.content_writing.marketing") }}</b>
          </p>
        </div>
        <!------------------sevice three ------------------->
        <div class="col-12 text-center">
          <h2>{{ $t("services.video.title") }}</h2>
          <p>
            <b>{{ $t("services.video.title") }}</b>
            <b>{{ $t("services.video.product") }}</b>
            <b>{{ $t("services.video.offices") }}</b>
            <b>{{ $t("services.video.employees") }}</b>
            <b>{{ $t("services.video.event") }}</b>
            <b>{{ $t("services.video.workshop") }}</b>
            <b>{{ $t("services.video.participations") }}</b>
          </p>
        </div>
        <!------------------sevice four ------------------->
        <div class="col-12 text-center">
          <h2>{{ $t("services.partners.title") }}</h2>
          <div>{{ $t("services.partners.body") }}</div>
        </div>
        <!---------------- End sevicees ------------------->
      </div>
    </div>
  </section>
</template>
<script>
import { defineComponent } from "vue";

export default defineComponent({
  name: "section-1",
  components: {},
});
</script>
<style lang="scss" scoped>
.cardd {
  clip-path: polygon(30% 14%, 100% 0, 100% 89%, 25% 100%);
}
</style>
