<template>
  <section class="section-serveces">
    <div class="container section-serveces__container">
      <div class="row">
        <div class="col section-serveces__container__col-2">
          <h2>First consultation for free</h2>
          <div class="col-paragraph">
            <b
              >People don't buy goods and services. They buy solutions and
              stories that you tell.
            </b>
          </div>
          <div class="div-but">
            <q-btn
              color="black"
              label="Get yours"
              size="1.1rem"
              class="edd-but"
            />
          </div>
        </div>
        <div class="col section-serveces__container__col-1">
          <img class="servess-img" src="serv.avif" alt="" />
        </div>
      </div>
    </div>
  </section>
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
  height: 100% !important;
  width: 100%;
  margin: 4rem;
  a &__container {
    margin: auto;

    &__col-1 {
      height: 100%;
      width: 100%;
      width: auto;
      min-width: 0;
      max-width: 100%;

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
              font-size: 1.4rem;
            }
          }
        }
      }
    }
  }
}

.div-but {
  padding-top: 25%;
}

.edd-but {
  opacity: 0.8;
  font-size: 1rem !important;
  font-weight: 300 !important;
  padding: 1rem 2rem;
  color: #fff5f5 !important;
}

@media screen and (max-width: 800px) and (min-width: 300px) {
  .col {
    width: 100% !important;

    h2 {
      font-size: 3rem !important;
      letter-spacing: 0.1px;
      width: 100%;
    }
  }
  .col-paragraph {
    width: 100% !important;
  }
  .container {
    max-width: none;
    width: 100%;
  }
  .row {
    display: flex;
    flex-direction: column;
    text-align: center;

    h2 {
      text-transform: capitalize;
      text-align: center;
      font-size: 3rem;
    }
  }
  .col {
    margin: auto;
  }
  .col-paragraph {
    width: 100%;
  }
}
</style>
