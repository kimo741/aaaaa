<template>
  <div>
    <section class="section-pres">
      <div class="pres container">
        <div class="pres__content text-center">
          <h2>My name is Dovile</h2>
          <p>
            I'm your new social media bestie. My mission is to help small and
            medium-sized businesses grow their audience and brand recognition
            through social media. To do that, I believe it's paramount to create
            a committed and genuine community that has a positive influence on
            people’s lives beyond the online sphere. My goal is to help you
            understand the power of social media and create connections that go
            beyond the internet.
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
<style lang="scss">
.section-pres {
  background-color: #fff5f5;
  padding: 2rem 0;
}
.pres {
  &__content {
    width: 50%;
    margin: auto;
    text-align: center;
    font-family: NavFont;
    color: $fontColor;
    h2 {
      font-size: 4rem;
      letter-spacing: 3px;
      font-weight: 500;
      padding: 0;
    }
    p {
      font-size: 1.4rem;
      line-height: 2rem;
      font-weight: 200;
      padding-bottom: 1rem;
    }
  }
}
</style>
