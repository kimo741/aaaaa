<template>
  <div class="slider">
    <q-carousel
      v-model="slide"
      transition-prev="scale"
      transition-next="scale"
      transition-duration="700"
      swipeable
      animated
      control-color="black"
      navigation
      padding
      arrows
      height="650px"
      class="text-white shadow-1 rounded-borders bg-ourclint slider"
      :autoplay="2500"
    >
      <q-carousel-slide
        name="style"
        class="row no-wrap flex-center justify-around slider-container"
      >
        <div class="q-mt-md text-center sliderimg">
          <img src="serv.avif" alt="" />
        </div>
        <div class="q-mt-md text-center slider-content">
          <h3>Testimonials</h3>
          <p>
            ”I was sick of wasting money on seemingly useless and empty Facebook
            campaigns, but thanks to Dovile, we were able to turn our marketing
            budget around and start making some real money.”
          </p>
          <span><strong>Jack Smith</strong> </span>
          <br />
          <span>Marketing Manager of McKinnen Properties Inc.</span>
        </div>
      </q-carousel-slide>
      <q-carousel-slide
        name="tv"
        class="row no-wrap flex-center justify-around slider-container"
      >
        <div class="q-mt-md text-center sliderimg">
          <img src="serv.avif" alt="" />
        </div>
        <div class="q-mt-md text-center slider-content">
          <h3>Testimonials</h3>
          <p>
            ”I was sick of wasting money on seemingly useless and empty Facebook
            campaigns, but thanks to Dovile, we were able to turn our marketing
            budget around and start making some real money.”
          </p>
          <span><strong>Jack Smith</strong> </span>
          <br />
          <span>Marketing Manager of McKinnen Properties Inc.</span>
        </div>
      </q-carousel-slide>
      <q-carousel-slide
        name="layers"
        class="row no-wrap flex-center justify-around slider-container"
      >
        <div class="q-mt-md text-center sliderimg">
          <img src="serv.avif" alt="" />
        </div>
        <div class="q-mt-md text-center slider-content">
          <h3>Testimonials</h3>
          <p>
            ”I was sick of wasting money on seemingly useless and empty Facebook
            campaigns, but thanks to Dovile, we were able to turn our marketing
            budget around and start making some real money.”
          </p>
          <span><strong>Jack Smith</strong> </span>
          <br />
          <span>Marketing Manager of McKinnen Properties Inc.</span>
        </div>
      </q-carousel-slide>
      <q-carousel-slide
        name="map"
        class="row no-wrap flex-center justify-around slider-container"
      >
        <div class="q-mt-md text-center sliderimg">
          <img src="serv.avif" alt="" />
        </div>
        <div class="q-mt-md text-center slider-content">
          <h3>Testimonials</h3>
          <p>
            ”I was sick of wasting money on seemingly useless and empty Facebook
            campaigns, but thanks to Dovile, we were able to turn our marketing
            budget around and start making some real money.”
          </p>
          <span><strong>Jack Smith</strong> </span>
          <br />
          <span>Marketing Manager of McKinnen Properties Inc.</span>
        </div>
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
.slider-container {
  padding: 1rem 1rem;
  overflow: hidden;
  background-color: $maincolor;
}
.slider-content {
  color: $fontColor;
  width: 30%;
  text-align: left;
  padding: 1rem 10px;
  h3 {
    font-family: NavFont;
    font-size: 3rem;
    text-align: left;
  }
  p {
    font-family: NavFont;
    font-size: 1rem;
    text-align: left;
    line-height: 10px;
    overflow-wrap: break-word;
    white-space: break-spaces;
    font-family: NavFont;
    line-height: 1.7rem;
    font-size: 1rem;
  }
  span {
    font-family: NavFont;
    font-size: 1rem;
    strong {
      font-size: 1.2rem;
      font-weight: bolder;
    }
  }
}
.sliderimg {
  height: 100%;
  padding: 1rem;
  img {
    height: 100%;
    width: 100%;
    background-size: cover;
    background-position: center;
    margin: auto;
    transform: scale(1.2);
    box-shadow: 2px 2px 5px rgba(255, 255, 255, 0.233);
    &:hover {
      transition: all 0.4s ease-in-out;
      transform: scale(1.3);
    }
  }
}
.bg-ourclint {
  background-color: $sucColor;
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
