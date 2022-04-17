<template>
  <div>
    <section class="section-pres">
      <div class="pres container">
        <div class="pres__content text-center">
          <h2>{{ $t("about.aboutus") }}</h2>
          <p>
            {{ $t("about.title") }}
          </p>
          <p>
            {{ $t("about.body") }}
          </p>
          <p>
            <!-- <strong>لدون</strong> <br /> -->
            {{ $t("about.body2") }}
          </p>
          <p>
            <strong> {{ $t("about.vision") }}</strong> <br />
            {{ $t("about.vision_body") }}
          </p>
          <p>
            <strong> {{ $t("about.mission") }}</strong> <br />
            {{ $t("about.mission_body") }}
          </p>
          <p>
            <strong> {{ $t("about.ourValue") }}</strong> <br />
            {{ $t("about.mission_body") }}
          </p>
          <p>
            <strong> {{ $t("about.support") }}</strong> <br />
            {{ $t("about.support_body") }}
          </p>
          <p>
            <strong> {{ $t("about.passion") }}</strong> <br />
            {{ $t("about.passion_body") }}
          </p>
          <p>
            <strong> {{ $t("about.dedication") }}</strong> <br />
            {{ $t("about.dedication_body") }}
          </p>
          <p>
            <strong> {{ $t("about.Sincerity") }}</strong> <br />
            {{ $t("about.Sincerity_body") }}
          </p>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import { defineComponent } from "vue";
export default defineComponent({
  name: "HomePresentation",
  components: {},
});
</script>
<style lang="scss" scoped>
.section-pres {
  background-color: $sucColor;
  margin: 6rem 0;
}
.pres {
  &__content {
    width: 60%;
    margin: auto;
    text-align: left;
    font-family: NavFont;
    color: $fontColor;
    h2 {
      position: relative;
      font-size: 4rem;
      letter-spacing: 3px;
      font-weight: 500;
      padding: 0;
      &::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        top: 120%;
        right: 0%;
        background: linear-gradient(to right, $maincolor, #999);
      }
    }
    p {
      font-size: 1.4rem;
      line-height: 2rem;
      font-weight: 200;
      padding-bottom: 1rem;
      line-height: 3rem;

      strong {
        position: relative;
        font-size: 2rem;
        &::after {
          content: "";
          position: absolute;
          width: 100%;
          height: 3px;
          top: 120%;
          right: 0%;
          background: linear-gradient(to right, $maincolor, #999);
        }
      }
    }
  }
}
@media screen and (max-width: 800px) and (min-width: 300px) {
  .container {
    width: 100% !important;
    max-width: 100% !important;
  }
  .pres__content {
    padding: 0 !important;
    text-align: left;

    h2 {
      position: relative;
    }
    p {
      line-height: 3rem;
    }
  }
}
.pres {
  &__content {
    width: 80% !important;
  }
}
</style>
