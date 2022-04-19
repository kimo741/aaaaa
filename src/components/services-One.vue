<template>
  <section class="services">
    <div class="f-w-container center">
      <div class="row ">
        <!------------------sevice one ------------------->
        <div class="col-12 text-center">
          <h2>{{ $t("services.services") }}</h2>
        </div>
        <div class="col-6  text">
          <q-img width="250px" src="marketing.png"/>
          <ul class="">
            <li>{{ $t("services.panning.title") }}</li>
            <li>{{ $t("services.panning.marketing") }}</li>
            <li>{{ $t("services.panning.communication") }}</li>
            <li>{{ $t("services.panning.trade_mark") }}</li>
          </ul>
        </div>

        <div class="col-6 offset-6 text">
          <q-img width="250px" src="marketing.png"/>
          <ul class="">
            <li>{{ $t("services.panning.title") }}</li>
            <li>{{ $t("services.panning.marketing") }}</li>
            <li>{{ $t("services.panning.communication") }}</li>
            <li>{{ $t("services.panning.trade_mark") }}</li>
          </ul>
        </div>
        <!------------------sevice tow ------------------->
        <div class="col-6 text-center">
          <h2>{{ $t("services.design.title") }}</h2>
          <p>
            <b>{{ $t("services.content_writing.title") }}</b>,
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
.services {
  //background-image: url('/marketing.png');
}
.f-w-container {
  max-width: 90vw;
  margin: auto;
  .s-list {
    li {
      color: $primary;
      font-size: 3em;
      font-weight: 100;
      list-style: lower-roman;
      margin: 1em 0px;
    }
  }
}
.cardd {
  clip-path: polygon(30% 14%, 100% 0, 100% 89%, 25% 100%);
}
</style>
