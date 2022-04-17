<template>
  <div>

    <q-carousel
      v-model="slide"
      swipeable
      height="103vh"
      class="text-white shadow-1 rounded-borders bg-ourclint slider "
      style="z-index: 100"
      :autoplay="2500"
    >
      <q-carousel-slide
        name="style"
        class=" slider-container q-pa-none"
        img-src="slider/1.png"
      >
        <div class="container row items-end full-height relative-position">
          <div class="bg-white slider-card col-12 col-md-6">
            <div class="text-left bold text-h1 text-primary appName block">
              {{ $t('appName') }}
              <div class="text-left bold text-h5 text-primary about-body q-mt-lg inline-block" >
                {{ $t('about.title') }}
              </div>
              <span class="underline bg-accent"></span>
            </div>
            <div class="text-left bold text-h5 text-primary about-body full-width block q-mt-lg " >{{ $t('about.body') }} {{ $t('about.body2') }}</div>
          </div>

        </div>

<!--        <div class="overlay"></div>-->
      </q-carousel-slide>

    </q-carousel>
  </div>
</template>
<script>
import { defineComponent, ref } from "vue";
export default defineComponent({
  name: "OurClint",
  components: {},
  setup() {
    return {
      slide: ref("style"),
      lorem:
        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo.",
    };
  },
});
</script>
<style lang="scss">
.slider {
  z-index: 10
}
.slider-container {
  border-bottom: 5px solid $primary;
}
.slider-content {
  .container {
    max-width : 960px;
  }
}
.slider-card {
  padding: 50px !important;
  .appName {
    font-size: 40px;
    font-weight: 700;
    line-height: 0;
  .underline{
    width: 7%;
    height: 3px;
    background: #313131;
    display: inherit;
    margin-top: 11px;
  }
  }
  .about-body {
    line-height: 2.9rem !important;
    font-weight: 300
  }
}
@media screen and (max-width: 800px) and (min-width: 300px) {
  .slider-container {
    width: 100% !important;
    height: auto !important;
    padding: 20px;
    overflow: none !important;
    flex-direction: row !important;
    text-align: left;
    display: flex;
    flex-direction: column !important;
    .sliderimg {
      padding: 0;
      width: 100%;
      height: 100%;
      background-position: center;
      img {
        width: 100%;
        height: 100%;
      }
    }
    .slider-content {
      line-height: 2rem;
      width: 100%;
      h3 {
        font-size: 2.2rem;
        font-weight: normal;
      }
      p {
        font-size: 1.1rem;
      }
    }

    h2 {
      text-align: center;
    }
  }
}
</style>
