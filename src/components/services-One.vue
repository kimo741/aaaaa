<template>
  <section class="services">
    <div class="center container">
      <div class="row justify-center border-rad">
        <!------------------sevice one ------------------->
        <div class="col-6 justify-center text-center right-butt">
          <h2>{{ $t("services.services") }}</h2>
          <span>{{ $t("services.slogen") }}</span>
          <p>
            <b>{{ $t("services.panning.title") }}</b>
            <br />
            <b>{{ $t("services.panning.marketing") }}</b>
            <br />
            <b>{{ $t("services.panning.communication") }}</b>
            <br />
            <b>{{ $t("services.panning.trade_mark") }}</b>
          </p>
        </div>
        <!------------------sevice tow ------------------->
        <div class="col-6 justify-center text-center left-butt">
          <h2>{{ $t("services.design.title") }}</h2>
          <p>
            <b>{{ $t("services.content_writing.title") }}</b>
            <br />
            <b>{{ $t("services.content_writing.slogen") }}</b>
            <br />
            <b>{{ $t("services.content_writing.profile") }}</b>
            <br />
            <b>{{ $t("services.content_writing.website") }}</b>
            <br />
            <b>{{ $t("services.content_writing.presentations") }}</b>
            <br />
            <b>{{ $t("services.content_writing.marketing") }}</b>
          </p>
        </div>
        <!------------------sevice three ------------------->
        <div class="col-6 justify-center text-center right-top">
          <h2>{{ $t("services.video.title") }}</h2>
          <p>
            <b>{{ $t("services.video.title") }}</b>
            <br />
            <b>{{ $t("services.video.product") }}</b>
            <br />
            <b>{{ $t("services.video.offices") }}</b>
            <br />
            <b>{{ $t("services.video.employees") }}</b>
            <br />
            <b>{{ $t("services.video.event") }}</b>
            <br />
            <b>{{ $t("services.video.workshop") }}</b>
            <br />
            <b>{{ $t("services.video.participations") }}</b>
            <br />
          </p>
        </div>
        <!------------------sevice four ------------------->
        <div class="col-6 justify-center text-center left-top">
          <h2>{{ $t("services.services") }}</h2>
          <span>{{ $t("services.slogen") }}</span>
          <p>
            <b>{{ $t("panning.title") }}</b>
            <br />
            <b>{{ $t("panning.marketing") }}</b>
            <br />
            <b>{{ $t("panning.communication") }}</b>
            <br />
            <b>{{ $t("panning.trade_mark") }}</b>
          </p>
        </div>
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
.col-6 {
  min-height: 50vh;
}
h2 {
  font-size: 2rem;
  font-weight: 700;
}
p {
  font-size: 1rem;
}
.services {
  width: 100%;
  height: 100vh;
  background-image: url(/nat-4.jpg);
  position: relative;
}
.border-rad {
  width: 100%;
  height: 100%;
  font-size: 1rem;
  align-items: center;
  clip-path: ellipse(26% 50% at 50% 50%);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.right-butt {
  justify-content: end !important;

  display: flex;
  flex-direction: column;
  align-items: flex-end !important;
  text-align: right !important;
  padding-right: 50px;
}
.left-butt {
  justify-content: end !important;
  align-items: flex-start !important;
  text-align: left !important;
  padding-left: 50px;
  h2 {
    font-size: 2rem;
    font-weight: 700 !important;
    display: block;
    width: 30%;
  }

  display: flex;
  flex-direction: column;
  align-items: center;
}

.right-top {
  display: flex;
  justify-content: start !important;
  align-items: flex-end !important;
  text-align: right !important;
  flex-direction: column;
  padding-right: 40px;
  line-height: 1.3rem;
}
.left-top {
  justify-content: start !important;
  align-items: flex-start !important;
  display: flex;
  flex-direction: column;
  align-items: left;
  padding-left: 40px;
}
.right-butt,
.left-top,
.right-top,
.left-butt {
  padding-bottom: 49px;
  background: #f9f5f2bd;
  max-width: 100%;
  line-height: 1.3rem;
  h2 {
    font-size: 1.5rem;
    font-weight: bolder !important;
    display: block;
    width: 30%;
    line-height: 2.2rem;
    position: relative;
    &::after {
      content: "";
      position: absolute;
      bottom: -20%;
      left: 50%;
      width: 50%;
      height: 3px;
      background-color: #000;
    }
  }
}
</style>
