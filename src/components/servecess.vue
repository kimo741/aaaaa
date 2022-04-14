<template>
  <div>
    <section class="section-serveces">
      <div class="container section-serveces__container">
        <div class="row">
          <div class="col section-serveces__container__col-1">
            <img class="servess-img" src="serv.avif" alt="" />
          </div>
          <div class="col section-serveces__container__col-2">
            <h2>Services</h2>
            <div class="col-paragraph">
              <b
                >From campaign planning and consultation to content creation and
                extended social media campaigning, I'm here to help your brand
                sound like you online.</b
              >
            </div>
            <div class="div-but">
              <q-btn
                color="black"
                outline
                round
                icon="eva-diagonal-arrow-right-up-outline"
                size="1.1em"
                class="edd-but text-capitalize"
              />
            </div>
          </div>
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
.section-serveces {
  &__container {
    margin: auto;
    &__col-1 {
      .servess-img {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
      }
    }
    &__col-2 {
      height: 100%;
      padding: 4rem 5rem;
      h2 {
        font-family: NavFont;
        font-size: 5rem;
        color: $fontColor;
        text-align: start;
        font-weight: 500;
      }
      .col-paragraph {
        width: 80%;
        b {
          font-weight: 400;
          color: $fontColor;
          line-height: 10px;
          overflow-wrap: break-word;
          white-space: break-spaces;
          font-family: NavFont;
          line-height: 1.7rem;
          font-size: 1.1rem;
        }
      }
    }
  }
}
.div-but {
  padding: 4rem 0;
}
.edd-but {
  position: relative;
  display: flex !important;
  align-items: center;
  justify-content: center;
  font-size: 5rem !important;
  border: 1px solid rgba(0, 0, 0, 0.582);
  &::before {
    content: "Our Services";
    position: absolute;
    padding-top: 20%;
    top: 0;
    right: 0;
    width: 0;
    height: 0;
    color: #fff;
    font-size: 2.5rem;
    background-color: rgb(0, 0, 0);
    font-weight: bolder;
    font-family: NavFont;
    z-index: 10;
  }
  &:hover {
    &::before {
      transition: all 0.4s ease-in-out !important;
      width: 100%;
      height: 100%;
    }
  }
}
</style>
